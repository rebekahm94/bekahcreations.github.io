<?php
class User1 {
    private $id;//implementing the id of the user
    private $email;//implementing the email of the user
    private $username;//implementing the username of the user
    private $password;//implementing the password of the user
    private $role;//implementing the role of the user

    public function __construct($i, $email, $uname, $pwd, $r) {//the intial names that will be referenced throughout the php
        $this->id = $i;//instance variable id = to $i that is referenced above to be called later
        $this->email = $email;//instance variable email = to $email that is referenced above to be called later
        $this->username = $uname;//instance variable username = to $uname that is referenced above to be called later
        $this->password = $pwd;//instance variable password = to $pwd that is referenced above to be called later
        $this->role = $r;//instance variable role = to $r that is referenced above to be called later
    }
    public function getId() { return $this->id; }//function to getmethod the id of the user from the database. returns the id of the user
    public function getEmail() { return $this->email; }//function to getmethod the email of the email from the database. returns the email of the user.
    public function getUsername() { return $this->username; }//function to getmethod the username of the user from the database. returns the username of the user
    public function getPassword() { return $this->password; }//function to getmethod the password of the user from the database. returns the password of the user
    public function getRole() { return $this->role; }//function to getmethod the role of the user from the database. returns the role of the user

    public function setId($i) { $this->id = $i; }//function to setmethod the id of the user from the database. the instance variable is set as $i
    public function setEmail($e) { $this->email = $e; }//functiion to setmethod the email of the user from the database. the instance variable is set as $e
    public function setUsername($n) { $this->username = $n; }//function to setmethod the username of the user from the database. the instance variable is set as $n 
    public function setPassword($p) { $this->password = $p; }//function to setmethod the password of the user from the database. the instance variablle is set as $p
    public function setRole($r) { $this->role = $r; }//function to setmethod the role of the user from the database. the instance variable is set as $r
}

