<?php
$conn= mysqli_connect("localhost", "root", "", "dbr1");

if($conn===false){
    die("ERROR: Could not connecrt" . mysqli_connect_error());
}

$sql = "DELETE FROM tblstud WHERE sid=" . $_REQUEST['sid'];
if($conn->query($sql)===TRUE){
    echo "Record deleted";
}
else{
    echo "Error deleting record";
}

$conn->close();
header("Location:index.php");
?>