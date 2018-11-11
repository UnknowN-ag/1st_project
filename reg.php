<?php
 $server_name="localhost";
 $username="root";

 $conn=new mysqli($server_name,$username);

 if(!$conn){
 	die("connection failed".$conn→connect_error);
 }
 else echo "success";

?>