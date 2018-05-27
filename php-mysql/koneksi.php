<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_pw1";

//koneksi ke mysql
$conn = mysql_connect($host,$user,$pass);

//jika koneksi berhasil, pilih database

if($conn)
{
    $pilihdb = mysql_select_db($db);
    
    //jika tidak berhasil pilih db , munculkan pesan error
    if (!$pilihdb)
    {
        die("Pemilihan database gagal".mysql_error());
    }
}
else 
{
    //jika koneksi gagal, tampilkan pesan error.
    die("Koneksi gagal".mysql_error());
}

?>