<?php
session_start();
include('../hlavicka/header.php');
// @include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <!-- custom style for the menu bar -->
   <style>
      body {
         margin: 0;
         padding: 0;
      }

      .menu {
         display: flex;
         flex-direction: column;
         align-items: flex-start;
         background-color: transparent;
         color: #fff;
         padding: 10px;
      }

      .menu a {
         color: #fff;
         text-decoration: none;
         margin-bottom: 20px;
         padding: 10px;
      }

      .menu a span {
         display: flex;
         justify-content: center;
         align-items: center;
         background-color: #6c757d;
         text-align: center;
         border-radius: 10px;
         width: 200px; /* Set the desired width */
         height: 40px; /* Set the desired height */
         padding: 10px;
      }

      .menu a:hover {
         text-decoration: underline;
      }
   </style>

</head>
<body>
   
<div class="menu">
   <nav>
      <a href="#"><span>Fórum</span></a>
      <a href="../../IMS/index.php"><span>IMS</span></a>
      <a href="#"><span>FAQ</span></a>
      <a href="#"><span>Obchod</span></a>
      <a href="../hlavna_stranka/index.php"><span>Domov</span></a>
   </nav>
</div>


<div style="height: 450px;"></div>


<?php
      // Include footer
      include('../paticka/footer.php');
    ?>
    
</body>
</html>
