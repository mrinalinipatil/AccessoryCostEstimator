

<?php
session_start();

$_SESSION['user'] =$username ;

echo "Favorite color is " . $_SESSION["user"] ;


?>


<html>
<head>

<title>ZodiacXX</title>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow:visible;
    background-color: white;
}


body {
	   background-image: url("back1.jpg");
	background-size: cover;
    background-repeat: no-repeat;

}

p {
    font-family: "Arial", Times, serif;
}

center
{
background-color:dark-grey;
opacity :0.9;

}

header{
background-color:dark-grey;
}

td
{
align:center;
}

.polaroid {
  width: 80%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
    border: 1px solid #000;
            border-radius: 4px;
}



div.container {
position:center;
  text-align: center;
  padding: 5px 20px;

}

.sign{
height:100%;
padding:2%;

}


</style>

</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>





<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  <a href="update.html" class="w3-bar-item w3-button">Update Account</a>
  <a href="delete.html" class="w3-bar-item w3-button">Delete Account</a>
  <a href="logout.php" class="w3-bar-item w3-button">Log Out</a>
</div>

<div id="main">

<div class="w3-black">
  <button id="openNav" class="w3-button w3-black w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h1>AUTO ACCESSORIES</h1>
  </div>
</div>

<!--<img src="img_car.jpg" alt="Car" style="width:100%">-->



<h1><center><font color="white" size="32">SELECT YOUR CAR</font></center></h1>





<div class="w3-sidebar w3-bar-block w3-card-100 w3-animate-left" style="display:none" id="mySidebar" id="Background">
 
<header>



</div>
<div class="w3-main" id="main"></div>

<div class="w3-teal">


</div>


<center><img id="titleimg" src="tit.png" > <br></center>




</ul>
</header>
<center>
<br>
<br>
<br>
<table width="100%" >

<tr>

<td>
<center>
<a href = "baleno.html">
<div class="polaroid">
<center>
<img src="b1.png" class="sign"></a>
</center>
  <div class="container">
    <p><b><font size="30">BALENO</font></p>
  </div>
</div>

</td>
</tr>





<tr>

<td>
<center>
<a href = "dzire.html">
<div class="polaroid">
<center>
<img src="d1.jpg" class="sign"></a>
</center>
  <div class="container">
    <p><b><font size="30">SWIFT DZIRE</font></p>
  </div>
</div>
</td>

</tr>

<tr>

<td>
<center>
<a href = "scross.html">
<div class="polaroid">
<center>
<img src="s2.jpg" class="sign"></a>
</center>
  <div class="container">
    <p><b><font size="30">S CROSS</font></p>
  </div>
</div>

</td>



</tr>

</table>


<div class="w3-container">

</div>

</div>

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>




<!--


<h1><center><font color="white" size="32">SELECT YOUR CAR</font></center></h1>





<div class="w3-sidebar w3-bar-block w3-card-100 w3-animate-left" style="display:none" id="mySidebar" id="Background">
 
<header>



</div>
<div class="w3-main" id="main"></div>

<div class="w3-teal">


</div>


<center><img id="titleimg" src="tit.png" > <br></center>




</ul>
</header>
<center>
<br>
<br>
<br>
<table width="100%" >

<tr>

<td>
<center>
<a href = "baleno.html">
<div class="polaroid">
<center>
<img src="b1.png" class="sign"></a>
</center>
  <div class="container">
    <p><b><font size="30">BALENO</font></p>
  </div>
</div>

</td>
</tr>





<tr>

<td>
<center>
<a href = "dzire.html">
<div class="polaroid">
<center>
<img src="d1.jpg" class="sign"></a>
</center>
  <div class="container">
    <p><b><font size="30">SWIFT DZIRE</font></p>
  </div>
</div>
</td>

</tr>

<tr>

<td>
<center>
<a href = "scross.html">
<div class="polaroid">
<center>
<img src="s1.jpg" class="sign"></a>
</center>
  <div class="container">
    <p><b><font size="30">S CROSS</font></p>
  </div>
</div>

</td>



</tr>

</table>-->

</body>

</html>
