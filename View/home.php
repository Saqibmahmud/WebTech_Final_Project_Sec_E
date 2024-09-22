<?php session_start() ; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="topbar">
<img src="../th.jpeg" alt="logo" width="250" height="150" id="pic">

<b id="text">KomDami Mart</b>
    <b id="text"> About </b>  
  <b id="text"> Profile </b>
 </div>
    <hr>
<div class="form">
    <form method="post" action="../Controller/logcheckController.php">
ID <input type="text" placeholder="Enter id" name="id" > <br>
Pass <input type="password" placeholder="Enter pass" name="pass" > <br><br>
    <input type="submit"  name="login" value="Login">

    </form>
    <?php echo $_SESSION['logerror'] ; 
    unset($_SESSION['logerror']) ; 
   echo $_SESSION["error"] ;
   unset($_SESSION['error']) ; 
 
    


    
    
    ?>
    </div>
</body>

<footer class="footer" > 
     <p> || 2024 Made by Saqib & Rothi|| All Rights Reserved.</p>
    <p><a href="" style="color: white;">Privacy Policy</a> | <a href="" style="color: white;">Terms of Service</a></p>
   
    <p>Follow us on 
        <a href="" ><img src="../download (1).jpeg" width="50" height="30"</a>, 
        <a href=""> <img src="../th (1).jpeg" width="50" height="30" ></a>
      
    </p>
   
</footer>









</html>