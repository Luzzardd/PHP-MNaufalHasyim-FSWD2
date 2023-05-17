<?php 
$conn = mysqli_connect("localhost","root","","pertemuan19");
if ( isset($_POST["submit"])){
     //mengambil data dari tiap elemen
        $gambar = $_POST["gambar"];
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $role = $_POST["role"];
        $alamat = $_POST["alamat"];

  //query insert data
    $query = "INSERT INTO mahasiswa(id,gambar,nama,email,phone,role,alamat) VALUES (null,'$gambar','$nama','$email',  $phone ,'$role','$alamat')";
    
    mysqli_query($conn, $query);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    <h1>Tambah Data</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="Email">
            </li>
            <li>
                <label for="phone">Phone :</label>
                <input type="text" name="phone" id="phone">
            </li>
            <li>
                <label for="role">Role :</label>
                <input type="text" name="role" id="role">

            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <label for="alamat">alamat :</label>
                <input type="text" name="alamat" id="alamat">
            </li>
            <li>
                <button type="submit" name="submit">Tambah</button>
            </li>
        </ul>

    </form>
    
</body>
</html>