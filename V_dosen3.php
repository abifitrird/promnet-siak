<!DOCTYPE html>
<html>
<head>
    <title>SIAK</title>
</head>
<body>
    <h2>Edit Data Dosen</h2>

    <!-- form inputan untuk merubah data pada database -->
    <form action="<?php echo site_url('C_Dosen/update/'.$db_siak['id_dosen']); ?>" method="POST">
        <!-- membaca data sebelumnya yang sudah ada di database -->
        <input type="text" name="nip" value="<?php echo $db_siak['nip']; ?>" >            
        <input type="text" name="nama" value="<?php echo $db_siak['nama']; ?>" >            
        <input type="text" name="matkul" value="<?php echo $db_siak['matkul']; ?>" >          
        
        <!-- tombol submit berfungsi untuk memproses data yang akan dirubah sesuai dengan inputan -->
        <button type="submit">EDIT</button> 
    </form>

    <br/>
    <br/>



</body>
</html>