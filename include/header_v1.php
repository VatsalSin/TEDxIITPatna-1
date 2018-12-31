<?php  ?>

<?php ?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>TEDxIITPatna</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link href="images/favicon.png" rel="icon" type="image/png" />
    <script type="text/javascript" src="assets/js/jssor.slider.mini.js"></script>
    <script>
      jQuery(document).ready(function ($) {
        var options = {
        };
            
        var jssor_slider1 = new $JssorSlider$("slider1_container", options);
      });
    </script>
    <link rel="stylesheet" href="assets/css/main.css" />

    <!-- header2 -->
      <!--meta charset="utf-8"-->
      <!--meta name="viewport" content="width=device-width, initial-scale=1"-->
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/bootstrap/js/bootstrap.min.js"></script>
      <style >
        img.logo_tedxiitp2{
              /*float:left;*/
              max-height:54px;
              max-width:170px;
              height:99%;
              width:99%;
              padding-top:1%;
              margin-top: -10px 
              transition: 0.3s;
            }
      </style>

  </head>
  <body>

    <!-- header2 -->
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-left" href="index.php">
                    <img class="logo_tedxiitp2" src="images/logo_tedxiitp.jpg" alt="TEDxIITP"  ></img>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="index.php">Home</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"> About <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="about.php">About</a></li>
                  <li><a href="advisors.php">Board of Advisors</a></li>
                  <li><a href="orgizners.php">Organiszing Committee</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Speakers <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a class="disable" href="#">List of Speakers</a></li>
                  <li><a href="nominate.php">Nominate a Speaker</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Associate <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a class="disable" href="associate.php">Associate</a></li>
                  <li><a href="association_brochure.pdf" target="_blank" >download Brochure</a></li>
                </ul>
              </li>
              <li><a href="contact.php">Contact Us</a></li>
              <li><a href="apply.php">Apply</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
          </div>
        </div>
      </nav>
  