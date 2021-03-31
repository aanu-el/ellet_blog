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

    <title>Admin | Add Post</title>

     <!-- stylesheet -->
     <link rel="stylesheet" type="text/css" href="css/addpost.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">


    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

    <div class="page-wrapper">

    <!-- include sidebar -->
    <?php include('includes/sidebar.php'); ?>

    <?php
        include('includes/connect_db.php');


        if(isset($_POST['add'])){
            
            $category = mysqli_real_escape_string($conn, $_POST['category']);
            $title = mysqli_real_escape_string($conn, $_POST['title']);
            $body = mysqli_real_escape_string($conn, $_POST['body']);
            $textColor = mysqli_real_escape_string($conn, $_POST['text-color']);
            $image = mysqli_real_escape_string($conn, $_POST['image']);
            $author = mysqli_real_escape_string($conn, $_POST['author']);

            $user = $_SESSION['login'];
            $sql = "SELECT daily, motivational, life, relationship, success FROM quote_category";
            $query = mysqli_query($conn, $sql);
            $result = mysqli_fetch_assoc($query);
            $fetch1 = $result['daily'];
            $fetch2 = $result['motivational'];
            $fetch3 = $result['success'];
            $fetch4 = $result['relationship'];
            $fetch5 = $result['life'];
            
            if($fetch1 == $category){

                $query2 = mysqli_query($conn, "UPDATE daily SET title = $title, body = $body, text_color = $textColor, image = $image, author = $author");

                echo ' <script>
                        alert("Post Updated Successfully");
                    </script> ';

            } else {

                echo ' <script> alert ("Post update failed"); </script>' ;
            }

            }
            
    ?>

    <!-- main page begins -->
    <div class="main-page">
        <h2>Add Post</h2>
        
        <div class="form">
        <form action="addpost.php" method="post">
        
            <label for="category"><b>Post Category:</b> </label>
                <select name="category" id="category">
                    <option value="daily">Daily</option>
                    <option value="motivational">Motivational</option>
                    <option value="sucess">Sucess</option>
                    <option value="relationship">Relationship</option>
                    <option value="life">Life</option>
                </select>
             <br><br>

            <label for="title"><b>Title:</b> </label>
                <input type="text" name="title" id="title">
             <br><br>

            <label for="body"><b>Body:</b> </label>
                <input type="text" name="body" id="body">
            <br><br>

            <label for="text-color"><b>Text Color:</b> </label>
                <input type="text" name="text-color" id="text-color">
            <br><br>

            <label for="image"><b>Image:</b> </label>
               <input type="file" name="image" id="image">
            </label> <br><br>

            <label for="author"><b>Author:</b> </label>
               <input type="text" name="author" id="author">
           <br><br>

            <input type="submit" name="add" id="log" value="Add Post">
        </form>
        </div>

    </div>



    </div>

    <!-- Javascripts/ jQuery -->
    <script src="js/bootstrap.js"></script>
</body>
</html>