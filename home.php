<!DOCTYPE html>
<html>
    <head>
        <title>Bedding-Home</title>
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
.al{
    text-align: left;
}
        </style>
        </head>
        <body style="background-color:rgb(231, 231, 206);">
            <ul>
            <li><a href="home.php">Home</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="bedding.php">Beddings</a></li>
                <li><a href="exc.php">Exclusive</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
            </ul>
            <div class="container">
                <img src="tbed2.jpg" style="border-radius:5px;height: 500px;width: 100%;align-self: center;">
                <div class="cen">Get ready to enrich your rail journey with world class bedding available just at one click.</div>
            </div>
            <br>
            <br>
            <div style="width:100%;height:300px;border:rgb(163, 112, 211) 1px solid;position:relative;top:20px;background-color: rgb(128, 153, 235)">
                <h1 style="text-align:center;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;font-weight: 400">Not Booked ticket,yet?</h1>
                <h1 style="text-align:center;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;color: rgb(70, 62, 67);font-weight: 400">Here are some suggestions</h1>
                <a href="https://www.irctc.co.in"><img src="irctc.png" style="height: 100px;width: 100px;margin-left: 300px"></a>
                <a href="https://www.ixigo.com"><img src="ixigo.png" style="height: 100px;width: 100px;position: relative; left:300px;"></a>
                <a href="https://www.makemytrip.com"><img src="makemy.png" style="height: 100px;width: 100px;position: relative; left:600px;"></a>
            </div>
            <br>
            <br>
            <div style="width: 100%;height: 150px;background-color: rgb(70, 62, 67)">
                
    <table >
            <tr>
                <th style="width:240px;padding-left: 200px;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;font-weight: 500"></th>
                <th style="width:240px;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;font-weight: 500"></th>
                <th style="width:240px;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;font-weight: 500"></th>
                <th style="width:240px;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;font-weight: 500"></th>
            </tr>
            <tr>
                <td><a href="https://www.irctc.co.in" >IRCTC</a></td>
                <td><a href="pol.html" >Rail Policy</a></td>
                <td><a href="login.php" >Manage your ID</a></td>
                <td><a href="news.html" >Newsroom</a></td>
            </tr>
            <tr>
                <td><a href="info.html" >Important Information</a></td>
                <td><a href="adver.php" >Advertise with us</a></td>
                <td><a href="mob.html" >Mobile Zone</a></td>
                <td><a href="mem.html" >Membership</a></td>
            </tr>
        </table>
            <hr style="width:80%;text-align:center;">
            <p class="al">Copyrigt.All rights reserved</p>
            <p class="al">Designed and developed by Nocturnals</p>
            </div>

        </body>

</html>