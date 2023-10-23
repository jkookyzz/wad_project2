<!DOCTYPE html>
<html>
<head>
	<title>latihan2_php</title>
</head>
<body>
	<h1>Calculator</h1>
	<form method="POST" action="">
		Input angka 1: <input type="text" name="angka1"><br>
		Input angka 2: <input type="text" name="angka2"><br>
		<select class="opt" name="operasi">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">x</option>
				<option value="bagi">/</option>
		</select>
		<input type="submit" name="hitung" value="Hitung" class="tombol">
	</form>
	<?php
	if (isset ($_POST['hitung'])){
		$angka1 = $_POST['angka1'];
		$angka2 = $_POST['angka2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $angka1+$angka2;
			break;
			case 'kurang':
				$hasil = $angka1-$angka2;
			break;
			case 'kali':
				$hasil = $angka1*$angka2;
			break;
			case 'bagi':
				$hasil = $angka1/$angka2;
			break;			
		}

	}
	?>
	<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>	
</body>
</html>
