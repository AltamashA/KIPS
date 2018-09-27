
<?php


/*
 * s string
 * i integer
 * d double
 * b binary
 * 
 */

//ONLINE LOGIN

define("host", "localhost");
define("user", "id6940551_admin");
define("password", "admin");
define("database", "id6940551_kips");

//LOCAL CONNECTION


// define("host", "localhost");
// define("user", "root");
// define("password", "");
// define("database", "kips");

function getConnection(){
 $mysqli = new mysqli(host, user, password, database) or
        die(mysqli_errno($msyqli));
 return $mysqli;
}
?>