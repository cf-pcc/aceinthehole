<!DOCTYPE html>

<!--
File Name: registration.php
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
            <h1>Registration Form</h1>
            <h2>Please enter your registration information below.</h2>
            <section class="form">
                <form action="submitregistration.php" method="post">
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
                            <td><label>Age</label></td>
                            <td><input type="number" name="age" placeholder="Age" required></td>
                        </tr>
                        <tr>
                            <td><label>Emergency Contact</label></td>
                            <td><input type="test" name="emergencycontact" placeholder="Emergency Contact" required></td>
                        </tr>
                        <tr>
                            <td><label>Emergency Contact Number</label></td>
                            <td><input type="text" name="emergencynumber" placeholder="Emergency Contact #" required></td>
                        </tr>
                        <tr>
                            <td><label>Gender</label></td>
                            <td><select name="gender">
                                    <option value="female">Female</option>
                                    <option value="male">Male</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Choose Your Saturday Event</label></td>
                            <td><select name="saturdayevent">
                                    <option value="longcourse">Long Course Triathlon</option>
                                    <option value="olympic">Olympic Triathlon</option>
                                    <option value="10K">10K</option>
                                    <option value="halfmarathon">Half Marathon</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Choose Your Sunday Event</label></td>
                            <td><select name="sundayevent">
                                    <option value="sprinttriathlon">Sprint Triathlon</option>
                                    <option value="tryatri">Try-a-Tri</option>
                                    <option value="splashndash">Splash n Dash</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Role</label></td>
                            <td><select name="type">
                                    <option value="athlete">Athlete</option>
                                    <option value="volunteer">Volunteer</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Special Accommodations</label></td>
                            <td><textarea name="specialaccommodations" rows="5" cols="40"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button class="button" type="submit">Submit</button></td>
                        </tr>
                    </table>
                </form>
            </section>
            <section>
            </section>
        </main>
            
        
        <?php include 'footer.php'; ?>
        
    </body>
    
</html>