<?php
error_reporting(E_ALL^E_DEPRECATED);
	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "orderangkringan";
	
$kon = mysqli_connect($host,$user,$pass);
if (!$kon)
	die("gagal koneksi...");
	
$hasil = mysqli_select_db($kon, $dbname);
if (!$hasil){
	$hasil = mysqli_query($kon,"CREATE DATABASE $dbname");
	if (!$hasil) 
	die("gagal buat database");
	else
	$hasil = mysqli_select_db($kon, $dbname);
	if (!$hasil)
	die("gagal konek database");
}
echo "KONEKSI DATABASE BERHASIL";
$sqlTabelBarang = "create table if not exists barang (
				idbarang int auto_increment not null primary key,
				nama varchar(40) not null,
				harga int not null default 0,
				stok int not null default 0,
				foto varchar(70) not null default '',
				KEY (nama))";
mysqli_query ($kon, $sqlTabelBarang) or die ("Gagal Buat Tabel Barang");
echo "Tabel barang Siap <hr/>";
?>
