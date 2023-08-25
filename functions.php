<?php

// $conn = mysqli_connect("sql204.epizy.com","epiz_30840786","qJ6ALDmD3DyF","epiz_30840786_romax");
$conn = mysqli_connect("localhost","root","","romax");

function query($query){
    global $conn;
    $result = mysqli_query($conn , $query);
    $row = [];
    while($rows = mysqli_fetch_assoc($result)){
        $row [] = $rows;
    }
    return $row;
}
function insert($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
function upload($query){
    $namaFile = $_FILES["$query"]["name"];
    $ukuranFile = $_FILES["$query"]["size"];
    $errorFile = $_FILES["$query"]["error"];
    $tmpFile = $_FILES["$query"]["tmp_name"];

    if($errorFile === 4){
        return false;
        die;
    };
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.' , $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar , $ekstensiGambarValid)){
        echo"<script> 
        alert ('Format Gambar yang dapat dipakai (jpg,jpeg dan png)( file $query)');
        </script>";
        return false;
    }
    if ($ukuranFile > 2000000){
        echo"<script> 
        alert ('Ukuran File terlalu besar (max 2mb)(file $query)');
        </script>";
        return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmpFile, 'img/' . $namaFileBaru);
    return $namaFileBaru;
}