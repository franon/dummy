<link rel="stylesheet" type="text/css" href="js/jquery.cleditor.css">
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery.cleditor.js"></script>


<script>
    $(document).ready(function() {
        $("#headline, #isi").cleditor();

    });

</script>
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
    
    //Proses edit berita jika diklik tombol edit
    if (isset($_POST['edit']))
    {
        $id_berita = $_POST['hidbrita'];
        $judul = addslashes(strip_tags($_POST['judul']));
        $kategori = $_POST['kategori'];
        $status = $_POST['status'];
        $headline = addslashes($_POST['headline']);
        $isi_berita = addslashes($_POST['isi']);
        $pengirim = addslashes(strip_tags($_POST['pengirim']));
        
        //update berita
        $query = "UPDATE berita SET id_kategori = '$kategori', judul = '$judul', headline = '$headline',
         isi = '$isi_berita', pengirim = '$pengirim ', status = '$status' WHERE id_berita = '$id_berita'";
        
        $sql = mysql_query($query);
        if ($sql)
        {
            $info = "<div class='berhasil'>Berita Berhasil diubdah </div> ";
        
        }
        else 
        {
            $info = "<div class='gagal'>Berita gagal diubah </div> ";
   
        }
}
    
    //ambil data berita sesuai id_berita
    $query = "SELECT * FROM berita WHERE id_berita = '$id_berita'";
    $sql = mysql_query($query);
    $hasil = mysql_fetch_array($sql);
    $id_berita = $hasil['id_berita'];
    $id_kategori = stripslashes($hasil['id_kategori']);
    $judul = stripslashes($hasil['judul']);
    $headline = stripslashes($hasil['headline']);
    $isi = stripslashes($hasil['isi']);
    $pengirim = stripslashes($hasil['pengirim']);
    $tanggal = stripslashes($hasil['tanggal']);
    $status = stripslashes($hasil['status']);
?>

<div id="main">
    <h3 class="judul">Edit Berita</h3>
    <?php 
            if (isset($info)) echo $info;?>
    <form action="" method="post" name="input">
        <table cellpading="0" cellspacing="0" border="0" width="700">
            <tr>
                <td width="200">Judul Berita</td>
                <td> :<input type="text" name="judul" size="50" maxlength="100" id="judul" value="<? echo $judul; ?>" required>
                </td>
            </tr>

            <tr>
                <td>Kategori</td>
                <td> :
                    <select name="kategori" id="kategori" required>
                        <option value="">Pilih</option>
                        <?php 
                            $query = "SELECT id_kategori, nm_kategori FROM kategori ORDER BY nm_kategori";
                            $sql = mysql_query($query);
                            while($hasil = mysql_fetch_array($sql))
                            {
                                $selected = ($hasil['id_kategori']==$id_kategori) ? "selected": "";
                                echo "<option value = '$hasil[id_kategori]' $selected>$hasil[nm_kategori]</option>";           
                            }
                        ?>                        
                    </select>
                </td>
            </tr>

            <tr>
                <td>Headline Berita</td>
                <td> : <textarea name="headline" id="headline" cols="50" rows="4" required> <?php echo $headline; ?> </textarea>
                </td>
            </tr>

            <tr>
                <td>Isi Berita</td>
                <td> : <textarea name="isi" id="isi" cols="50" rows="4" required> <?php echo $isi; ?>  </textarea>
                </td>
            </tr>
            
            <tr>
                <td>Pengirim</td>
                <td> : <input type="text" name="pengirim" id="pengirim" maxlength="15" size="20" required value="<?php echo $pengirim; ?>"> </td>
            </tr>

            <tr>
                <td>Status</td>
                <td> : <select name="status" id="status">
                    <option value="publish" <?php if ($status=='publish') echo 'selected'; ?>>Publish</option>
                    <option value='draft' <?php if ($status=='draft') echo 'selected'; ?>>Draft</option>
                </select> </td>
            </tr>
            
            <tr>
                <td>&nbsp;</td>
                <td>
                    <input type="hidden" name="hidberita" value=" <?php echo $id_berita; ?>">
                    <input type="submit" name="edit" value="Edit Berita"> &nbsp;
                    <input type="reset" name="reset" value="cancel">
                </td>

            </tr>


        </table>


    </form>

</div>


<?php include "footer.php" ?>