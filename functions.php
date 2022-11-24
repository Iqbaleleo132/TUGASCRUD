<?php

require 'koneksi.php';

function query($query){
    global $conn;

    $rows = [];
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambahUser($data){
    global $conn;
    $NamaProduk = $data["NamaProduk"];
    $Harga = $data["Harga"];
    $Stok = $data["Stok"];
    $Foto = $data["Foto"];
    $Deskripsi = $data["Deskripsi"];
    $query = "INSERT INTO produk VALUES(NULL, '$NamaProduk', '$Harga', '$Stok', '$Foto', '$Deskripsi')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
} 

function hapusProduk($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM produk WHERE id_produk= '$id'");

    return mysqli_affected_rows($conn);
}
function editUser($data){
    global $conn;

    $id = $data["id_produk"];
    $NamaProduk = htmlspecialchars($data["NamaProduk"]);
    $Harga = htmlspecialchars($data["Harga"]);
    $Stok = htmlspecialchars($data["Stok"]);
    $roles = htmlspecialchars($data["roles"]);

    $query = "UPDATE user SET
    NamaProduk = '$NamaProduk', Harga = '$Harga', Stok = '$Stok', roles = '$roles'
    WHERE id_user = '$id'
    ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function tambahproduk($data){
    global $conn;

    $NamaProduk = htmlspecialchars($data["NamaProduk"]);
    $Harga = htmlspecialchars($data["Harga"]);
    $Stok = htmlspecialchars($data["Stok"]);
    $Foto = $_FILES["Foto"];
    $Deskripsi = htmlspecialchars($data["Deskripsi"]);

    $query = "INSERT INTO produk VALUES('$NamaProduk', '$Harga', '$Stok', '$Foto',  '$Deskripsi')";
    move_upload_file($_FILES, ('Foto').$Foto);

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>