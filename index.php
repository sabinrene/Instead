<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Instead Academy</title>
  <script src="Public/JS/jquery-3.5.0.min.js"></script>
  <link rel="stylesheet" href="Public/CSS/Header.css">
  <link rel="stylesheet" href="Public/CSS/Modals.css">
  <link rel="stylesheet" href="Public/CSS/Instead.css">
  <link rel="stylesheet" href="Public/CSS/Home.css">
  <link rel="stylesheet" href="Public/CSS/FX/FlipCards.css">
  <link rel="stylesheet" href="Public/CSS/Footer.css">
  <link rel="stylesheet" type="text/css" href="Public/CSS/Trainee/TraineeMenu.css">

  <script src="https://kit.fontawesome.com/d2e9898f47.js" crossorigin="anonymous">    </script>

<link rel="icon" type="image/svg+xml" href="Public/images/Instead-favicon.png" sizes="any">

  <!-- Bootstrap -->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
       crossorigin="anonymous">

</head>


<body>
<!-- Javascript -->
  <div id="liveCoursesButton" class=""></div>
  <div id="onlineCoursesButton" class=""></div>
<!-- JS -->


  <div class="bg-modal" id="bg-modal"></div>
  <?php include ("Pages/Header.php"); ?>
  <?php include ("Pages/Trainee/TraineeMenu.php"); ?>

  <input class="hide" type="text" id="logIn2" value="">






  <div class="Banner " id="Banner">
    <?php include ('Pages/Modals.php');?>
    <input id="page" class="hide" type="text" name="" value="index">
      <img id="BannerImg" class="BannerImg BannerImg-Layer" src="Public/images/00-Home/Banners/Ban01.jpg" alt="">


      <div class="BannerMsg">
        <div class="banner-icons">
          <h4>
            <span><i class="fa fa-circle"></i></span>
            <span><i class="fa fa-circle"></i></span>
                  Online Education and Training
            <span><i class="fa fa-circle"></i></span>
            <span><i class="fa fa-circle"></i></span>
          </h4>
        </div>

    		<h1> International School </h1>
      	<h2> Engineering Technology & Design  </h2>


      </div>

      <div class="BannerArrow">
        <img id="left"  class="arrow left" src="Public/images/00-Home/left.png" alt="">
        <img id="right" class="arrow right" src="Public/images/00-Home/right.png" alt="">
      </div>
  </div>
  <!-- SpaceFX underBanner -->
  <div class="UnderSpace"> </div>








<!-- Welcome -->

<div class="Welcome clearfix">

  <div class="W-L">
    <div class="W-Lin">
      <h2> Welcome to Instea<span class="insBlue">d</span> Aca<span class="insRed">d</span>emy </h2>

      <div class="W-Lin-2">

        <p> We deliver energy specific programs that educate and prepare you for
        Design, Operation and Management work in the Energy Industry. Through our
        specialized training you will deepen your knowledge in the Energy Domain
        and will be thoroughly acquainted with the operation of multiple units
        in the energy branches. </p>

          <p> The Students & Professionals will be trained on the advanced cutting-edge software
            used in the energy industry.</p>

      </div>
    </div>
  </div>

  <div class="W-R">
    <img src="Public/images/Light/World.png">
  </div>

</div>

<!-- END Welcome -->









  <!-- Online & Web -->
  <div class="Mode">

      <div class="Mode-L clearfix">
          <div class="Mode-in">

                <a href="Pages/Courses/Section2.php">
                <img class="Mode-Pic" src="Public/images/00-Home/01-Live.png">
                </a>

                <h2> Online Training </h2>
                <p class="Mode-Sub"> Develop the Skills you need to succeed </p>

                <p> Specialized Training tailored for Industry Professionals looking
                  to deepen their knowledge on topics such as: Thermal & Fluid Sciences,
                  Crude Exploration Technologies, Petroleum
                  Production Technologies, and Health Safety & Environmental
                  aspects of the Oil and Gas Industry. </p>
                  <div id="liveCoursesButtonLight" class="ModeBtn">View Courses</div>

          </div>
      </div>

      <div class="Mode-R clearfix">
            <div class="Mode-in">

                  <img class="Mode-Pic" src="Public/images/00-Home/02-Class.png">

                    <h2> Online Courses </h2>
                    <p class="Mode-Sub"> On Demand Courses from your own Desk </p>

                    <p> University students shall be groomed at the very initial stage
                      of their education, our training program allows
                      you to think outside the box and build a better perspective
                      about your future in the energy domain. Encouraging you to pursue and achieve
                      success in the Energy Industry.</p>
                      <div id="onlineCoursesButtonLight" class="ModeBtn">View Courses</div>
            </div>
      </div>

  </div>

















<!-- Three Cols -->
<div class="ThreeCols clearfix">

    <h2> Explore our Topics </h2>

<div class="ThreeCols-Wrap">

<div class="WhiteOverlay">

  <figure class="card CAD">
      <div class="blackLay"> </div>


          <div class="Col-Box">

              <div class="WhiteOverlay">
                <h1>3D Modeling</h1>
              </div>

              <div class="BoxList">
                <ul>
                  <li> Process Design </li>
                  <li> Structural Design </li>
                  <li> MEP Design </li>
                  <li> Equipment Design </li>
                  <li> Civil Design </li>
                </ul>
              </div>

            </div>

    <figcaption> <div class="Btn"> Explore </div> </figcaption>
  </figure>





  <figure class="card Engr">
      <div class="blackLay"> </div>


          <div class="Col-Box">

              <div class="WhiteOverlay">
                <h1> Engineering </h1>
              </div>

              <div class="BoxList">
                <ul>
                  <li> Civil & Structure </li>
                  <li> Instrumentation </li>
                  <li> Mechanical </li>
                  <li> Electrical </li>
                  <li> Chemical </li>
                </ul>
              </div>

            </div>

    <figcaption> Explore </figcaption>
  </figure>






  <figure class="card Tech">
      <div class="blackLay"> </div>

          <div class="Col-Box">
              <div class="WhiteOverlay">
                <h1> Technology </h1>
              </div>

              <div class="BoxList">
                <ul>
                  <li>Artificial Intelligence</li>
                  <li>Internet-of-Things</li>
                  <li>Machine Learning</li>
                  <li>Block Chain</li>
                  <li>Big Data</li>
                </ul>
              </div>

            </div>

    <figcaption> Explore </figcaption>
  </figure>

  </div> <!-- END WhiteOverlay -->

 </div> <!-- END ThreeCols-WRAP -->
</div>
<!-- END ThreeCols -->







<div class="Explore">
  <div class="Exp-Title">
      <h2> Courses on Demand </h2>
  </div>
</div>







<div class="Ins2">
	<div class="Ins2-wrap">
	  <div id="course-All" class="Tabs-scroll-wrapper-All squares-All">



    </div>
	</div> <!-- END Ins 2 -->
</div>
<!-- END Ins 2 -->
















<?php include 'Pages/Footer.php' ?>



  <script src="Public/JS/CRUD.js"></script>
  <script src="Public/JS/Index.js"></script>

</body>

</html>
