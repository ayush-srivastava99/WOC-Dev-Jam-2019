<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Bedding-Indian Rail</title>
        <style>
            
        ul.a{
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

        ul.b {
            list-style-type: circle;
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
label{
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-size: 25px;
    color:rgb(32, 30, 32);
    margin-left:20px;

}
h1{
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    text-align:center;
    color:rgb(63, 63, 70);
}
        </style>
        </head>
        <body style="background-image:url(patt3.png);">
            <ul class="a">
                <li><a href="hom.php">Bookings</a></li>
                <li><a href="beddingl.php">Beddings</a></li>
                <li><a href="exel.php">Exclusive</a></li>
                <li><a href="aboutl.php">About Us</a></li>
                <li><a href="contactl.php">Contact Us</a></li>
                <li><a href="login.php">Logout</a></li>
            </ul>
            <br><br>
            <br>
            <h1 style="text-align:left;margin-left:150px;">Welcome <?php echo $_SESSION['username'];?></h1>
            <div style="width: 100%;height: 800px;margin-top: 50px;position: static;">
                <div style="width:45%;position: relative;top:10px;left:10px;height:750px;background-image: url(pat3.jpg);border-radius: 20px;">
                    <br>
                    <br>
                    <h1>Book Here</h1>
                    <form action="booking.php" method="POST">
                        <label>Boarding Station</label>
                        <br>
                        <br>
                        <input list="data_id" name="boarding" style="padding:5px;border-radius:25px;width:200px;border:1px solid black;" placeholder="Boarding" required>
                        <datalist id="data_id">
                        <option>Agra</option>
                        <option>Ahmedabad</option>
                        <option>Allahabad</option>
                        <option>Amritsar</option>
                        <option>Agartala</option>
                        <option>Bhilwara</option>
                        <option>Bangalore</option>
                        <option>Bhopal</option>
                        <option>Chandigarh</option>
                        <option>Chennai</option>
                        <option>Delhi</option>
                        <option>Dhanbad</option>
                        <option>Gandhinagar</option>
                        <option>Ghaziabad</option>
                        <option>haridwar</option>
                        <option>Guwahati</option>
                        <option>Indore</option>
                        <option>Jaipur</option>
                        <option>Kanpur</option>
                        <option>Kolkata</option>
                        <option>Lucknow</option>
                        <option>Meerut city</option>
                        <option>Muzzafarnagar</option>
                        <option>Nasik</option>
                        <option>Patna</option>
                        <option>Ranchi</option>
                        <option>Sultanpur</option>
                        <option>Surat</option>
                        <option>Udaipur</option>
                        </datalist>
                        <br><br>
                        <label>Destination Station</label>
                        <br><br>
                        <input list="data_idd" required name="destination" style="padding:5px;border-radius:25px;width:200px;border:1px solid black;" placeholder="Destination">
                        <datalist id="data_idd">
                        <option>Agra</option>
                        <option>Ahmedabad</option>
                        <option>Allahabad</option>
                        <option>Amritsar</option>
                        <option>Agartala</option>
                        <option>Bhilwara</option>
                        <option>Bangalore</option>
                        <option>Bhopal</option>
                        <option>Chandigarh</option>
                        <option>Chennai</option>
                        <option>Delhi</option>
                        <option>Dhanbad</option>
                        <option>Gandhinagar</option>
                        <option>Ghaziabad</option>
                        <option>haridwar</option>
                        <option>Guwahati</option>
                        <option>Indore</option>
                        <option>Jaipur</option>
                        <option>Kanpur</option>
                        <option>Kolkata</option>
                        <option>Lucknow</option>
                        <option>Meerut city</option>
                        <option>Muzzafarnagar</option>
                        <option>Nasik</option>
                        <option>Patna</option>
                        <option>Ranchi</option>
                        <option>Sultanpur</option>
                        <option>Surat</option>
                        <option>Udaipur</option>
                        </datalist>
                        <br><br>
                        <label>Enter train number</label>
                        <br><br>
                        <input type="number" required name="train" placeholder="Train no." style="padding:5px;border-radius:25px;width:200px;border:1px solid black;">
                        <br><br>
                        <label>Type of bedding</label>
                        <br><br>
                        <input list="data_iddd" required name="type" style="padding:5px;border-radius:25px;width:200px;border:1px solid black;" placeholder="Type">
                        <datalist id="data_iddd">
                        <option>Economy(2B+1P Rs.40)</option>
                        <option>A-Class(2B+2P Rs.70)</option>
                        <option>EconomyW(2B+1p Rs.70)</option>
                        <option>A-ClassW(2B+2P Rs.90)</option>
                        </datalist>
                        <br><br>
                        <label>No. of Bedding</label>
                        <br><br>
                        <input type="number" required name="no" placeholder="No." style="padding:5px;border-radius:25px;width:200px;border:1px solid black;">
                        <br><br>
                        <label>Date of jouney</label>
                        <br><br>
                        <input type="date" required name="date" style="padding:5px;border-radius:25px;width:200px;border:1px solid black;" placeholder="Date">
                        <button type="submit">Check Availability</button>
                    </form>
            </div>
                <div style="width:45%;position: absolute;top:60px;right:20px;height:750px;">
                    <img src="book.png" style="width:600px;height:600px;margin-left: 50px;">
                </div>
                <br>
                </div>
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
                                    <td><a href="hom.php" >Manage your ID</a></td>
                                    <td><a href="news.html" >Newsroom</a></td>
                                </tr>
                                <tr>
                                    <td><a href="info.html" >Important Information</a></td>
                                    <td><a href="adverl.php" >Advertise with us</a></td>
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