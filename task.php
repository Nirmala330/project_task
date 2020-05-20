<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	* {
	  box-sizing: border-box;
	}

	body {
	  margin: 0;
	}

	/* Style the header */
	.header {
	  //background-color: #f1f1f1;
	  padding: 0;
	  text-align: center;
	}
	.footer {
	  background-color: red;
	  padding: 0;
	  text-align: center;
	  height :100px;
	  width  :1000px;
	}



	/* Create two unequal columns that floats next to each other */
	.column {
	  float: left;
	  padding: 10px;
	  
	}

	.left {
	  width: 25%;
	}

	.right {
	  width: 75%;
	}

	/* Clear floats after the columns */
	.row:after {
	  content: "";
	  display: table;
	  clear: both;
	}


	/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
	@media screen and (max-width:100px) {
	  .column {
		width: 100%;
	  }
	}
	</style>
	<style>
      div {
        background-color: #FFFBD3;
      }
    </style>
	
</head>
<body>

<div class="header">
	<center><img src="logo.png" alt="Girl in a jacket" style="width:200px;height:60px;"></center>
</div>

<div class="row">
	<div class="column left">
		<h2><img src="img1.png" alt="Girl in a jacket" style="width:200px;height:300px;"> </h2></h2>
	</div>
  
	<div class="column right">
		<font size ="2"><b>C.R.I. PUMPS WINS THE NATIONAL ENERGY CONSERVATION AWARD 2018 for the 4th time.</b></font>
		<li><font size ="2">C.R.I.'s energy efficient products are well recognized by various Government Institutions, as trustworthy products for various projects across the globe to save energy.</font></p>
		<li><font size ="2">C.R.I. is the highest contributor in the country for the projects of EESL (Energy Efficiency Services Limited) to replace the old inefficient pumps with 5 Star rated energy efficient smart pumps with IoT enabled control panel.</font></p>
		<img src="img2.png" alt="Girl in a jacket" style="width:400px;height:200px;">
		<p><font size ="1">Government of India has awarded the "National Energy Conservation Award 2018". Mr. G. Selvaraj, Joint Managing Director of C.R.I. Group received the award from Smt. Sumitra Mahajan, Speaker of Lok Sabha & Shri. Raj Kumar Singh, Honorable Minister of State.</span></li></p>
	</div>  
</div>

<div class="row">
	<div class="column">
		<center><p><font size ="1"><b>INSTALLED OVER 10 LAKHS STAR RATED PUMPSETS ACROSS THE COUNTRY RESULTING IN A CUMULATIVE SAVING OF MORE THAN 9,000 MILLION UNITS OF POWER FOR THE NATION. </b></font></center>
		<center><img src="img3.png" alt="Girl in a jacket" style="width:500px;height:200px;"></center>
		<center><p><font size ="1">Valves - Pumps - Pipes - IoT Drives & Controllers - Wires & Cables - Solar Systems - Motors C.R.I. FLUID SYSTEMS PRODUCTS CATER TO DIVERSE </font></center>
		<center><font color ="red"><b>_________________________________________________________________________________________________________________________________________________________________________________</b></font></center>
		<center><b><p><font size ="1">C.R.I. FLUID SYSTEMS PRODUCTS CATER TO DIVERSE SEGMENTS</p></b></center>
		<center><p><font size ="1">CHEMICALS & PROCESS<font color ="red">|</font> POWER WATER <font color ="red">|</font> WASTE WATER OILS <font color ="red">|</font> GAS PHARMA SUGARS <font color ="red">|</font> DISTILLERIES PAPER <font color ="red">|</font> PULP MARINE & DEFENCE METAL <font color ="red">|</font> MINING FOOD <font color ="red">|</font> BEVERAGE PETROCHEMICAL <font color ="red">|</font> REFINERIES SOLAR BUILDING HVAC FIRE FIGHTING AGRICULTURE & RESIDENTIAL</font></center>
	</div>
</div>

<div class="footer">
	<footer><br><center><font size ="3"><img src="telephone.jpg" alt="Girl in a jacket" style="width:20px;height:20px;">Toll Free4 No.:52525225255  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="fb_icon.jpg" alt="Girl in a jacket" style="width:20px;height:20px;">www.facebook.com/netlify &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="web_icon.jpg" alt="Girl in a jacket" style="width:20px;height:20px;">www.netlify.com </font></center></footer>
</div>


</body>
</html>
