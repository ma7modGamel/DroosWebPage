<?php


session_start();
$usersActive = [
    [
        "username" => "aaa@a.a",
        "password" => "aaa"
    ],
    [
        "username" => "bbb@b.b",
        "password" => "bbb"
    ],
    [
        "username" => "ccc@c.c",
        "password" => "ccc"
    ]
];





if(isset($_POST)&&count($_POST)>0){
    $user=$_POST["KeyMail"];
    $pass=$_POST["KeyPassword"];
    if(strlen($user)<=0){
        $msgNameError="please enter name ..!";
    }
    if(strlen($pass)<=0){
        $msgPassError="please enter pass ..!";
    }
$checkUser=false;
    if(strlen($user)>0&&strlen($pass)>0){
        for ($i=0;$i<count($usersActive);$i++){
            if($user==$usersActive[$i]["username"]&&$pass==$usersActive[$i]["password"]){
                $_SESSION['newUser'] = $user;
                $checkUser=true;

            }
        }


        if ($checkUser){
            header("Location:index.php");
        }
    }
}

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

            <form method="post" action="/Login.php">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="KeyMail"
                           placeholder="Enter email">
                    <span class="small text-danger"></span>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="KeyPassword"
                           placeholder="Password">
                    <span class="small text-danger "></span>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>

                <button type="submit" class="btn btn-primary float-right m-1">Log In</button>
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
