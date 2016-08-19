<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="root"; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="yoonjeewoo"; // Table name 
// Connect to server and select databse.
$conn = mysqli_connect("$host", "$username", "$password" , "$db_name")or die("cannot connect"); 
// get value of id that sent from address bar 
$id=$_GET['id'];
$sql="DELETE FROM $tbl_name WHERE id='$id'";
if (mysqli_query($conn, $sql)) {
    echo "<script>location.replace('./y_main_forum.php?id=$id');</script>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);

?>