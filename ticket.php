<?php

session_start();
?>
<html>
    <head>
        <title>Bedding-Login</title>
        <style>
        ul{
            list-style-type:none;
            margin:0;
            padding:0;
            width:100%;
            height:45px;
            background-color: rgb(76, 116, 228);
            position: fixed;
            top:0;
            left:0;
            z-index: 1;
        }
        li{
            text-align:center;
            display: inline;
        }
        li a{
            display: inline-block;
            background-color: rgb(76, 116, 228);
            color: white;
            width: 150px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            height: 32px;
            text-decoration: none;
            padding-top:10px; 
        }
        li:first-child{
            padding-left: 250px;
        }
        li a:hover:not(.active){
            background-color:rgb(76, 116, 228);
            color: rgb(109, 105, 105);
        }
        .container{
            text-align: center;
            position: relative;
            color:white;
            top: 50px;

        }
        .cen{
            position: absolute;
            text-align: center;
            top:100px;
            font-size: 50px;
            left: 0;
            font-weight: 500;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        .text{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        div.absolute{
            position:absolute;
            top: 20px;
            right:20px;
        }
        th{
    text-align: left;
}
td a{
    text-decoration: none;
    color: rgb(138, 136, 133);
    font-size:15px;
}
td:first-child{
    padding-left:200px;
}
td a:hover:not(.active){
    text-decoration: underline;
}
th{
    font-size: 15px;
}
        </style>
        </head>
        <body style="background-color:rgb(231, 231, 206);">
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="service.html">Services</a></li>
                <li><a href="bedding.html">Beddings</a></li>
                <li><a href="exc.html">Exclusive</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="login.html">Login</a></li>
            </ul>
            <h1>Your booking has been confirmed</h1>
            <p><?php echo $_SESSION['boarding']; ?></p>
            
</body>
</html>