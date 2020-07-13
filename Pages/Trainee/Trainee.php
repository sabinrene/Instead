<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../../Public/CSS/Trainee/Trainee.css">
    <link rel="stylesheet" href="../../Public/CSS/Trainee/TraineeMenu.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <script src="../../Public/JS/jquery-3.5.0.min.js"></script>
    <link rel="stylesheet" href="../../Public/CSS/Footer.css">

  </head>

  <body>

    <!-- TraineeMenu -->
   <?php include ("TraineeMenu.php"); ?>


  <!-- Trainee Area -->
  <div class="TraineeArea">

      <div class="Trainee-Wrap">


        <div class="Welcome">
          <h2 id="welcome">  </h2>
        </div>

        <!-- Trainee Courses -->
        <div id="traineeCourses" class="Trainee-Courses">


        <!--    <div class="TcCard">
                <img src="../../Public/images/Course/00-Solid.png" alt="" class="Tc-img">
                <div class="ProgressBar"> </div>
                <div class="Tc-Title"> <div class="Tc-TitleTxt"> When we learn how to develop Development Setup: From Code to Web. Linux Series. </div> </div>
            </div>

            <div class="TcCard">
                <img src="../../Public/images/Course/01-AdvSolid.png" alt="" class="Tc-img">
                <div class="ProgressBar"> </div>
                <div class="Tc-Title"> <div class="Tc-TitleTxt"> When we learn to Development Setup: From Code to Web. Linux Series. </div> </div>
            </div>

            <div class="TcCard">
                <img src="../../Public/images/Course/02-Circuits.jpg" alt="" class="Tc-img">
                <div class="ProgressBar"> </div>
                <div class="Tc-Title"> <div class="Tc-TitleTxt"> When we learn how to develop Development Setup: From Code to Web. Linux Series. </div> </div>
            </div>

            <div class="TcCard">
                <img src="../../Public/images/Course/05-Operations.jpg" alt="" class="Tc-img">
                <div class="ProgressBar"> </div>
                <div class="Tc-Title"> <div class="Tc-TitleTxt"> When we learn how to develop Development Setup: From Code to Web. Linux Series. </div> </div>
            </div> -->


        </div>
        <!-- END Trainee Courses -->



        <!-- Learn Next
        <div class="LearnNext">

          <h2> What to Learn next? </h2>

          <div class="LN-Cards">

              <div id="InsTabs-Card" class="InsTabs-Card">
                <img class="InsTab-CardA" src="../../Public/images/02-Course/Img-Course/Solid.png" alt="">
                <div class="InsTab-CardA-Titles">
                  <h4> PHP </h4>
                  <h5> Learn Php in 1 week </h5>
                </div>
                <div class="InsTab-CardA-Price"> <h4>$11.99</h4> </div>
              </div>

              <div id="InsTabs-Card" class="InsTabs-Card">
                <img class="InsTab-CardA" src="../../Public/images/02-Course/Img-Course/Solid.png" alt="">
                <div class="InsTab-CardA-Titles">
                  <h4> PHP </h4>
                  <h5> Learn Php in 1 week </h5>
                </div>
                <div class="InsTab-CardA-Price"> <h4>$11.99</h4> </div>
              </div>

              <div id="InsTabs-Card" class="InsTabs-Card">
                <img class="InsTab-CardA" src="../../Public/images/02-Course/Img-Course/Solid.png" alt="">
                <div class="InsTab-CardA-Titles">
                  <h4> PHP </h4>
                  <h5> Learn Php in 1 week </h5>
                </div>
                <div class="InsTab-CardA-Price"> <h4>$11.99</h4> </div>
              </div>

              <div id="InsTabs-Card" class="InsTabs-Card">
                <img class="InsTab-CardA" src="../../Public/images/02-Course/Img-Course/Solid.png" alt="">
                <div class="InsTab-CardA-Titles">
                  <h4> PHP </h4>
                  <h5> Learn Php in 1 week </h5>
                </div>
                <div class="InsTab-CardA-Price"> <h4>$11.99</h4> </div>
              </div>


          </div>
        </div>
-->





        <!-- Design Carousel -->
        <div class="Carousel">

          <h3> Students also liked </h3>

          <!-- Cards -->
          <div class="LN-Cards">

            <div id="courseDesign" class="horizontal-scroll-wrapper squares">

