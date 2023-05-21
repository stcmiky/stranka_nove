<?php
include('../hlavicka/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ďakujeme</title>

   <style>
      .container {
         max-width: 600px;
         margin: 80px auto; /* Adjust the margin-top value to position the container */
         padding: 20px;
         background-color: #6c757d;
         color: #fff;
         text-align: center;
         border-radius: 10px;
      }

      .container h1 {
         color: #f5bd1f;
         font-size: 28px;
         margin-bottom: 20px;
      }

      .container p {
         color: #f5bd1f;
         font-size: 18px;
         margin-bottom: 20px;
      }
   </style>
</head>
<body>
   <div class="container">
      <h1>Ďakujeme</h1>
      <p>Vašu správu sme zaregistrovali, ozveme sa Vám.</p>
      <!-- Add any additional content or styling as needed -->
   </div>

   <div style="height: 200px;"></div>

   <?php
      // Include footer
      include('../paticka/footer.php');
   ?>
</body>
</html>
