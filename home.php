<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url(https://www.octovisionmedia.co.uk/wp-content/uploads/2018/05/DJI_0004.MOV.00_00_09_17.Still001.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            font-size: 40px;
        }

        .container {
            text-align: center;
            position: relative;
            margin-top: 50px;
        }

        .logo {
            width: 200px;
            height: 200px;
            background-color: #3498db;
            border-radius: 50%;
            /* Changed from 200% to 50% */
            display: inline-block;
            margin-bottom: 20px;
            /* Adjusted margin */
            overflow: hidden;
            margin-top: 50px;
        }

        .logo img {
            width: 100%;
            height: auto;
        }

        .btn-container {
            text-align: center;
            margin-top: 20px;
        }

        .btn {
            padding: 10px 20px;
            background-color:transparent;
            color: #fff;
            text-decoration:none;
            border-radius: 5px;
            transition:background-color 0.3s ease;
            margin:5px;
            /* Adjusted margin */
            display: block;
            
        }

        .btn:hover {
            background-color: transparent
        }


    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/446029385_2702998216574276_4400708521643471768_n.png?stp=dst-png_s403x403&_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGWmKifYIefTYrQsJ0kwpU_jHTTMV5Ki3KMdNMxXkqLcmlK-eu_xq15LJcd2ywnkKyeASJ8lodqg4Z9B4P7L1Z9&_nc_ohc=S4-JsDQ28ygQ7kNvgHYSPaT&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_Q7cD1QEzcSUX8yTVt3jKk_6JcRFUPFQJbnrEPi3DriliTlHEQg&oe=6693EBE9"
                alt="Logo">
        </div>
        <div class="btn-container">
            <a href="about.php" class="btn">About</a>
            <a href="contact.php" class="btn">Contact</a>
            <a href="head.php" class="btn">Faculty</a>
            <a href="main.php" class="btn">Evaluate</a>
        </div>
        <div class="logout">
            <a href="logout.php"><button class="btn btn">Logout</button></a>
        </div>
    </div>
</body>

</html>