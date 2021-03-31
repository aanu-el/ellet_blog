<!DOCTYPE html>
<html lang="en">
<head>

    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- page title -->
    <title>ElletBlog | About Us</title>

    <!-- stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/about.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=EB+Garamond&display=swap" rel="stylesheet">  

    <!-- Google icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<!-- connect to database -->
     <?php include('includes/connect_db.php') ?>

    <!-- Page Body starts -->
    <div class="page-wrapper">

        <!-- Navigation bar starts -->
        <?php include('includes/header.php') ?>

        
        <br><br><br>
        <h2 style="text-align: center;">About Us</h2>
        <hr>

        <div class="about-container">
            <!-- PHP CONNECTION -->
            <?php
                    $sql = "SELECT * FROM about";
                    $query = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_array($query)){

                ?>

            <div class="post">
                <img src="imgs/<?php echo $row['image']; ?>" alt="Post Image" height="250" width="300" style="border: 3px solid black;">
                 <p> <?php echo $row['about_paragraphA']; ?> </p>
                 <p> <?php echo $row['about_paragraphB']; ?> </p>
                 <p> <?php echo $row['about_paragraphC']; ?> </p>
            </div>
                    <?php } ?>
        </div>

        <hr><br>
        
         <!-- Newsletter -->
        <div>
        <div class="newsletter">
            <div class="newsletter_form">
            <h3 class="newsletter_header">
                <b>Sign Up for our Weekly Quotes Digest:</b>
            </h3>
                <form action="index.php" method="post">
                    <label for="emal">
                        <input type="email" placeholder="Email Address:*" required>
                    </label>
                    <button class="submit">Sign up</button>
                </form>
            </div>
        </div>
    </div>
    
    <br><br>

     <!-- Footer Begins -->
     <?php include('includes/footer.php') ?>

    <!-- page wrapper ends -->
    </div>
    
    <!-- Javascripts/ jQuery -->
    <script src="js/script.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>