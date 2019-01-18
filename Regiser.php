<?php
//session_start();
//
//
//
//if(isset($_POST)&&count($_POST)==0) {
//    $mName = $_POST["usernamekey"];
//    $email = $_POST["emailkey"];
//    $password = $_POST["passwordkey"];
//    $rePassword = $_POST["rePasswordkey"];
//
//    print_r($_POST);
//    if (strlen($mName) > 0 && strlen($email) > 0 && strlen($password) > 0 && strlen($rePassword) > 0 && $password === $rePassword) {
//        array_push($_POST, ["userName" => $email, "password" => $password]);
//        print_r(count($_POST));
//        header("Location:LogIn.php");
//    }else{
//        echo "110";
//    }
//}






?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href=" css/all.min.css" rel="stylesheet">
    <link href=" css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12 card mt-2 border-primary ">

            <form action="Login.php" method="post">


                <div class="form-group">
                    <label for="exampleInputUser">User Name</label>
                    <input type="text" class="form-control" id="exampleInputUser" name="usernamekey" placeholder="Enter User Name">
                    </small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="emailkey" aria-describedby="emailHelp"
                           placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.
                    </small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword" name="passwordkey" placeholder="Enter PassWord">
                </div>
                <div class="form-group">
                    <label for="exampleInputConfermPassword">Conferm Password</label>
                    <input type="text" class="form-control" id="exampleInputConfermPassword" name="rePasswordkey" placeholder="Enter password Again">
                </div>
                <button type="submit" class="btn btn-primary float-right">Sing Up</button>
            </form>

        </div>
    </div>

</div>

<script src="js/all.min.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

