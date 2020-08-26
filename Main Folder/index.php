<?php session_start();
session_unset(); ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta charset="utf-8">
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>HomePage</title>
<script>
	  function check()
	  {
		  if(document.getElementById("pas").value==document.getElementById("repas").value)
		  {
			  document.getElementById("Message").innerHTML="matched";
			  document.getElementById("Message").style.color="green";
		  }
		  else
		  {
			  document.getElementById("Message").innerHTML="didn't match";
			  document.getElementById("Message").style.color="red";
		  }
	  }
	  </script>
<style>
.intro
{
	text-align:justify;
	padding:20px;
	font-size: 20px;
margin-left: 5%;
margin-right: 70%;
margin-top:15vh;
color:white;

}
.aboutus
{
	padding:180px 40px;
	font-size:17px;
	text-align:center;
}
.condition
{
	padding:220px 80px;
}

.mi{
	background:url('home_image.jpg');
	background-repeat:no-repeat;
	background-attachment: fixed;
	background-position: center;
	background-size: cover;
        height:110vh;
				margin-top:-9%;
				color:white;

}
.butt
{
	background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button{
  background-color :#BEBEBE;
  font-weight: bold;
  border : none;
  color :black;
  padding: 15px;
  text-align:center;
  display :inline-block;
  font-size:25px;
  }
  .but{
     background-color :#FF0000;
	 color :white;
	 padding: 7px;
	 text-align:center;
     display :inline-block;
     font-size:15px;
  }

  .header{


	font-family:Comic Sans MS;

	color:#E14929;
	position:sticky;
top:0;
	text-shadow: 3px 3px black;
  }
  .navbar
  {
     padding:30px;
  }
  .navibar
  {
   padding: 30px;
  }
  .footer
  {
     padding:30px;
  }
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */

    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 5px;
}
  /* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 10% auto 20% auto; /* 10% from the top, 20% from the bottom and centered */
    border: 10px solid #888;
    width: 30%; /* Could be more or less, depending on screen size */
	padding:20px 20px;
}

  /* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}


.close:focus {
    color: red;
    cursor: pointer;
}
  .animate
  {
    animation:animate-zoom 0.6s;
  }

  @-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
}

  @keyframes animate-zoom
  {
     from {transform:scale(0)}
	 to {tranform:scale(1)}
  }
  .input{
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
	   text-align:right;
    }
    .cancelbtn {
       width: 100%;
    }
}


/* The message box is shown when the user clicks on the password field */
#message {
    display:none;
    background: #f1f1f1;
    color: #000;
    position: relative;
    padding: 20px;
    margin-top: 10px;
}

#message p {
    padding: 10px 35px;
    font-size: 18px;
}





.topnav {
	margin-top:5px;
  position: sticky;
	top:0;
  bottom:110px;
  overflow: hidden;
	color:white;
	transition: 1s;
}

.topnav a {
  float: right;
  display: block;
  color: #1D1C21;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}
<!--.topnav a:visited
  {
	  color:black;
  }-->

<!--.active {
  background-color:  #ddd;
  color: white;
}-->

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: sticky; top:0;}}
  .topnav.responsive .icon {
    position: sticky;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: right;
  }
  .condition
  {
	position :relative;
    left:35px;
  }
  .container1
  {
	  max-width:100%;
	  margin:0 auto;
	  background:#f9f9f9;
	  font-size:25px;
	  padding:24px;
  }
 .parallax {
    /* The image used */

}


#content-layer{ position:absolute;}
.bigcontainer{
	background-color:#E0E0E0;
}
.sticky{
	position: fixed;
  top: 0;
  width: 100%;

}
.vishnu{
margin-top:25vh;
}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
	background-color: #fff6d4;
	overflow-x:hidden;
}
.sai{

	text-align:center;
	background:url('home_img.png');
	background-repeat:no-repeat;
	background-attachment: fixed;
	background-position: center;
	background-size: cover;
	height:110vh;
	color:white;

}
.bunny{
	margin-top:15%;
	text-align:justify;
	margin-left:30%;
	margin-right:30%;
}
.shrink{
	background-color: #1a1a00;
}
.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}
.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

</style>
</head>

<body>
<div class='mi'>
<div class='parallax'>

<div class='sticky' id="home">


