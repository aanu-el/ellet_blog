<!DOCTYPE html>
<html lang="en">
<head>

    <title>admin login</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/login.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

</head>
<body> 


    <!-- Form Validation -->
    <?php

    session_start();

    include('includes/connect_db.php');

    if(isset($_POST['log'])){

        $Uname = mysqli_real_escape_string($conn, $_POST['Uname']);
        $Pass = mysqli_real_escape_string($conn, $_POST['Pass']);


        $sql = "SELECT * FROM admin WHERE username = '$Uname' AND password = '$Pass' ";

        $query = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($query);
        
        if($num > 0){

        $row = mysqli_fetch_assoc($query);
        $login = $row['username'];
        $_SESSION['login'] = $login;

            header("location:dashboard.php");
        }
        else{
            ?>
<script>
alert("Invalid Login Details")
</script>

            <?php
        }
     
    }

    

    ?>
        
        <div class="heading">
            <h2>Welcome Admin!</h2>
        </div>
            <br>

        <div class="login">
            <form action="login.php" method="post" id="login">
                <label for="Uname"> <b>Username: </b></label>
                    <input type="username" name="Uname" id="Uname" placeholder="Username">
                   
                 <br><br>

                <label for="Pass"><b>Password: </b></label>
                    <input type="password" name="Pass" id="Pass" placeholder="Password">
               
                    <br><br>

                    <input type="submit" name="log" id="log" value="Login">       
                    <br><br>

                    <input type="checkbox" id="check">
                    <span>Remember me</span>
                    <br><br>

                    Forgot <a href="#">Password</a>
            </form>
        </div>





<!-- Javascripts/ jQuery -->
<script src="js/bootstrap.js"></script>

</body>
</html>
