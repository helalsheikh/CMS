
<?php
$connect=mysqli_connect("localhost","root","","khan");
if($connect){
    echo "Data connect";
}else{
    echo "Data not connected";
}

if(isset($_REQUEST["id"])){
    $id=$_REQUEST["id"];
    $picture=$_REQUEST["Picture"];


$delete_query="DELETE FROM company WHERE id='$id'";
$query=mysqli_query($connect,$delete_query);
if($query){
    unlink("images/".$picture);
header("location:show.php");

}else{
    echo "query not delete";
}

}


?>