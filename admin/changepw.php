<?php
session_start();

if(!$_SESSION['login']){
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin | Change Password</title>

     <!-- stylesheet -->
     <link rel="stylesheet" type="text/css" href="css/addpost.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">


    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

    <?php

        include('includes/connect_db.php');

        if(isset($_POST['log'])){

            $oldPw = mysqli_real_escape_string($conn, $_POST['oldPw']);
            $newPw = mysqli_real_escape_string($conn, $_POST['newPw']);
            $confirmPw = mysqli_real_escape_string($conn, $_POST['confirmPw']);


            $user = $_SESSION['login'];
            $sql = "SELECT * From admin Where username = '$user' ";
            $query = mysqli_query($conn, $sql);
            $result = mysqli_fetch_assoc($query);
           $fetch = $result['password'];
            if($fetch == $oldPw){   
           $query2 = mysqli_query($conn, "UPDATE admin SET password = '$newPw' WHERE username = '$user' ");
           

        echo '   <script>
               alert("Password Change successfully);
           </script> ';

        
            } 
            else {
                

                echo '   <script>
                    alert("Current Password is incorrect");
                </script> ';

             
            }
        }

    ?>

    <div class="page-wrapper">

    <!-- include sidebar -->
    <?php include('includes/sidebar.php'); ?>

    <!-- main page begins -->
    
    <div class="main-page">
        <br><br>
        <h2>Change Password</h2> <br>
        
        <div class="form">
        <form action="changepw.php" method="post">
            <label for="oldPw"><b> Cuurent Password: </b> </label>
                <input type="password" name="oldPw" id="oldPw">
             <br><br>

            <label for="newPw"><b>New Password:</b> </label>
                <input type="password" name="newPw" id="newPw">
             <br><br>

            <label for="confirmPw"><b>Confirm Password:</b> </label>
                <input type="password" name="confirmPw" id="confirmPw">
             <br><br>

            <input type="submit" name="log" id="log" value="Submit">
        </form>
        </div>

        <br><br><br><br><br>

    </div>



    </div>

    <!-- Javascripts/ jQuery -->
    <script src="js/bootstrap.js"></script>
</body>
</html>