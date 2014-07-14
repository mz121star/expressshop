<?php
session_start();
if (count($_POST)) {
     $uname=$_POST["uname"];
     $pwd=$_POST["pwd"];
     if($uname=="admin"&&$pwd=="123456789"){
         $_SESSION["uname"]="admin";
         header("Location: addshop.php");
         exit;
     }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LOGIN</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">


</head>

<body>

<div class="container">

    <form class="form-signin" role="form"  method="post" action="login.php" >
        <h2 class="form-signin-heading">登录后台管理</h2>
        <input type="text" name="uname" class="form-control" placeholder="Email address" required autofocus>
        <input type="password" name="pwd" class="form-control" placeholder="Password" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
    </form>

</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
</body>
</html>
