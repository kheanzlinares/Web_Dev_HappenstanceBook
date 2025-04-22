<?php
namespace Models;
use JsonSerializable;
class User implements JsonSerializable{
    private $id;
    private $email;
    private $name;
    private $password;
    
    public function __construct($_id,  $_name, $_email,$_password){
        $this->id = $_id;
        $this->name= $_name;
        $this->email = $_email;
        $this->password=$_password;
    }
    
    public function getId() : int
    {
        return $this->id;
    }

    public function getEmail() : string
    {
        return $this->email;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getPassword() : string
    {
        return $this->password;
    }

    public function setId($_id) 
    {
        $this->id = $_id;
    }

    public function setEmail($_email) 
    {
        $this->email = $_email;
    }

    public function setName($_name)
    {
        $this->name = $_name;
    }

    public function setPassword($_password)
    {
        $this->password = $_password;
    }

    public function jsonSerialize(): mixed
    {
        return get_object_vars($this);
    }
}

