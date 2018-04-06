<?php
  $title = "Intelligence Not Found";
?>

<!doctype html>
<html lang="en">
  <head>
    <?php include 'scripts/head.php' ?>
  </head>
  <body>
    <div id="divContent" class="container-fluid">
      <h1 id="h1Title">Intelligence Not Found</h1>
      <h4 id="h4Subtitle"><i>Landing Page</i></h4>
      <br>
      <button type="button" class="btn btn-outline-light" onclick="window.location.href='./applications.php'">Applications</button>
      <button type="button" class="btn btn-outline-light" onclick="window.location.href='./projects.php'">Projects</button>
      <button type="button" class="btn btn-outline-light" onclick="window.location.href='./team.php'">Team</button>
    </div>
    <footer class="footer">
      <div class="container">
        <span class="text-muted" style="color: white;">&copy; Intelligence Not Found 2017. Created by <a href="https://www.luketainton.co.uk">Luke Tainton,</a> part of the Intelligence Not Found team.</span>
      </div>
    </footer>
    <?php include 'scripts/footer.php' ?>
  </body>
</html>
