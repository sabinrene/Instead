<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Section Php </title>

    <script src="../../Public/JS/jquery-3.5.0.min.js"></script>

    <link rel="stylesheet" href="../../Public/CSS/Course/Section.css">
    <link rel="stylesheet" href="../../Public/CSS/Header.css">
    <link rel="stylesheet" href="../../Public/CSS/Footer.css">
    <link rel="stylesheet" type="text/css" href="../../Public/CSS/Trainee/TraineeMenu.css">
    <link rel="stylesheet" type="text/css" href="../../Public/CSS/Modals.css">
  </head>

<body>


  <?php include ("../../Pages/Header.php"); ?>
	<?php include ("../../Pages/Trainee/TraineeMenu.php"); ?>
  <?php include ("../../Pages/Modals.php"); ?>
  <input class="hide" type="text" id="logIn2" value="../../">
  <input id="page" class="hide" type="text" name="" value="Section">






    <div class="Banner">
        <div class="Banner-Txt"> <a id="tittleOnlineOrLive" href=""></a></div>
    </div>

    <div id="SecWrap" class="SecWrap">


     <div class="PCard">

        <div class="BoxOne">
          <div>
            <h4> [<span class="Live">Live</span>] SP3D Course </h4>
            <h5> Start Date: 15 July 2020 </h5>
            <p> SmartPlant Enterprise solution for the mining, port, power, pulp and paper industries,
            SmartPlant 3D Materials Handling Edition, to automate the design and modeling of
            bulk materials handling systems. SmartPlant 3D Materials Handling Edition automates
            the design of conveyor systems, processing facilities and transfer chutes to enable
            bulk materials industries to rapidly and easily... </p>
          </div>


          <a href="LiveDetail.php">
          <button class="PBtn"> Enroll </button>
          </a>

        </div>

        <div class="BoxTwo">
          <img src="../../Public/images/OnPipePics/Pic1.jpg">
        </div>

     </div>








    <div class="PCard">

        <div class="BoxOne">
          <div>
            <h4> [<span class="Live">Live</span>] Caesar II Course </h4>
            <h5> Start Date: 30 July 2020 </h5>
            <p> CAESAR II (Computer Aided Engineering Stress Analyzing Report) is a PC-based pipe
            stress analysis Engineering Software. This Software package is an engineering tool
            used in the mechanical design and analysis of piping systems. Besides the evaluation
            of a piping system's response to thermal, deadweight and pressure loads, CAESAR II
            analyzes the effects of wind, support settlement... </p>
          </div>


          <a href="LiveDetail.php">
          <button class="PBtn"> Enroll </button>
          </a>

        </div>

        <div class="BoxTwo">
          <img src="../../Public/images/OnPipePics/Pic2.jpg">
        </div>

     </div>


    </div>
    <!-- END Sec Wrap -->





    <?php include '../../Pages/Footer.php' ?>


    <script src="../../Public/JS/Course/Section2.js"></script>
    <script src="../../Public/JS/CRUD.js"></script>

</body>
</html>
