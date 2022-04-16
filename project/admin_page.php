<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>


   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
  
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>this is an Night Walkers admin page</p>
      <a href="userdata.php" class="btn">Register Details</a>
      <a href="logindata.php" class="btn">Login Details</a>
      <a href="feedbackdata.php" class="btn">Feedback Details</a>
     
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>