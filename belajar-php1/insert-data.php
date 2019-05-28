<?php
	include "koneksi.php";

	$sql = "INSERT INTO user
	(
		id,
		nama,
		role,
		availability,
		age,
		location,
		years_expereince,
		email
) VALUE 
(
	'1',
	'Hari Setiawan',
	'Barista',
	'Full Time',
	'17',
	'Jakarta',
	'3',
	'setiawanhari1928@gmail.com'
)";

	if($koneksi->query($sql) == TRUE){
		echo "Insert data telah berhasil";
	} else {
		echo "Insert data gagal";
	}
?>
