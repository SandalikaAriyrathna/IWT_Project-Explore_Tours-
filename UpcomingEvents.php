<!DOCTYPE html>
<html>
<head>
  <title>Explore Tours</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/styles-prathibha.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Lora&family=Merriweather:wght@300&display=swap" rel="stylesheet">
  <style>
    body{
      background-image: url(img/beach1.jpg);
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
  </style>
</head>
<body>
  <div class="wrapper">
    
        <?php require_once('header.php'); ?>
    
        
      <div class="img-slider">
      <div class="slide active">
        <img src="img/Kandy.jpeg" alt="Esala perahera">
        <div class="info">
          <h2>Kandy Esala Perahera</h2>
         <p>The Kandy Esala Perahera also known as The Festival of the Tooth is a festival held in July and August in Kandy, Sri Lanka.<br> This historical procession is held annually to pay homage to the Sacred Tooth Relic of Buddha, which is housed at the Sri Dalada Maligawa in Kandy. </p>
        </div>
      </div>
      <div class="slide">
         <img src="img/wesak.jpg" alt="Vesak Festival">
        <div class="info">
          <h2>Vesak</h2>
          <p>Vesak, also known as Buddha Jayanti, Buddha Purnima and Buddha Day, is a holiday traditionally observed by Buddhists and some Hindus in South and Southeast Asia as well as Tibet and Mongolia.<br>The festival commemorates the birth, enlightenment, and death of Gautama Buddha in Theravada and Tibetan Buddhism. </p>
                    
        </div>
      </div>
      <div class="slide">
        <img src="img/diwali.jpg" alt="Diwali Festival">
        <div class="info">
          <h2>Diwali Festival</h2>
         <p>Diwali is a festival of lights and one of the major festivals celebrated by Hindus, Jains, Sikhs and some Buddhists, notably Newar Buddhists.<br>The festival usually lasts five days and is celebrated during the Hindu lunisolar month Kartika.</p>
        </div>
      </div>
      <div class="slide">
        <img src="img/eid.jpg" alt="Eid Festival">
        <div class="info">
          <h2>Eid Festival</h2>
         <p>Eid al-Fitr, also called the "Festival of Breaking the Fast" or Lesser Eid, or simply Eid, is a religious holiday celebrated by Muslims worldwide that marks the end of the month-long dawn-to-sunset fasting of Ramadan.</p>
        </div>
      </div>
      <div class="slide">
        <img src="img/X-mas.jpg" alt="Eid Festival">
        <div class="info">
          <h2>Christmas</h2>
         <p>Christmas is an annual festival commemorating the birth of Jesus Christ, observed primarily on December 25 as a religious and cultural celebration by billions of people around the world.</p>
        </div>
      </div>
      <div class="navigation">
        <div class="btn active"></div>
        <div class="btn"></div>
        <div class="btn"></div>
        <div class="btn"></div>
        <div class="btn"></div>
      </div>
    </div>
      

      </center>
       <script type="text/javascript">
    var slides = document.querySelectorAll('.slide');
    var btns = document.querySelectorAll('.btn');
    let currentSlide = 1;

    // Javascript for image slider manual navigation
    var manualNav = function(manual){
      slides.forEach((slide) => {
        slide.classList.remove('active');

        btns.forEach((btn) => {
          btn.classList.remove('active');
        });
      });

      slides[manual].classList.add('active');
      btns[manual].classList.add('active');
    }

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        manualNav(i);
        currentSlide = i;
      });
    });

    // Javascript for image slider autoplay navigation
    var repeat = function(activeClass){
      let active = document.getElementsByClassName('active');
      let i = 1;

      var repeater = () => {
        setTimeout(function(){
          [...active].forEach((activeSlide) => {
            activeSlide.classList.remove('active');
          });

        slides[i].classList.add('active');
        btns[i].classList.add('active');
        i++;

        if(slides.length == i){
          i = 0;
        }
        if(i >= slides.length){
          return;
        }
        repeater();
      }, 10000);
      }
      repeater();
    }
    repeat();
    </script>

    <div class="flip-box">
    <div class="flip-box-inner">
      <div class="flip-box-front">
        <h2 style="color:white;">31st Night</h2>
        <img src="img/31night.jpg" style="width:300px; height:200px;" >
      </div><!--flip-box-front-->
      <div class="flip-box-back">
        <h2>31st Night</h2>
        </br>
        <p class="p1">In the Gregorian calendar, New Year's Eve, the last day of the year, is on 31 December. In many countries, New Year's Eve is celebrated at evening parties, where many people dance, eat, drink, and watch or light fireworks.</p>
      </div><!--flip-box-back-->
    </div><!--flip-box-inner-->
  </div><!--flip-box-->

    <div class="flip-box">
    <div class="flip-box-inner">
      <div class="flip-box-front">
        <h2 style="color:white;">Esala Perahera</h2>
        <img src="img/esalaperahera.jpg" style="width:300px; height:200px;" >
      </div><!--flip-box-front-->
      <div class="flip-box-back">
        <h2>Esala Perahera</h2>
        </br>
        <p class="p1">The Kandy Esala Perahera also known as The Festival of the Tooth is a festival held in July and August in Kandy, Sri Lanka. This historical procession is held annually to pay homage to the Sacred Tooth Relic of Buddha, which is housed at the Sri Dalada Maligawa in Kandy.</p>
      </div><!--flip-box-back-->
    </div><!--flip-box-inner-->
  </div><!--flip-box-->

    <div class="flip-box">
    <div class="flip-box-inner">
      <div class="flip-box-front">
        <h2 style="color:white;">Kite Festival</h2>
        <img src="img/kitefesfestival.jpeg" style="width:300px; height:200px;">
      </div><!--flip-box-front-->
      <div class="flip-box-back">
        <h2>Kite Festival</h2>
        </br>
        <p class="p1">Every year, Gujarat celebrates more than 200 festivals. The International Kite Festival is regarded as one of the biggest festivals celebrated. Months before the festival, homes in Gujarat begin to manufacture kites for the festival. </p>
        </div><!--flip-box-back-->
    </div><!--flip-box-inner-->
  </div><!--flip-box-->

    <div class="flip-box">
    <div class="flip-box-inner">
      <div class="flip-box-front">
        <h2 style="color:white;">New-Year</h2>
        <img src="img/new-year.jpg" style="width:300px; height:200px;">
      </div><!--flip-box-front-->
      <div class="flip-box-back">
        <h2>New-Year</h2>
        </br>
        <p class="p1">New Year is the time or day at which a new calendar year begins and the calendar's year count increments by one. </p>
      </div><!--flip-box-back-->
    </div><!--flip-box-inner-->
  </div><!--flip-box-->

  <form method="post" action="ueAction.php">
    <input type="submit" name="" value="View More" class="viewmore">
  </form>
      <?php require_once('footer.php'); ?>
    
  </div><!--wrapper-->
</body>
</html>