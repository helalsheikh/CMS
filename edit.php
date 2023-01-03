<?php

$connect=mysqli_connect("localhost","root","","khan");
if($connect){
    echo "Data connect";
}else{
    echo "Data not connected";
}
 "<br>";

 $id=$_REQUEST["id"];

$select_query="SELECT * FROM company WHERE id='$id'";
$query=mysqli_query($connect,$select_query);
if($query){
     "query  connected";
}else{
     "query  not connected";
}
$data_count=mysqli_num_rows($query);
if($data_count > 0){
while($data_row=mysqli_fetch_assoc($query)){
  
   
    $id=$data_row["id"];
    $username=$data_row["username"];
    $password=$data_row["password"];
    $email=$data_row["email"];
    $age=$data_row["age"];
    $address=$data_row["address"];

}

}else{
    echo "Data not found";
}




?>

<form action="update.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="data_id" value="<?php echo $id?>">
      Nane:---<input type="text" name="username" value="<?php echo $username?>" placeholder="enter your name"><br>
      Email:--<input type="text" name="email" value="<?php echo $email?>" placeholder="enter your email"><br>
      Password:--<input type="text" name="password" value="<?php echo $password?>" placeholder="enter your password"><br>
     Age:--<input type="text" name="age" value="<?php echo $age?>" placeholder="enter your age"><br>
    Address:--<input type="text" name="address" value="<?php echo $address?>" placeholder="enter your address"><br>
      <input type="submit" value="submit" name="submit">
    </form>