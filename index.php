<?php
//session_start();
var_dump($_SESSION);
if(count($_SESSION)>0){

    
?>
    <html>
<body>
<h1>Hi Xampp ..!!</h1>
</body>
</html>
<?php
}else{
    header("Location:landingPage.php");
}

?>
