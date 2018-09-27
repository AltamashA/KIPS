<?php 
 include_once 'Model/dbconnection.php';   
 include_once 'Model/dbfunction.php';
 
 
 $x=insertCandi("../");
 
 if ($x == true) {

        echo '<div class="sucess">
  <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
  <center><strong>Congratulations!!!</strong>You have been successfully registerd to KIPS.</center>
</div>';
    } else {
        echo '<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
 <center><strong>Oops!</strong> Kuch galati ho gyi yaar.Try Again..</center>
</div>';
    }
?>

