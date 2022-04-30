<?php
include 'connect.php';
$id=$_GET['updateid'];
// echo $id;


$sql="select * from dbms where usn=$id";

$result=mysqli_query($conn,$sql);

$rowc =mysqli_fetch_assoc(  $result);
echo $rowc['usn'];

$usn =$rowc['usn'];
$name = $rowc['name'];
$email = $rowc['email'];
$mobile = $rowc['mobile'];
$password = $rowc['password'];
// echo $usn;
// echo $name;



if (isset($_GET['submit'])) 
{
    $usn = $_GET['usn'];
    $name = $_GET['name'];
    $email = $_GET['email'];
    $mobile = $_GET['mobile'];
    $password = $_GET['password'];

    $sql = "update `dbms` set usn=$usn,name='$name',email='$email',mobile='$mobile',password='$password' where usn='$usn'";
  
   

    $result = mysqli_query($conn, $sql);
    if ($result) {
        // 
        header('location:display.php');
    } else {
        die(mysqli_error($conn));
    }
}
?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>DBMS</title>
</head>

<body>
    <div class="container my-5">
        <form method="get">
            <div class="mb-3">

                <label class="form-label">USN</label>
                <input type="usn" class="form-control" placeholder="Enter your USN" name="usn" autocomplete="off" required>
            </div>
            <div class="mb-3">

                <label class="form-label">Name</label>
                <input type="name" class="form-control" placeholder="Enter your Name" name="name" autocomplete="off" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" placeholder="Enter your Email id" name="email" autocomplete="off" required>

            </div>
            <div class="mb-3">
                <label class="form-label">Mobile</label>
                <input type="mobile" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off" required>
            </div>


            <button type="UPDATE" class="btn btn-primary" name="update">Update</button>
        </form>
    </div>

</body>

</html>