<?php
session_start() ;
require_once("../Model/allDb.php") ;
if (isset($_POST["delete"])) {
$Pid =$_POST["p_id"] ;
$result=delete($Pid) ;
if($result==1){
    $_SESSION["delete"]= "Succesfully deleted" ;
    header("location: ../View/Admindashboard.php"); 
}



}

?>