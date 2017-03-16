<?php
require_once 'utils/functions.php';//linking the functions page that is located in the utils folder to this page
require_once 'classes/WinesTable.php';//linking the WinesTable page that is located in the classes folder to this page
require_once 'classes/DB.php';//linking the DB page that is located in the classes folder to this page

start_session();//the session will start

if (!is_logged_in()) {//if the user is not logged in
    header("Location: login_form.php");//send them to the login form page
}

if (!isset($_GET['id'])) {//if the id is not set 
    die("Illegal request");//this error message will be displayed
}
$id = $_GET['id'];//id is equal to get the id

$connection = DB::getInstance();//getInstance will return a connection object

$gateway = new WinesTable($connection);//gateway equal to the WinesTable connection

$gateway->delete($id);//gateway to delete id

header('Location: viewWines.php');//go to view Wines page

