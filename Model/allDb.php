<?php 
require_once('db.php') ;
function check($id,$pass) {

    $connection= dbConnct();
    $querry="select * from customer where id='$id' and pass='$pass'  " ;
    $res=mysqli_query( $connection,$querry) ;
    return $res ;

}

function allproduct(){

    $connection= dbConnct();
    $querry="select * from product" ;
    $res=mysqli_query( $connection,$querry) ;
    return $res ;

}

function delete($Id){
    $connection= dbConnct();
    $querry="Delete from product where p_id='$Id'" ;
    $res=mysqli_query( $connection,$querry) ;
    return $res ;


}





?>