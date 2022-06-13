<?php

// Content of database.php

$mysqliConn = mysqli_connect('localhost', 'root', '', 'ajax');

if (!$mysqliConn){
    die("Could not connect to database: ".mysqli_connect_error());
}


?>