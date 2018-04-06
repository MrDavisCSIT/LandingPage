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
      <h4 id="h4Subtitle"><i>The Team</i></h4>
      <br>
      <button type="button" class="btn btn-outline-light" onclick="window.location.href='./applications.php'">Applications</button>
      <button type="button" class="btn btn-outline-light" onclick="window.location.href='./projects.php'">Projects</button>
      <button type="button" class="btn btn-outline-light" style="background-color: white; color: black;" onclick="window.location.href='./'">Team</button>

      <div id="divServices" class="card-deck container-fluid service">

        <!-- Alexander Davis -->
        <div class="card" style="width: 20rem;">
          <img class="card-img-top" src="img/team/alexanderedavis.png" alt="Alexander Davis">
          <div class="card-body">
            <h4 class="card-title">Alexander Davis</h4>
            <p class="card-text">Lead Developer, Project Coordinator, PGCE Secondary Computer Science and IT Teacher Trainee, Christian, Uncle, Techician, Musican, 22...</p>
          </div>
          <div class="card-footer">
            <a href="https://www.alexedavis.com" class="btn btn-primary">Website</a>
          </div>
        </div>

        <!-- Luke Tainton -->
        <div class="card" style="width: 20rem;">
          <img class="card-img-top" src="img/team/luketainton.jpg" alt="Luke Tainton">
          <div class="card-body">
            <h4 class="card-title">Luke Tainton</h4>
            <p class="card-text">Lead Developer, Project Coordinator, Technical Director. </p>
          </div>
          <div class="card-footer">
            <a href="https://www.luketainton.co.uk" class="btn btn-primary">Website</a>
          </div>
        </div>

        <div class="card" style="width: 20rem;">
          <img class="card-img-top" src="img/team/lyalllyall.jpg" alt="Lyall Lyall">
          <div class="card-body">
            <h4 class="card-title">Lyall Lyall</h4>
            <p class="card-text">Code Monkey</p>
          </div>
          <div class="card-footer">
            <a href="https://www.alexanderdavis.tech" class="btn btn-primary">Website</a>
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
