<!DOCTYPE html>
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
                <li><a href="home.php">Home</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="bedding.php">Beddings</a></li>
                <li><a href="exc.php">Exclusive</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
            <div style="background-image: url(pp.jpg);background-size: 100%;width: 100%;height: 700px;border: solid 1px;margin-top: 50px;position: static;">
            <div style="background-image: url(pat4.jpg);background-size: 100%;position: relative;top: 10px;left: 15px;width: 45%;height: 400px;border: solid black 1px;border-radius: 10px;">
                <br>
                <br>
                <label style="font-size:30px;font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;font-weight: 400;padding-left: 100px;">Login Here</label>

                <br>
                <br>
            <form action="validation.php" method="POST">
                <label style="font-size:25px;padding-left:50px;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">Username</label>
                <label style="font-size:25px;padding-left: 220px;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">Password</label>
                <br>
                <input type="text" name="user" placeholder="Username" style="width:200px;padding-left: 50px;margin-left: 25px;padding: 5px;border-radius: 25px;border:1px solid black;">
                <input type="password" name="password" placeholder="password" style="width:200px;padding-left: 50px;margin-left: 100px;padding: 5px;border-radius: 25px;border:1px solid black;">
                <br>
                <br>
                <button type="submit" style="margin-left:25px;width: 200px;padding: 10px;border-radius: 25px;background-color: blue;font-weight: 500;border:1px black solid;">Login</button>
            </form>
            <br>
            <label style="font-size:30px;font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;font-weight: 400;padding-left: 30px;">New User?</label>
            <form action="registration.php" method="POST">
                    <label style="font-size:25px;padding-left:50px;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">Username</label>
                    <label style="font-size:25px;padding-left: 220px;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">Password</label>
                    <br>
                    <input type="text" name="user" placeholder="Username" style="width:200px;padding-left: 50px;margin-left: 25px;padding: 5px;border-radius: 25px;border:1px solid black;">
                    <input type="password" name="password" placeholder="password" style="width:200px;padding-left: 50px;margin-left: 100px;padding: 5px;border-radius: 25px;border:1px solid black;">
                    <br>
                    <br>
                    <button type="submit" style="margin-left:25px;width: 200px;padding: 10px;border-radius: 25px;background-color: blue;font-weight: 500;border:1px black solid;">Register</button>
                </form>
            </form>
            </div>
            <div style="position:absolute;top: 60px;right: 20px;width: 50%;height: 400px;">
            <img src="tbed.jpg" style="width:100%;height:400px;border-radius: 15px;" alt="person in compartment">
            </div>
            <h1 style="text-align: center;">Why become a member?</h1>
            <p style="color:crimson;text-align:center;font-size:20px;font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">There are many advantages of becoming a member.The facility of bedding is available in all major cities of India.The facility helps the passenger to reduce their
                unnecessary luggage when already they are carrying much along with them.We also provide beeding which are quite good in quality.They can be a good choice when passenger 
                are travelling in long journey .If AC coach passengers are not satisfied with the bedding provided by Railways,they can also book their bedding at very 
                afordable prices.
            </p>
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