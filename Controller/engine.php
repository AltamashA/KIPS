<?php 
         
         if(isset($_GET['p'])){
             if(array_key_exists($_GET['p'], $page))
             include_once $page[$_GET['p']];
             else{
                 include_once $page['404'];
             }
         }else
         {
             include_once $page['home'];
         }
             
             
?>
