<?php 
require 'functions.php';

$id = $_GET["id"];

if(insert("DELETE FROM project WHERE id = $id")>0){
    echo "<script>
    alert('Proyek Berhasil Dihapus!');
    document.location.href = 'projects.php';
    </script>";
}else {
    echo "<script>
    alert('Proyek Gagal dihapus!');
    document.location.href = 'projects.php';
    </script>";
};

