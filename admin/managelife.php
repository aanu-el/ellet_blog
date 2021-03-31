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

    <style>
        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 15px;
            text-align: center;
        }
    </style>

</head>
<body>

    <div class="page-wrapper">

    <!-- include sidebar -->
   

    <!-- main page begins -->
    <div class="main-page">
        <h2><b>Category: Life </b></h2>
        <hr>

        <table style="width: 100%;">

        <tr>
           
            <th>title</th>
            <th>body</th>
            <th>text_color</th>
            <th>author</th>
            <th>action</th>
        </tr>

        <?php 
    
    include('includes/sidebar.php');
    include('includes/connect_db.php');

                    $sql = "SELECT * FROM life";
                    $query = mysqli_query($conn, $sql);
                    $num = mysqli_num_rows($query);
                    while($row = mysqli_fetch_array($query)){

                ?>
        <tr>
           
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['body']; ?></td>
            <td><?php echo $row['text_color']; ?></td>
        
            <td><?php echo $row['author']; ?></td>
            <td><button class="btn btn-danger">DELETE POST</button></td>
        </tr>

        <?php   }   ?>
        </table><br><br>

        <!-- add post button -->
        <a href="addpost.php" class="btn btn-info center" role="button">Add Post</a>

        <br><br>
        
        <!-- main page ends -->
    </div>



    </div>

    <!-- Javascripts/ jQuery -->
    <script src="js/bootstrap.js"></script>
</body>
</html>