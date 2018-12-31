<?php include("include/header.php"); ?>
<script>
 $(document).ready(function(){

 });
</script>
<style>

		.sp{
				height:300px;
				width:400px;
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
				height: 240px;
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
		#sp1 .spimg{
			background-image: url('images/speakers/s1.jpg');
		}
		#sp2 .spimg{
			background-image: url('images/speakers/s2.jpg');
		}
		#sp3 .spimg{
			background-image: url('images/speakers/s3.jpg');
		}
		.sp:hover .spimg{
			opacity:0.3;
		}
		.name{
			z-index: 1;
			font-size:30px;
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

   
        <h2 style="margin:20px">About</h2>
        <hr/><center>
<div class="wrapper" style="padding:5px">
		<h1>Speakers</h1><br><br>

  			<div class="sp call" placeholder="data1" id="sp1">
  			<span class="name">D.R. Kaarthikeyan</span>
  				<div class="spimg"></div>
  			</div>
  			
				
			</div>
  			<div class="sp call" placeholder="data2" id="sp2">
  			<span class="name">Mohan Kameswaran</span>
  				<div class="spimg"></div>
  			</div>

  			<div class="sp call" placeholder="data3" id="sp3">
  			<span class="name">Capt. Raghu Raman</span>
  				<div class="spimg"></div>
  			</div>

</div>
		<br><br><br><br>
	</center>
	
<?php include("include/footer.php"); ?>	