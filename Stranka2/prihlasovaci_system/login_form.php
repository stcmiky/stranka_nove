<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:http://localhost/Stranka2/admin/admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:http://localhost/Stranka2/user/profile.php');

      }
     
   }else{
      $error[] = 'Nesprávny email alebo heslo!';
   }

};
?>

<?php
      // Include header
      include('../hlavicka/header.php');
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="Email">
      <input type="password" name="password" required placeholder="Heslo">
      <input type="submit" name="submit" value="Prihlásenie" class="form-btn">
      <p>Nemáte učet? <a href="register_form.php">Registrácia</a></p>
   </form>

</div>


<?php
      // Include footer
      include('../paticka/footer.php');
    ?>
    
</body>
</html>
