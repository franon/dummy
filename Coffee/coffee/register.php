<div id="formku">


<form id="formdaftar" name="frm" action="index.php?hal=success" method="post">

<!-- nama -->
<div class="row-form">
  <div class="form-25">
    <label for="nama"> Nama </label>
  </div>
  <div class="form-75">
    <input type="text" id="nama" name="nama" placeholder="Masukkan Nama" class="required">
    
  </div>
</div>

<!-- email -->
<div class="row-form">
  <div class="form-25">
    <label for="email" > Email </label>
  </div>
  <div class="form-75">
    <input type="email" id="email" name="email" placeholder="Masukkan email" class="required">
    <span id="feedback"></span>
  </div>
</div>

<!-- Password -->
<div class="row-form">
  <div class="form-25">
    <label for="pass1" > Password </label>
  </div>
  <div class="form-75">
    <input type="password" id="pass1" name="pass1" placeholder="Masukkan Password!" class="required">
  </div>
</div>
<!-- Password -->
<div class="row-form">
  <div class="form-25">
    <label for="pass2" > Verification Password </label>
  </div>
  <div class="form-75">
    <input class="left" type="password" id="pass2" name="pass2" placeholder="Masukkan lagi password!" >
  </div>
</div>

<!-- Gender  -->
<div class="row-form">
  <div id="form-25">
    <label for="gender" > Jenis Kelamin </label>
  </div>
  <div id="form-75">
    <input type="radio" name="gender" value="P" checked>Pria &nbsp;&nbsp;
    <input type="radio" name="gender" value="W" checked>Wanita
  </div>
</div>


<!-- Kota -->
<div class="row-form">
  <div class="form-25">
    <label for="kota" > Kota </label>
  </div>
  <div class="form-75">
    <select id="kota" name="kota">
      <option value="Tangerang"> Tangerang </option>
      <option value="Jakarta"> Jakarta </option>
    </select>
  </div>
</div>

<div class="row-form">
<button class="button" value="submit" name="submit" style="vertical-align:middle;"> <span> Submit </span></button>
  <!-- <button class="button" style="vertical-align:middle" value="submit"> <input type="submit" name="submit" value="submit"> </button> -->
  <!-- <input type="submit" name="submit" value="submit">  -->
</div>
</form>




</div>