<?php
//Connect to MySQL
$username = "root";
$pwd = "";
$host = "localhost";
$dbname = "livestrong";

try{
    $connection = new
            PDO("mysql:host={$host}; dbname={$dbname};charset=utf8", $username, $pwd);
}

catch(PDOException $ex)
{
    $msg = "Failed to connect to the database";
}

//Was the form submitted ???
if(isset($_POST["ForgotPassword"]))
{
    //Harvest submitted e-mail address
    if(filter_var($_POST["email"],FILTER_VALIDATE_EMAIL))
    {
        $email = $_POST["email"];
    }
    
    else{
        echo "email is not valid";
        exit;
    }
    
    //Check to see if a user exists with this e-mail
    $query = $connection->prepare('SELECT email FROM users WHERE email = :email');
    $query->bindParam(':email', $email);
    $userExists = $query->fetch(PDO::FETCH_ASSOC);
    $connection = null;
    
    if($userExists["email"])
    {
        //A unique salt will never leave PHP unencrypted.
        $salt = "498#2D83B631%3800EBD!801600D*7E3CC13";
        
        //The unique user passwrd reset key
        $pwd = hash('sha512', $salt.$userExists["email"]);
        
        //A url that will direct the user to reset their password
        $pwrurl = "http://localhost/LiveStrong/reset_pass.php? q=" .$pwd;
        
        //Mail them their key
        $mailbody = "Dear user, \n\nIf this e-mail does not apply to you please ignore it."
                . "It appears that you have requested a password reset at our website http://localhost/LiveStrong\n\n"
                . "To reset your password, please click the link below. If you cannot click it, please copy and paste it into"
                . "your web browser's address bar.\n\n" .$pwrurl .
                "\n\nThank you, \nThe Aministration";
                            mail($userExists["email"], "http://localhost/LiveStrong - Password Reset", $mailbody);
                                echo "Your password recovery key has been sent to your e-mail address.";
    } 
    
    else{
        echo "No user with that e-mail address exists.";
    }
}

