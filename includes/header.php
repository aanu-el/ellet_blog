<html>
    <head>
        <style>
            /* style header begins */
.header {
    padding: 10px;
    width: 100%;
    background: #262626;

    position: relative;
    overflow: hidden;
}

.header img{
    height: 40px;
}

.menu {
    display: none;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    
}
li a {
    display: block;
    padding: 14px 16px;
    border-radius: 4px;
    text-decoration: none;

    color: white;
    font-size: 1.1em;
}

li a:hover {
        background-color: steelblue;
        color: white;
        text-decoration: none;
        transition: all 350ms ease;
}

ul li ul li{
    display: none;
}

ul li:hover ul li{
    display: block;
     
}


/* style the hambuger icon */
.header a.icon {
    display: block;
    position: absolute;
    right: 0;
    top: 0;

    color: white;
}


@media only screen and (min-width: 768px){

    .logo {
        width: 30%;
    }
    
    .header img{
        height: 70px;
    }

    .menu {
        display: inline-block;
        
        width: 50%;
    }

    ul li ul li{
        display: none;
    }

    ul li:hover ul li{
    display: block;
     
}

    .header a.icon{
        display: none;
    }
}


        </style>
    </head>

    <body>
          
    <div class="header">
                    <div class="logo">
                        <a href="index.php"><img src="imgs/elletblog_logo.png" alt="website logo" width="200"></a>
                    </div>
                    <div class="menu" id="myLinks">
                        <ul>
                            <li><a href="index.php"><em>HOME</em></a></li>
                            <li><a href="about.php"><em>ABOUT </em></a></li>
                            <li><a href="#"><em> QUOTES </em></a>
                                <ul>
                                    <li><a href="daily.php">DAILY</a></li>
                                    <li><a href="motivational.php">MOTIVATIONAL</a></li>
                                    <li><a href="success.php">SUCCESS</a></li>
                                    <li><a href="relationship.php">RELATIONSHIP</a></li>
                                    <li><a href="life.php">LIFE</a></li>
                                </ul>
                            </li>
                        </ul>   
                    </div>

                    <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
    </div>
    </body>
</html>

