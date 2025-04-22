<?php
namespace Controllers;

use Services\UserService;

class UserController
{
    private $userService;
    public function __construct()
    {
        $this->userService = new UserService();
    }

    public function login()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
            $loginEmail = $this->sanitizeInput($_POST['loginEmail'], true);
            $loginPassword = $this->sanitizeInput($_POST['loginPassword']);

            $loginResult = $this->userService->login($loginEmail, $loginPassword);

            if ($loginResult === true) {
                header("Location: home");
                exit;
            } else {
                // Display error message
                echo $loginResult;
            }
        }
        include __DIR__ . '/../views/login.php';
    }
    public function register()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email = $this->sanitizeInput($email, true);
                $name = $this->sanitizeInput($_POST['name']);
                $password = $_POST['password'];

                // Check if the email already exists
                if ($this->userService->emailExists($email)) {
                    $errorMessage = "Email already exists";
                    include __DIR__ . '/../views/register.php';
                    return;
                }

                // Proceed with registration if email doesn't exist
                $registrationResult = $this->userService->registerUser($email, $name, $password);

                if ($registrationResult === true) {
                    header("Location: login");
                    exit;
                } else {
                    $errorMessage = $registrationResult;
                }
            } else {
                // Invalid email format
                $errorMessage = "Invalid email format";
                include __DIR__ . '/../views/register.php';
                return;
            }
        }
        include __DIR__ . '/../views/register.php';
    }

    public function profile()
    {
        session_start();
        if (isset($_SESSION['loggedInUser']) || isset($_POST['logout'])) {

            if (isset($_POST['logout'])) {

                session_unset();
                session_destroy();
                header("Location: home");
                exit;
            } else {
                $loggedInUser = $_SESSION['loggedInUser'];
                $email = $loggedInUser->getName();
                $name = $loggedInUser->getName();
            }
        } else {
            echo "Session data not available.";
        }
        include_once __DIR__ . '/../views/profile.php';
    }

    public function updateUserName()
    {
        header('Content-Type: application/json');

        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_SESSION['loggedInUser'])) {
            $loggedInUser = $_SESSION['loggedInUser'];
            $userId = $loggedInUser->getId();
            $name = $this->sanitizeInput($_POST['name']);

            // Validate name
            if (empty($name)) {
                http_response_code(400);
                echo json_encode(["success" => false, "message" => "Name cannot be empty"]);
                return;
            }

            $result = $this->userService->updateUserName($userId, $name);
            if ($result) {
                // Update the user's name in the session
                $loggedInUser->setName($name);
                $_SESSION['loggedInUser'] = $loggedInUser;

                // Return success response in JSON format
                echo json_encode(["success" => true, "message" => "Name updated successfully"]);
            } else {
                http_response_code(500);
                // Return error response in JSON format
                echo json_encode(["success" => false, "message" => "Failed to update name"]);
            }
        } else {
            http_response_code(401);
            // Return unauthorized response in JSON format
            echo json_encode(["success" => false, "message" => "User not logged in"]);
        }
    }

    public function deleteUser()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
            if (isset($_SESSION['loggedInUser'])) {
                $userService = new UserService();

                $loggedInUser = $_SESSION['loggedInUser'];
                $userId = $loggedInUser->getId();

                $userService->deleteUser($userId);
                session_destroy();
                // Return a JSON response indicating success
                echo json_encode(array('success' => true, 'message' => 'Profile deleted successfully.'));
                exit();
            }
        }
        // If deletion failed or the request was invalid, return an error response
        echo json_encode(array('success' => false, 'message' => 'Failed to delete profile.'));
    }

    private function sanitizeInput($data, $isEmail = false)
    {
        // Remove whitespace (including non-breaking spaces) from the beginning and end of the string
        $data = trim($data);
        // Remove backslashes (\)
        $data = stripslashes($data);
        // Optionally, you can apply additional sanitization steps based on your requirements
        if ($isEmail) {
            // If it's an email, we shouldn't apply htmlspecialchars()
            // FILTER_SANITIZE_EMAIL filter already ensures the email format is valid
            return $data;
        } else {
            // For other inputs, convert special characters to HTML entities
            $data = htmlspecialchars($data);
        }
        return $data;
    }
}



