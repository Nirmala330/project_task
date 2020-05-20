<!DOCTYPE html>
<html>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create two unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
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
</style>
</head>

<h2><center><img src="logo.png" alt="Girl in a jacket" style="width:100px;height:100px;"></center></h2>

<div class="row">
  <div class="column left" style="background-color:white;">
    <h2><img src="img1.png" alt="Girl in a jacket" style="width:150px;height:200px;"> </h2>
    <p>Some text..</p>
  </div>
 <!-- <div class="column right" style="background-color:white;">
    <h2><img src="logo.png" alt="Girl in a jacket" style="width:100px;height:100px;"></center></h2>
   <p>Some text..</p>
  </div>-->
</div>
<div class="row">
	<div class="column left" style="background-color:white;">
    <h2><img src="img1.png" alt="Girl in a jacket" style="width:150px;height:200px;"> </h2>
    <p>Some text..</p>
  </div>
</div>
	


<?php 
//echo "hello";
?>
</body>
</html>









.column {
  float: left;
  padding: 10px;
   height: 300px; /* Should be removed. Only for demonstration */
}

.left {
  width: 25%;
}

.right {
  width: 75%;
}





