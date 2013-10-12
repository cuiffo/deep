<!DOCTYPE html>
<html>
  <?php include 'head.php'?>
  <body>
    <div class='wrap'>
    <?php include 'header.php'?>
      <div class='container'>
        <div class="whitefill blackglow">
          <div id="myCarousel" class="carousel slide">
            <?php
              $folder = 'sliderImages/';
              if (is_dir($folder)){
                $images = php4_scandir($folder);
                $size = count($images);
                //Create Indicators.
                echo "<ol class='carousel-indicators'>";
                $i = 0;
                foreach ($images as $image) {
                  if ($image != '.' && $image != '..') {
                    echo "<li data-target='#myCarousel' data-slide-to='" . $i . "' class='";
                    if ($i === 0) {
                      echo "active";
                    }
                    echo "'></li>";
                    $i++;
                  }
                }
                echo "</ol>";

                //Create contents.
                echo "<div class='carousel-inner'>";
                $i = 0;
                foreach ($images as $image) {
                  if ($image != '.' && $image != '..') {
                    echo "<div class='item";
                    if ($i === 0) {
                      echo " active";
                    }
                    echo "'>
                      <center><img class='banner' src='dt.jpg' alt=''></center>
                      </div>";
                    $i++;
                  }
                }
                echo "</div>";
              }
            ?>
            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
          </div>

          <div class='row'>
            <div class='col-sm-4'><br>
              <div class="hero-unit">
                <h3>Upcoming Events</h3>
                <?php
                  $dir = 'events/';
                  if (is_dir($dir)){
                    $dh = php4_scandir($dir);
                    $size = count($dh);
                    $i = 0;
                    foreach ($dh as $file) {
                      ++$i;
                      if ($file != '.' && $file != '..') {
                        $info = file_get_contents('events/' . $file);
                        echo "<h5><br>" . $file . "</h5>";
                        echo "<h6>" . $info;
                        if ($i !== $size) {
                          echo "<br><br>";
                        }
                        echo "</h6>";
                      }
                    }
                  }
                ?>
              </div>
            </div>
            <div class='col-sm-8'>
            <center><h2><span class='text-danger'>Deep Treble</span> Homepage</h2></center>
              <h4>Sixteen years ago, a few good men and women embarked upon a journey that would change their lives (and hundreds of others) forever. That's right, it's the 16th anniversary of Deep Treble, Rutgers University's first contemporary A Cappella group! Winners of multiple ICCA Awards over the years, Deep Treble is ecstatic to be able to continue to entertain audiences worldwide with their variety of song selection and invigorating choreography. If you want to contact Deep Treble in regards to a performance, please do so at <a href='mailto:rudeeptreble@gmail.com'>rudeeptreble@gmail.com</a>! We love performing, and if we're available, we'd love to sing for you, too!</h4>
              <h4>In this website, you can explore the current members and alumni profiles as well as view some of the most up to date information about us. Enjoy!</h4>
            </div>
          </div>
        </div>
      </div>
      <div id='push'></div>
    </div>
    <?php include "footer.php"?>
    <!-- Javascript -->
    <?php include "ready.php"?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>