<div class="topnav" id="myHeader">
<span style="font-size:50px; font-family:Comic Sans MS; font-style:bold; text-align:right; color:white;">Chasing Sunshine! </span>
  <span style="color:white;"><b><a href="#"><button style="color:white; background:none; border:none;">Home</button></a></b>
  <b><a href="#about"><button style="color:white; background:none; border:none;">About Us</button></a></b>
  <b><a href="livingstyle.html"><button style="color:white; background:none; border:none;">HealthyLiving</button></a></b>
  <b><a href="#"><button style="color:white; background:none; border:none;" onclick="window.location='SignupPage.php';">SignUp</button></a></b>
  <b><a href="#"><button style="color:white; background:none; border:none;" onclick="document.getElementById('wrapper').style.display='block'">SignIn </button></a></b></span>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>

</div>

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script></div>

<div class="intro">
<div class='vishnu'><p > <br>
<span  style="align:center;">Chasing Sunshine! is like an interactive place which helps you to learn and practise skills which can help to prevent and manage symptoms of depression and anxiety.
We provide authoritative information and support to people with mental health concerns, along with their family members and other loved ones.</span>

<span><b>Get help! Get better!</span></b>
No matter what's troubling you, get the support you need, right here, right now.</p>

</div>
</div>







<div class="navbar">
<h2 align="right"  style="font-size:25px; color:white; margin-top:-3%;">"#LendAnEarToStopTheFear</h2>
</div>
<div class="navibar">

</div>
</div></div>

<div class='sai'><br><br>
	<div class='bunny'>
<span style="font-size:30px;">Man, A social animal takes from society what it offers
All what it offers ain't good </span><br>

</div>


<br><br>
<div class="footer">
<p align="center">
<button type="button" class="button" onclick="document.getElementById('sign').style.display='block'" value="Check Your Status">Check Your Status</button>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp
<button type="button" class="button" onclick="location.href='livingstyle.html'" value="Healthy LifeStyle">Healthy LifeStyle</button>
</p>
</div>
</div>
<div class="modal" id="sign">
<div class="modal-content animate" align="center">
<div class="container">
<button value="SignIn" class="butt" onclick="document.getElementById('wrapper').style.display='block'">SignIn</button> &nbsp &nbsp &nbsp &nbsp <b style="text-size:15px;">OR</b>
&nbsp &nbsp &nbsp &nbsp <button value="SignUp" class="butt" onclick="window.location='SignupPage.php';" >SignUp</button><br><br>


      <button type="reset" class="but" align="center" onclick="document.getElementById('sign').style.display='none'" class="cancelbtn">Cancel</button><br><br>


</div>
</div>
</div>

<div class="modal" id="wrapper">

<form class="modal-content animate" action="signin1.php" align="center" method="post">
<div class="container">
<label for="n1">
<b style="font-size:20px;"><span style="color:red;">*</span>UserName-</b><br>
</label>
<input type="text" id="n1" name="n1" class="input" placeholder="Enter your username" required><br><br>
<!--
<select >
<option value=""disabled selected>Select your option</option>
<option  value="Parent or Guide">Parent or Guide</option>
<option value="">victim</option>
</select><br><br>
-->
<label for="password" >
<b style="font-size:20px;"><span style="color:red;">*</span>Password-</b><br></label>


<input type="password"  placeholder="Enter Password"  class="input" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>

	<input type="checkbox" id="check" onclick="ShowPass();">Show Password <br><br>
<script>
 function ShowPass()
 {
	 var pass=document.getElementById("password");
	 if(document.getElementById("check").checked)
	 {
		pass.setAttribute('type','text');
	 }
	 else
	 {
		 pass.setAttribute('type','password');
	 }
 }


</script>

 <div align="center" class="g-recaptcha" data-sitekey="6LdriGMUAAAAADUhWx238rdJHgFhCqThjvY_H952" required></div><br><br>



<button class="but" style="background-color:#008000;"type="submit" value="submit" align="right" onclick="page3.html">Submit</button><br><br>
</div>

<label align="right">

		<span class="psw" > <a href="ForgotPassword.html">Forgot password?</a></span><br><br>
      </label>

<div class="container" >
      <button type="reset" class="but" onclick="document.getElementById('wrapper').style.display='none'" class="cancelbtn">Cancel</button><br><br>

    </div>

	</form>


	</div>

