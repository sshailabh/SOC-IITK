  <?php
   error_reporting(0);
  session_start();
 
  include 'testdepr.php';
//-23+23
    //echo "your score is: ".$GLOBALS['count'];
    $inrange=$GLOBALS['count']+23;
    $percd=($inrange/46)*100;
     $percd=(int)$percd;
include 'testagr.php';
//-46+55
    //echo "your score is: ".$GLOBALS['counta']."<br>";
$inrangea=$GLOBALS['counta']+46;
$perca=($inrangea/101)*100;
$perca=(int)$perca;
//echo $percd."<br>";
//echo $perca."<br>";

include 'ffunc.php';
//echo (int)$scrd."<br>";
//echo (int)$scra."<br>";
//echo (int)$scrm."<br>";
//$scrm=20;
//$scra=37;
//$scrd=30;
$totd=(($percd/100)*54)+(($scrd/100)*46);
$tota=(($perca/100)*54)+(($scra/100)*46);
$totd=(int)$totd;
$tota=(int)$tota;
$scrm=(int)$scrm;
include 'resu.php';

//result of database is updated

$name=$_SESSION['n1'];
$servername = "localhost";
$username = "id6428605_destroyer1";
$password = "inspire";
$dbname = "id6428605_csunshine";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

 
} 

$sqlm ="SELECT * FROM resultmed1 WHERE userr = '$name' ";
$resultm = $conn->query($sqlm);
$rowm = $resultm->fetch_assoc();

$m1=$rowm["resm1"];
$m2=$rowm["resm2"];
$m3=$rowm["resm3"];
$m4=$rowm["resm4"];
$m5=$rowm["resm5"];

