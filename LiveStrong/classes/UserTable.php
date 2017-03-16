<?php

require_once 'classes/user.php';//connecting the classes folder that has the user page inside it

class UserTable {//usertable class that can be used to connect to other pages
    private $link;//creating a private link to the database
    
    public function __construct($connection) {//function_construct used instead of the class name itself(connecting to the database)
        $this->link = $connection;//instance variable link equal to connection of the database
    }

    public function insert($user) {//inserts the user information into the database table
        if (!isset($user)) {//if a user is not in the system 
            throw new Exception("User required");//then this exception message is displayed
        }
        $sql = "INSERT INTO user(email, username, password, role) "//the sql code thats the database, the insert sql into the user table with the name of columns
             . "VALUES (:email, :username, :password, :role)";//the values that have to be inserted

        $params = array(//the parameters of the array
            'email' => $user->getEmail(),
            'username' => $user->getUsername(),//the variable of the username to get the username
            'password' => $user->getPassword(),//the variable of the password to get the password
            'role' => $user->getRole()//the variable of the role to get the role
        );
        $stmt = $this->link->prepare($sql);//statement that is equal to the instance variable link to prepare the sql statement
        $status = $stmt->execute($params);//executes the prepared statementof parameters
        if ($status != true) {//if the status is not equal to true
            $errorInfo = $stmt->errorInfo();//this error statement is referrred to
            throw new Exception("Could not save user: " . $errorInfo[2]);//this exception is displayed
        }

        $id = $this->link->lastInsertId('user');//the id equal to the instance variable link to lastinsertid the user
        
        return $id;//returns the id of the user
    }

    public function delete($user) {//delete the user function
        if (!isset($user)) {//if user is not set/registered
            throw new Exception("User required");//the exception is thrown and the message dispalyed user required
        }
        $id = $user->getId();//getmethod for the user id
        if ($id == null) {//if the id is equal to null
            throw new Exception("User id required");//the exception is thrown and the message dispalyed user id required
        }
        $sql = "DELETE FROM user WHERE id = :id";//the sql delete from the user table where the id is equal to the id
        $params = array('id' => $user->getId());//parameters in the array id in the db table user to get the id
        $stmt = $this->link->prepare($sql);//statement that is equal to the instance variable link to prepare the sql statement 
        $status = $stmt->execute($params);//executes the prepared statementof parameters
        if ($status != true) {//if the status is not equal to true
            $errorInfo = $stmt->errorInfo();//this error statement is referrred to
            throw new Exception("Could not delete user: " . $errorInfo[2]);//this exception is displayed
        }
    }

    public function update($user) {//update the user function
        if (!isset($user)) {//if user is not set/registered
            throw new Exception("User required");//the exception is thrown and the message dispalyed user required
        }
        $id = $user->getId();//getmethod for the user id
        if ($id == null) {//if the id is equal to null
            throw new Exception("User id required");//the exception is thrown and the message dispalyed user id required
        }
        $sql = "UPDATE user SET password = :password WHERE id = :id";//the sql update from the user table where the password is set to password and where id is equal to the id
        $params = array(//parameters in the array id and password in the db table user to get the id and the password
            'password' => $user->getPassword(),//getmethod for the user password
            'id' => $user->getId()//getmethod for the user id
        );
        $stmt = $this->link->prepare($sql);//statement that is equal to the instance variable link to prepare the sql statement 
        $status = $stmt->execute($params);//executes the prepared statement of parameters
        if ($status != true) {//if the status is not equal to true
            $errorInfo = $stmt->errorInfo();//this error statement is referrred to
            throw new Exception("Could not update user: " . $errorInfo[2]);//this exception is displayed
        }
    }

    public function getUserById($id) {//function to getmethod the user by the id 
        $sql = "SELECT * FROM user WHERE id = :id";//select all from the user table in the db where the id is equal to id
        $params = array('id' => $id);//parameters in the array id in the db table user to get the id 
        $stmt = $this->link->prepare($sql);//statement that is equal to the instance variable link to prepare the sql statement 
        $status = $stmt->execute($params);//executes the prepared statement of parameters
        if ($status != true) {//if the status is not equal to true
            $errorInfo = $stmt->errorInfo();//this error statement is referrred to
            throw new Exception("Could not retrieve user: " . $errorInfo[2]);//this exception is displayed
        }

        $user = null;//user is equal to null
        if ($stmt->rowCount() == 1) {//if statement is called to count the rows
            $row = $stmt->fetch();//row is equal to the prepared statement that fetches the row
            $email = $row['email'];//the email is equalto the row declared as email
            $username = $row['username'];//the username is equal to the row declared as username
            $pwd = $row['password'];//the pwd is equal to the row declared as password
            $role = $row['role'];//the role is eual to the row declared as role
            $user = new User($id, $email, $username, $pwd, $role);//user equal to a new user with the following variables
        }
        return $user;//the user is then returned
    }

    public function getUserByUsername($username) {//function to getmethod the user by their username
        $sql = "SELECT * FROM user WHERE username = :username";//select all from the user table in the db where the username is equal to username
        $params = array('username' => $username);//parameters in the array username in the db table user to get the username 
        $stmt = $this->link->prepare($sql);//statement that is equal to the instance variable link to prepare the sql statement 
        $status = $stmt->execute($params);//executes the prepared statement of parameters
        if ($status != true) {//if the status is not equal to true
            $errorInfo = $stmt->errorInfo();//this error statement is referrred to
            throw new Exception("Could not retrieve user: " . $errorInfo[2]);//this exception is displayed
        }

        $user = null;//user is equal to null
        if ($stmt->rowCount() == 1) {//if statement is called to count the rows
            $row = $stmt->fetch();//row is equal to the prepared statement that fetches the row
            $id = $row['id'];//the id is equal to the row declared as id
            $email = $row['email'];//the email is equal to the row declared as email
            $username = $row['username'];
            $pwd = $row['password'];//the pwd is equal to the row declared as password
            $role = $row['role'];//the role is equal to the row declared as role
            $user = new User($id, $email, $username, $pwd, $role);//user equal to a new user with the following variable
        }
        return $user;//the user is then returned
    }

    public function getUsers() {//get method to call the users
        $sql = "SELECT * FROM user";//select all users from the user table in the db
        $stmt = $this->link->prepare($sql);//statement that is equal to the instance variable link to prepare the sql statement 
        $status = $stmt->execute();//executes the prepared statement of parameters
        if ($status != true) {//if the status is not equal to true
            $errorInfo = $stmt->errorInfo();//this error statement is referrred to
            throw new Exception("Could not retrieve users: " . $errorInfo[2]);//this exception is displayed
        }

        $users = array();//users is equal to the array
        $row = $stmt->fetch();//row is equal to the prepared statement that fetches the row
        while ($row != null) {//while loop (while row is not equal to null)
            $id = $row['id'];//the id is equal to the row declared as id
            $email = $row ['email'];//the email is equal to the row declared as email
            $username = $row['username'];//the username is equal to the row declared as username
            $pwd = $row['password'];//the pwd is equal to the row declared as password
            $role = $row['role'];//the role is equal to the row declared as role
            $user = new User($id, $email, $username, $pwd, $role);//user equal to a new user with the following variable
            $users[$id] = $user;//the user id is equal to the user

            $row = $stmt->fetch();//row is equal to the prepared statement that fetches the row
        }
        return $users;//the users are returned
    }
}






