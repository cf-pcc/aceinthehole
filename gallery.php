<!DOCTYPE html>

<!--
File Name: gallery.php
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
            <h1>Gallery</h1>
            <h2>Pictures From Our Previous Events!</h2>
            <section>
                <!--START JUICEBOX EMBED-->
	           <script src="jbcore/juicebox.js"></script>
	           <script>
	               new juicebox({
		              containerId: 'juicebox-container'
	               });
	           </script>
	           <div id="juicebox-container"></div>
	           <!--END JUICEBOX EMBED-->
            </section>
            <section>
            </section>
        </main>
            
        <?php include 'footer.php'; ?>
        
    </body>
    
</html>