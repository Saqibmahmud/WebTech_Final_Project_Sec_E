<?php
session_start() ;
require_once("../Model/allDb.php") ;
if (isset($_POST["login"])) {
$id =$_POST["id"] ;
$pass =$_POST["pass"] ;
if(empty($id) || empty($pass)){
    $_SESSION['logerror']="Ënter pass and id properly" ;
    header("location:../View/home.php") ;

}
else{
if($id=="Admin" && $pass=="Admin"){
 
    $_SESSION["id"]= $id ;
    $_SESSION["pass"]= $pass ;
    header("location:../View/Admindashboard.php") ;


}
else{



$result=check($id,$pass) ;




 if(mysqli_num_rows($result)==1){
    
    $_SESSION["id"]= $id ;
    $_SESSION["pass"]= $pass ;
    header("location:../View/dashboard.php") ;
  

}
else{
    $_SESSION["error"] = "No id found" ;
    header("location:../View/home.php") ;
}

}}




}




?>
