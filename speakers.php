<?php include("include/header.php"); ?>
<script>
 $(document).ready(function(){

 });
</script>
<style>

		.sp{
				height:240px;
				width:340px;
				cursor: pointer;
				display: inline-block;
				margin:5px;
		}
		.spcolor{
			width:100%;
				height: 100%;
		}
		.spimg{
		position: relative; 
	top:0;
			background-position: center; 
				background-size: cover;
				width:100%;
				height: 180px;
				z-index: 1;
				-webkit-transition: all 0.5s;
    			-moz-transition: all 0.5s;
    			transition: all 0.5s;
				
		} 
		#sp1{
			background-color: #7cfbca;
		}
		#sp2{
			background-color: #83ccf9;
		}
		#sp3{
			background-color: #066f91;
		}
		#sp4{
			background-color: #27bd9f;
		}
		#sp5{
			background-color: #fac882;
		}
		#sp6{
			background-color: #fecf3d;
		}
		#sp1 .spimg{
			background-image: url('images/speakers/s1.jpg');
		}
		#sp2 .spimg{
			background-image: url('images/speakers/s2.jpg');
		}
		#sp3 .spimg{
			background-image: url('images/speakers/s3.jpg');
		}
		#sp4 .spimg{
			background-image: url('images/speakers/s4.png');
		}
		#sp5 .spimg{
			background-image: url('images/speakers/s5.jpg');
		}
		#sp6 .spimg{
			background-image: url('images/speakers/s6.jpg');
		}
		.sp:hover .spimg{
			opacity:0.3;
		}
		.name{
			z-index: 1;
			font-size:30px;
		}
		#colpanel{
			/*display: none;*/
			width:80%;
			height:290px;
			background-color: darkgrey;
			display: none;
		}

#under{
  background: #000000;
  opacity: 0.7;
  position: fixed;
  display:none;
  width:100%;
  height:100%;
  top:0;
  left:0;
  z-index:5;
}
#over{
  padding: 20px;
  border-radius: 10px;
  
  background: rgba(0,0,0,0.9);
  position: fixed;
  display:none;
  width:90%;
  
  top:15%;
  left:5%;
  z-index:6;
}
@media all and (max-width: 767px) {
  #over{
  	font-size: 0.65em;
  }
}
.close{
  position: fixed;
  top:50;
  right:0;
  display: none;
  width:5%;
  z-index: 7;
  background-image: url('images/close.png');
  background-size: cover;
}
</style>

   
        <h2 style="margin:20px">Speakers</h2>
        <hr/><center>
<div class="wrapper" style="padding:5px">
			

  			<div class="sp call" placeholder="data1" id="sp1">
  			<span class="name">D.R. Kaarthikeyan</span>
  				<div class="spimg"></div>
  			</div>
  			<div class="sp call" placeholder="data2" id="sp2">
  			<span class="name">Mohan Kameswaran</span>
  				<div class="spimg"></div>
  			</div>

  			<div class="sp call" placeholder="data3" id="sp3">
  			<span class="name"> Raghu Raman</span>
  				<div class="spimg"></div>
  			</div>
			<div class="sp call" placeholder="data4" id="sp4">
  			<span class="name"> Ashok Krish</span>
  				<div class="spimg"></div>
  			</div>
  			<div class="sp call" placeholder="data5" id="sp5">
  			<span class="name"> George V. Puthuran</span>
  				<div class="spimg"></div>
  			</div>			
			<div class="sp call" placeholder="data6" id="sp6">
  			<span class="name"> Pushpak Bhattacharyya</span>
  				<div class="spimg"></div>
  			</div>		
</div>
		<br><br><br><br>
	<div id="under"></div>
<div id="over"></div>
<div class="close"></div>
	</center>
	
<?php include("include/footer.php"); ?>	
