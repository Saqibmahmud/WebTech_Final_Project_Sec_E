<?php 

if (isset($_POST["logout"])){
session_destroy() ;
header("location:../View/home.php") ;


}


?>