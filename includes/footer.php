<html>
    <head>
        <style>
            .footer {
                width: 100%;
                padding: 20px;
                background: #262626;

                display: grid;
                grid-template-rows: repeat(2, minmax(100px, auto));
            }

            @media only screen and (min-width: 768px){
                .footer {
                padding: 20px;
                background: #262626;
        
                display: flex;
                flex: 1 1 0;
                justify-content: space-around;
            }
            }

        </style>
    </head>
    <body>
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
    </body>
</html>
