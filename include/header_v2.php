<?php  ?>

<?php ?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>TEDxIITPatna</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <!-- header2 -->
      <!--meta charset="utf-8"-->
      <!--meta name="viewport" content="width=device-width, initial-scale=1"-->
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/bootstrap/js/bootstrap.min.js"></script>
      <style >
        img.logo_tedxiitp2{
              /*float:left;*/
              min-height:54px;
              min-width:160px;
              height:54px;
              width:160px;
              transition: 0.5s;
            }
            
        .organiser_description{
          color:orange;

        }
      </style>
    <!-- header1 -->
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

  </head>
  <body style="padding-top:5px;">

    <!-- header2 -->
      <nav class="navbar navbar-default" style="z-index:1000;"  >
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="border:#080808;border-color:#e41f1f;">
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
              <li><a href="index.php">Home</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"> About <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="about.php">About</a></li>
                  <li><a href="advisors.php">Board of Advisors</a></li>
                  <li><a href="organizers.php">Organizing Committee</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Speakers <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="speakers.php">List of Speakers</a></li>
                  <li><a href="nominate.php">Nominate a Speaker</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Sponsors <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="associate.php">Sponsors</a></li>
                  <li><a href="association_brochure.pdf" target="_blank" >Download Brochure</a></li>
                </ul>
              </li>
              <li><a href="contact.php">Contact Us</a></li>
              <li><a href="apply.php">Apply</a></li>
            </ul>
          </div>
        </div>
      </nav>
  	