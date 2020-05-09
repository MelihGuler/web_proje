<?php
$kuladi = $_POST["username"];
$sifre = $_POST["password"];

if ($kuladi == "b171210009@sakarya.edu.tr" && $sifre == "1234") {
	echo "Hoşgeldiniz b171210009";
}
else {
	header("location: ../giris.php");
	die();
}
