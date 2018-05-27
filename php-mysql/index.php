<?php 
    include "koneksi.php";
    include "header.php";
?>

<div id="main">
    <h3 class="judul"> Halaman Depan ~ 5 Berita Terbaru </h3>
    <?php 
        $query = "SELECT A.id_berita, B.nm_kategori,A.judul, A.headline, A.pengirim, A.tanggal FROM berita A, kategori B 
        WHERE A.id_kategori = B.id_kategori and A.status='publish' ORDER BY A.id_berita DESC LIMIT 0,5" ;
    
    $sql = mysql_query($query);
    while ($hasil = mysql_fetch_array($sql)){
        $id_berita = $hasil['id_berita'];
        $kategori = stripslashes($hasil['nm_kategori']);
        $judul = stripslashes($hasil['judul']);
        $headline = nl2br (stripslashes($hasil['headline']));
        $pengirim = stripslashes($hasil['pengirim']);
        $tanggal = stripslashes($hasil['tanggal']);
        
        //tampilkan berita
        echo " <h1 class='judulberita'><a href='berita_lengkap.php?id=$id_berita'>$judul</a></h1> ";
        echo " <small> Berita dikirimkan oleh <b>$pengirim</b> pada tanggal <b>$tanggal</b> dalam kategori <b>$kategori</b> </small> ";
        echo "<p>$headline</p>";
        echo "<hr>";
        
    }
    ?>
</div>

<?php include "footer.php" ?>
