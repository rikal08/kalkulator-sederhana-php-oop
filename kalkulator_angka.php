<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator Sederhana</title>
</head>
<body>
	<!-- form input -->
	<form action="" method="POST">
		<table align="center">
			<tr>
				<td>Bilangan 1</td>
				<td>:</td>
				<td><input required="" style="width: 200px; height: 20px" type="" name="bilangan1"></td>
			</tr>
			<tr>
				<td>Bilangan 2</td>
				<td>:</td>
				<td><input required="" style="width: 200px; height: 20px" type="" name="bilangan2"></td>
			</tr>
		</table>
		<table align="center">
				<tr>
				<td><input type="submit" name="tambah" value="Tambah"></td>
				<td><input type="submit" name="kurang" value="Kurang"></td>
				<td><input type="submit" name="bagi" value="Bagi"></td>
				<td><input type="submit" name="kali" value="Kali"></td>
				<td><input type="submit" name="modulus" value="Modulus"></td>
				</tr>	
		</table>

	</form>
<!--  proses -->
<?php 	
if (isset($_POST['bilangan1'])) {
	$bilangan1 = $_POST['bilangan1'];
	$bilangan2 = $_POST['bilangan2'];
	// inisialisasi varibael
	$hasil = KALKULATOR($bilangan1,$bilangan2);
	// output
	echo "<h3 align='center'>Hasil</h3>";
	echo "<h2 style='color:red' align='center'>$hasil</h2><br>";
}
// function
	function KALKULATOR($bilangan1,$bilangan2) 
	{
		if (isset($_POST['tambah'])) {
			$hitung = $bilangan1 + $bilangan2;
		}else if (isset($_POST['kurang'])) {
			$hitung = $bilangan1 - $bilangan2;
		}else if (isset($_POST['bagi'])) {
			$hitung = $bilangan1 / $bilangan2;
		}else if (isset($_POST['kali'])) {
			$hitung = $bilangan1 * $bilangan2;
		}else if (isset($_POST['modulus'])) {
			$hitung = $bilangan1 % $bilangan2;
		}else{
			$hitung = "silahkan masukan angka";
		}
		// kemablikan hasil perhitungan

		return $hitung;

	}



 ?>

</body>
</html>