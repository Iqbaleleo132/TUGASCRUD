
<?php

require 'koneksi.php';

$conn = mysqli_query($conn, "SELECT * FROM produk");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<a href=""></a>
<body>
    <div class="main col-10 my-4">
        <h2>Data Produk</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i= 1; ?>
                <?php while($data = mysqli_fetch_array($conn)) : ?>
                <tr>
                    <th scope="row" class="align-middle"><?= $i; ?></th>
                    <td class="align-middle"><?= $data["NamaProduk"]; ?></td>
                    <td class="align-middle"><?= $data["Harga"]; ?></td>
                    <td class="align-middle"><?= $data["Stok"]; ?></td>
                    <td><img src="Foto/<?= $data["Foto"]; ?>" class="image-table" alt="" width="80px"></td>
                    <td class="align-middle"><?= $data["Deskripsi"]; ?></td>
                    <td>
                        <button type="button" class="btn btn-success"><a href="hapusproduk.php" >Hapus</a></button>
                        <button type="button" class="btn btn-danger"><a href="">Edit</a></button>
                    </td>
                </tr>
                <?php $i++; ?>
                <?php endwhile ;?>
            </tbody>
        </table>
    </div>
</body>
</html>