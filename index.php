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
                <div class="header">
                    <div class="logo">
                        <a href="index.php"><img src="imgs/elletblog_logo.png" alt="website logo" width="200"></a>
                    </div>
                    <div class="menu" id="myLinks">
                            <a href="index.php"><em>HOME</em></a>
                            <a href="#"><em>ABOUT </em></a>
                            <a href="#"><em> QUOTES </em></a>
                            <a href="#"><em> CONTACT </em></a>
                            <a href="#"><em><?php date_default_timezone_set("Africa/Lagos"); echo date("Y/m/d h:i:sa"); ?></em></a>
                    </div>

                    <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
                </div>

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
                <li><a href="#">Daily</a></li><hr>
                <li><a href="#">Motivational</a></li> <hr>
                <li><a href="#">Success</a></li> <hr>
                <li><a href="#">Marriage</a></li> <hr>
                <li><a href="#">Life</a></li> <hr>
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
            <h3 class="newsletter_header">
                <b>Sign Up for our Weekly Quotes Digest:</b>
            </h3>
            <div class="newsletter_form">
                <form action="index.php" method="post">
                    <label for="name">
                        <input type="text" placeholder="Your name:">
                    </label><br>
                    <label for="emal">
                        <input type="email" placeholder="Email Address:*" required>
                    </label><br>
                    <button class="btn btn-primary submit">Sign up</button>
                </form>
            </div>
        </div>
    </div>
    <br><br><br>

    <!-- Footer Begins -->
    <div>
        <div class="footer">
            <div class="logo">
                <a href="index.php"><img src="imgs/elletblog_logo.png" alt="website logo" width="200"></a>
            </div>
            <div class="address">
                <span style="color: white"><strong>Phone:</strong> + 1 (234) 567 8901</span><br>
                <span style="color: white"><strong>Email:</strong> support@yoursite.com </span><br>
                <span style="color: white"><strong>Fax:</strong> + 1 (234) 567 8901</span>

            </div>
            <div class="copyright">
                <span style="color: white">Copyright © 2020, ElletBlog. All rights reserved.</span> 
            </div>
        </div>
    </div>

    <!-- page wrapper ends -->
</div>

    <script src="js/script.js"></script>
    <script src="js/bootstrap.js"></script>

</body>
</html>