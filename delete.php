<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
     $sql = "delete from `crud1` where id=$id"; 
     $rel = mysqli_query($con,$sql);
     if(isset($rel)){
        echo "deleted succesfully";
        header("location:Display.php");
      }else{
        echo mysqli_error($rel);
    }
}
?>
