<?php 
function dbConnct() {

$ServerName="localhost";
$UserName="root" ;
$password="" ;
$Dbname="test" ;

$con=new mysqli($ServerName,$UserName,$password,$Dbname) ;
return $con ;


}
?>