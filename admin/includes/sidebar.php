<html>
<head>

    <style>
            /* sidebar styling */
  .sidebar {
      position: fixed;
      width: 300px;
      height: 100%;
      background: #23463f;

      z-index: 1;
      top: 0;
      left: 0;
      overflow-x: hidden;
      padding-top: 20px;
  }

  .dashboard-header h2 {
      color: white;
      text-align: center;
      font-family: sans-serif;
  }

 .center {
     display: block;
     margin-left: auto;
     margin-right: auto;
 }

  .sidebar-links ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
  }

  .sidebar-links li a {
      display: block;
      padding: 16px 18px;
      text-decoration: none;
      color: white;
      font-size: 1.1em;

      border-bottom: 1px dotted black;
  }

  .sidebar-links li a:hover {
      background-color: black;
      color: white;
      text-decoration: none;
      transition: all 350ms ease;
  }

  ul li ul li{
    display: none;
}

ul li:hover ul li{
    display: block;
    background-color: rgb(39, 80, 39);
     
}

    </style>
</head>

<body>
    
<div class="sidebar">

<div class="user-info-wrapper">

    <div class="dashboard-header">
        <h2><b>Admin</b></h2>
    </div>

    <br>
    <div class="user-info">
        <img src="imgs/dp.jpg" class="rounded-circle center" alt="admin pics" width="100" height="100">
    </div>

    <div class="username">
        <div class="username" style="color: white; text-align:center; "><em>Elle</em></div>
    </div>
</div> <br>

<div class="sidebar-links">
    <ul>
        <li><a href="dashboard.php"><i class="fa fa-bars w3-large" aria-hidden="true"></i> &nbsp; Dashboard</a></li>
        <li><a href="http://www.elletblog.com/ellet_blog/"><i class="fa fa-home w3-large"></i> &nbsp; View Website</a></li>

        <li><a href="#"><i class="fa fa-book w3-large" aria-hidden="true"></i>  &nbsp; Daily</a>
            <ul>
                <li><a href="addpost.php"><i class="fa fa-plus-square w3-large" aria-hidden="true"></i>  &nbsp; Add Post</a>
                <li><a href="managedaily.php"><i class="fa fa-pencil-square w3-large" aria-hidden="true"></i>  &nbsp; Manage Post</a>
            </ul>
        </li>

        <li><a href="#"><i class="fa fa-book w3-large" aria-hidden="true"></i>  &nbsp; Motivational</a>
            <ul>
                <li><a href="addpost.php"><i class="fa fa-plus-square w3-large" aria-hidden="true"></i>  &nbsp; Add Post</a>
                <li><a href="managemotivational.php"><i class="fa fa-pencil-square w3-large" aria-hidden="true"></i>  &nbsp; Manage Post</a>
            </ul>
        </li>

        <li><a href="#"><i class="fa fa-book w3-large" aria-hidden="true"></i>  &nbsp; Success</a>
            <ul>
                <li><a href="addpost.php"><i class="fa fa-plus-square w3-large" aria-hidden="true"></i>  &nbsp; Add Post</a>
                <li><a href="managesuccess.php"><i class="fa fa-pencil-square w3-large" aria-hidden="true"></i>  &nbsp; Manage Post</a>
            </ul>
        </li>

        <li><a href="#"><i class="fa fa-book w3-large" aria-hidden="true"></i>  &nbsp; Relationship</a>
            <ul>
                <li><a href="addpost.php"><i class="fa fa-plus-square w3-large" aria-hidden="true"></i>  &nbsp; Add Post</a>
                <li><a href="managerelationship.php"><i class="fa fa-pencil-square w3-large" aria-hidden="true"></i>  &nbsp; Manage Post</a>
            </ul>
        </li>

        <li><a href="#"><i class="fa fa-book w3-large" aria-hidden="true"></i>  &nbsp; Life</a>
            <ul>
                <li><a href="addpost.php"><i class="fa fa-plus-square w3-large" aria-hidden="true"></i>  &nbsp; Add Post</a>
                <li><a href="managelife.php"><i class="fa fa-pencil-square w3-large" aria-hidden="true"></i>  &nbsp; Manage Post</a>
            </ul>
        </li>

        <li><a href="changepw.php"><i class="fa fa-key w3-large" aria-hidden="true"></i>  &nbsp; Change Password</a></li>
        <li><a href="logout.php"><i class="fa fa-sign-out w3-large" aria-hidden="true"></i>  &nbsp; Sign Out</a></li>
    </ul>
</div>
</div>

</body>
</html>