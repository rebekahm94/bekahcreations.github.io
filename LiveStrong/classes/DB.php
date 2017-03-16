<?php
class DB {

    private static $host = "localhost";//name of the server which the database resides at home it is localhost in college it is daneel
    private static $database = "livestrong";//the name of the database that the information is being read from
    private static $username = "root";//the login information of the user who owns the database
    private static $password = "";//the password to that database to gain access
    
    public static function getInstance() {//getInstance will return a connection object
        $dsn = 'mysql:host=' . DB::$host . ';dbname=' . DB::$database;//dsn is a prefix for mysql. DB class to the host system + the database name with the DB class connecting to the database name

        $connection = new PDO($dsn, DB::$username, DB::$password);//to ensure that only a single database is connected
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//error exception and attributes to the error mode

        return $connection;//database connection is being returned
    }

}
