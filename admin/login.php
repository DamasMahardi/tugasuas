<?php


$title="Login";
$error=null;
include_once 'koneksi.php';




if(isset($_POST['login'])){ #print_r($_POST); //die();
  $user=$_POST['username'];
  $passwd= $_POST['password'];
  $sql = "SELECT * FROM login WHERE username='{$user}' AND password='{$passwd}'";
  $result = mysqli_query($conn, $sql); #print_r($result);
  if($result && $result->num_rows > 0){
    session_start();
    $_SESSION['isLogin'] =1;
    header('location: index.php');
    exit();
  }else
     $error = "Username atau Password ssalah.";
}



 ?>
<!DOCTYPE html>
<html>
<head>
  <link href="style.css" type="text/css" rel="stylesheet" />
  <title>Halama login</title>
</head>
<body>
 
  
   <!-- ini adalah container -->
    <div id="container">
      <!-- membuat header -->
      <header>
        <div class="entry">
          <h2>Halaman Login</h2>

        </div>
      </header>

  <form action="login.php" method="post">

    <?php if(isset($error)) echo $error; ?>
    
        
    <div class="input">     
         <label for="username">Username</label>
         <input type="text" name="username" id="username">
   </div> 
   <div class="input">
          <label for="password">Password</label>
          <input type="password" name="password" id="password">
      </div>
      <div class="submit">
         <button class="btn btn-large" type="submit" name="login">Login</button>
  </div>
    </header>
       </div>
  </form>

</body>
</html>
