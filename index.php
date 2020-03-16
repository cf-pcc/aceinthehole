<!DOCTYPE html>

<!--
File Name: index.php
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
            <h1>Welcome To Ace in the Hole Multisports Events!</h1>
            <h2>We have events for Every Body!</h2>
            <section>
                <div class="left">
                <p>
                    Ace in the Hole Multisport Events is an event company that hosts multisport athletic events. Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, gender identifications and cultural backgrounds. We offer Events for Every Body!
                </p>
                <p>
                    We post new events all the time. Please explore our website to discover more about our events, images from our previous events, and to reach out to us!
                </p>
                <p>
                    Please follow us on Twitter and share this page with your friends on Facebook! You will find handy links to both throughout the site!
                </p>
                </div>
                <div class="right">
                    <img src="images/ace1.jpg">
                </div>
            </section>
            <section class="clear">
            </section>
            <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="PORTLAND" data-label_2="WEATHER" data-theme="original" >PORTLAND WEATHER</a>
            <script>
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
            </script>
        </main>
            
        <?php include 'footer.php'; ?>
        
    </body>
    
</html>