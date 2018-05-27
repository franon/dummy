<?php
include 'head.php';

 ?>

    <div id="main">


        <?php
if (isset($_GET['hal'])) {
  switch ($_GET['hal']) {
    case 'home':
      include 'home.php';
      break;

      case 'gallery':
        include 'gallery.php';
        break;

      case 'about':
        include 'about.php';
        break;

      case 'register':
        include 'register.php';
        break;

      case 'success':
        include 'success.php';
        break;
          
      case 'berita':
        include 'berita.php';
        break;
    
          case 'pengumuman':
        include 'pengumuman.php';
        break;
          
          
          case 'tips':
        include 'tips.php';
        break;
          
          case 'saran':
        include 'saran.php';
        break;
        

    default:
      include '404.php';
      break;
  }
  # code...
}

else {
  include 'home.php';
}
?>
    </div>

    <?php
include 'sidebar.php';
include 'footer.php';
 ?>