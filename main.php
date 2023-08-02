<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
 
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="./css/location.css">
  <link rel="stylesheet" href="./css/cardpopup.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
</head>

<body>
    

    <div class="navbar">

<header>
<a href="main.php">
<img class="logo" src="./imge/logonav.png" alt="logo" width="99" height="59" >
</a>
    <nav>
    <ul class="nav_links">
    <li><a href="#"onclick="openPopup()">About us</a></li>
    <li><a href="main.php">HOME</a></li>
    <li><a href="index.php">Log out</a></li>
    </ul>
    </nav>
    <a class="cta" href="#"><button>Contact</button>

    
</header>
</div>












<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

  <!-- search box -->
  <label for="search"></label>
  <div class="frame">
    <input type="text" id="search" name="search" placeholder="Enter your text..." class="input">
  </div>

  <div class="red" >
 
    <div class="radio-button-container">
      
      <div class="radio-button">
      <input type="radio" class="radio-button__input" id="radio4" name="crime" value="">
        <label class="radio-button__label" for="radio4">
          <span class="radio-button__custom"></span>
          All 
        </label>
      </div>

      <div class="radio-button">
        <input type="radio" class="radio-button__input" id="radio5" name="crime" value="Serial killer">
        <label class="radio-button__label" for="radio5">
          <span class="radio-button__custom"></span>
          Serial killer
        </label>
      </div>
      <div class="radio-button">
        <input type="radio" class="radio-button__input" id="radio6" name="crime" value="Fraudster">
        <label class="radio-button__label" for="radio6">
          <span class="radio-button__custom"></span>
          Fraudster
        </label>
      </div>
      <div class="radio-button">
        <input type="radio" class="radio-button__input" id="radio7" name="crime" value="Terrorist">
        <label class="radio-button__label" for="radio7">
          <span class="radio-button__custom"></span>
          Terrorist
        </label>
      </div>
      <div class="radio-button">
        <input type="radio" class="radio-button__input" id="radio8" name="crime" value="Thief">
        <label class="radio-button__label" for="radio8">
          <span class="radio-button__custom"></span>
          Thief
        </label>
      </div>
      <div class="radio-button">
        <input type="radio" class="radio-button__input" id="radio9" name="crime" value="Psychopath">
        <label class="radio-button__label" for="radio9">
          <span class="radio-button__custom"></span>
          Psychopath
        </label>
      </div>

      <div class="radio-button">
        <input type="radio" class="radio-button__input" id="radio10" name="crime" value="Scamming">
        <label class="radio-button__label" for="radio10">
          <span class="radio-button__custom"></span>
          Scamming
        </label>
      </div>

      
     
      
    </div>
  </div>


 





  <div class="bt">
    <button type="submit" >Submit
      
    </button>
    
  </div>

  <div class="loader2">
    <div class="bar bar1"></div>
    <div class="bar bar2"></div>
    <div class="bar bar3"></div>
    <div class="bar bar4"></div>
    <div class="bar bar5"></div>
    <div class="bar bar6"></div>
    <div class="bar bar7"></div>
    <div class="bar bar8"></div>
</div>



<div class="loader">
    <span></span>
</div>






</form>

<div class="load">

<div class="loading" id="loading">
    <div class="d1"></div>
    <div class="d2"></div>
</div>

  
</div>
<div class="popup card2" id="popup">
  <div class="card3">
  <h1>WHO ARE WE ?</h1>
  <p><br>
  We are Proto Byte team specialized in software development. The website you are currently viewing offers a trial display for learning purposes. We always strive to meet our clients' needs and provide them with the most suitable software solutions for their businesses and projects. We believe that programming is the language of the future and work hard to develop advanced and efficient software solutions.  </p>
  <button type="button" onclick="closePopup()">Close</button>
</div>
</div>



<!--
<div class="card-container">
  <div class="card">
    <div class="card-content">
      <h2 class="card-title">بطاقة 1</h2>
      <p class="card-description">وصف قصير للبطاقة 1.</p>
      <button type="submit" onclick="openPopup()">Open</button>
    </div>
  
-->

  </div>



  <script src="./js/script.js"></script>

<script>
    
</script>






  <?php

include './inc/nsadb.php';
INCLUDE './inc/searching.php';


?>
  

  
</body>
</html>