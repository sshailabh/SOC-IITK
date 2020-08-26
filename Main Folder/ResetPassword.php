<html>
<head>
<title>
Reset Password
</title>
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
    width: 45%; /* Could be more or less, depending on screen size */
  padding:20px 20px;
}
.input
{
width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
</style>
</head>
<body>
    <?php session_start(); ?>
<div class="">
</div>
<div class="navbar">
<div class="modal-content">
<form action="update1.php" method="post" align="center">
<b>Reset your Password</b><br><br>
<b>Enter your new Password-</b><br>

<input type="password"  placeholder="Enter Password"  class="input" name="pas" id="pas" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
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
 <label for="pass-repeat"><b>Confirm Password -</b><br>
      <input type="password" placeholder="Confirm Password" class="input" id="repas" name="password-repeat"  onkeyup ='check();' required />
    <span id="Message"></span><br><br> 
    </label>
  
<input type="submit" value="Submit" onclick="homepage.php"> 
    
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
    </form>
    </div>
    </div>
</body>
</html>