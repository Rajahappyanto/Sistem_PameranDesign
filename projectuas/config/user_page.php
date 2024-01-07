<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>jasa edit video</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
      <a href="produk.php" class="btn">produk</a>
      <a href="portofolio.php" class="btn">portofolio</a>
      <a href="logout.php" class="btn">logout</a>
<div class="container">
   <div class="content">
      <h1>halo <?php echo $_SESSION['user_name'] ?></span></h1>
      <h1>selamat datang di toko kami</h1>
      <p>jangan lupa dipesan ya!!!</p>
   </div>

</div>

</body>
</html>