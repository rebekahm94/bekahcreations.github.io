<?php
require_once 'utils/functions.php';//linking the functions page that is located in the utils folder to this page
require_once 'classes/DB.php';//linking the DB page that is located in the classes folder to this page
require_once 'classes/WinesTable.php';//linking the WinesTable page that is located in the classes folder to this page
require_once 'classes/WineryTable.php';//linking the WineryTable page that is located in the classes folder to this page

start_session();//session will start

if (!is_logged_in()) {//if the user is not logged in
    header("Location: login_form.php");//direct them to the login form page
}

$connection = DB::getInstance();//getInstance will return a connection object
$wineryGateway = new WineryTable($connection);//winerygateway equal to the WineryTable connection

$wineries = $wineryGateway->getWinery();//wineries variable equal to the winerygateway to get all the winery

if ($_SERVER['REQUEST_METHOD'] === 'GET') {//server request method to get 
    if (!isset($_GET['id'])) {//if the id is not set
        die("Illegal request");//terminate the run and the message is displayed
    }
    $id = $_GET['id'];//id equal to get id

    $gateway = new WinesTable($connection);//gateway equal to the WinesTable connection

    $wines = $gateway->getWinesById($id);//wines variable equal to gateway to get the wines by their id

    $row = $wines->fetch(PDO::FETCH_ASSOC);//fetches a row from a result set associated with a PDOStatement object.
    if (!$row) {//if there is no row
        die("Illegal request");//this error message will be displayed
    }
}
else if ($_SERVER['REQUEST_METHOD'] === 'POST') {//server request method to post
    if (!isset($_POST['id'])) {//if the id is not set post the id to the screen
        die("Illegal request");//this error message will be displayed
    }
    $id = $_POST['id'];//id is equal to post id array

    $row = $formdata;//row is equal to the formdata
}
else {
    die("Illegal request");//this error message is displayed
}

if (!isset($errors)) {
    $errors = array();//posts the array of errors
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php require 'utils/styles.php'; ?><!--linking the styles page that is located in the utils folder-->
        <?php require 'utils/scripts.php'; ?><!--linking the scripts page that is located in the utils folder-->
    </head>
    <body>
         <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php require 'utils/header.php'; ?><!--linking the header page that is located in the utils folder-->
                </div>
            </div>
             <div class="row">
                <div class="col-lg-12">
                    <?php require 'utils/toolbar.php'; ?><!--linking the toolbar page that is located in the utils folder-->
                </div>
             </div>
        <div class="row">
            <div class="col-lg-12">
                <h2>Edit Wine Form</h2><!--Heading in header 2-->
                    <?php
                        if (isset($errorMessage)) {//if there is an error
                        echo '<p>Error: ' . $errorMessage . '</p>';//this error message is out putted
                        }
                    ?>
        <form action="editWine.php"
              method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" /><!--id is hidden from user but will be submitted with the form-->
            <table class="table">
                <tbody>
                    <tr>
                        <td>Name</td><!--name of the table column-->
                        <td>
                            <input type="text" name="name" value="<?php echo $row['name']; ?>" /><!--each input element inserting a value into the element--> 
                            <span id="nameError" class="error"><!--The error message that is t be called-->
                                <?php echoValue($errors, 'name'); ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>Colour</td><!--name of the table column-->
                        <td>
                            <input type="text" name="colour" value="<?php echo $row['colour']; ?>" /><!--each input element inserting a value into the element--> 
                            <span id="colourError" class="error"></span><!--The error message that is t be called-->
                        </td>
                    </tr>
                    <tr>
                        <td>Description</td><!--name of the table column-->
                        <td>
                            <input type="text" name="description" value="<?php echo $row['description']; ?>" /><!--each input element inserting a value into the element--> 
                            <span id="descriptionError" class="error"></span><!--The error message that is t be called-->
                        </td>
                    </tr>
                    <tr>
                        <td>Year</td><!--name of the table column-->
                        <td>
                            <input type="text" name="year" value="<?php echo $row['year']; ?>" /><!--each input element inserting a value into the element--> 
                            <span id="yearError" class="error"></span><!--The error message that is t be called-->
                        </td>
                    </tr>
                    <tr>
                        <td>Serving Temp.</td><!--name of the table column-->
                        <td>
                            <input type="text" name="temperature" value="<?php echo $row['temperature']; ?>" /><!--each input element inserting a value into the element--> 
                            <span id="temperatureError" class="error"></span><!--The error message that is t be called-->
                        </td>
                    </tr>
                    <tr>
                        <td>Price</td><!--name of the table column-->
                        <td>
                            <input type="text" name="price" value="<?php echo $row['price']; ?>" /><!--each input element inserting a value into the element--> 
                            <span id="priceError" class="error"></span><!--The error message that is t be called-->
                        </td>
                    </tr>
                    <tr>
                        <td>Winery</td><!--name of the table column-->
                        <td>
                            <select name="winery_id">
                                <?php
                                foreach ($wineries as $winery) {//for each winery
                                    if ($winery['id'] === $row['winery_id']) {//if winery id equal to row winery_id
                                        $selected = 'selected';//selected variable is equal to the selected option
                                    }
                                    else {
                                        $selected = '';//selected variable is equal to empty
                                    }
                                    echo '<option value="'.$winery['id'].'" '.$selected.'>'.$winery['wName'].'</option>';//name of the winery  in the option of a dropdown
                                }
                                ?>
                            </select>
                            <span id="winery_idError" class="error"></span><!--The error message that is t be called-->
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Update Wine" name="editWine" /><!--The button to submit the information to edit the wine-->
                        </td>
                    </tr>
                </tbody>
            </table>

          </div>
            </div>
        </div>
            <div class="row">
                <div class="col-lg-12">
                    <?php require 'utils/footer.php'; ?><!--linking the footer page that is located in the utils folder-->
                </div>
            </div>
    </body>
</html>