<?php
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

$name=$_POST["n1"];//"Vishnu";//before storing make all in lower case except password
$pass=$_POST["pas"];//"Fth4suvl";
$a1=$_POST["date"];//"white";
$a2=$_POST["color"];//"male";
$a3=$_POST["city"];
//$a4=$_POST["####"];// variable date 
$sql = "INSERT INTO chasing1 (user,pass,ans1,ans2,ans3) VALUES ('$name','$pass','$a1','$a2','$a3')";
$sqlm = "INSERT INTO resultmed1 (userr) VALUES ('$name')";
$sqla = "INSERT INTO resultagr1 (usera) VALUES ('$name')";
$sqld = "INSERT INTO resultdep1 (userd) VALUES ('$name')";
$q1=$conn->query($sqlm);
$q2=$conn->query($sqla);
$q3=$conn->query($sqld);
if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    session_start();
    $_SESSION['n1']=$_POST["n1"];
    include 'dashboard.php';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

