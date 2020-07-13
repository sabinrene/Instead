<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../../Public/CSS/Trainer/Trainer.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <script src="../../Public/JS/jquery-3.5.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../Public/CSS/Footer.css">
    <link rel="stylesheet" type="text/css" href="../../Public/CSS/Trainee/TraineeMenu.css">
  </head>
  <body>
    <div class="slide">
      <a class="links" href="#">
        <div class="text-links">Instead </div>
      </a>
      <a class="links" href="#">
        <img src="../../Public/images/01-Trainer/iconCourses.png" alt="">
        <div class="text-links">Courses</div>
      </a>

      <a class="links" href="#">
        <img src="../../Public/images/01-Trainer/iconTools.png" alt="">
        <div class="text-links">Settings</div>
      </a>


    </div>

<?php include ("../../Pages/Trainee/TraineeMenu.php"); ?>







  <!--  <h1>Courses</h1> -->

    <div class="Courses-search">
    <!--  <input class="icon-search"  type="text" placeholder="Search your courses" />
      <a class="btn-search" href="#"></a> -->
      <a id="newCourse" class="btn-new-course" href="#">New course</a>
    </div>


    <div id="coursePanel" class="bgCourse">

    </div>






<div id="modalCourse" class="modal">
  <div class="head-modal">
    <h4>Create course</h4>
    <img  id="close-signup" src="../../Public/images/close.png" alt="">
  </div>
  <div class="body">
    <br><br>
      <input class="courseNeme" type="text" id="courseTitle" placeholder="Course Name"  >
      <br>

      <select id="options">
      <option value="" disabled selected>Select a Module</option>
      <option value="Option 1">Technology</option>
      <option value="Option 2">Engineering</option>
      <option value="Option 3">Design</option>
      </select>

      <select id="choices">
      <option value="" disabled selected>Please select a Topic</option>
      </select>

      <input class="btn btn-signup"  id="saveCourse" type="submit" class="save" value="Create course" />
  </div>
</div>


















<?php include '../Footer.php' ?>


<script src="../../Public/JS/Trainer/Trainer.js"></script>
<script src="../../Public/JS/CRUD.js"></script>

  </body>
</html>
