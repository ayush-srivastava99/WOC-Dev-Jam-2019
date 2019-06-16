<?php

session_start();
header('localhost:hom.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'bookinginfo');

$boarding = $_POST['boarding'];
$destination = $_POST['destination'];
$train=$_POST['train'];
$nob=$_POST['no'];
$date=$_POST['date'];
$type=$_POST['type'];


    $reg=" insert into info(boarding , destination,train,no,date,type) values ('$boarding' , '$destination','$train','$nob','$date','$type')";
    mysqli_query($con, $reg);
    $_SESSION['boarding']=$boarding;
    $_SESSION['destination']=$destination;
    $_SESSION['train']=$train;
    $_SESSION['date']=$date;
    $_SESSION['no']=$nob;
    $_SESSION['type']=$type;
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
    text-align: center;
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
h1{
    font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    text-align: center;
    color:rgb(68, 65, 65);
}
td{
    font-size: 25px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    padding:10px;
    text-align:left;
}
        </style>
        </head>
        <body style="background-color:rgb(231, 231, 206);">
            <ul>
                    <li><a href="hom.php">Bookings</a></li>
                    <li><a href="bedding.php">Beddings</a></li>
                    <li><a href="exelphp">Exclusive</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="login.php">Logout</a></li>
            </ul>
            <br>
            <br>
            <br>
            <h1>Review you booking</h1>
            <table style="margin-left:400px;">
                <tr>
                    <th style="width:200px;padding:10px;"></th>
                    <th style="width:200px;padding:10px;"></th>
                </tr>
                <tr>
            <td><p style="text-align:left;">Boarding Station:</p></td><td><p><?php echo $_SESSION['boarding']; ?></p></td>
                </tr>
                <tr>
            <td><p style="text-align:left;">Destination Station:</p></td><td><p><?php echo $_SESSION['destination']; ?></p></td>
                </tr>
                <tr>
            <td><p style="text-align:left;">Date of journey:</p></td><td><p><?php echo $_SESSION['date']; ?></p></td>
                </tr>
                <tr>
                    <td><p style="text-align:left;">Train no.:</p></td><td><p><?php echo $_SESSION['train']; ?></p></td>
                </tr>
                <tr>
            <td><p style="text-align:left;">Type of blanket:</p></td><td><p><?php echo $_SESSION['type']; ?></p></td>
                </tr>
                <tr>
            <td><p style="text-align:left;">No. of blanket:</p></td><td><p><?php echo $_SESSION['no']; ?></p></td>
                </tr>
                <tr>
                    <td><p style="text-align:left;">Status:</p></td><td><p>Available</p></td>
                </tr>
                <tr>
                    <td>Reference no.:</td>
                    <td>
                            <button onclick="this.innerHTML=Math.floor((Math.random() * 1000000000) + 1)">Generate</button>
                    </td>
                </tr>
            </table>
            <br>
            <br>
            <button type="button" style="margin-left:650px;padding:10px;border-radius:20px;background-color:forestgreen;width:250px;border:1px black solid;" onclick="document.getElementById('demo').innerHTML = 'You booking has been confirmed.Payment link will be activated within 12 hours.Have a safe and happy journey!!'">Confirm</button>
            <br><br>
            <p id="demo" style="text-align:center;font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">Not yet booked</p>            
            <br><br><br>
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

