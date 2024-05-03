<?php

$fistname = $_POST["fname"];
$lastname = $_POST["lname"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$conn = mysqli_connect("localhost", "root", "", "cse411project") or die("connection failed");
$sql = "INSERT INTO databse_table(First_name, Last_name, Email, Mobile) VALUES ('{$fistname}','{$lastname}','{$email}','{$mobile}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: http://localhost:63342/E-commerce-Taha/database%20form/contactfrom.php?_ijt=t7d8vcmaagrk6oac8tomglnd24&_ij_reload=RELOAD_ON_SAVE");
mysqli_close($conn);
?>