<!--
                <div>
                  <div class="Horizontal-inner">

                      <div id="InsTabs-Card" class="InsTabs-Card">
                        <img class="InsTab-CardA" src="../../Public/images/02-Course/Img-Course/Engr.png" alt="">
                        <div class="InsTab-CardA-Titles">
                          <h4> Nuclear Engineering </h4>
                          <h5> Neutronics & Hydraulics </h5>
                        </div>
                        <div class="InsTab-CardA-Price"> <h4>$17.99</h4> </div>
                      </div>

                  </div>
                </div>




                <div>
                  <div class="Horizontal-inner">

                      <div id="InsTabs-Card" class="InsTabs-Card">
                        <img class="InsTab-CardA" src="../../Public/images/02-Course/Img-Course/Engr.png" alt="">
                        <div class="InsTab-CardA-Titles">
                          <h4> Nuclear Engineering </h4>
                          <h5> Neutronics & Hydraulics </h5>
                        </div>
                        <div class="InsTab-CardA-Price"> <h4>$17.99</h4> </div>
                      </div>

                  </div>
                </div>




                <div>
                  <div class="Horizontal-inner">

                      <div id="InsTabs-Card" class="InsTabs-Card">
                        <img class="InsTab-CardA" src="../../Public/images/02-Course/Img-Course/Engr.png" alt="">
                        <div class="InsTab-CardA-Titles">
                          <h4> Nuclear Engineering </h4>
                          <h5> Neutronics & Hydraulics </h5>
                        </div>
                        <div class="InsTab-CardA-Price"> <h4>$17.99</h4> </div>
                      </div>

                  </div>
                </div>



                <div>
                  <div class="Horizontal-inner">

                      <div id="InsTabs-Card" class="InsTabs-Card">
                        <img class="InsTab-CardA" src="../../Public/images/02-Course/Img-Course/Engr.png" alt="">
                        <div class="InsTab-CardA-Titles">
                          <h4> Nuclear Engineering </h4>
                          <h5> Neutronics & Hydraulics </h5>
                        </div>
                        <div class="InsTab-CardA-Price"> <h4>$17.99</h4> </div>
                      </div>

                  </div>
                </div>

