<!DOCTYPE html>
<html>
  <?php include "head.php"?>
  <body>
    <div class='wrap'>
    <?php include "header.php"?>
      <div class='container'>
        <div class="whitefill blackglow">
          <center><h2><span class='text-danger'>Deep Treble</span> Members</h2></center>
          <div class='row'>
            <?php
              $dir = 'members/';
              if (is_dir($dir)){
                $dh = php4_scandir($dir);
                $isLeft = True;
                foreach ($dh as $file) {
                  if ($file != '.' && $file != '..') {
                    $info = file_get_contents('members/' . $file . '/info');
                    echo "<div class='media col-sm-4 ";
                    if ($isLeft) {
                      echo "col-sm-offset-2'>";
                    } else {
                      echo "no-margin'>";
                    }
                    echo "<a class='pull-left' href='#'>
                      <img src='";
                    if (file_exists('members/' . $file . '/photo.jpg')) {
                      echo "members/" . $file . "/photo.jpg";
                    } else {
                      echo "missing_photo.jpg";
                    }
                    echo "' class='media-object' data-src='holder.js/80x80' alt='80x80' style='width: 80px; height: 80px;' color='black'>
                      </a>
                      <div class='media-body'>
                        <h4 class='media-heading'>" . $file . "</h4>
                        " . $info  . "
                      </div>
                      </div>";
                    if (!$isLeft) {
                      echo "</div><div class='whitespace'></div><div class='row'>";
                    }
                  }
                  $isLeft = !$isLeft;
                }
              }
            ?>
          </div>
          <div class='whitespace'></div>
        </div>
      </div>
      <div id='push'></div>
    </div>
    <?php include "footer.php"?>
    <!-- Javascript -->
    <?php include "ready.php"?>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>

