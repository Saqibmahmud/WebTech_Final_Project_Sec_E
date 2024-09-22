<?php   session_start();
require_once("../Model/allDb.php") ?> ! 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="form"> 
    Hello <b><?php  echo  $_SESSION["id"] ; ?></b>

    <hr>
    <?php 
$result=allproduct(); ?>

<table border="1">
<tr>
<th>Id</th>
<th> Name </th>
<th> Price </th>
<th> Quantity </th>
</tr>
<?php 
while($r=$result->fetch_assoc()){
?>
<tr>
<td> <?php echo $r["p_id"] ; ?> </td>
<td> <?php echo $r["p_name"] ; ?> </td>
<td> <?php echo $r["p_price"] ; ?> </td>
<td> <?php echo $r["p_quantity"] ; ?> </td>

</tr>
<?php }
?>

</table>

<br>
<br>
<form  method="post" action="../Controller/deletecheker.php">



<input type="text" name=p_id placeholder="input productId">
<input type="submit" name="delete"  value="Delete"> 

</form>
<?php 
echo $_SESSION["delete"] ;
unset( $_SESSION["delete"]) ;
?>
<br>
<br>
<br>
<form  method="post" action="../Controller/logoutcheker.php">
<input type="submit" name="logout"  value="LOGOUT"> 

</form>
</div> 
</body>
<footer class="footer" > 
     <p> || 2024 Made by Saqib & Rothi(group-14) || All Rights Reserved.</p>
    <p><a href="" style="color: white;">Privacy Policy</a> | <a href="" style="color: white;">Terms of Service</a></p>
   
    <p>Follow us on 
        <a href="" ><img src="../download (1).jpeg" width="50" height="30"> </a>, 
        <a href=""> <img src="../th (1).jpeg" width="50" height="30" ></a>, and 
      
    </p>
   
</footer>
</html>