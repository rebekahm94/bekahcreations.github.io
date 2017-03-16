<?php
require_once 'utils/functions.php';//linking the functions page that is located in the utils folder to this page
require_once 'classes/WinesTable.php';//linking the Winestable page that is located in the classes folder to this page
require_once 'classes/DB.php';//linking the DB page that is located in the classes folder to this page
require_once 'validateWine.php';//linking the validate Wine page to this page

start_session();//the session will start

if (!is_logged_in()) {//if the user is not logged in
    header("Location: login_form.php");//send them to the login form page
}

$formdata = array();//posts the array of data required
$errors = array();//posts the array of errors

validate($formdata, $errors);//validates the formdata and the errors

if (empty($errors)) {//if the eroors are empty
    $id = $formdata['id'];//Value of hidden field will be submitted with the form. 
    $name = $formdata['name'];//variable name equal to the formdata that name
    $colour = $formdata['colour'];//variable name equal to the formdata that name
    $description = $formdata['description'];//variable name equal to the formdata that name
    $year = $formdata['year'];//variable name equal to the formdata that name
    $temperature = $formdata['temperature'];//variable name equal to the formdata that name
    $price = $formdata['price'];//variable name equal to the formdata that name
    $winery_id = $formdata['winery_id'];//variable name equal to the formdata that name

    $connection = DB::getInstance();//getInstance will return a connection object

    $gateway = new WinesTable($connection);//gateway equal to the WinesTable connection

    $id = $gateway->update($id, $name, $colour, $description, $year, $temperature, $price, $winery_id);//id equal to the gateway to insert the variables located in the wines db table

    header('Location: viewWines.php');//go to the view Wines page
}
else {
    require 'editWineForm.php';//go to the edit wine form page
}

