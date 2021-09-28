<?php 

include 'dbconnection.php'; 
session_start();

  

  if(isset($_POST['vsubmit'])){
   
    if (isset($_SESSION['Id'])) {

      $id = $_SESSION['Id'];

      $location=$_POST['location'];
      $destination=$_POST['destination'];
      $purpose=$_POST['purpose'];
      $distance=$_POST['distance'];
      $rdate=$_POST['rdate'];
      $type=$_POST['type'];
      $vpay=$_POST['vpay'];


      $query="INSERT INTO vehicle(location,destination,purpose,distance,rdate,type,vpay,Id)VALUES('$location','$destination','$purpose','$distance','$rdate','$type','$vpay','$id')";

       $res = $conn->query($query);
               
             if($res){  
                echo "Added Successfull";
                        
            }
            else{
                header("Location: book_a_vehicle.php?msg=Error".mysqli_error($conn)); 
                
            }
      }else{
              header("Location:signin.php");
      }

  }

  

   
?>
<!DOCTYPE html>
<html>
<head>
  <title>Explore Tours</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/styles_mokshika.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <style>
    body{
      background-image:url("img/background123.jpeg");
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
  }
  </style>
  

</head>
<body>
  <div class="wrapper">
    <?php require_once('header.php'); ?>
    

     

      <form action="book_a_vehicle.php" method="post">
        <div class="page">
          <select class="location" id="yourlocation" name="location">
            <option value="location">Select Your location</option>
            <option value="ampara">Ampara</option>
            <option value="anuradhapura">Anuradhapura</option>
            <option value="badulla">Badulla</option>
            <option value="batticalo">Batticalo</option>
            <option value="colombo">Colombo</option>
            <option value="galle">Galle</option>
            <option value="gampaha">Gampaha</option>
            <option value="hambanthota">Hambanthota</option>
            <option value="jaffna">Jaffna</option>
            <option value="kaluthara">Kaluthara</option>
            <option value="kandy">Kandy</option>
            <option value="kegalle">Kegalle</option>
            <option value="kilinochchiya">Kilinochchiya</option>
            <option value="kurunegala">Kurunegala</option>
            <option value="mannar">Mannar</option>
            <option value="matale">Matale</option>
            <option value="matara">Matara</option>
            <option value="monaragala">Monaragala</option>
            <option value="mullaitivu">Mullaitivu</option>
            <option value="nuwaraeliya">Nuwara Eliya</option>
            <option value="polonnaruwa">Polonnaruwa</option>
            <option value="puttalama">Puttalama</option>
            <option value="ratnapura">Ratnapura</option>
            <option value="trincomalee">Trincomalee</option>
            <option value="vavuniya">vavuniya</option>
          </select><!--your locatin-->

          <select class="destination" id="places" name="destination">
            <option value="destination">Search A Destination</option>
            <option value="rathnapura">Rathnapura</option>
            <option value="anuradhapura">Anuradhapura</option>
            <option value="polonnaruwa">Pollonnaruwa</option>
            <option value="kandy">Kandy</option>
            <option value="ne">Nuwara Eliya</option>
            <option value="trincomalee">Trincomalee</option>
            <option value="colombo">Colombo</option>
            <option value="matara">Matara</option>
            <option value="galle">Galle</option>
            <option value="jaffna">Jaf</option>
          </select><!--destination-->
       
         

        <form action="book_a_vehicle.php" method="post">

          <table class="maintable" style="width:100%">

           <tr class="table1">
             <th><h2>Purpos Of Rental</h2></th>
             <th><h2>Distance(km)</h2></th>
             <th><h2>Date & Time</h2></th><!--headers-->
             
           </tr>

           <tr>
            <td>
            

           
            <input name="purpose" type="radio" value="Bussiness"><label>Bussiness</label><br><br>

            <input name="purpose" type="radio" value="Leisure" checked><label>Leisure</label>
            <br>
             </td>

             <td >
               <input type="number" name="distance" class="num" id="number_id" min="1" max="1000" step="0.5"><!--number botton-->
             </td>

             <td>
               
                 <label for="date"></label>
                 <input class="datetime_local" type="datetime-local" name="rdate" id="time_date"><!--timedate-->
             </td>
             <td>
                  <select class="vehicle" id="vehicles" name="type">
                    <option value="tov">Types Of Vehicles</option>
                    <option value="car">Car</option>
                    <option value="van">Van</option>
                    <option value="bus">Bus</option>
                    <option value="footbicycle">Footbicycle</option>
                    <option value="motorbicycle">Motorbicycle</option>
                    <option value="jeep">Jeep</option>
                    <option value="threewhl">Three Wheel</option>
                  </select><!--types of vehicals-->
             </td>
               <td>
            
                  <select name="vpay" class="budget" id="bud">
                    <option value="bdg">Your Budget</option>
                    <option value="10000">$50 (LKR 10,000)</option>
                    <option value="20000">$100 (LKR 20,000)</option>
                    <option value="30000">$200 (LKR 30,000)</option>
                    <option value="40000">$300 (LKR 40,000)</option>
                    <option value="50000">$500 (LKR 50000)</option>
                  </select>

            
             </td>
           </tr>
           <td>
             <input type="submit" name="vsubmit" value="Submit" class="payment" style="float: right;">
           </td>
          </table>
        </form>
         <div class="googlemap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7875180704477!2d79.86908241426771!3d6.915988720395943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2597449a1669f%3A0x631cdd64881e98ec!2sWard%20Pl%2C%20Colombo!5e0!3m2!1sen!2slk!4v1620589879234!5m2!1sen!2slk" width="400" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe><!--googlemap-->
      </div>


            <div class="slider" style="max-width:550px">
              <img class="mySlides" src="img/vehicleimg.jpeg" style="width:150%">
              <img class="mySlides" src="img/vehicle1.jpeg" style="width:150%">
              <img class="mySlides" src="img/vehicle2.jpeg" style="width:150%">
              <img class="mySlides" src="img/vehicle3.jpeg" style="width:150%">
              <img class="mySlides" src="img/vehicle4.jpeg" style="width:150%">
              <img class="mySlides" src="img/vehicle5.jpeg" style="width:150%">
              <img class="mySlides" src="img/vehicle6.jpeg" style="width:150%">
              <img class="mySlides" src="img/vehicle7.jpeg" style="width:150%">
            </div><!--imageslide-->

    <?php require_once('footer.php'); ?>
  </div><!--wrapper-->
  <script src="js/main.js"></script>
</body>
</html>