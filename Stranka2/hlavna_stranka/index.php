<!DOCTYPE html>
<html>
  <head>
    <title>My 3D Printing Shop</title>
  </head>
  <body>
    <?php
      // Include header
      include('../hlavicka/header.php');
    ?>

    <div class="marquee-container">
      <div class="marquee-wrapper">
        <marquee behavior="scroll" direction="left">!!!Novinka!!! Ponúkame 3D design !!!Novinka!!!</marquee>
      </div>
    </div>

    <div class="rectangle-container">
  <div class="rectangle">
    <div class="rectangle-highlight"></div>
    <div class="rectangle-highlight-sell">
    <a href="#">Kúpiť</a>
    </div>
    <h2>Novinka!!!</h2>
    <img src="../obrazky/3DP6.png" alt="Your Image"class="rectangle-image1"> 
  </div>
      <div class="rectangle">
        <div class="rectangle-highlight"></div>
        <div class="rectangle-highlight-sell">
          <a href="#">Kúpiť</a>
        </div>
        <h2>Najpredávanejšie</h2>
        <img src="../obrazky/3DP9.png" alt="Your Image"class="rectangle-image2"> 
      </div>
      <div class="rectangle">
        <div class="rectangle-highlight"></div>
        <div class="rectangle-highlight-sell">
          <a href="#">Kúpiť</a>
        </div>
        <h2>Akcia</h2>
        <img src="../obrazky/3DP10.png" alt="Your Image"class="rectangle-image3">
      </div>
    </div>


    <?php
      // Include footer
      include('../paticka/footer.php');
    ?>
  </body>
</html>

<style>
 .marquee-container {
  margin-top: 50px;
  display: flex;
  justify-content: center;
  width: 100%;
  height: 50px; /* adjust the height as needed */
  overflow: hidden;
  border-radius: 10px;
}

.marquee-wrapper {
  width: 10cm;
  border-radius: 10px;
}

.marquee-wrapper marquee {
  font-family: 'Arial';
  display: flex;
  align-items: center;
  font-size: 1.2rem;
  background-color: #6c757d;
  color: #f5bd1f;
  border-radius: 10px; /* add this line to make the corners rounder */
}

.rectangle-container {
  display: flex;
  justify-content: center;
  margin-top: 20px;
  margin-bottom: 20px; /* Add a margin-bottom to create space between rectangles and footer */
  overflow: hidden;
  border-radius: 100px;
}

.rectangle {
  position: relative; /* Add position relative to enable child element positioning */
  width: 300px;
  height: 350px;
  margin: 0 10px;
  background-color: #6c757d;
  border-radius: 10px;
}



.rectangle-highlight {
  position: absolute;
  top: 0px;
  left: 0;
  width: 100%;
  height: 30px;
  background-color: #5D2689;
  border-radius: 10px 10px 0 0;
  display: flex;
  justify-content: center;
  align-items: center;
}

.rectangle h2 {
  position: relative; /* Add position relative to enable child element positioning */
  z-index: 2; /* Add z-index to place the text in front of the highlight */
  text-align: center;
  margin-top: 2px;
  color: #f5bd1f;
}

.rectangle-highlight-sell {
  position: absolute;
  bottom: 0px;
  left: 0;
  width: 100%;
  height: 30px;
  background-color: #5D2689;
  border-radius: 0 0 10px 10px;
  display: flex;
  justify-content: center;
  align-items: center;
  text-decoration: none;
  font-size: 20px;
  font-weight: bold;
  
}


.rectangle-highlight-sell a{
  color: #f5bd1f;
}


.rectangle-image1 {
  max-width: 100%;
  width: auto;
  height: auto;
  object-fit: cover;
}

.rectangle-image2 {
  max-width: 100%;
  width: auto;
  height: 207px;
  object-fit: cover;
}

.rectangle-image3 {
  max-width: 100%;
  width: 300px;
  height: 209px;
  object-fit: cover;
}

</style>

