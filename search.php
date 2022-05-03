<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Search</title>
</head>
<body>
<div class="container">
   <div class="row">
   <div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
   <div class="row">

   <?php 

   
     if(isset($_GET['search'])){
        $searchKey = $_GET['search'];
        $sql = "SELECT * FROM dbms WHERE stud_name LIKE '%$searchKey%'";
     }else
     $sql = "SELECT * FROM dbms";
     $result = $conn->query($sql);
   ?>

   <form action="" method="GET"> 
     <div class="col-md-6">
        <input type="text" name="search" class='form-control' placeholder="Search By Name" 
        value=<?php echo @$_GET['search']; ?> > 
     </div>
     <div class="col-md-6 text-left">
     <button class="btn btn-primary my-5">
          Search</button>
     </div>
   </form>

   <br> 
   <br>
</div>

<table class="table table-hover">
<tr>
  
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
    </tr>
  <?php while( $row = $result->fetch_object() ): ?>
  <tr>
     <td><?php echo $row->stud_name ?></td>
     <td><?php echo $row->email?></td>
     <td><?php echo $row->mobile?></td>
     <td><?php echo $row->pass?></td>
 
  </tr>
  <?php endwhile; ?>
</table>
</div>
</div>
</div>
</body>
</html>