<!--	<div class="modal" id="gotto">

<form class="modal-content animate" action="check-question.html" align="center" method="post">
<div class="container">
<b style="font-size:20px;"><span style="color:red;">*</span>UserName-</b><br>
<input type="text" name="n1" class="input" placeholder="Enter your username" required><br><br>
<!--
<select >
<option value=""disabled selected>Select your option</option>
<option  value="Parent or Guide">Parent or Guide</option>
<option value="">victim</option>
</select><br><br>


<label for="pas" >
<b style="font-size:20px;"><span style="color:red;">*</span>Password-</b><br></label>


<input type="password"  placeholder="Enter Password" class="input" name="pas" id="pas" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>

 <input type="checkbox" id="chec" onclick="ShowPassword();">Show Password<br><br>
<script>
 function ShowPassword()
 {
	 var pass=document.getElementById("pas");
	 if(document.getElementById("chec").checked)
	 {
		pass.setAttribute('type','text');
	 }
	 else
	 {
		 pass.setAttribute('type','password');
	 }
 }


</script>
 <label for="pass-repeat"><b><span style="color:red;">*</span>Confirm Password -</b><br>
      <input type="password" placeholder="Confirm Password" class="input" id="repas" name="password-repeat"  onkeyup ='check();' required />&nbsp
	  <span id="Message">hju</span><br><br>
	  </label>


 <div align="center" class="g-recaptcha" data-sitekey="6LfTBF8UAAAAALzMeAHb1Zp_Styckvt9HCGgQ8qx" required></div><br><br>



<button class="but" style="background-color:#008000;" type="submit" value="submit" align="right" onclick="check-question.html">Submit</button><br><br>
</div>

<!--<label>
        <input type="checkbox" checked="checked" name="remember"> Remember me &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		<span class="psw">Forgot <a href="#">password?</a></span><br><br>
      </label>-->

<!-- <div class="container" >
      <button type="reset" class="but" onclick="document.getElementById('gotto').style.display='none'" class="cancelbtn">Cancel</button><br><br>

    </div>
	</form>




	-->
</div>
<script>
// Get the modal
var modal = document.getElementById('wrapper');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal = document.getElementById('gotto');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal = document.getElementById('sign');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>

</div>

<div class="aboutus" id="about">
<table><tr><td style="width:50%;">

<h1 style="text-align:center;">About Us</h1>
<p align='justify'>Chasing Sunshine! as the name suggests is a program designed to help you to:
Identify whether you are having problems with emotions like anxiety ,depression and other disorders.
Learn skills that can help you cope with these emotions.
Here you'll find comprehensive, authoritative information on psychological disorders, psychiatric medications,
and other mental health treatments. We also have online psychological tests, breaking mental health news, and more.
We believe the most important thing in a person's life is "peace of mind".
Here, we want you to know you are not alone.  56 million Indians -- or 4.5% of India's population -- suffer from depression ,
 another 38 million Indians suffer from anxiety disorders. According to the World Health Organisation report on depression ,
 almost 7.5% of Indians suffer from major or minor mental disorders .That means among all these possibly your friends, family members
 and co-workers, suffer from symptoms that cause distress in their lives, but that can be effectively treated.
We feel information is a very powerful tool. With the proper information, you can find out what you, a loved one or friend is
dealing with, and then make the appropriate choices.
And with the proper support, you can weather the ups and downs of life and move forward to a positive spot that you feel good about.</p>
</td>
<td><div style='margin-left:35%;'>
	<h1> Contact Us</h1>
	<a href="#" class="fa fa-facebook"></a><br>
	<a href="#" class="fa fa-twitter"></a><br>

	<a href="#" class="fa fa-youtube"></a><br>
	<a href="#" class="fa fa-instagram"></a><br></div></td>
</tr></table>

</div>
<div class='foot1' style='width:100%; background-color:#1a1a00; color:white;'>
    <center><h3>Team Members:</h3></center><br>
   <span style='font-size:18px'><center>Shashank Shailabh, Pratyush, Rudraraju Sai Vishnu Varma <br>Parv Jain, Nalli Bhavita</center>
</div>
<script src='navshrink.js'></script>

<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    topnav.classList.add("sticky");


  } else {
    topnav.classList.remove("sticky");
  }
}
</script>

</body>
</html>
