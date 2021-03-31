<?php
session_start();

if(!$_SESSION['login']){
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Admin Dashboard</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- stylesheet -->
     <link rel="stylesheet" type="text/css" href="css/dashboard.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>


    <div class="page-wrapper">

    <!-- sidebar begins -->
   <?php include('includes/sidebar.php') ?>

    
    <!-- connect to database -->
    <?php 
    include('includes/connect_db.php');

    $sql = "SELECT * FROM "
    ?>

    <!-- main page begins -->
    <div class="main-page">
        <br>

        <h2 style="text-align: center; font-family:'Times New Roman', Times, serif; ">DASHBOARD</h2>
        <br><br>

        <div class="dashboard-category">
            <div class="category-a">
                <div style="background-color: white; border-radius: 50px; padding: 10px;">
                    <h3>Total Pages</h3>
                    <h1>5</h1>
                </div>
            </div>
            <div class="category-b">
                <div style="background-color: white; border-radius: 50px; padding: 10px;">
                    <h3>Total Posts</h3>
                    <h1>20</h1>
                </div>
            </div>
        </div>

    </div>
    

   






    <!-- Page wrapper ends -->
    </div>    

    <!-- Javascripts/ jQuery -->
    <script src="js/bootstrap.js"></script>
</body>
</html>