<?php
include 'connectdatabase.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from bhavitha_form where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("location:form.php");
    }
    else{
        die(mysqli_eroor($conn));
    }
}
?>