<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 150vh}

    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
  </style>

</head>
<body>
<?php error_reporting(0);?>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><?php echo "Hello! ".$_POST['n1'];?></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Your DashBoard</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="videoPlaylist.html">See our Video recommendations</a></p>
      <p><a href="dep-quotations.html">Some Quotations to lift your mind</a></p>
      <p><a href="agression_qoutes.html">Aggression quotes</a></p>
      <p><a href="CaseStudies.html">Some inspiring stories</a></p>
      <p><a href='yoga.html'>Yoga tips</a></p>
      <p><a href='meditation.html'>Meditation Tips</a></p>
      <p><a href='livingstyle.html'>Tips for a happy and healthy life</a></p>
      <p><a href='agression.html'>Aggression tips</a></p>
      <p><a href='depression.html'>Depression tips</a></p>
      <p><a href='testdep.php'>TEST YOURSELF</a></p>
    </div>
    <div class="col-sm-8 text-left">
      <h1>Chasing Sunshine!!</h1>
      <p>Welcome to Chasing Sunshine! An initiative by IIT Kanpur students.</p>
      <hr>
      
    </div>


<?php
$uname =$_POST['n1']; 
  
$servername = "localhost";
$username = "id6428605_destroyer1";
$password = "inspire";
$dbname="id6428605_csunshine";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sqlm="SELECT * FROM resultmed1 WHERE userr='$uname' ";
//echo "statement found";
$resultm=$conn->query($sqlm);
$rowm= $resultm->fetch_assoc();
$m1=$rowm["resm1"];
$m2=$rowm["resm2"];
$m3=$rowm["resm3"];
$m4=$rowm["resm4"];
$m5=$rowm["resm5"];

$sqla="SELECT * FROM resultagr1 WHERE usera='$uname' ";
//echo "statement found";
$resulta=$conn->query($sqla);
$rowa= $resulta->fetch_assoc();
$a1=$rowa["resa1"];
$a2=$rowa["resa2"];
$a3=$rowa["resa3"];
$a4=$rowa["resa4"];
$a5=$rowa["resa5"];

$sqld="SELECT * FROM resultdep1 WHERE userd='$uname' ";
//echo "statement found";
$resultd=$conn->query($sqld);
$rowd= $resultd->fetch_assoc();

$d1=$rowd["resd1"];
$d2=$rowd["resd2"];
$d3=$rowd["resd3"];
$d4=$rowd["resd4"];
$d5=$rowd["resd5"];
//echo "<br>query run<br>";

$conn->close();

?>



    <div class="col-sm-2 sidenav">
      <h1> Your recent test results</h1>
      <div class="well">
        <p>Date:<br>
        Result:<?php if($m1 === NULL)
                           echo "Not Attempted";
                       else
                       {
                         echo "Mental score:".$m1."<br>";
                         echo "Depression score:".$d1."<br>";  
                         echo "Aggression score:".$a1."<br>";  
                       }

                         ?></p>
      </div>
      <div class="well">
        <p>Date:<br>
        Result:   <?php if($m2 === NULL)
                           echo "Not Attempted";
                       else
                       {
                        echo "Mental score:".$m2."<br>";
                        echo "Depression score:".$d2."<br>";  
                        echo "Aggression score:".$a2."<br>";    
                       }
                         ?></p>
      </div>
      <div class="well">
        <p>Date:<br>
        Result:    <?php if($m3 === NULL)
                           echo "Not Attempted";
                       else 
                        {
                        echo "Mental score:".$m3."<br>";
                        echo "Depression score:".$d3."<br>";  
                        echo "Aggression score:".$a3."<br>";    
                       }
                           ?> </p>
      </div>
      <div class="well">
        <p>Date:<br>
        Result:   <?php if($m4 === NULL)
                           echo "Not Attempted";
                       else 
                        {
                        echo "Mental score:".$m4."<br>";
                        echo "Depression score:".$d4."<br>";  
                        echo "Aggression score:".$a4."<br>";    
                       }
                        ?></p>
      </div>
      <div class="well">
        <p>Date:<br>
        Result:   <?php if($m5 === NULL)
                           echo "Not Attempted";
                       else 
                        {
                        echo "Mental score:".$m5."<br>";
                        echo "Depression score:".$d5."<br>";  
                        echo "Aggression score:".$a5."<br>";    
                       } ?></p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Keep Chasing!! Never Lose Hope</p>
</footer>

</body>
</html>
