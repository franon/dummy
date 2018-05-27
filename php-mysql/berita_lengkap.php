<?php 
    include "koneksi.php";
    include "header.php";

//Cek apakah ada parameter ID
if (isset($_GET['id']))
{
    $id_berita = $_GET['id'];
}
else 
{
    die("Error. NO ID Selected");
}

//ambil data berdasarkan parameter id

$query = "SELECT A.id_berita, B.nm_kategori, A.judul, A.isi, A.pengirim, A.tanggal FROM berita A, kategori B WHERE A.id_kategori = B.id_kategori && A.id_berita='$id_berita'";

$sql = mysql_query($query);

$hasil = mysql_fetch_array($sql);
$id_berita = $hasil['id_berita'];
$kategori = stripslashes($hasil['nm_kategori']);
$judul = stripslashes($hasil['judul']);
$isi = nl2br (stripslashes($hasil['isi']));
$pengirim = stripslashes($hasil['pengirim']);
$tanggal = stripslashes($hasil['tanggal']);
?>

<div id="main">
    <h2 class="judul">
        <?php echo $judul; ?>
    </h2>
    <small> Berita dikirimkan oleh <b><?php echo $pengirim; ?></b> pada tanggal <b><?php echo $tanggal; ?></b> dalam kategori <b> <?php echo $kategori; ?> </b> </small>
    <p>
        <?php echo $isi; ?>
    </p>
</div>

<?php include "footer.php" ?>
