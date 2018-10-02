<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>
<form  method="POST">
	<center>
		<h1> Pendaftaran Mahasiswa </h1>
	<table>
		<tr>
			<td>Nim</td>
			<td>:</td>
			<td><input type="number" name="nim" required></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" required></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="Email" name="Email" value ="@gmail.com" required></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="simpan">

	</table>
</center>

</form>

<?php
include_once 'koneksi.php';
if (isset($_POST["submit"])) {
	 $nim = $_POST["nim"];
	 $nama = $_POST["nama"];
	 $email = $_POST["Email"];
 /*if (strlen($_POST['nim']) !=10 && strlen($_POST['nama']) > 25) {
 	echo "Nim harus 10 karakter atau nama huruf dengan maksimal 25 karakter";
 	# code...
 }*/
 /*else{*/
	/*$masuk = mysqli_query($koneksi,"INSERT INTO  mahasiswa VALUES($nim,'$nama','$email')");
 	if ($masuk) {
	 	
	 	echo "pendaftaran berhasil";

	//}
	}*/

	$query = "INSERT INTO mahasiswa VALUES($nim,'$nama','$email')";
	$sql = mysqli_query($con,$query);
	if ($sql) {
		echo "Berhasil";
	}else {
		echo "Gagal";
	}

}

?>


</body>
</html>
