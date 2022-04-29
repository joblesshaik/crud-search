<?php 
include 'connect.php';
if (isset($_GET['deleteid'])){
    $usn=$_GET['deleteid'];

    $sql = "delete from dbms where usn ='$usn'";
$result=mysqli_query($conn,$sql);
if ($result) {
    header('location:display.php');
   
}else {
        die(mysqli_error($conn));
    }
}
?>