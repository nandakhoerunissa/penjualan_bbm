<?php
include("koneksi.php");

if(isset($_POST['tambah'])){
    $nik=$_POST['nik'];
    $jenis_kendaraan=$_POST['jenis_kendaraan'];

    $sql="INSERT INTO pembelian_bbm (nik,jenis_kendaraan) VALUES('$nik','$jenis_kendaraan')";
    $query=mysqli_query($koneksi,$sql);
}
else{
     ("akses dilarang");
}
?>