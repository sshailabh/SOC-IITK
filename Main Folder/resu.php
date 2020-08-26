<html>
<head>
  <title>
    Result
  </title>
  <style>
  .navbar{
      background-color:#1a4c00;
      width:100%;
      height:5%;
      position:sticky;
      top:0;
  }
      .navbar a{
          display:block;
          float:right;
         
          
      }
      .button{
          
          background-color:#1a4c00;
          color:white;
      }
      .button:hover{
          background-color:white;
          color:black;
      }
      .textb{
          margin-left:25%;
          margin-right:25%;
          text-align:justify;
          
      }
      body{
          background-color:#fff6d4;
      }
  </style>
</head>
<body>
    <div class='navbar'><form method='post' action='dashboard.php'><span style='display:none'><input type='text' name='n1' value=<?php echo $_SESSION['n1']?>></span>
        <a href='dashboard.php'> <button class='button' style='height:100%;'>Dashboard</button></a></form>
         <a href='index.php'> <button class='button' style='height:100%;'>LogOut</button></a>
        <?php error_reporting(0);?>
    </div>
  <center>
    <br><br><br>
    <h1> RESULT OF YOUR DEPRESSION HEALTH:
    </h1><br>
    <meter value="<?php echo $totd;?>" min="0" max="100" style='width:25%'><?php echo $totd;?></meter><?php echo $totd;?>&nbsp&nbsp&nbsp 0 means Entirely Depressed 100 means Entirely Happy<br>
    <h1> RESULT OF YOUR AGGRESSION HEALTH:
    </h1><br>
    <meter value="<?php echo $tota;?>" min="0" max="100" style='width:25%'><?php echo $tota;?></meter><?php echo $tota;?>&nbsp&nbsp&nbsp 0 means Extremely Aggression 100 means Entirely Calm<br>
    <h1> OVERALL SCORING OF YOUR MENTAL HEALTH:</h1><br>
    <meter value="<?php echo (int)$scrm;?>" min="0" max="100" style='width:25%'><?php echo (int)$scrm;?></meter><?php echo (int)$scrm;?>&nbsp&nbsp&nbsp 0 means Mentally Dumb 100 means Mentally Sound<br><br>
    <div class='textb'>
<?php if($totd>50){echo "You are not suffering from depression.";}elseif($totd>50&&$totd<25){echo "You may be suffering from mild depression.<a href='depression.html'><button class='button' >Click here and follow the tips</button></a>. Also talk to someone close, parents or friends.Remember
   talking helps.";}else{echo "You may be suffering from severe depression. Trying talking to your parent or any Counseller. Don't hesitate. We recommend you to <a href='depression.html'><button class='button'>Click here and follow our tips</button></a>.";}?><br><br>
   <?php if($tota>50){echo "You aggression score is good. You neednot worry about it.";} elseif($tota<50&&$tota>25){echo "You have mild aggression. Try following our tips <a href='agression.html'><button class='button'>here</button></a>.";}else{echo "You have high aggression. We recommend you to go to the link <a href='agression.html'><button class='button'>here</button></a>.";}?><br><br>
    <?php if($scrm<50){echo " We feel that you can improve your overall mental health. Try <a href='livingstyle.html'><button class='button'>here</button></a>.";}else{echo "Your overall mental health is good. But still there is nothing wrong in knowing more <a href='livingstyle.html'><button class='button'>tips</button></a>";}
    ?></div>
  
</center>

</body>
</html>
