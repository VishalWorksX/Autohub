<?php
require_once('db.php');
$query="select * from koenigsegg";
$result = mysqli_query($con,$query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koenigsegg Agera RS</title>
    <link rel= "stylesheet"  href="c:\xampp\htdocs\data\bootstrap-4.3.1-dist\css\bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel= "stylesheet"  href="agera.css">
</head>
<body>
       
        
        <div class="video">
            <video autoplay loop muted src="agera.mp4"></video>
        </div>
        <div class="head-text">
            <h2>Koenigsegg Agera RS<h2>
        </div>

        <div class="head-para">
            <p>The Koenigsegg Agera RS is a Swedish-made masterpiece, designed to dominate the track.  Nicknamed "the ultimate track tool" by Koenigsegg themselves, it boasts lightweight features and cutting-edge technologies for unparalleled performance. Its 5.0-liter V8 engine cranks out a staggering 1,176 horsepower, enough to propel it towards record-breaking speeds.  But power isn't everything - the Agera RS also generates a massive 450 kg of downforce at 250 km/h, keeping it glued to the road during high-speed cornering.</p>
        </div>
       
        
    
    <div class="container">
    
    <div class="row mt-5">
    <div class="col">
   <table class = "table table-bordered text-center">
    <tr class="bg-dark text-white">
        <td>NAME</td>
        <td>FUEL TYPE</td>
        <td>POWER</td>
        <td>ENGINE</td>
        <td>POWER</td>
        <td>ACCELERATION</td>
        <td>TOP SPEED</td>
        <td>DRIVE TRAIN</td>
        <td>PRICE</td>
        <td>COLOR</td>
    </tr>
    <tr>
       <?php
       while($row = mysqli_fetch_assoc($result))
       {
        ?>
        <td><?php echo $row['Name'];?></td>
        <td><?php echo $row['Fuel type'];?></td>
        <td><?php echo $row['Power'];?></td>
        <td><?php echo $row['Engine'];?></td>
        <td><?php echo $row['Torque'];?></td>
        <td><?php echo $row['Acceleration'];?></td>
        <td><?php echo $row['Top Speed'];?></td>
        <td><?php echo $row['Drive train'];?></td>
        <td><?php echo $row['Price'];?></td>
        <td><?php echo $row['Color'];?></td>
       </tr>
       <?php
       }
       ?>
    
   </table>
 
    </div>
    </div>
    </div>
   
   <script src="agera.js"></script>
</body>
</html>
