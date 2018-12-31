<!DOCTYPE HTML>
<html>
  <head>
    <title>TEDxIITPatna</title>
    <meta charset="utf-8" />
<meta name="theme-color" content="#c9321e">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <!-- header2 -->
      <!--meta charset="utf-8"-->
      <!--meta name="viewport" content="width=device-width, initial-scale=1"-->
      

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
      <script src="assets/js/jquery.min.js"></script>
      <script src="compiled/flipclock.js"></script>
      <script src="assets/bootstrap/js/bootstrap.min.js"></script>
      
<link rel="stylesheet" href="compiled/flipclock.css">
      <script>
      $(document).ready(function(){
      $(".dropdown-menu a").click(function(){ $(".dropdown-menu").hide(); });
        $('li.dropdown').hover(function() {
           $(this).find('.dropdown-menu').stop(true, true).fadeIn(500);
        }, function() {
          $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(500);
          });
        $(".sp").click(function(){
    $("#colpanel").slideToggle();
  });
      });
      </script>
      
  <script>var clock;
$(document).ready(function(){
  
  // Grab the current date
        var currentDate = new Date();

        // Set some date in the future. In this case, it's always Jan 1
        var futureDate  = new Date(2016, 10, 13);

        // Calculate the difference in seconds between the future and current date
        var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

        // Instantiate a coutdown FlipClock
        clock = $('.clock').FlipClock(diff, {
          clockFace: 'DailyCounter',
          countdown: true
        });
    function returndata(dat){
      if(dat=='data1'){
        return '<center><h1>D. R. Kaarthikeyan</h1><b>D. R. Kaarthikeyan (Devarayapuram Ramasamy Kaarthikeyan)</b> <font color="white">is an Indian Police Service Officer from Tamil Nadu, and a former special director of the Central Bureau of Investigation. Mr. Karthikeyan was First Secretary in the Embassy of India, Moscow, Russia from 1974-1977. He was stationed in Sydney Australia from 1985 to 1989, promoting Indian exports to Australia, New Zealand and Fiji. He served on the Chief Bureau of the Investigation Team  to investigate the tragic assassination of Prime Minister Mr. Rajiv Gandhi. At the invitation of INTERPOL, France, he made an audiovisual presentation of the investigation before an assembly of top police officers, who commended Mr Karthikeyan for the model investigation. He  was awarded the Padma Shri in 2010 for his contribution to the field of Indian Civil Service</font></center>';
      }
      else if(dat=='data2'){
        return '<center><h1>Mohan Kameswaran</h1><b>Dr. Mohan Kameswaran</b><font color="white"> is an Indian otorhinolaryngologist, medical academic and the founder of MERF Institute of Speech and Hearing, a Chennai-based institution providing advanced training in audiology and speech-language pathology. He has many firsts to his credit such as the performance of the first auditory brain stem implantation surgery in South and South East Asia, the first pediatric brain stem implantation surgery in Asia, the first totally implantable hearing device surgery in Asia Pacific region, and the first to introduce KTP/532 laser-assisted ENT surgery in India. The Government of India awarded him the fourth highest civilian honour of the Padma Shri, in 2006, for his contributions to Indian medicine.</font></center>';
      }
      else if(dat=='data3'){
        return '<center><h1>Raghu Raman</h1><b><font color="white">Capt. Raghu Raman</b> started his career with the Indian Army. During his stint, he was in active combat in Punjab battling terrorists and in Siachen Glacier facing Pakistani troops. He has served as a UN peacekeeper, as well as been an instructor teaching leadership and strategy to officers at the prestigious School of Armoured Warfare. Later he led various companies, including First Choice, Mahindra SSG and finally DLSI, a Mahindra joint venture with British Aerospace before being handpicked to create and head the National Intelligence Grid, Ministry of Home Affairs in the Government of India. After his five year stint as the founding CEO of NATGRID, Raman joined Reliance Industries as Group President, Risk, Security & New Ventures.</center>';
      }
      else if(dat=='data4'){
        return "<center><h1>Ashok Krish </h1><b><font color='white'>Ashok Krish </b> is the head of Social Media & Workplace Reimagination Practice at TCS Digital Enterprise at Tata Consultancy Services. A multi faceted and dynamic leader he is a lifelong technology geek, an open source enthusiast and a talented musician.He is a classical violinist and a guitarist, an amateur cellist, columnist for various newspapers, and used to be a Radio Jockey. A strong believer in technology's ability to solve any problem, at TCS he brings this ideology to his work.A role that involves shaping the future of our customer's workplaces by leveraging Digital forces such as social, mobile, big data, cloud and AI.He specifically specializes in the 'Human cloud', which describes the architecture of social technologies and their interplay between people and technology.</center>";
      }
      else if(dat=='data5'){
        return "<center><h1>George V Puthuran </h1><b><font color='white'> Dr. George V Puthuran </b> hailing from Kochi, Kerala, completed his medical graduate degree from Govt Medical College Kottayam in 1996 and MS (ophthalmologist) in 1999 from Aravind Eye Hospitals & Post graduate Institute of Ophthalmology, Madurai. He currently heads the department of Glaucoma at Aravind Eye Hospital, Madurai. Dr George is the South Zone representative of the present executive committee of the Glaucoma Society Of India. He has presented at various international forums, is an editor of a textbook on Practical Perimetry published by Jaypee Medical Publishers. Dr George worked closely with Aurolab System in developing a Glaucoma Drainage Device, is the principal investigator in the safety & efficacy of this Aurolab Aqueous Drainage Implant (AADI ) study. The AADI is a cost effective alternative to patients with refractory glaucoma in resource poor communities in the developing world. Dr George’s video titled – Evolution Of An Affordable Aqueous Drainage Implant – The Indian Story, was one of the three winning films at the World Glaucoma Congress 2013 held at Vancouver.</center>";
      }
   else if(dat=='data6'){
        return "<center><h1>Pushpak Bhattacharyya </h1><b><font color='white'>  </b> </center>";
      }
      else{
        return '<center><h1>Weird!</h1></center>'; 
      }
    }
    
    function callpop(data){
      $("#over").html(data);
      $("#under").fadeIn();
      $("#over").fadeIn();
      $(".close").fadeIn();
    }
    function closepop(){
      $("#under").fadeOut();
      $("#over").fadeOut();
      $(".close").fadeOut();
      $("#over").html('');
    }
    $(".close").height($(".close").width());
    $("#under,.close").click(function(){
      closepop();
    });
    $(".call").click(function(){
      callpop(returndata($(this).attr('placeholder')));
    });
});
</script>
      <style >
      .dropdown:hover,.ndd:hover{
        background: red !important;
        color:#FFFFFF !important;
      }
      .dropdown-toggle[aria-expanded="true"]{
       background: red !important; 
       color:#FFFFFF !important;
      }
        img.logo_tedxiitp2{
              /*float:left;*/
              min-height:54px;
              min-width:160px;
              height:54px;
              width:160px;
              transition: 0.5s;
            }
          li a{
            width:100%;

          }
         @media all and (max-width: 767px) {
  		.whitethis{
  			color:#FFFFFF !important;
  		}
	} 
        .organiser_description{
          color:#f00;

        }
        .open{
        	 color:#FFFFFF !important;
        }
        li a{
        	font-weight:bold;
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
  <body style="padding-top:1px;">

    <!-- header2 -->
      <nav class="navbar navbar-default navbar-fixed-top bg-faded" style="z-index:1000;"  >
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="border:#080808;border-color:#e41f1f;">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-left" href="index.php">
                    <img style="margin-top:5px;margin-left:5px" height="40px" src="images/logo_tedxiitp.png" alt="TEDxIITP"  ></img>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li class="ndd"><a href="index.php">Home</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"> About <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="about.php"  class="whitethis">About</a></li>
                  <!--li><a href="advisors.php"  class="whitethis">Board of Advisors</a></li-->
                  <li><a href="organizers.php"  class="whitethis">Organizing Committee</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"> Speakers <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="speakers.php" class="whitethis">List of Speakers</a></li>
                  <li><a href="nominate.php"  class="whitethis">Nominate a Speaker</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"> Sponsors <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="associate.php"  class="whitethis">Sponsors</a></li>
                  <li><a href="brochure.pdf" target="_blank"  class="whitethis">Download Brochure</a></li>
                </ul>
              </li>
              <li class="ndd"><a href="contact.php">Contact Us</a></li>
              <li class="ndd"><a href="apply.php">Apply</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div style="min-height:50px;height:50px;"></div>

    
