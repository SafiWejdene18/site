<!DOCTYPE html>
<html>
<head>
	<title>L&B SOLAR COMPANY</title>
	<meta charset="UTF-8">
    <meta name="description" content="test">
    <meta name="keywords" content="HTML, CSS, BOOTSTRAP">
    <meta name="author" content="Anik">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">
    <!--font-family: 'Raleway', sans-serif;-->
    <link rel="favicon" type="text/css" href="#favicon">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

</head>

<body>

<!--header start--->

<!--header end--->
<?php 
  SESSION_START();
  include "lib/connection.php";
 // $id=$_SESSION['userid'];
 if (isset($_SESSION['userid'])) {
  $id = $_SESSION['userid'];
} else {
  // Handle the case where 'userid' is not set
  $id = null; // or handle this scenario differently, maybe redirect or display a message
}

 $sql = "SELECT * FROM cart where userid='$id'";
 $result = $conn -> query ($sql);
?>
<!--nav start--->
<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <button class="navbar-toggler shadow-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      </li>
        <li class="nav-item">
          <a class="nav-link me-2" aria-current="page" href="acceuil.php">𝐴𝑐𝑐𝑒𝑢𝑖𝑙</a>
        </li>
        <!--new--->
        <li class="nav-item">
          <a class="nav-link me-2" href="propos.php">𝐴 𝑝𝑟𝑜𝑝𝑜𝑠</a>
          <li class="nav-item">
          <a class="nav-link me-2"  href="index.php">𝑃𝑟𝑜𝑑𝑢𝑖𝑡𝑠</a>
         </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">𝐶𝑜𝑛𝑓𝑖𝑔𝑢𝑟𝑒𝑟 𝑣𝑜𝑡𝑟𝑒 𝑘𝑖𝑡</a>
        </li>
        <!--end-->
          <li class="nav-item">
              <a class="nav-link" href="contact.php">𝐶𝑜𝑛𝑡𝑎𝑐𝑡</a>
          </li>
      </ul>
      <form class="form-inline"  action="search(1).php" method="post">
        <!--<a href=""><img src="img/search.png"></a>-->
        <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="name">
        <button class="btn btn-outline-dark" type="submit" style="margin-left:7px;margin-right:7px;"><img src="img/search.png"></button>
        </form>
        <?php
          $total=0;
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              $total++;
            }
          }
              ?>
        <a href="cart(1).php"><img src="img/cart.png"><?php echo $total?></a>
        <?php 

if(isset($_SESSION['auth']))
{
   if($_SESSION['auth']==1)
   {
    echo $_SESSION['username']; ?>
    <a href="logout.php">(logout)</a>
<?php
   }
}
else
{
?>

<?php
}
?>
        <a href="login.php">Login</a>
        <a href="Register.php">Signup</a>

    </div>
  </div>
</nav>

<!--nav end--->