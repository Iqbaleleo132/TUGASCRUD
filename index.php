<?php
        include 'koneksi.php';
        require 'koneksi.php';
?>
<html>
    <head>
    <title>Input Gambar</title>
    </head>
    <body>
        <h2>Tambahkan Produk Laptop</h2>
        <h3><a href="dataproduk.php">KLIK DISINI UNTUK MELIHAT DATA PRODUK</a></h3>
        <form action="" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Nama Produk</td>
                    <td>:</td>
                    <td><input type="text" name="NamaProduk"></td>
                </tr>

                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td><input type="text" name="Harga"></td>
                </tr>

                <tr>
                    <td>Stok</td>
                    <td>:</td>
                    <td><input type="text" name="Stok"></td>
                </tr>

                <tr>
                    <td>Foto</td>
                    <td>:</td>
                    <td><input type="file" name="Foto"></td>
                </tr>

                <tr>
                    <td>Deskripsi</td>
                    <td>:</td>
                    <td><input type="text" name="Deskripsi"></td>
                </tr>

                <tr>
                    <td><input type="submit" name="kirim"></td>
                </tr>
            </table>
        </form>

        <?php
        include 'koneksi.php';
        require 'koneksi.php';

        if(isset($_POST["kirim"])){
            $nama = $_POST ['NamaProduk'];
            $harga = $_POST ['Harga'];
            $stok = $_POST ['Stok'];
            $foto = $_FILES ['Foto']['name'];
            $sourcegm = $_FILES['Foto']['tmp_name'];
            $folder = 'Foto/';
            $desc = $_POST ['Deskripsi'];

            move_uploaded_file($sourcegm, $folder.$foto);
            $insert = mysqli_query($conn, "INSERT INTO produk VALUES(
                '',
                '$nama',
                '$harga',
                '$stok',
                '$foto',
                '$desc');");

        }else{

        };
         

?>
    </body>
</html>