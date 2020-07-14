<?php
/*--------------------------------- logout -----------------------------------*/
    if ($_POST['type']=="logOut") {
      session_start();
      session_unset();
      session_destroy();
    }
/*----------------------------- verify Session -------------------------------*/
    elseif ($_POST['type']=="verifySession") {
      session_start();
      echo json_encode (array(0=>$_SESSION["courseLandingPage"],1=>$_SESSION["curriculum"],2=>isset($_SESSION["idUser"]),3=>$_SESSION["userType"]));
    }
/*----------------------- setIdCourse in trainer -----------------------------*/
    elseif ($_POST['type']=="setIdCourse") {
      session_start();
      $_SESSION["idCourse"] = $_POST['idCourse'];
      $_SESSION["courseLandingPage"]="display";
      $_SESSION["curriculum"]="none";
    }
/*----------------------- setIdCourse in trainer -----------------------------*/
    elseif ($_POST['type']=="setCurriculumCourseLandingPage") {
      session_start();
      $_SESSION["courseLandingPage"]=$_POST['courseLandingPage'];
      $_SESSION["curriculum"]=$_POST['curriculum'];
    }
/*----------------------- setBuyCourseOrCourses in checkout -----------------------------*/
    elseif ($_POST['type']=="setBuyCourseOrCourses") {
      session_start();
      $_SESSION["BuyCourseOrCourses"]=$_POST['value'];

    }
    elseif ($_POST['type']=="getBuyCourseOrCourses") {
      session_start();
      echo $_SESSION["BuyCourseOrCourses"];
    }
/*----------------------- set online or live course -----------------------------*/
elseif ($_POST['type']=="setliveOrOnline") {
  session_start();
  $_SESSION["liveOrOnline"]=$_POST['name'];
}

/*----------------------- set online or live course -----------------------------*/

elseif ($_POST['type']=="getliveOrOnline") {
  session_start();
  echo $_SESSION["liveOrOnline"];
}

/*----------------------- save idCourses for payments in shopping Cart -----------------------------*/

elseif ($_POST['type']=="setIdCourses") {
  session_start();
  $_SESSION['idCourses'] = "";
    unset($_SESSION['idCourses']);


  $idCourses = json_decode(stripslashes($_POST['idCourses']));
  $_SESSION["idCourses"]=$idCourses;

/*
$data = json_decode(stripslashes($_POST['data']));

  // here i would like use foreach:

  foreach($data as $d){
     echo $d;
  }
*/
}

elseif ($_POST['type']=="getIdCourses") {
  session_start();
  echo json_encode( $_SESSION["idCourses"]);


/*
$data = json_decode(stripslashes($_POST['data']));

  // here i would like use foreach:

  foreach($data as $d){
     echo $d;
  }
*/
}

//














    /**/
?>
