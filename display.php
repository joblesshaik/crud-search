<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>display</title>
</head>
<body>

    <div class="container">
     <button class="btn btn-primary my-5">
     <a href="user.php" class="text-light">Add user</a>    
     
     </button>   
     <button class="btn btn-primary my-5">
     <a href="search.php" class="text-light">Search user</a>    
     
     </button> 
         
     
     
     <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">USN</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php 
   $sql = "select * from dbms";

   $result = mysqli_query($conn, $sql);
   if ($result) {
       while($row=mysqli_fetch_assoc($result)){
           $usn=$row['usn'];
           $name=$row['stud_name'];
           $email=$row['email'];
           $mobile=$row['mobile'];
           $password=$row['pass'];
        echo '<tr>
        <th scope="row">'.$usn.'</th>
        <td>'. $name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$password.'</td>
       <td><button class="btn btn-primary">
       <a href="update2.php?updateid='.$usn.'" class="text-light">Update</a>    
       
       </button>
       <button class="btn btn-danger">
       <a href="delete.php?deleteid='.$usn.'" class="text-light">Delete</a>    
       
       </button>
       </td>
      </tr>';
        }
     } ?>
      
   
  </tbody>
</table>
    </div>
    
</body>
</html>