<?php
// Include the database configuration file
include('db_connect.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // Get the form data
   $name = $_POST['name'];
   $email = $_POST['email'];
   $message = $_POST['sprava'];

   // Create a prepared statement
   $stmt = $conn->prepare("INSERT INTO kontakt (meno, email, sprava) VALUES (?, ?, ?)");

   // Bind the parameters and execute the statement
   $stmt->bind_param("sss", $name, $email, $message);
   $stmt->execute();

   // Close the statement
   $stmt->close();

   // Redirect to thank you page or index.php
   header('Location: thank_you.php');
   exit();
}
?>
   <div class="contact-container">
      <h1>Kontaktný formulár</h1>
      <p>Thank you for your message!</p>
   </div>

   <div class="contact-container">
      <h1>Kontaktný formulár</h1>
      <p>Napíšte nám</p>

      <form action="kontakt.php" method="POST">
         <label for="name">Meno:</label>
         <input type="text" id="name" name="name">

         <label for="email">Email:</label>
         <input type="email" id="email" name="email">

         <label for="message">Správa:</label>
         <textarea id="message" name="sprava"></textarea>

         <input type="submit" value="Submit">
      </form>
   </div>
<?php


include('../paticka/footer.php');
?>
