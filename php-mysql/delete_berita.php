<?php 
    include "koneksi.php";
    include "header.php";

if (isset($_GET['id']))
{
    $id_berita = $_GET['id'];
}
else
{
    die("Error. NO ID selected");
}
?>


<div id="main">
   <?php
    //    Proses delete berita
    
    if (!empty($id_berita) && $id_berita !="")
    {
        $query = "DELETE FROM berita WHERE id_berita='$id_berita'";
        $sql = mysql_query($query);
        if ($sql)
        {
            echo "<h2 class='judul'> Berita Berhasil Dihapus </h2>";
        }
        else
        {
            echo "<h2 class='judul'> Berita Gagal Dihapus </h2>";
        }
        echo "<p> Klik <a href='arsip_berita.php'>disini</a> Untuk kembali ke halaman Arsip Berita </p>";
    }
    else
    {
        die("Access Denied!");
    }
    ?>
    
</div>


<?php 
include "footer.php";
?>