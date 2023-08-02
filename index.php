<?php
include './inc/db.php';
INCLUDE './inc/form.php';


$sql = 'SELECT * FROM users';
$result = mysqli_query($conn, $sql);

 //استدعاء المعلومات من القاعدة
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);


foreach($users as $user){

    //echo htmlspecialchars ($user['firstName']);

}

mysqli_free_result($result);
mysqli_close($conn)

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css"> 
   
    
    <title>Login</title>

</head>
<body>
<img src="./imge/logonav.png" alt="" class="logo">
  <div class="container">
    <form action="index.php" method="POST" class="login-box">
     

      <div class="user-box">
        <input type="text" name="firstName" id="firstName" required>
        <label for="firstName">First Name</label>
      </div>

      <div class="user-box">
        <input type="text" name="lastName" id="lastName" required>
        <label for="lastName">Last Name</label>
      </div>

      <div class="user-box">
        <input type="email" name="email" id="email" required>
        <label for="email">Email</label>
      </div>

      <div class="sub">
        <input type="submit" name="submit" value="Send">
      </div>
    </form>
  </div>




<script src="./login.js"></script>





 <?

if(isset($_GET['crime'])){
    $selected_crime = mysqli_real_escape_string($conn, $_GET['crime']);
    $sql = "SELECT * FROM prisoners WHERE crime = '$selected_crime'";
    $result = mysqli_query($conn, $sql);
}
?>
</body>
</html>