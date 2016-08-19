<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
</head>
<body id="add_topic">
<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="root"; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="yoonjeewoo"; // Table name 
$id = $_GET["id"];
// Connect to server and select database.
$conn = mysqli_connect("$host", "$username", "$password","$db_name") or die("cannot connect"); 

// get data that sent from form 
$topic=$_POST['topic'];
//$detail=$_POST['detail'];
$detail =  str_replace("\n","<br>", $_POST['detail']);
$detail =  str_replace("\t","&nbsp; &nbsp;",$detail);
$detail = str_replace("'","\'",$detail);
$datetime=date("d/m/y h:i:s"); //create date time
$name = $_POST['name'];
$code = $_POST['code'];
$sql="INSERT INTO $tbl_name(topic, detail, datetime, name, code) VALUES('$topic', '$detail', '$datetime','$name','$code')";
$result = $conn->query($sql);
if($result){
echo $code;
echo "<div>Successful</div>";
echo "<a href=./y_main_forum.php>View your topic</a>";
}
else {
echo "ERROR";
}
mysqli_close();
?>
</body>