<?php
 include'header.php';
 include'lib/connection.php';

 $sql = "SELECT * FROM product";
 $result = $conn -> query ($sql);

 if(isset($_POST['add_to_cart'])){

if(isset($_SESSION['auth']))
{
   if($_SESSION['auth']!=1)
   {
       header("location:login.php");
   }
}
else
{
   header("location:login.php");
}
  $user_id=$_POST['user_id'];;
  $product_name = $_POST['product_name'];
  $product_price = $_POST['product_price'];
  $product_id = $_POST['product_id'];
  $product_quantity = 1;

  $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE productid = '$product_id'  && userid='$user_id'");

  if(mysqli_num_rows($select_cart) > 0){
    echo $message[] = 'product already added to cart';

  }else{
     $insert_product = mysqli_query($conn, "INSERT INTO `cart`(userid, productid, name, quantity, price) VALUES('$user_id', '$product_id', '$product_name', '$product_quantity', '$product_price')");
   echo $message[] = 'product added to cart succesfully';
   header('location:index.php');
  }

}

?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<!--banner start-->
<div class="banner">
<div class="container">
  <div class="row">
    <div class="col-md-6">
        <div class="banner-text">
          <p class="bt1">L&B Solar Company</p>
          <p class="bt4">Découvrez le monde avec L&B Solar Company <br> Votre destination pour des produits photovoltaiques de qualité supérieure
              <br> “𝕷’é𝖓𝖊𝖗𝖌𝖎𝖊 𝖘𝖔𝖑𝖆𝖎𝖗𝖊, 𝖙𝖊𝖑𝖑𝖊 𝖚𝖓𝖊 é𝖙𝖔𝖎𝖑𝖊 𝖇𝖎𝖊𝖓𝖛𝖊𝖎𝖑𝖑𝖆𝖓𝖙𝖊, é𝖈𝖑𝖆𝖎𝖗𝖊 𝖓𝖔𝖘 𝖛𝖎𝖊𝖘 𝖊𝖙 𝖓𝖔𝖚𝖘 𝖌𝖚𝖎𝖉𝖊 𝖛𝖊𝖗𝖘 𝖚𝖓 𝖆𝖛𝖊𝖓𝖎𝖗 𝖕𝖑𝖚𝖘 𝖉𝖚𝖗𝖆𝖇𝖑𝖊.” ☀️🌍</p>
        </div>
    </div>
    <div class="col-md-6">
      <img src="images/logo/_378f2a37-e314-4b17-991e-44c8de3c3be4-removebg-preview.png" class="img-fluid">
    </div>
  </div>
</div>
</div>

<!--banner end-->


<!---top sell start---->

<section>
  <div class="container">
    <div class="topsell-head">
      <div class="row">
        <div class="col-md-12 text-center">
          <img src="img/mark.png">
          <h4>All Products</h4>
          <p>ekteb detail ici </p>

        </div>
        
        
      </div>

    </div>
  </div>
    <main>

        <div class="album py-5 bg-light">
            <div class="container">



  <?php
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            $i = 0;
            while($row = mysqli_fetch_assoc($result)) {
              ?>
              <?php
              if($i == 0) {
              ?>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
              <?php
              }
              ?>
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="col-md-3 col-sm-6 col-6">
              <div>
                <img src="admin/product_img/<?php echo $row['imgname']; ?>" style="width: 225px;height: 225px;" >
              </div>
              <div>
              <div>
                <h6><?php echo $row["name"] ?></h6> 
                <span><?php echo $row["Price"] ?></span> 
                <input type="hidden" name="user_id" value="<?php echo isset($_SESSION['userid']) ? $_SESSION['userid'] : ''; ?>" >

                <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>"> 
                <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $row['Price']; ?>">              
              </div>
              <input type="submit" class="btn btn btn-primary" value="add to cart" name="add_to_cart">
              </div>
              
            </div>
            </form>
            <?php
                $i++;
                if($i == 3) {
                    $i = 0;
            ?>
            </div>
            <br>
            <?php
                }
            ?>
            <?php
    }
        } 
        else 
            echo "0 results";
        ?>

            

  </div>
</section>


<!---top sell end---->


<div class="container">
    <div class="row">



