<?php
$conn=new mysqli('localhost','root','','bhavitha_crud');
if($conn){
    echo "connection successful";
}
else{
    die(mysqli_error($conn));
}


?>