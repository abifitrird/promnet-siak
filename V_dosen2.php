<!DOCTYPE html>
<html>
<head>
	<title>SIAK</title>
</head>
<body>

	<!-- menambah data mahasiswa -->
	<h2>Tambah Data Dosen</h2>
	<form action="<?php echo site_url('C_Dosen/insert'); ?>" method="POST">
		<input type="text" name="nip" placeholder="NIP">	
		<input type="text" name="nama" placeholder="Nama Dosen">
		<input type="text" name="matkul" placeholder="Mata Kuliah">
		<button type="submit">TAMBAH DATA</button>	
	</form>

	<br/>
	<br/>


</body>
</html>