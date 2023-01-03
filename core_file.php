
<?php
$connect=mysqli_connect("localhost","root","","khan");
if($connect){
 echo"Data connected";
}else{
   echo  "Data not connected";
}
 
 $username=$_REQUEST["username"]; 
 $password=$_REQUEST["password"];
 $email=$_REQUEST["email"];
 $age=$_REQUEST["age"];
 $address=$_REQUEST["address"];

 $file_name= $_FILES["file_name"];
 $img_name = $file_name["name"];
 $tmp_name = $file_name["tmp_name"];
if(!empty($file_name)){
  $location="images/";
  move_uploaded_file($tmp_name,$location.$img_name);
}else{
  echo "file name not found";
}
echo "<br>";
$insert_query="INSERT INTO company (username,picture,password,email,age,address) VALUES ('$username','$img_name','$password','$email','$age','$address')";
$query=mysqli_query($connect,$insert_query);
if($query){
  header("location:show.php");
}else{
  echo "false";
}

?>