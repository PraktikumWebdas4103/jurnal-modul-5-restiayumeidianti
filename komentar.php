<?php
<form action="" method="POST">
	<center>
		<table>
		<tr>
		<td> Inputkan Kata </td>
		<td> : </td>
		<td><input type="text" name="kata"></td>
		<td><input type="submit" name="submit" value="simpan">
	</tr>

</center>
</table>
</form>

<?php
if (isset($_POST['submit'])) {
	$kata = $_POST['kata'];
	$jmlh = str_word_count($kata);

	if (str_word_count($_POST['kata']) < 5) {
		echo "Komentar harus lebih dari 5 kata";
	}
	else{
		$kata = $_POST['kata'];
		echo "Jumlah kata : $jmlh.</br>";
	}
}
?>
