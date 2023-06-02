<!DOCTYPE HTML>

<html lang="en">
    <?php
    session_start();
    include("config.php");
    include("functions.php");
    $dbconnect = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if (mysqli_connect_error()) {
        echo "Connection failed:" . mysqli_connect_error();
        exit;
    }
    ?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Food review database">
    <meta name="keywords" content="food, breakfast, lunch, dinner, dessert. reviews">
    <meta name="author" content="Harveer Talwar">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Food Lodge</title>
    
    <!-- Edit the link below / replace with your chosen google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Edit the name of your style sheet - 'foo' is not a valid name!! -->
    <link rel="stylesheet" href="css/foo.css"> 
    
</head>
    
<body>
    
    <div class="wrapper">
    

        
        <div class="box banner">
            
        <!-- logo image linking to home page goes here -->
        <a href="index.php">
            <div class="box logo"  title="Logo - Click here to go to the Home Page">
            <img class="img-circle" src="images/logo.jpg" width="150" height="150" alt="generic logo" />
            
            </div>    <!-- / logo -->
        </a>
            
            <h1>Food Lodge</h1>
        </div>    <!-- / banner -->

        <!-- Navigation goes here.  Edit BOTH the file name and the link name -->
        
        <div class="box side">
            <h2>Search | <a class = "side" href= "show_all.php">Show All</a></h2>
            <i> Type part of Food name if desired</i>

            <hr />
            Food search<br />
            Time search<br />
            Place search<br />
            Rating search

        </div>
        