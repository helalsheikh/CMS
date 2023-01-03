<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
    <form action="core_file.php" method="post" enctype="multipart/form-data">
      <label>Name:--</label><input type="text" name="username" placeholder="enter your name"><br>
      <label>Email:--</label><input type="text" name="email" placeholder="enter your email"><br>
      <label>Password:--</label><input type="text" name="password" placeholder="enter your password"><br>
      <label>Age:--</label><input type="text" name="age" placeholder="enter your age"><br>
      <label>Address:--</label><input type="text" name="address" placeholder="enter your address"><br>
      <input type="file" name="file_name"><br>
      <input type="submit" value="submit">
    </form>

  <?php 
   if(isset($_REQUEST["msg"])){
    echo $_REQUEST["msg?=wrong password"];
   }
  
  ?>
</body>
</html>