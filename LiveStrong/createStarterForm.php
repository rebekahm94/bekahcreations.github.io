<?php

require_once 'utils/functions.php';//linking the functions page that is located in the utils folder to this page
require_once 'classes/DB.php';//linking the DB page that is located in the classes folder to this page
require_once 'classes/WineryTable.php';//linking the WineryTable page that is located in the classes folder to this page


start_session();//the session will start

if (!is_logged_in()) {//if the user is not logged in
    header("Location: login_form.php");//send them to the login form page
}

if (!isset($errors)) {
    $errors = array();//posts the array of errors
}

$connection = DB::getInstance();//getInstance will return a connection object
$wineryGateway = new WineryTable($connection);//winerygateway equal to the WineryTable connection


$wineries = $wineryGateway->getWinery();//wineries variable equal to the winerygateway to get all Winery


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php require 'utils/styles.php'; ?><!--linking the styles page that is located in the utils folder to this page-->
        <?php require 'utils/scripts.php'; ?><!--linking the scripts page that is located in the utils folder to this page-->
        <?php require 'scripts/main.js';?><!--linking the main javascript validation page that is located in the scripts folder to this page-->
    </head>
    <body> 
       <div class="container">
             <div class="row">
                <div class="col-lg-12">
                   <?php require 'utils/header.php'; ?><!--linking the header page that is located in the utils folder to this page-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                   <?php require 'utils/toolbar.php'; ?><!--linking the toolbar page that is located in the utils folder to this page-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h2>Create Wine Form</h2>
                    <?php
                    if (isset($errorMessage)) {
                        echo '<p class="error">Error: ' . $errorMessage . '</p>';
                    }
                    ?>
        <form action="createWine.php"
              method="POST"
              role="form"
              class="form-horizontal">
            <div class="form-group">
                    <!--<input type="hidden" name="id" value="<?php //echo $row['winery_id'];;?>"/><!--The hidden id of the winery-->
                <div class="col-lg-3 form-label">
                    <label for="name">Name</label><!--name of the table column-->
                </div>
                <div class="col-lg-6">
                    <input type="text" id="name" class="form-control" name="name" value="" /><!--the input type entered-->
                </div>
                <div class="col-lg-3">
                    <span id="nameError" class="error"><!--The error message that is t be called-->
                        <?php echoValue($errors, 'name'); ?><!--The error message that will be displayed-->
                    </span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-3 form-label">
                    <label for="colour">Colour</label><!--name of the table column-->
                </div>
                <div class="col-lg-6">
                    <input type="text" id="colour" class="form-control" name="colour" value="" /><!--the input type entered-->
                </div> 
                <div class="col-lg-3">
                    <span id="colourError" class="error"><!--The error message that is t be called-->
                        <?php echoValue($errors, 'colour'); ?><!--The error message that will be displayed-->
                    </span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-3 form-label">
                    <label for="description">Description</label><!--name of the table column-->
                </div>
                <div class="col-lg-6">
                    <input type="text" id="description" class="form-control" name="description" value="" /><!--the input type entered-->
                </div>
                <div class="col-lg-3">
                    <span id="descriptionError" class="error"><!--The error message that is t be called-->
                        <?php echoValue($errors, 'description'); ?><!--The error message that will be displayed-->
                    </span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-3 form-label">
                    <label for="year">Year</label><!--name of the table column-->
                </div>
                <div class="col-lg-6">
                    <input type="text" id="year" class="form-control" name="year" value="" /><!--the input type entered-->
                </div>          
                <div class="col-lg-3">
                    <span id="yearError" class="error"><!--The error message that is t be called-->
                        <?php echoValue($errors, 'year'); ?><!--The error message that will be displayed-->
                    </span>
                </div>
            </div>
           <div class="form-group">
                <div class="col-lg-3 form-label">
                    <label for="temperature">Serving Temp.</label><!--name of the table column-->
                </div>
                <div class="col-lg-6"> 
                    <input type="text" id="temperature" class="form-control" name="temperature" value="" /><!--the input type entered-->
                </div>
                <div class="col-lg-3">
                    <span id="temperatureError" class="error"><!--The error message that is t be called-->
                        <?php echoValue($errors, 'temperature'); ?><!--The error message that will be displayed-->
                    </span>
                </div>
           </div>   
           <div class="form-group">
                <div class="col-lg-3 form-label">
                    <label for="price">Price</label><!--name of the table column-->
                </div>
                <div class="col-lg-6">
                    <input type="text" id="price" class="form-control" name="price" value="" /><!--the input type entered-->
                </div>
               <div class="col-lg-3">
                    <span id="priceError" class="error"><!--The error message that is t be called-->
                        <?php echoValue($errors, 'price'); ?><!--The error message that will be displayed-->
                    </span>
                </div>
           </div>
           <div class="form-group">
                <div class="col-lg-3 form-label">
                    <label for="winery_id">Winery</label><!--name of the table column-->
                </div>
                <div class="col-lg-6">            
                    <select name="winery_id" id="winery_id" class="form-control"><!--the input selected winery-->
                        <?php
                            foreach ($wineries as $winery) {//for each winery
                                echo '<option value="'.$winery['id'].'">'.$winery['wName'].'</option>';//name of the winery  in the option of a dropdown
                            }
                        ?>
                    </select>
                </div>
                <div class="col-lg-3">
                    <span id="winery_idError" class="error"></span><!--The error message that is t be called-->
                </div>
           </div>
           <div class="form-group">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-6">
                    <input type="submit" class="form-control btn btn-default" value="Create Wine" name="createWine" /><!--The button to submit the information to create the wine-->
                </div>
            </div>
        </form>
       </div>
      </div>
     </div>
      <div class="row">
        <div class="col-lg-12">
            <?php require 'utils/footer.php'; ?><!--linking the footer page that is located in the utils folder to this page-->
        </div>
      </div>
    </body>
</html>


