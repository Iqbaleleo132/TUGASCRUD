
<?php
require 'functions.php';
include 'functions.php';
require 'koneksi.php';
include 'koneksi.php';

$id= $_GET["id"];
$query = mysqli_query($conn, "DELETE FROM produk WHERE id_produk= '$id'");

if(hapusProduk($id) > 0){
    echo"
    <script type='text/javascript'>
        alert('Data Produk berhasil dihapus')
        window.location= 'dataproduk.php';
    </script>
    ";
}else{
    echo"
    <script type='text/javascript'>
        alert('Data Produk gagal dihapus')
        window.location= 'dataproduk.php';
    </script>
";
    
}


?>



