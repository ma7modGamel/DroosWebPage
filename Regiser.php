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
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="imgs/Rxstyle.css">
</head>
<body>

<header  style="  background: url(imgs/svgpic.svg ) no-repeat bottom right;background-size:contain ; -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover; height: 300px; ">
    <div class="container">

        <div class="row">
            <div class="col-12   d-block ">
                <nav class="navbar navbar-expand-lg navbar-dark  text-right">

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse " id="navbarSupportedContent">

                        <ul class="navbar-nav mr-auto    ">


                            <div class="px-2">


                                <a class="myButton m-2" href="Login.php" style="color: #ffffff">نسجيل دخول</a>

                        </ul>
                        <ul class="navbar-nav px-4  text-right">

                            <li class="nav-item active">
                                <a class="nav-link " href="#">اتصل ينا</a>
                            </li>

                            <li class="nav-item active">
                                <a class="nav-link " href="#">لماذا دروس</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link  " href="landingPage.php">الرئيسية</a>
                            </li>
                        </ul>

                        <div class=" navbar-nav  text-right  ">
                            <a class="navbar-brand text-right" href="#">
                                <img src="imgs/logo.png"  height="70" alt="">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                    </div>
                </nav>
            </div>

        </div>


    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-6 offset-3 card p-3 mb-2  mt-2 border-primary shadow shadow-lg"style=" top: -50px;">

            <form method="post" class="p-2" action="/Login.php">

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
                <button type="submit" class="myButton float-right" style="color: #ffffff">تسجيل</button>
            </form>

        </div>
    </div>

</div>



<div class="row text-center mt-2 mb-2" style="background: rgba(65,217,192,0.14);">
    <img src="imgs/waveup.png" class="card-img">
    <div class="col-12">

        <h2 style="color: #0054a7"><br>هل انت مدرس و ترغب في دخل اضافي<br></h2>
        <p style="color: #0054a7"><br>
            التحق بمنصة دروس التفاعلية و استفد من ادوات التدريس المتقدمة لتحقق تجربة تدريس ممتعة لطلابك

        </p>
    </div>
    <img src="imgs/wavedown.png" class="card-img">
</div>



<footer style="background: -moz-linear-gradient(216deg, rgba(24,209,255,1) 0%, rgba(16,115,255,1) 100%); /* ff3.6+ */
background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, rgba(16,115,255,1)), color-stop(100%, rgba(24,209,255,1))); /* safari4+,chrome */
background: -webkit-linear-gradient(216deg, rgba(24,209,255,1) 0%, rgba(16,115,255,1) 100%); /* safari5.1+,chrome10+ */
background: -o-linear-gradient(216deg, rgba(24,209,255,1) 0%, rgba(16,115,255,1) 100%); /* opera 11.10+ */
background: -ms-linear-gradient(216deg, rgba(24,209,255,1) 0%, rgba(16,115,255,1) 100%); /* ie10+ */
background: linear-gradient(234deg, rgba(24,209,255,1) 0%, rgba(16,115,255,1) 100%); /* w3c */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1073ff', endColorstr='#18d1ff',GradientType=1 );">
    <div class="container-fluid">
        <div class="row mx-5 py-5 d-flex justify-content-around">
            <div class="col-xl-4 col-lg-4 col-sm-12 col-md-12 text-xl-right text-lg-right text-md-center text-sm-center">

                <img src="imgs/logo.png" style="width: 220px" alt="xx">
                <p><h4 class="text-light font-weight-normal">
                    دروس كمنصة تعليمية تفاعلية تمثل البديل الحديث و المتطور للدروس الخصوصية التقليدية ، حيث يتم تسخير
                    احدث تقنيات الانترنت و التطبيقات الذكية لتوفير بيئة تعليمية مبتكرة تجمع الطالب بمدرسين اكفاء و ذوي
                    خبرة من مختلف دول العالم ، تغطي دروس المناهج العربية و العالمية بالاضافة الى الدروس الاحترافية و
                    المهنية ، دروس تضمن لكم الآمان و الجودة و بالطبع الاسعار المناسبة.
                </h4>
                </p>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-12 col-md-12 text-xl-right text-lg-right text-md-center text-sm-center">

                <p><h4 class="text-light"> شبكات التواصل</h4></p>
                <div>

                    <a href="#">
                        <img src="imgs/facebook.png">
                    </a><a href="#"><img src="imgs/instagram.png">
                    </a><a href="#"><img src="imgs/twitter.png">
                    </a><a href="#"><img src="imgs/youtube.png">
                    </a>
                </div>

                <p><h4 class="text-light">العنوان</h4></p>
                <p><h4 class="text-light font-weight-normal">
                    شقه 2 عماره 27 شارع عيسى الشديفات ،الجبيهه – حي ام زويتينه ، تلفون : 966791917472+ عمان الاردن
                </h4>
                <p><h4 class="text-light font-weight-normal">email: info@droos.me</h4></p>

                </p>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-12 col-md-12 text-xl-right text-lg-right text-md-center text-sm-right">


                <h2 class="text-light text-sm-center">
                    روابط هامه </h2>

                <ul class="text-light text-md-right">
                    <li class="font-weight-bold"><br>الشروط و الاحكام</li>

                    <li class="font-weight-bold"><br>بحث عن معلم<br></li>
                    <li class="font-weight-bold"><br>المدونه</li>

                </ul>
            </div>
        </div>


        <div class="row">
            <div class="col-12 text-dark text-center">
                <p>كافة الحقوق محفوضة لمنصة دروس 2017</p>
            </div>
        </div>
    </div>
</footer>
<script src="js/all.min.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

