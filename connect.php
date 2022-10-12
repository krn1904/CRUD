<?php 
$con = new mysqli('localhost','root','','crudoperation');  // serverName,username,password,tablename
if(!isset($con)){
    echo "Connection Failed";
}
?>