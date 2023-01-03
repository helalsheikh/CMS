<?php 

$connect= mysqli_connect("localhost","root","","khan");
if($connect){
    echo "Data connect";
}else{
    echo "Data not connected";
}

if(isset($_REQUEST["submit"])){

   $id=$_REQUEST["data_id"];
   $username=$_REQUEST["username"];
   $password=$_REQUEST["password"];
   $email=$_REQUEST["email"];
   $age=$_REQUEST["age"];
   $address=$_REQUEST["address"];
  
  "<br>";

   $udpade_query="UPDATE company SET username ='$username', password ='$password',email ='$email', age ='$age', address ='$address' WHERE id='$id'";
    
 $query=mysqli_query($connect,$udpade_query);
 if($query){
   header("location:show.php");
  
  
 }else{
     echo "false";
 }

}

?>