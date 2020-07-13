<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Live Course Detail </title>

    <script src="../../Public/JS/jquery-3.5.0.min.js"></script>
    <link rel="stylesheet" href="../../Public/CSS/Course/LiveDetail.css">
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
<input id="page" class="hide" type="text" name="" value="">




    <div class="Banner">
        <div class="Banner-Txt"> <a href="../../index.php">Live Course Detail</a></div>
    </div>




    <div class="Live-SecWrap">

        <div class="Live-TwoCols clearfix">

            <div class="Live-SecL">
                <div class="CourseTitle"> <h2 id="courseTitle">  </h2> </div>

                <div id="description" class="Description">


                </div>
            </div>


            <div class="Live-SecR">

                <div class="Live-Box">
                        <div class="Price"> <h2 id="price"> </h2> </div>

                        <div class="BoxBot">

                            <div class="BoxBot-Txt">
                                <p> <span> Lectures: </span> 20+ hours </p>
                                <p> <span> Tools: </span> Smart Plant 3D </p>
                                <p> <span> Capacity: </span> 10 Students </p>


                                <a href="#">
                                <button class="PBtn"> Enroll </button>
                                </a>

                            </div>

                        </div>
                </div>

            </div>

        </div>


    </div>




    <?php include '../../Pages/Footer.php' ?>

    <script src="../../Public/JS/Course/LiveDetail.js"></script>
    <script src="../../Public/JS/CRUD.js"></script>


</body>
</html>
