<?php
namespace Services;
use PDOException;
require __DIR__ . '/../repositories/userrepository.php';

class UserService {
    private $userRepository;
    function __construct()
    {
        $this->userRepository = new \UserRepository();
    }

    public function login($loginEmail, $loginPassword) {
        try {
            $user = $this->userRepository->login($loginEmail);
    
            if ($user) {
                // User exists, verify password
                $checkPassword = password_verify($loginPassword, $user->getPassword());
                if ($checkPassword) {
                    $this->startSession($user);
                    return true; // Login successful
                } else {
                    // Password does not match
                    return "Invalid email or password";
                }
            } else {
                // User does not exist
                return "User does not exist";
            }
        } catch (PDOException $e) {
            // Handle database error
            return $e->getMessage();
        }
    } 

    public function registerUser($email, $name, $password)
    {
        return $this->userRepository->registerUser( $email, $name, $password);    
    }

    public function deleteUser($userId)
    {
        $this->userRepository->deleteUser($userId);
    }

    public function updateUserName($userId, $name)
    {
        return $this->userRepository->updateUserName($userId, $name);
    }

    public function emailExists($email)
    {
        return $this->userRepository->getUserByEmail($email);
    }

    public function startSession($user)
    {
        // Start the session if it's not already started
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        // Set session variables
        $_SESSION["loggedInUser"] = $user;
        $_SESSION['id'] = $user->getId();
        $_SESSION['name'] = $user->getName();
        $_SESSION['email'] = $user->getEmail();
    }
}