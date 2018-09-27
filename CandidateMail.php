<?php 

include_once 'Model/dbconnection.php';   
 include_once 'Model/dbfunction.php';
 echo '<div class="sucess">
  <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
  <center><strong>Congratulations!!!</strong>You have been successfully registerd to KIPS.A mail has been sent to your Id : '
        .$_GET['defaultMail'];
                echo'</center>
</div>';
$info = getCandidate();
        $to = $info->email;
        $subject = "Welcome to KIPS";
        $txt = "Hello $info->name \n Welcome to KIPS.Thanks for joining u.\n Your unique Id is : $info->id.\n Kindly save it for future reference.";
        $headers = "From: kaarigarsindia@gmail.com" . "\r\n" ;

        mail($to, $subject, $txt, $headers);

?>

