<?php

function OpenCon(){
    $serverhost = "localhost";
    $username = "stmarysweb";
    $password = "";
    $servername = "stmarys";

    $conn = new mysqli($serverhost, $username, $password, $servername) or die("Connect failed: %s\n". $conn -> error);
 
    return $conn;
 }
 
function CloseCon($conn)
 {
    $conn -> close();
 }
 ?>