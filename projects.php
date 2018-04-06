<?php
  $title = "Projects | Intelligence Not Found";
?>

<!doctype html>
<html lang="en">
  <head>
    <?php include 'scripts/head.php' ?>
  </head>
  <body>
    <div id="divContent" class="container-fluid">
      <h1 id="h1Title">Intelligence Not Found</h1>
      <h4 id="h4Subtitle"><i>Project Directory</i></h4>
      <br>
      <button type="button" class="btn btn-outline-light" onclick="window.location.href='./applications.php'">Applications</button>
      <button type="button" class="btn btn-outline-light" style="background-color: white; text-color: black;" onclick="window.location.href='./'">Projects</button>
      <button type="button" class="btn btn-outline-light" onclick="window.location.href='./team.php'">Team</button>

      <div id="divServices" class="card-deck container-fluid service">

        <!-- Citation Needed -->
        <div class="card" style="width: 20rem;">
          <img class="card-img-top" src="img/projects/citationneeded.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Citation Needed</h4>
            <p class="card-text">Our version of RefME, customised for the BCU style of Harvard Referencing.</p>
          </div>
          <div class="card-footer">
            <a href="https://citation-needed.net" class="btn btn-primary">Go</a>
          </div>
        </div>

      </div> <!-- End Services Wrapper div -->


    </div>
    <footer class="footer">
      <div class="container">
        <span class="text-muted" style="color: white;">&copy; Intelligence Not Found 2018. Created by <a href="https://www.luketainton.co.uk">Luke Tainton,</a> part of the Intelligence Not Found team. | Powered by ADCM Cloud</span>
      </div>
    </footer>
    <?php include 'scripts/footer.php' ?>
  </body>
</html>
