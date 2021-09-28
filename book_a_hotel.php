<?php 

include 'dbconnection.php'; 
session_start();

    if (isset($_SESSION['Id'])) {

      $id = $_SESSION['Id'];

  if(isset($_POST['hsubmit'])){
      $hotel=$_POST['hotel'];
      $location=$_POST['location'];
      $rating=$_POST['rating'];
      $hbudget=$_POST['hbudget'];
      $guest=$_POST['guest'];
      $checkin=$_POST['checkin'];
      $checkout=$_POST['checkout'];
      $payby=$_POST['payby'];


      $query="INSERT INTO hotel(hotel,location,rating,hbudget,guest,checkin,checkout,payby,Id)VALUES('$hotel','$location','$rating','$hbudget','$guest','$checkin','$checkout','$payby',' $id')";

       $res = $conn->query($query);
               
             if($res){  
                
                        
            }
            else{
                header("Location: book_a_hotel.php?msg=Error".mysqli_error($conn)); 
                
            }

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
     

      <table class="searchtable" style="width: 100%">
        <tr>
         <td class="td1">
        <div class= "sbox">
          <input type="text" class="sbx" name= "location" placeholder="Hotel or Location">
          <a class = "srchbtn" href = "#">
          <i class="fa fa-search icon"></i>
         </div>
         </td>

      <form method="post" action="book_a_hotel.php">
        <td>
             
                  <select name="hotel" class="adult" id="ad">
                    <option value="Hotel name">Hotel name</option>
                    <option value="Sea Horizon">Sea Horizon</option>
                    <option value="Grand Ray">Grand Ray</option>
                    <option value="Travelodge">Travelodge</option>
                    <option value="Sunset Lodge">Sunset Lodge</option>
                    <option value="Hotel Moonlite">Hotel Moonlite</option>
                    <option value="Elite Peak">Elite Peak</option>
                  </select>
              

             </td>


         <td class="td2">
       
                 <label for="date"></label>
                 <p>Check-in</p>
                 <input class="date1" type="date" value="Check-in" name="checkin" id="time_date" placeholder="Check in">
              
             </td>
             <td class="td3">
               
                 <label for="date"></label>
                 <p>Check-out</p>
                 <input class="date2" type="date" name="checkout" value="Check-out"  id="time_date" placeholder="Check out">
              
             </td>
             <td>
             
                  <select name="guest" class="adult" id="ad" name="">
                    <option value="Guests">Guests</option>
                    <option value="Guest 1">Guest 1</option>
                    <option value="Guest 2">Guest 2</option>
                    <option value="Guest 3">Guest 3</option>
                    <option value="Guest 4">Guest 4</option>
                    <option value="Guest 5">Guest 5</option>
                    <option value="Guest 6">Guest 6</option>
                  </select>
              

             </td>

        </tr>
      </table>
      <table class="searchtable1" style="width: 60%"  align="center">
         <td>
         
                  <select name="rating" class="stars" id="rating" onchange="showschedual(this.value)">
                    <option value="star">Stars</option>
                    <option value="star1">1</option>
                    <option value="star2">2</option>
                    <option value="star3">3</option>
                    <option value="star4">4</option>
                    <option value="star5">5</option>
                  </select>
                 
             
             </td>
             <td>
            
                  <select name="hbudget" class="budget" id="bud">
                    <option value="bdg">Your Budget</option>
                    <option value="10000">$50 (LKR 10,000)</option>
                    <option value="20000">$100 (LKR 20,000)</option>
                    <option value="30000">$200 (LKR 30,000)</option>
                    <option value="40000">$300 (LKR 40,000)</option>
                    <option value="100000">$500 (LKR 100,000)</option>
                  </select>

            
             </td>
             <td>
                  <select name="payby" class="payment" id="pay">
                    <option value="Payment Method">Payment Method</option>
                    <option value="Cash">Cash</option>
                    <option value="Credit Card">Credit Card</option>
                  </select>
             </td>
             <td>
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

             </td>
              <td><input type="submit" name="hsubmit" value="submit" class="payment"></td>
        </table>

      </form>

        <div class="cards">
      <div class="image">
        <img src="img/hotel1.jpeg">
      </div>
    <div class="title">
          <a href=""><i class="fab fa-whatsapp fa-customize"></i></a>
          <a href=""><i class="fab fa-facebook fa-customize"></i></a>
          <a href=""><i class="fab fa-twitter fa-customize"></i></a>
          <a href=""><i class="fab fa-youtube fa-customize"></i></a>
    </div>
    <div class="des">
      <h2>Sea Horizon</h2>
      <h3><i class="fas fa-map-marker-alt icon1"></i>Marine drive,Colombo 6</h3>
          <span class="fas fa-star star_rating"></span>
          <span class="fas fa-star star_rating"></span>
          <span class="fas fa-star star_rating"></span>
          <span class="fas fa-star star_rating"></span>
          <span class="far fa-star star_rating"></span>
          <p><i class="fas fa-swimmer icon1"></i>Indoor and Outdoor Pool</p>
      
    </div>
    </div>
<div class="cards">
      <div class="image">
        <img src="img/hotel2.jpeg">
      </div>
    <div class="title">
          <a href=""><i class="fab fa-whatsapp fa-customize"></i></a>
          <a href=""><i class="fab fa-facebook fa-customize"></i></a>
          <a href=""><i class="fab fa-twitter fa-customize"></i></a>
          <a href=""><i class="fab fa-youtube fa-customize"></i></a>
    </div>
    <div class="des">
      <h2>Grand Ray</h2>
      <h3><i class="fas fa-map-marker-alt icon1"></i>Rayhouse street,Kandy</h3>
          <span class="fas fa-star star_rating"></span>
          <span class="fas fa-star star_rating"></span>
          <span class="fas fa-star star_rating"></span>
          <span class="far fa-star star_rating"></span>
          <span class="far fa-star star_rating"></span>
          <p><i class="fas fa-swimmer icon1"></i>Outdoor Pool</p>
      
    </div>
    </div>
<div class="cards">
      <div class="image">
        <img src="img/hotel3.jpeg">
      </div>
    <div class="title">
          <a href=""><i class="fab fa-whatsapp fa-customize"></i></a>
          <a href=""><i class="fab fa-facebook fa-customize"></i></a>
          <a href=""><i class="fab fa-twitter fa-customize"></i></a>
          <a href=""><i class="fab fa-youtube fa-customize"></i></a>
    </div>
    <div class="des">
      <h2>Travelodge</h2>
      <h3><i class="fas fa-map-marker-alt icon1"></i>New Town,Anuradhapura</h3>
          <span class="fas fa-star star_rating"></span>
          <span class="fas fa-star star_rating"></span>
          <span class="fas fa-star star_rating"></span>
          <span class="fas fa-star star_rating"></span>
          <span class="fas fa-star-half-alt star_rating"></span>
          <p><i class="fas fa-parking icon1"></i></i>Free Parking</p>
      
    </div>
    </div>

    <div class="cards">
      <div class="image">
       <img src="img/hotel4.jpeg" >
      </div>
    <div class="title">
          <a href=""><i class="fab fa-whatsapp fa-customize"></i></a>
          <a href=""><i class="fab fa-facebook fa-customize"></i></a>
          <a href=""><i class="fab fa-twitter fa-customize"></i></a>
          <a href=""><i class="fab fa-youtube fa-customize"></i></a>

    </div>
    <div class="des">
      <h2>Sunset Lodge</h2>
      <h3><i class="fas fa-map-marker-alt icon1"></i>Stanley Road,Jaffna</h3>
          <span class="fas fa-star star_rating"></span>
          <span class="fas fa-star star_rating"></span>
          <span class="fas fa-star star_rating"></span>
          <span class="fas fa-star-half-alt star_rating"></span>
          <span class="far fa-star star_rating"></span>
          <p><i class="fas fa-parking icon1"></i></i>Free Parking</p>
      
      
    </div>
    </div>
<div class="cards">
      <div class="image">
        <img src="img/hotel5.jpeg">
      </div>
    <div class="title">
          <a href=""><i class="fab fa-whatsapp fa-customize"></i></a>
          <a href=""><i class="fab fa-facebook fa-customize"></i></a>
          <a href=""><i class="fab fa-twitter fa-customize"></i></a>
          <a href=""><i class="fab fa-youtube fa-customize"></i></a>
    </div>
    <div class="des">
      <h2>Hotel Moonlite</h2>
      <h3><i class="fas fa-map-marker-alt icon1"></i>Beach Side,Galle</h3>
          <span class="fas fa-star star_rating"></span>
          <span class="fas fa-star star_rating"></span>
          <span class="fas fa-star star_rating"></span>
          <span class="fas fa-star star_rating"></span>
          <span class="far fa-star star_rating"></span>
          <p><i class="fas fa-swimmer icon1"></i> Outdoor Pool</p>
      
    </div>
    </div>
<div class="cards">
      <div class="image">
        <img src="img/hotel6.jpeg">
      </div>
    <div class="title">
          <a href=""><i class="fab fa-whatsapp fa-customize"></i></a>
          <a href=""><i class="fab fa-facebook fa-customize"></i></a>
          <a href=""><i class="fab fa-twitter fa-customize"></i></a>
          <a href=""><i class="fab fa-youtube fa-customize"></i></a>
    </div>
    <div class="des">
      <h2>Elite Peak</h2>
      <h3><i class="fas fa-map-marker-alt icon1"></i>Clarence Street,Rathnapura</h3>
          <span class="fas fa-star star_rating"></span>
          <span class="fas fa-star star_rating"></span>
          <span class="fas fa-star star_rating"></span>
          <span class="far fa-star star_rating"></span>
          <span class="far fa-star star_rating"></span>
          <p><i class="fas fa-swimmer icon1"></i>Outdoor Pool</p>
      
    </div>
    </div>

   <?php require_once('footer.php'); ?>
  </div><!--wrapper-->
  <script src="js/main.js"></script>
</body>
</html>