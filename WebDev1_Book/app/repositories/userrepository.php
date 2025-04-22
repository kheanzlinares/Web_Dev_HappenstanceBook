<?php
use Models\User;
use Repositories\Repository;

class UserRepository extends Repository
{
    private $connection;
    private $repo;

    public function __construct()
    {
        $this->repo = new Repository;
        $this->connection = $this->repo->dbConnect();
    }

    public function registerUser($email, $name, $password)
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        // Insert user into the database
        $stmt = $this->connection->prepare("INSERT INTO User (`email`, `name`, `password`) VALUES ( :email, :name, :password)");
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":password", $hashedPassword);
        if (!$stmt->execute()) {
            return "Failed to register user";
        }
        return true;
    }
    function deleteUser($userId)
    {
        $stmt = $this->connection->prepare("DELETE FROM User WHERE id = :id; ");
        $stmt->bindParam(":id", $userId);
        if (!$stmt->execute()) {
            header("location:../../views/profile.php?error=stmtfailed");
            exit;
        }
        $stmt = null;
    }

    public function updateUserName($userId, $name)
    {
        $stmt = $this->connection->prepare("UPDATE User SET name = :name WHERE id = :userId");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":userId", $userId);
        if ($stmt->execute()) {
            return true;
        } else {
            return "Failed to update user profile";
        }
    }

    public function getUserPasswordById($userId)
    {
        $stmt = $this->connection->prepare("SELECT password FROM User WHERE id = :userId");
        $stmt->bindParam(":userId", $userId);
        $stmt->execute();
        return $stmt->fetchColumn();
    }

    public function login($email)
    {
        $stmt = $this->connection->prepare("SELECT id, email, `name`, `password` FROM User WHERE email = :email");
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            return new User($row['id'], $row['name'], $row['email'], $row['password']);
        } else {
            return null;
        }
    }

    public function getUserByEmail($email)
    {
        $stmt = $this->connection->prepare("SELECT email FROM User WHERE email = :email");
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        return $stmt->fetchColumn();
    }
}