-->

            </div>

          </div>
          <!-- END Cards -->
        </div>
        <!-- END Design Carousel -->












        <!-- Technology Carousel -->
  <!--      <div class="Carousel">

          <h3> Top Courses in Technology </h3>

          <div class="LN-Cards">

            <div id="courseTechnology"  class="horizontal-scroll-wrapper squares">

                <div>
                  <div class="Horizontal-inner">

                      <div id="InsTabs-Card" class="InsTabs-Card">
                        <img class="InsTab-CardA" src="../../Public/images/Course/02-Circuits.jpg" alt="">
                        <div class="InsTab-CardA-Titles">
                          <h4> E-Fundies </h4>
                          <h5> Electronic Circuits 101 </h5>
                        </div>
                        <div class="InsTab-CardA-Price"> <h4>$11.99</h4> </div>
                      </div>

                  </div>
                </div>


                <div>
                  <div class="Horizontal-inner">

                      <div id="InsTabs-Card" class="InsTabs-Card">
                        <img class="InsTab-CardA" src="../../Public/images/Course/02-Circuits.jpg" alt="">
                        <div class="InsTab-CardA-Titles">
                          <h4> E-Fundies </h4>
                          <h5> Electronic Circuits 101 </h5>
                        </div>
                        <div class="InsTab-CardA-Price"> <h4>$11.99</h4> </div>
                      </div>

                  </div>
                </div>


                <div>
                  <div class="Horizontal-inner">

                      <div id="InsTabs-Card" class="InsTabs-Card">
                        <img class="InsTab-CardA" src="../../Public/images/Course/02-Circuits.jpg" alt="">
                        <div class="InsTab-CardA-Titles">
                          <h4> E-Fundies </h4>
                          <h5> Electronic Circuits 101 </h5>
                        </div>
                        <div class="InsTab-CardA-Price"> <h4>$11.99</h4> </div>
                      </div>

                  </div>
                </div>

                <div>
                  <div class="Horizontal-inner">

                      <div id="InsTabs-Card" class="InsTabs-Card">
                        <img class="InsTab-CardA" src="../../Public/images/Course/02-Circuits.jpg" alt="">
                        <div class="InsTab-CardA-Titles">
                          <h4> E-Fundies </h4>
                          <h5> Electronic Circuits 101 </h5>
                        </div>
                        <div class="InsTab-CardA-Price"> <h4>$11.99</h4> </div>
                      </div>

                  </div>
                </div>

                <div>
                  <div class="Horizontal-inner">

                      <div id="InsTabs-Card" class="InsTabs-Card">
                        <img class="InsTab-CardA" src="../../Public/images/Course/02-Circuits.jpg" alt="">
                        <div class="InsTab-CardA-Titles">
                          <h4> E-Fundies </h4>
                          <h5> Electronic Circuits 101 </h5>
                        </div>
                        <div class="InsTab-CardA-Price"> <h4>$11.99</h4> </div>
                      </div>

                  </div>
                </div>

                <div>
                  <div class="Horizontal-inner">

                      <div id="InsTabs-Card" class="InsTabs-Card">
                        <img class="InsTab-CardA" src="../../Public/images/Course/02-Circuits.jpg" alt="">
                        <div class="InsTab-CardA-Titles">
                          <h4> E-Fundies </h4>
                          <h5> Electronic Circuits 101 </h5>
                        </div>
                        <div class="InsTab-CardA-Price"> <h4>$11.99</h4> </div>
                      </div>

                  </div>
                </div>





            </div>

          </div>
        </div>-->
        <!-- END Tech Carousel -->












        <!-- Engineering Carousel -->
    <!--    <div class="Carousel">

          <h3> Top Courses in Engineering </h3>

          <div class="LN-Cards">

            <div id="courseEngineering" class="horizontal-scroll-wrapper squares">

                <div>
                  <div class="Horizontal-inner">

                      <div id="InsTabs-Card" class="InsTabs-Card">
                        <img class="InsTab-CardA" src="../../Public/images/02-Course/Img-Course/Engr.png" alt="">
                        <div class="InsTab-CardA-Titles">
                          <h4> Nuclear Engineering </h4>
                          <h5> Neutronics & Hydraulics </h5>
                        </div>
                        <div class="InsTab-CardA-Price"> <h4>$50.99</h4> </div>
                      </div>

                  </div>
                </div>



                <div>
                  <div class="Horizontal-inner">

                      <div id="InsTabs-Card" class="InsTabs-Card">
                        <img class="InsTab-CardA" src="../../Public/images/02-Course/Img-Course/Engr.png" alt="">
                        <div class="InsTab-CardA-Titles">
                          <h4> Nuclear Engineering </h4>
                          <h5> Neutronics & Hydraulics </h5>
                        </div>
                        <div class="InsTab-CardA-Price"> <h4>$50.99</h4> </div>
                      </div>

                  </div>
                </div>



                <div>
                  <div class="Horizontal-inner">

                      <div id="InsTabs-Card" class="InsTabs-Card">
                        <img class="InsTab-CardA" src="../../Public/images/02-Course/Img-Course/Engr.png" alt="">
                        <div class="InsTab-CardA-Titles">
                          <h4> Nuclear Engineering </h4>
                          <h5> Neutronics & Hydraulics </h5>
                        </div>
                        <div class="InsTab-CardA-Price"> <h4>$50.99</h4> </div>
                      </div>

                  </div>
                </div>


                <div>
                  <div class="Horizontal-inner">

                      <div id="InsTabs-Card" class="InsTabs-Card">
                        <img class="InsTab-CardA" src="../../Public/images/02-Course/Img-Course/Engr.png" alt="">
                        <div class="InsTab-CardA-Titles">
                          <h4> Nuclear Engineering </h4>
                          <h5> Neutronics & Hydraulics </h5>
                        </div>
                        <div class="InsTab-CardA-Price"> <h4>$50.99</h4> </div>
                      </div>

                  </div>
                </div>


                <div>
                  <div class="Horizontal-inner">

                      <div id="InsTabs-Card" class="InsTabs-Card">
                        <img class="InsTab-CardA" src="../../Public/images/02-Course/Img-Course/Engr.png" alt="">
                        <div class="InsTab-CardA-Titles">
                          <h4> Nuclear Engineering </h4>
                          <h5> Neutronics & Hydraulics </h5>
                        </div>
                        <div class="InsTab-CardA-Price"> <h4>$50.99</h4> </div>
                      </div>

                  </div>
                </div>


                <div>
                  <div class="Horizontal-inner">

                      <div id="InsTabs-Card" class="InsTabs-Card">
                        <img class="InsTab-CardA" src="../../Public/images/02-Course/Img-Course/Engr.png" alt="">
                        <div class="InsTab-CardA-Titles">
                          <h4> Nuclear Engineering </h4>
                          <h5> Neutronics & Hydraulics </h5>
                        </div>
                        <div class="InsTab-CardA-Price"> <h4>$50.99</h4> </div>
                      </div>

                  </div>
                </div>



            </div>

          </div>
        </div>-->
        <!-- END Engr Carousel -->








      </div><!-- Wrap -->

  </div>
  <!-- END Page -->








  <?php include '../../Pages/Footer.php' ?>





<script src="../../Public/JS/Trainee/Trainee.js"></script>
<script src="../../Public/JS/CRUD.js"></script>

  </body>
</html>
