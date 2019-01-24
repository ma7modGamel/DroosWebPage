<?php
session_start();
var_dump($_SESSION);
echo "200";
if(count($_SESSION)>0){


            unset($_SESSION['newUser'][$key]);

            
    echo "555";
    var_dump($_SESSION);
    ?>
    <html>
<body>
<h1>Done Login ..!!</h1>


</body>
</html>
<?php
}else{
    header("Location:landingPage.php");
}

?>
