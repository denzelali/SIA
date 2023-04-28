<center>
<h1>SCRATCH PHP</h1>
<form action ="insertrec.php" method="post">
        <!-- <label for="sid"> Student ID: </label> -->
        <input type="text" name="sid" id="sid"><br>

        <!-- <label for="sname">Student Name: </label> -->
        <input type="text" name="sname" id="sname"><br>

        <!-- <label for="gender">Gender: </label> -->
        <input type="text" name="gender" id="gender"><br>

        <input type="submit" value="Add Record">
</form>

<?php
//$servername="localhost";

$conn = mysqli_connect("localhost", "root", "", "dbr1");

if($conn==false){
    die("ERROR: Could not connect" . mysqli_connect_error());
}

$sql="SELECT * FROM tblstud";
$result=$conn->query($sql);

if($result->num_rows > 0){
    echo "<table border=1>
            <tr>
                <th>Student ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Action</th>
            <tr>";
    while($row = $result->fetch_assoc()){
        echo "<tr><td>" . $row["sid"] . "</td><td>" . $row["sname"] . "</td><td>" . $row["gender"] . "</td><td>
        <a href='deleterec.php?sid=" . $row["sid"] . "'>delete</a> 
        <a href='updaterec.php?sid=" . $row["sid"] . "'>edit</a>
        </td></tr>";
    }
}

else{
    echo "0 result";
}
    echo "</table>";


$conn->close();
echo "</center>";
?>


