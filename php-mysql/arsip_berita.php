<?php
    include "koneksi.php";
    include "header.php";
?>


    <div id="main">
        <script>
            function tanya() {
                if (confirm("Apakah anda yakin akan menghapus berita ini ?")) {
                    return true;
                } else {
                    return false;
                }
            }

        </script>
        <h2 class="judul"> Arsip Berita </h2>
        <ol>
            <?php
        $query = "SELECT A.*, B.nm_kategori FROM berita A, kategori B WHERE A.id_kategori=B.id_kategori ORDER BY A.id_berita DESC LIMIT 0,5";
        $sql = mysql_query($query);
        while ($hasil = mysql_fetch_array($sql)){
            $id_berita = $hasil['id_berita'];
            $kategori = stripslashes($hasil['nm_kategori']);
            $judul = stripslashes($hasil['judul']);
            $headline = nl2br (stripslashes($hasil['headline']));
            $pengirim = stripslashes($hasil['pengirim']);
            $tanggal = stripslashes($hasil['tanggal']);
            $status = stripslashes($hasil['status']);
            
            
            //tampilkan berita
            
            echo "<li>";
            echo "<p class='judulberita'><a href='berita_lengkap.php?id=$id_berita'>$judul</a></p>";
            echo " <small> Berita dikirimkan oleh <b>$pengirim</b> pada tanggal <b>$tanggal</b> dalam kategori <b>$kategori</b> </small> ";
            echo "<br>Status <b>$status</b> | <b>Action :</b> <a href='edit_berita.php?id=$id_berita'>Edit</a> | ";
            echo "<a href='delete_berita.php?id=$id_berita' onClick='return tanya()'> Delete </a>";
            echo "</small></li>";
    }//tutup perulangan
        ?>
        </ol>


    </div>
<?php include "footer.php"; ?>