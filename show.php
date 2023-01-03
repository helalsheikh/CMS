
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
   <div class="container mt-5">
   <form action="" method="$_REQUEST">
     <input type="text" name="search"placeholder="please search">
     <input type="submit" value="search" name="submit" class="btn btn-info">
   </div>

<?php 
$connect=mysqli_connect("localhost","root","","khan");
if($connect){
     "Data connected";
}else{
     "Data not connected";
}
if(isset($_REQUEST["submit"])){
   $search=$_REQUEST["search"];
  

}
 $select_query="SELECT * FROM company WHERE username LIKE '{$search}%'";
$query=mysqli_query($connect,$select_query);
if($query){
     "query connected";
}else{
     "query not connected";
}
$data_count=mysqli_num_rows($query);
if($data_count >0){
?>

    <div class="container mt-2">
    <table class="table text-center table table-bordered">
      <thead class="thead-dark ">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Picture</th>
          <th scope="col">Name</th>
          <th scope="col">Password</th>
          <th scope="col">Email</th>
          <th scope="col">Age</th>
          <th scope="col">Address</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        
        </tr>
      </thead>
<?php
while($data_row=mysqli_fetch_assoc($query)){

     $id=$data_row["id"];
     $pic=$data_row["picture"];
     $username=$data_row["username"];
     $password=$data_row["password"];
     $email=$data_row["email"];
     $age=$data_row["age"];
     $address=$data_row["address"];
     
     
     
  ?>
     <tr>
     <th scope="row"><?php echo $id?></th>
     <td><img width="50px" height="25px" src="images/<?php echo $pic ?>" alt=""></td>
     <td><?php echo $username?></td>
     <td><?php echo $password?></td>
     <td><?php echo $email?></td>
     <td><?php echo $age?></td>
     <td><?php echo $address?></td>
     <td><a style="color:blue;" onclick="return confirm('Are you edit this information?')" href="edit.php?id=<?php echo $id?>"><i class="fa fa-edit"></i></a></td>
     <td><a style="color:red;" onclick="return confirm('Are you delete this information?')" href="delete_data.php?id=<?php echo $id?>"><i class="fa fa-remove" style="font-size:24px"></i></a></td>

    
   
   </tr>   
<?php
}   
?>

 <tbody>
  </tbody>
  </div>

  
<?php
}else{
    echo "Data not found";
}
?>

 

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>