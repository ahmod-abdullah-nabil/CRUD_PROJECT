<?php


include 'dbconnect.php';


if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM `register` WHERE id=$id";
    $result=mysqli_query($conn, $sql);
    if($result){
        header('location:student_list.php');
    }else{
        die(mysqli_error($conn));
    }
}

?>
