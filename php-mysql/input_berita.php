<?php 
include "koneksi.php";
include "header.php";

//proses input berita
if(isset($_POST['simpan'])){
    $judul = addslashes(strip_tags($_POST['judul']));
    $kategori = $_POST['kategori'];
    $headline = addslashes($_POST['headline']);
    $isi_berita = addslashes($_POST['isi']);
    $pengirim = addslashes(strip_tags($_POST['pengirim']));
    $status = $_POST['status'];
    
    //insert ke tabel
    $query = "INSERT into berita values ('','$kategori','$judul','$headline','$isi_berita','$pengirim',now(),'$status')";
    $sql = mysql_query($query);
    if ($sql)
    {
        $info = "<div class='berhasil'>Berita Berhasil ditambahkan </div> ";
        
    }
    else 
    {
        $info = "<div class='gagal'>Berita gagal ditambahkan </div> ";
   
    }
}

?>


<link rel="stylesheet" type="text/css" href="js/jquery.cleditor.css">
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery.cleditor.min.js"></script>
<script>
    $(document).ready(function() {
        $("#headline,#isi").cleditor();
    });

</script>

<div id="main">
    <h3 class="judul"> Input Berita</h3>
    <?php if (isset($info)) echo $info; ?>
    <form action="" method="post" name="input">
        <table cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td width="200">Judul Berita</td>
                <td> : <input type="text" name="judul" id="judul" placeholder="Input judul berita" required> </td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td> :<select name="kategori" id="kategori" required>
                        <option value="">Pilih</option>
                        <?php 
                            $query = "SELECT id_kategori, nm_kategori FROM kategori ORDER BY nm_kategori";
                            $sql = mysql_query($query);
                            while($hasil = mysql_fetch_array($sql))
                            {
                                echo "<option value = '$hasil[id_kategori]'>$hasil[nm_kategori]</option>";           
                            }
                        ?>
                        
                    </select>
                </td>
            </tr>

            <tr>
                <td>Headline Berita</td>
                <td> : <textarea name="headline" id="headline" cols="50" rows="4" placeholder="input headline berita" required> </textarea>
                </td>
            </tr>

            <tr>
                <td>Isi Berita</td>
                <td> : <textarea name="isi" id="isi" cols="50" rows="4" placeholder="input isi berita"> </textarea>
                </td>
            </tr>

            <tr>
                <td>Pengirim</td>
                <td> : <input type="text" name="pengirim" id="pengirim" maxlength="15" size="20" placeholder="Nama Pengirim" required> </td>
            </tr>

            <tr>
                <td>Status</td>
                <td> : <select name="status" id="status">
                    <option value="publish">Publish</option>
                    <option value="draft"> Draft </option>
                </select> </td>
            </tr>

            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;&nbsp;
                    <input type="submit" name="simpan" id="simpan" value="Input Berita"> &nbsp;
                    <input type="reset" name="reset" id="reset" value="cancel">
                </td>

            </tr>
        </table>

    </form>

</div>


<?php include"footer.php"; ?>