if($m1 === NULL)
{
  $sqlm = "UPDATE resultmed1 SET resm1='$scrm' WHERE userr='$name' ";
  if($conn->query($sqlm) === TRUE)
  {
      //echo " mental updated for first table"."<br>";
  }
  else
    echo "ERROR updating mental: ".$conn->error."<br>";

  $sqla = "UPDATE resultagr1 SET resa1='$tota' WHERE usera='$name' ";
  if($conn->query($sqla) === TRUE){
    //echo " agression updated for first table"."<br>";
  }else
    echo "ERROR updating agression: ".$conn->error."<br>";
  
  $sqld = "UPDATE resultdep1 SET resd1='$totd' WHERE userd='$name' ";
  if($conn->query($sqld) === TRUE){
    //echo " depression updated for first table"."<br>";
  }else
    echo "ERROR updating agression: ".$conn->error."<br>";


}
elseif ($m1 != NULL and $m2 === NULL) 
{
  
  $sqlm="UPDATE resultmed1 SET resm2=resm1 WHERE userr='$name' ";
  $dbm1=$conn->query($sqlm);

  $sqla="UPDATE resultagr1 SET resa2=resa1 WHERE usera='$name' ";
  $dba1=$conn->query($sqla);
  $sqld="UPDATE resultdep1 SET resd2=resd1 WHERE userd='$name' ";
  $dbd1=$conn->query($sqld);
  
  $sqlm = "UPDATE resultmed1 SET resm1='$scrm' WHERE userr='$name' ";
  $dbm2=$conn->query($sqlm);
  $sqla = "UPDATE resultagr1 SET resa1='$tota' WHERE usera='$name' ";
  $dba2=$conn->query($sqla);
  $sqld = "UPDATE resultdep1 SET resd1='$totd' WHERE userd='$name' ";
  $dbd2=$conn->query($sqld);
  //echo "m2 succedd";
}
elseif ($m1 != NULL and  $m2 != NULL and $m3 === NULL) 
{
  $sqlm="UPDATE resultmed1 SET resm3=resm2 WHERE userr='$name' ";
  $dbm1=$conn->query($sqlm);
  $sqla="UPDATE resultagr1 SET resa3=resa2 WHERE usera='$name' ";
  $dba1=$conn->query($sqla);
  $sqld="UPDATE resultdep1 SET resd3=resd2 WHERE userd='$name' ";
  $dbd1=$conn->query($sqld);
   
  $sqlm="UPDATE resultmed1 SET resm2=resm1 WHERE userr='$name' ";
  $dbm2=$conn->query($sqlm);
  $sqla="UPDATE resultagr1 SET resa2=resa1 WHERE usera='$name' ";
  $dba2=$conn->query($sqla);
  $sqld="UPDATE resultdep1 SET resd2=resd1 WHERE userd='$name' ";
  $dbd2=$conn->query($sqld);

  $sqlm = "UPDATE resultmed1 SET resm1='$scrm' WHERE userr='$name' ";
  $dbm3=$conn->query($sqlm);
  $sqla = "UPDATE resultagr1 SET resa1='$tota' WHERE usera='$name' ";
  $dba3=$conn->query($sqla);
  $sqld = "UPDATE resultdep1 SET resd1='$totd' WHERE userd='$name' ";
  $dbd3=$conn->query($sqld);
  //echo " m3 complete";

}
elseif ($m1 != NULL and $m2 !=NULL and $m3 != NULL and $m4 === NULL) 
{
  
  $sqlm="UPDATE resultmed1 SET resm4=resm3 WHERE userr='$name' ";
  $dbm1=$conn->query($sqlm);
  $sqla="UPDATE resultagr1 SET resa4=resa3 WHERE usera='$name' ";
  $dba1=$conn->query($sqla);
  $sqld="UPDATE resultdep1 SET resd4=resd3 WHERE userd='$name' ";
  $dbd1=$conn->query($sqld);
  
  $sqlm="UPDATE resultmed1 SET resm3=resm2 WHERE userr='$name' ";
  $dbm2=$conn->query($sqlm);
  $sqla="UPDATE resultagr1 SET resa3=resa2 WHERE usera='$name' ";
  $dba2=$conn->query($sqla);
  $sqld="UPDATE resultdep1 SET resd3=resd2 WHERE userd='$name' ";
  $dbd2=$conn->query($sqld);

  $sqlm="UPDATE resultmed1 SET resm2=resm1 WHERE userr='$name' ";
  $dbm3=$conn->query($sqlm);
  $sqla="UPDATE resultagr1 SET resa2=resa1 WHERE usera='$name' ";
  $dba3=$conn->query($sqla);
  $sqld="UPDATE resultdep1 SET resd2=resd1 WHERE userd='$name' ";
  $dbd3=$conn->query($sqld);

  $sqlm = "UPDATE resultmed1 SET resm1='$scrm' WHERE userr='$name' ";
  $dbm4=$conn->query($sqlm);
  $sqla = "UPDATE resultagr1 SET resa1='$tota' WHERE usera='$name' ";
  $dba4=$conn->query($sqla);
  $sqld = "UPDATE resultdep1 SET resd1='$totd' WHERE userd='$name' ";
  $dbd4=$conn->query($sqld);
  //echo "m4 complete";
}
else 
{
  $sqlm="UPDATE resultmed1 SET resm5=resm4 WHERE userr='$name' ";
  $dbm1=$conn->query($sqlm);
  $sqla="UPDATE resultagr1 SET resa5=resa4 WHERE usera='$name' ";
  $dba1=$conn->query($sqla);
  $sqld="UPDATE resultdep1 SET resd5=resd4 WHERE userd='$name' ";
  $dbd1=$conn->query($sqld);

  $sqlm="UPDATE resultmed1 SET resm4=resm3 WHERE userr='$name' ";
  $dbm2=$conn->query($sqlm);
  $sqla="UPDATE resultagr1 SET resa4=resa3 WHERE usera='$name' ";
  $dba2=$conn->query($sqla);
  $sqld="UPDATE resultdep1 SET resd4=resd3 WHERE userd='$name' ";
  $dbd2=$conn->query($sqld);

  $sqlm="UPDATE resultmed1 SET resm3=resm2 WHERE userr='$name' ";
  $dbm3=$conn->query($sqlm);
  $sqla="UPDATE resultagr1 SET resa3=resa2 WHERE usera='$name' ";
  $dba3=$conn->query($sqla);
  $sqld="UPDATE resultdep1 SET resd3=resd2 WHERE userd='$name' ";
  $dbd3=$conn->query($sqld);

  $sqlm="UPDATE resultmed1 SET resm2=resm1 WHERE userr='$name' ";
  $dbm4=$conn->query($sqlm);
  $sqla="UPDATE resultagr1 SET resa2=resa1 WHERE usera='$name' ";
  $dba4=$conn->query($sqla);
  $sqld="UPDATE resultdep1 SET resd2=resd1 WHERE userd='$name' ";
  $dbd4=$conn->query($sqld);

  $sqlm = "UPDATE resultmed1 SET resm1='$scrm' WHERE userr='$name' ";
  $dbm5=$conn->query($sqlm);
  $sqla = "UPDATE resultagr1 SET resa1='$tota' WHERE usera='$name' ";
  $dba5=$conn->query($sqla);
  $sqld = "UPDATE resultdep1 SET resd1='$totd' WHERE userd='$name' ";
  $dbd5=$conn->query($sqld);

  //echo "m5 complete";
}


$conn->close();


    ?>
