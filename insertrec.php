<?php
$conn= mysqli_connect("localhost", "root", "", "dbr1");

if($conn===false){
    die("ERROR: Could not connect" . mysqli_connect_error());
}

$sid=$_REQUEST['sid'];
$sname=$_REQUEST['sname'];
$gender=$_REQUEST['gender'];

$sql = "INSERT INTO tblstud VALUES ('$sid', '$sname', '$gender')";
if(mysqli_query($conn, $sql)){
    echo "Record added";
} else{
    echo "ERROR";
}

echo $sid . $sname . $gender;
header("Location:index.php");
?>
