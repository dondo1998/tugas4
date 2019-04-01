<?php
$koneksi = mysqli_connect 
			(
				"localhost",
				"id8194723_curd1",
				"12345678",
				"id8194723_curd"
			);
if (mysqli_connect_errno())
	{
		echo "Koneksi Gagal"
		.mysqli_connect_error();
	}
?>
