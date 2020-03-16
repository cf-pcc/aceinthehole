<?php
    require_once 'dbconfig.php';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $firstname = $_REQUEST["firstname"];
        $lastname = $_REQUEST["lastname"];
        $email = $_REQUEST["email"];
        $questioncomment = $_REQUEST["questioncomment"];
        $type = $_REQUEST["type"];
    
        $sql = "INSERT INTO contacts (
                    firstname,
                    lastname,
                    email,
                    questioncomment,
                    type)
                    VALUES (
                        '$firstname',
                        '$lastname',
                        '$email',
                        '$questioncomment',
                        '$type')";
        
        $conn->query($sql);
    
    } catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }
?>

<!DOCTYPE html>

<!--
File Name: submitcontact.php
Date: 03/11/20
Author: Craig Fouts
-->

<html lang="en">
    
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <meta name="author" content="Craig Fouts">
        
        <title>Ace in the Hole Multisports Events</title>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700" rel="stylesheet" type="text/css">
        <link href="css/reset.css" rel="stylesheet" type="text/css">
        <link href="css/style.less" rel="stylesheet/less" type="text/css">
        <link href="css/navigation.css" rel="stylesheet" type="text/css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>
        
    </head>
    
    <body>
            
        <?php include 'header.php'; ?>
            
        <main>
            <h1>Thanks <? echo $firstname; ?> for submitting your contact information!</h1>
            <a href="index.php"><input class="button" type="button" value="Take Me To The Home Page"></a>
            <section>
            </section>
            <section>
            </section>
        </main>
            
        <?php include 'footer.php'; ?>
        
    </body>
    
</html>