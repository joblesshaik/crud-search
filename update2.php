<?php include("connect.php"); 
$usn='';
$name='';
$email='';
$mobile='';
$password='';


if(isset($_GET['updateid']) && $_GET['updateid']!= '') {
$usn=$_GET['updateid'];

$stud = "select * from dbms where usn=$usn";

      

$res = mysqli_query($conn,$stud);
$row = mysqli_fetch_assoc($res);
$usn=$row['usn'];
$name = $row['stud_name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['pass'];
}


     if (isset($_GET['submit']))
    {
        $id = $_GET['usn'];
        $stud2="select * from dbms where usn='$id'";
        $data=mysqli_query($conn,$stud2);
        $check=mysqli_num_rows($data);
        //if condition for update
        if($check>0) 
        {
        $usn = $_GET['usn'];
        $name = $_GET['name'];
        $email = $_GET['email'];
        $mobile = $_GET['mobile'];
        $password = $_GET['password'];

        $up= "UPDATE dbms SET stud_name='$name',email='$email',mobile='$mobile',pass='$password' where usn='$usn'";

        $data= mysqli_query($conn,$up);
        
        if($data)
         {
             echo "<script>alert('Record updated sucessfully.')
             window.location.href='display.php';
             </script>";
         }
        else
        {
             echo "Record not updated";
        }
    }
    //if condition for update
    else
    {
        $usn = $_GET['usn'];
        $name = $_GET['name'];
        $email = $_GET['email'];
        $mobile = $_GET['mobile'];
        $password = $_GET['password'];
    
        $sql = "insert into dbms (usn,stud_name,email,mobile,pass) 
        values('$usn','$name','$email','$mobile','$password')";
    
        $result = mysqli_query($conn, $sql);

        if($result)
        {
            echo "<script>alert('Record Inserted sucessfully.')
            window.location.href='display.php';
            </script>";
        }
       else
       {
        //die(mysqli_error($conn));
       }
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
                <input type="usn" class="form-control" value="<?php echo $usn; ?>" name="usn" autocomplete="off" required>
            </div>
            <div class="mb-3">

                <label class="form-label">Name</label>
                <input type="name" class="form-control" value="<?php echo $name; ?>" name="name" autocomplete="off" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" value="<?php echo $email; ?>" name="email" autocomplete="off" required>

            </div>
            <div class="mb-3">
                <label class="form-label">Mobile</label>
                <input type="mobile" class="form-control" value="<?php echo $mobile; ?>" name="mobile"  maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" value="<?php echo $password; ?>" name="password" autocomplete="off" required>
            </div>


            <button type="UPDATE" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>

</body>

</html>