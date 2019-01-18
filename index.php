<?php
session_start();
if(count($_SESSION)>0){

    
?>
    <html>
<body>
<h1>Hi Xampp ..!!</h1>
</body>
</html>
<?php
}else{
    header("Location:Login.php");
}

?>
