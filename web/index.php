<?php
    // Variables for connecting to database.
    $user = 'root'; 
    $password = '';
    $database = '';
    $port = NULL;
    $mysqli = new mysqli('127.0.0.1:3306', $user, $password, $database, $port);

    // Test for connection errors - If connecting, show info. If not, show error.
if($mysqli->connect_error){
    die('connect error (' . ($mysqli->connect_errno . ') ' . $mysqli->connect_error));
}else{
    echo '<p>Connection: </p>' . $mysqli->host_info;
    echo '<p>Server: </p>' . $mysqli->server_info;

    // Close connection to database
    $mysqli->close();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>INSERT TITLE HERE</title>
        <!-- DO NOT EDIT style.css DIRECTLY - EDIT .scss FILES IN /work/scss -->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!-- Bootstrap container for the Bootstrap Grid System. Consider "container-fluid" etc. -->
        <div class="container">
            <div class="row">
                <div class="col">
                
                </div>
            </div>
        </div>
    </body>
</html>