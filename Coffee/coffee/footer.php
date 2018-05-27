
</div>



<!-- navbar -->
<script type="text/javascript">
$(document).ready(function(){
// $("#nav").css("position", "fixed");
$(window).scroll(function(e){
  var st = $(this).scrollTop();
  console.log(st);
  if (st > 630) {
    $("#nav").css("background-color", "#C09F8075");
    $("#nav").css("color", "#fff");
  } else {
    $("#nav").css("background-color", "transparent");
    $("#nav").css("color", "#000");
  }
})

$('#formdaftar').validate({
  rules:{
    email:{
      email:true
    },
    pass2:{
      equalTo:"#pass1"
    }
  },
  messages:{
    nama:{
      required:"Nama harus diisi"
    },
    email:{
      required:"Alamat Email harus diisi",
      email:"Format email tidak valid"
    },
    pass1:{
      required:"Password Harus diisi"
    },
    pass2:{
      equalTo:"Password Tidak Sama"
    }
  }

})

})
</script>

<div id="footer">
<h4>&copy 2018 Fox Coffee. Made with &#10084 By <a href="https://www.instagram.com/franolnsen/">Fran Olnsen || 1711500411</a></h4>

</div>

</body>
</html>
