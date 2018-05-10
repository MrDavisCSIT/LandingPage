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
      <button type="button" class="btn btn-outline-light" style="background-color: white; color: black;" onclick="window.location.href='./'">Projects</button>
      <button type="button" class="btn btn-outline-light" onclick="window.location.href='./team.php'">Team</button>

      <div id="divServices" class="card-deck container-fluid service">

        <ul class="projects">

        <li>
        <!-- Citation Needed -->
        <div class="card" style="width: 20rem;">
          <img class="card-img-top" src="img/projects/citationneeded.png" alt="Citation Needed">
          <div class="card-body">
            <h4 class="card-title">Citation Needed</h4>
            <p class="card-text">Our version of RefME, customised for the BCU style of Harvard Referencing.</p>
          </div>
          <div class="card-footer">
            <a href="https://github.com/IntelligenceNotFound/CitationNeeded" class="btn btn-primary">Source Code</a>
          </div>
        </div>
        </li>

        <li>
        <!-- Exam Buff or Exam Bluff -->
        <div class="card" style="width: 20rem;">
          <img class="card-img-top" src="img/projects/exambufforexambluff.png" alt="Exam Buff or Exam Bluff?">
          <div class="card-body">
            <h4 class="card-title">Exam Buff or Exam Bluff?</h4>
            <p class="card-text">I need to help my students revise for their exams… How do I do this?! They need to revise how to code and revise the theory… Why make an app in the language they learn… They look at the source code and play the game.</p>
          </div>
          <div class="card-footer">
            <a href="https://github.com/IntelligenceNotFound/BullHacks2.0-ExamBufforExamBluff" class="btn btn-primary">Source Code</a>
          </div>
        </div>
        </li>

        <li>
        <!-- NewsPush -->
        <div class="card" style="width: 20rem;">
          <img class="card-img-top" src="img/projects/newspush.png" alt="NewsPush">
          <div class="card-body">
            <h4 class="card-title">NewsPush</h4>
            <p class="card-text">NewsPush is a concept service with the intent of sending news updates to people’s mobile phones by text.</p>
          </div>
          <div class="card-footer">
            <a href="https://github.com/IntelligenceNotFound/HackTheMidlands2.0-NewsPush" class="btn btn-primary">Source Code</a>
          </div>
        </div>
        </li>

        <li class="clear"></li>

        <li>
        <!-- Society+ -->
        <div class="card" style="width: 20rem;">
          <img class="card-img-top" src="img/projects/societyplus.png" alt="Society+">
          <div class="card-body">
            <h4 class="card-title">Society+</h4>
            <p class="card-text">Student society management system.</p>
          </div>
          <div class="card-footer">
            <a href="https://github.com/IntelligenceNotFound/BrumHack6.0-SocietyPlus" class="btn btn-primary">Source Code</a>
          </div>
        </div>
        </li>

        <li>
        <!-- Sort.AI -->
        <div class="card" style="width: 20rem;">
          <img class="card-img-top" src="img/projects/sortai.png" alt="Sort.AI">
          <div class="card-body">
            <h4 class="card-title">Sort.AI</h4>
            <p class="card-text">Sort.AI is an Windows service concept that sorts your files automatically using the Google Natural Language API.</p>
          </div>
          <div class="card-footer">
            <a href="https://github.com/IntelligenceNotFound/BullHack1.0-Sort.AI" class="btn btn-primary">Source Code</a>
          </div>
        </div>
        </li>

        <li>
        <!-- TaskMaster -->
        <div class="card" style="width: 20rem;">
          <img class="card-img-top" src="img/projects/taskmaster.jpg" alt="Task Master">
          <div class="card-body">
            <h4 class="card-title">Task Master</h4>
            <p class="card-text">A creation of a business aimed task and project management system.</p>
          </div>
          <div class="card-footer">
            <a href="https://github.com/IntelligenceNotFound/BrumHack5.0-TaskMaster" class="btn btn-primary">Source Code</a>
          </div>
        </div>
        </li>

        <li class="clear"></li>

        </ul>

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
