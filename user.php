<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $usn = $_POST['usn'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "insert into dbms (usn,stud_name,email,mobile,pass) 
    values('$usn','$name','$email','$mobile','$password')";

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
        <form method="post">
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


            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

</body>

</html>