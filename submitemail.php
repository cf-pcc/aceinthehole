<?php
    require_once 'dbconfig.php';

    $to = "craig.fouts@pcc.edu";
    $subject = $_REQUEST["subject"];
    $body = $_REQUEST["message"];
    $from = "From: " . "<" . $_REQUEST["email"] . ">";

    mail($to, $subject, $body, $from);
    
?>

<!DOCTYPE html>

<!--
File Name: submitemail.php
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
            <h1>Thanks for sending us an email! We'll get back to you quickly!</h1>
            <a href="index.php"><input class="button" type="button" value="Take Me To The Home Page"></a>
            <section>
            </section>
            <section>
            </section>
        </main>
            
        <?php include 'footer.php'; ?>
        
    </body>
    
</html>