<?php 
session_start();
require 'functions.php';

$passcon = -1;
$usercon = -1;

if(isset($_POST["login"])){
  $username = htmlspecialchars(strtolower(stripslashes($_POST["username"])));
  $password = htmlspecialchars(strtolower(stripslashes($_POST["password"])));
  $result = query("SELECT * FROM registrasi WHERE username = '$username'");
   if(insert("SELECT * FROM registrasi WHERE username = '$username'")>0){
    if(insert("SELECT * FROM registrasi WHERE password = '$password'")>0){
      $_SESSION["admin"] = true;
      echo "<script> 
            document.location.href = 'index.php';
            </script>";
    }
    else{
      $passcon = 3;
    }
   }
   else{
     $usercon = 3;
   }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <title>Login Page</title>
  </head>
  <body>
    <div class="bg-dark container-fluid vw-100 vh-100">
      <div class="row justify-content-center">
        <div
          class="col-9 col-xl-3 col-lg-4 col-md-5 col-sm-6 d-flex justify-content-center align-items-center flex-column p-5 rounded border"
          style="margin-top: 25vh; background-color: rgb(133, 133, 133)"
        >
        <form action="" method="post">
          <p class="fs-5 text-white fw-bold mb-1">Username</p>
          <input type="text" class="bg-dark text-white px-3" name="username" required/>
          <p class="fs-5 text-white fw-bold mb-1 mt-3">Password</p>
          <input type="password" class="bg-dark text-white px-3" name="password" required/>
          <br>
          <button type="login" name="login" class="mt-3 btn btn-dark">
            Login
          </button>
          <?php if($usercon > 0 || $passcon > 0) :?>
          <p class="mt-3 text-danger fw-bold">Data tidak sesuai</p>
          <?php else: ?>
            <p class="mt-3 text-success fw-bold">Silakan Masukkan Data</p>
            <?php endif; ?>
        </form>
          
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
