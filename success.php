<!DOCTYPE html>
<html>
    <head>
        <title> ElletBlog | Success </title>
    
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/daily.css">

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

        <br><br>

        <!-- Page content begins -->
        <?php
            $sql = "SELECT * FROM success ORDER BY id DESC";
            $query = mysqli_query($conn, $sql);
            $total = mysqli_num_rows($query);
        ?>

        <hr>
        <h1 class="daily-heading">Success Quotes(<?php echo $total; ?>)</h1><hr>

        <div class="page-container">
            <div class="quote-container">
                <!-- PHP CONNECTION-->
                <?php
                    $sql = "SELECT * FROM sucess ORDER BY id DESC";
                    $query = mysqli_query($conn, $sql);
                    $num = mysqli_num_rows($query);
                    while($row = mysqli_fetch_array($query)){

                ?> 

            <div class="quote-block"> 
                <img src="imgs/quotes/<?php echo $row['image']; ?>" alt="Quote Image" class="quote-img">
                <div class="quote-text" style="color: <?php echo $row['text_color']; ?> ;" ><blockquote><?php echo $row['body']; ?></blockquote>
                <cite style="float: right;">-<?php echo $row['author']; ?></cite></div>
            </div>
            
                <?php   }   ?>
            
            </div>
        </div>






        <hr> <br>
  <!-- Footer Begins -->
  <?php include('includes/footer.php') ?>

<!-- page wrapper ends -->
    </div>

    <script src="js/script.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>
