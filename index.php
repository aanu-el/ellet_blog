<!DOCTYPE html>
<html lang="en">
<head>
    <title> ElletBlog | Home </title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=EB+Garamond&display=swap" rel="stylesheet">  

    <!-- Google icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>

    <div class="page-wrapper">

    <!-- Navigation bar starts -->
                <?php include('includes/header.php') ?>

    <!-- Page Banner begins -->
    <div class="banner">
        <img src="imgs/two-people.jpg" alt="welcome to ElletBlog">
        <div class="centered">Welcome To ElletBlog Quotes Fort</div>
    </div>

    <br><br><br>
  
    <!-- Page body begins -->
    <h1 style="text-align: center;"><b>Recent Quotes</b></h1><br>
    <div class="page_container">
        <div class="blog_categories">
            <h1 class="categories_heading"><b>Quote Categories</b></h1>
            <ul>
                <li><a href="daily.php">Daily</a></li><hr>
                <li><a href="motivational.php">Motivational</a></li> <hr>
                <li><a href="success.php">Success</a></li> <hr>
                <li><a href="relationship.php">Relationship</a></li> <hr>
                <li><a href="life.php">Life</a></li> <hr>
            </ul>
        </div>

        <!-- main blog page -->
        <div class="recent_posts">
            <div class="post">
                <h3 style="color: grey;">Category:</h3>
                <img src="https://via.placeholder.com/250" alt="Post Image">
                <h1 style="color: blue;">Post Title</h1>
                <h6 style="color: grey;">Post Date</h6>
                 <p>Dolorem cum, totam architecto delectus magnam dolores voluptatem sint praesentium molestiae corporis sapiente! Enim id pariatur facilis aliquam? Pariatur repellat qui Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut error non dolor ea quo nam quia natus, dolorem consectetur ducimus, cupiditate libero voluptatum aliquam quam debitis, explicabo quae minus tempora. </p>
                 <button class="btn btn-info"><a href="#">View More</a></button>
            </div>

            <div class="post">
                <h3 style="color: grey;">Category:</h3>
                <img src="https://via.placeholder.com/250" alt="Post Image">
                <h1 style="color: blue;">Post Title</h1>
                <h6 style="color: grey;">Post Date</h6>
                 <p>Dolorem cum, totam architecto delectus magnam dolores voluptatem sint praesentium molestiae corporis sapiente! Enim id pariatur facilis aliquam? Pariatur repellat qui Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut error non dolor ea quo nam quia natus, dolorem consectetur ducimus, cupiditate libero voluptatum aliquam quam debitis, explicabo quae minus tempora. </p>
                 <button class="btn btn-info"><a href="#">View More</a></button>
            </div>

            <div class="post">
                <h3 style="color: grey;">Category:</h3>
                <img src="https://via.placeholder.com/250" alt="Post Image">
                <h1 style="color: blue;" >Post Title</h1>
                <h6 style="color: grey;">Post Date</h6>
                 <p>Dolorem cum, totam architecto delectus magnam dolores voluptatem sint praesentium molestiae corporis sapiente! Enim id pariatur facilis aliquam? Pariatur repellat qui Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut error non dolor ea quo nam quia natus, dolorem consectetur ducimus, cupiditate libero voluptatum aliquam quam debitis, explicabo quae minus tempora. </p>
                 <button class="btn btn-info"><a href="#">View More</a></button>
            </div>
            </div>
        </div>
    <br><br><br>

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
    <br><br><br>

    <!-- Footer Begins -->
    <?php include('includes/footer.php') ?>

    <!-- page wrapper ends -->
</div>

    <script src="js/script.js"></script>
    <script src="js/bootstrap.js"></script>

</body>
</html>