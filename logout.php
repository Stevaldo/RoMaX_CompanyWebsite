<?php 
session_start();
$_SESSION = [];
session_destroy();
session_unset();

if(!isset($_SESSION["admin"])){
    echo "<script>
    document.location.href = 'login.php';
    </script>";
    exit;
}