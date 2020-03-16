<!DOCTYPE html>

<!--
File Name: form.php
Date: 02/26/20
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
            <h1>Contact Form</h1>
            <h2>Please enter your contact information below.</h2>
            <section class="form">
                <form action="submitcontact.php" method="post">
                    <table>
                        <tr>
                            <td><label>First Name</label></td>
                            <td><input type="text" name="firstname" placeholder="First Name" required></td>
                        </tr>
                        <tr>
                            <td><label>Last Name</label></td>
                            <td><input type="text" name="lastname" placeholder="Last Name" required></td>
                        </tr>
                        <tr>
                            <td><label>Email</label></td>
                            <td><input type="email" name="email" placeholder="Email Address" required></td>
                        </tr>
                        <tr>
                            <td><label>Role</label></td>
                            <td><select name="type">
                                    <option value="athlete">Athlete</option>
                                    <option value="volunteer">Volunteer</option>
                                    <option value="interestedparty">Interested Party</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Question Or Comment</label></td>
                            <td><textarea name="questioncomment" rows="4" cols="50"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button class="button" type="submit">Submit</button></td>
                        </tr>
                    </table>
                </form>
            </section>
            <br>
            <h2>If you prefer to email us, you can use this form instead!</h2>
            <section class="form">
                <form action="submitemail.php" method="post">
                    <table>
                        <tr>
                            <td><label>Your Email Address</label></td>
                            <td><input type="email" name="email" placeholder="Email Address" required></td>
                        </tr>
                        <tr>
                            <td><label>Subject</label></td>
                            <td><input type="text" name="subject" placeholder="Subject" required></td>
                        </tr>
                        <tr>
                            <td><label>Message</label></td>
                            <td><textarea name="message" rows="4" cols="50"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button class="button" type="submit">Send Email</button></td>
                        </tr>
                    </table>
                </form>
            </section>
        </main>
            
        <?php include 'footer.php'; ?>
        
    </body>
    
</html>