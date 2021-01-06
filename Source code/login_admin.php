<?php 
session_start();

// cek apabila sudah login tapi mau masuk login lagi 
if(isset($_SESSION["loginadmin"])){
  header("location:admin.php");
  exit;
}

require'function.php';

// apakah tombol login sudah ditekan
  if( isset($_POST["loginadmin"]) ){

    $email_admin = $_POST["email_admin"];
    $password_admin = $_POST["password_admin"];

    $result = mysqli_query($conn, "SELECT * FROM login_admin WHERE email_admin ='$email_admin'");



    // cek username
    if(mysqli_num_rows($result) === 1 ) {

        // set session 
        $_SESSION["loginadmin"] = true;
        header("location:admin.php");
        exit;
      }

    $error = true;

  }



 ?>

<!DOCTYPE html>
<html>
<head>
  <title>login Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-widht, initial -scale=1.0">
  <link rel="stylesheet" type="text/css" href="login_admin.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=East+Sea+Dokdo&family=Lobster&family=Viga&display=swap" rel="stylesheet">
</head>
<body>
    <div id="card">
      <form action="" method="post">
        <div class="container">
            <h1>Login Admin</h1>
            <?php if(isset($error)) :?>
              <p style="color: red; font-style: italic;">email / password salah</p>
            <?php endif; ?> 
            <hr>
            <label for="email_admin"><b>Email</b></label>
            <input type="email" placeholder="Masukkan Username" name="email_admin" id="email_admin" required>

            <label for="password_admin"><b>Password</b></label>
            <input type="password" placeholder="Masukkan password" name="password_admin" id="password_admin" required>
          <button name="loginadmin" type="submit" class="registerbtn">Login</button> 
        </div>
      </form>
    </div>
</body>
</html>