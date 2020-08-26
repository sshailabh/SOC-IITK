<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<script src='https://www.google.com/recaptcha/api.js'></script>
<style>
.header
{
 padding 20px;
}
.navbar
{
   pading 30 px;
}
.footer{
  padding 20 px;
}
.but{
     background-color :#FF0000;
	 color :white;
	 padding: 7px;
	 text-align:center;
     display :inline-block;
     font-size:15px;
  }
.modal {
   
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
   
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 5px;
	overflow:scroll;
}
  /* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 2% auto 2% auto; /* 10% from the top, 20% from the bottom and centered */
    border: 10px solid #888;
    width: 60%; /* Could be more or less, depending on screen size */
	padding:40px 160px;
}
.input
{
width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
.button
{
  background-color:#4CAF50;
  color:white;
}
</style>
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

</head>
<body>

<div class="modal" id="gotto">

<form class="modal-content animate" action="signup1.php" align="center" method="post">
<div class="container">
<b style="font-size:20px;"><span style="color:red;">*</span>UserName-</b><br>
<input type="text" name="n1" class="input" placeholder="Enter your username" required><br><br>
<!--
<select >
<option value=""disabled selected>Select your option</option>
<option  value="Parent or Guide">Parent or Guide</option>
<option value="">victim</option>
</select><br><br>
-->
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
	  <span id="Message"></span><br><br> 
	  </label>
	  
	  
 <div align="center" class="g-recaptcha" data-sitekey="6LdriGMUAAAAADUhWx238rdJHgFhCqThjvY_H952" required></div><br><br>




</div>

<!--<label>
        <input type="checkbox" checked="checked" name="remember"> Remember me &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp 
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
		<span class="psw">Forgot <a href="#">password?</a></span><br><br>
      </label>-->
	<span style="color:red; font-size:20px;">Please answer these questions for your security purpose-</span><br><br>
 <b> Date of Birth-:</b><br>
<input type="date"  class="input" id="date" name="date" required /><br><br>
 <b>What is your favourite color ? </b><br>
&nbsp <input type="text" class="input" id="color" name="color" required><br><br>
 <b>In which city were you born?</b><br>
&nbsp <input type="text" class="input" id="city" name="city" required><br><br>  



<button class="but" style="background-color:#008000;" type="submit" value="submit" align="right" >Submit</button><br><br>
<div class="container" >
      <button type="reset" class="but"  onclick="window.location='homepage.php';" class="cancelbtn">Cancel</button><br><br>

    </div>

	</form>
	
	
<?php
if(isset($_POST['submit']))
{
function CheckCaptcha($userResponse) {
        $fields_string = '';
        $fields = array(
            'secret' => '6LdriGMUAAAAAM9iRxDgQnldPr9_wTkrg3vRa0H9',
            'response' => $userResponse
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);
        $res = curl_exec($ch);
        curl_close($ch);
        return json_decode($res, true);
    }
    // Call the function CheckCaptcha
    $result = CheckCaptcha($_POST['g-recaptcha-response']);
    if ($result['success']) {
        //If the user has checked the Captcha box
        echo "Captcha verified Successfully";
    } else {
        // If the CAPTCHA box wasn't checked
       echo '<script>alert("Error Message");</script>';
    }
}
    ?>
	</body>
	</html>