<?php
class User{
    private $username;
    private $email;
    private $password;
    
public function __construct($username,$password,$email){
$this->setUsername($username);
$this->setEmail($email);
$this->setPassword($password);
}

function getUsername(){
    return $this->username;
}   
function getPassword(){
    return $this->password;
} 
function getEmail(){
    return $this->email;
}  
function setUsername($username){
    $this->username = $username;

}
function setPassword($password){
    $this->password = $password;

}
function setEmail($email){
    $this->email = $email;

}

}


?>