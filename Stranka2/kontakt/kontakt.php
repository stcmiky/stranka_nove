<?php
session_start();
include('../hlavicka/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Kontakt</title>


   
   <style>
      .contact-container {
         max-width: 600px;
         margin: 80px auto;
         padding: 20px;
         background-color: #6c757d;
         color: #f5bd1f;
         text-align: center;
         border-radius: 10px;
      }
      
      .contact-container h1 {
         color: #f5bd1f;
         font-size: 28px;
         margin-bottom: 20px;
      }
      
      .contact-container p {
         color: #f5bd1f;
         font-size: 18px;
         margin-bottom: 20px;
      }
      
      .contact-container form {
         display: flex;
         flex-direction: column;
         align-items: center;
      }
      
      .contact-container label {
         color: #f5bd1f;
         font-size: 18px;
         margin-bottom: 10px;
      }
      
      .contact-container input,
      .contact-container textarea {
         width: 100%;
         padding: 10px;
         margin-bottom: 20px;
         border-radius: 5px; 
         outline: none !important;
         box-shadow: none !important;
      }
      
      .contact-container textarea {
         height: 150px;
         outline: none;
      }
      
      .contact-container input[type="submit"] {
         width: auto;
         padding: 10px 20px;
         background: linear-gradient(to right, #5D2689, #4f2075, #421b61);
         color: #f5bd1f;
         border: none;
         cursor: pointer;
         font-size: 16px;
         border-radius: 5px; 
         outline: none;
      }

      .contact-container input[type="submit"]:hover {
        background: linear-gradient(to right, #FFE863, #FFD93D, #F5BD1F);
        color: #5D2689;
        outline: none;
    }
   </style>
</head>
<body>
   
   <div class="contact-container">
      <h1>Kontaktný formulár</h1>
      <p>Napíšte nám</p>

      <form action="process_contact.php" method="POST">
         <label for="name">Meno:</label>
         <input type="text" id="name" name="name">

         <label for="email">Email:</label>
         <input type="email" id="email" name="email">

         <label for="sprava">Správa:</label>
         <textarea id="sprava" name="sprava"></textarea>

         <input type="submit" value="Submit">
      </form>
   </div>


   <?php
      include('../paticka/footer.php');
    ?>

</body>
</html>
