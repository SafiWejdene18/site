
<?php

SESSION_START();

if(isset($_SESSION['auth']))
{
    if($_SESSION['auth']==1)
    {
        header("location:index.php");
    }
}


include "lib/connection.php";
    if (isset($_POST['submit'])) 
    {
        $email = $_POST['email'];
        $pass = md5($_POST['password']);

        $loginquery="SELECT * FROM users WHERE email='$email' AND pass='$pass'";
        $loginres = $conn->query($loginquery);

        echo $loginres->num_rows;

        if ($loginres->num_rows > 0) 
        {

            while ($result=$loginres->fetch_assoc()) 
            {
                $username=$result['f_name'];
                $userid=$result['id'];
            }

            $_SESSION['username']=$username;
            $_SESSION['userid']=$userid;
            $_SESSION['auth']=1;
            header("location:index.php");
        }
        else
        {
            echo "invalid";
        }
    }


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">

    <title>cse411</title>


</head>

<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <section class="vh-100">
                            <div class="container py-5 h-100">
                                <div class="row d-flex align-items-center justify-content-center h-100">
                                    <div class="col-md-8 col-lg-7 col-xl-6">
                                        <img src="admin/login.png" class="img-fluid" alt="Phone image" height="300px" width="600px">
                                    </div>
                                    <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                                        <form action="login.php" method="post">
                                            <p class="text-center h1 fw-bold mb-4 mx-1 mx-md-3 mt-3">Welcome Back!</p>
                                            <!-- Email input -->
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form1Example13"> <i class="bi bi-person-circle"></i>Email</label>
                                                <input type="email" id="form1Example13" class="form-control form-control-lg py-3" aria-describedby="emailHelp" name="email" autocomplete="off" placeholder="Enter Email Address" style="border-radius:25px ;" />

                                            </div>

                                            <!-- Password input -->
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form1Example23"><i class="bi bi-chat-left-dots-fill"></i> Password</label>
                                                <input type="password" class="form-control form-control-lg py-3"
                                                       id="exampleInputPassword" placeholder="Password" name="password" style="border-radius:25px ;" />

                                            </div>


                                            <!-- Submit button -->
                                            <!-- <button type="submit" class="btn btn-primary btn-lg">Login in</button> -->
                                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">

                                                <input class="btn btn-warning btn-lg text-light my-2 py-3" type="submit" name="submit" value="login"  style="width:100% ; border-radius: 30px; font-weight:600;" />
                                        </form><br>
                                        <div class="text-center">
                                            <a class="small" href="register.php"   style="font-weight:600;text-decoration:none;">Create an Account!</a>
                                        </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
</div>




</body>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
</body>
</html>


