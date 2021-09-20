<?php
include 'server.php';
if(isset($_GET['deleteid'])){
   
    $id=$_GET['deleteid'];

    $sql = "DELETE FROM `users` WHERE 0";
    $result = mysqli_query($con,$sql);
    if($result){
        // echo "Deleted successfully";
        header('location:index.php');
    }else{
        die(mysqli_error($con));
    }
}


?>