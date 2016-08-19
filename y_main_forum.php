<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
</head>
<body>


<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="root"; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="yoonjeewoo"; // Table name 
$id = $_GET['id'];
$code = $_GET['code'];
// Connect to server and select databse.
$conn = mysqli_connect("$host", "$username", "$password","$db_name") or die("cannot connect"); 
if($code=="all") {
    $sql="SELECT * FROM $tbl_name ORDER BY id DESC";
// OREDER BY id DESC is order result by descending

    $result = $conn->query($sql);
}else if($code=="c") {
    $sql="SELECT * FROM $tbl_name WHERE code = 'c'  ORDER BY id DESC";
// OREDER BY id DESC is order result by descending

    $result = $conn->query($sql);
}else if($code=="java") {
    $sql="SELECT * FROM $tbl_name WHERE code = 'java' ORDER BY id DESC";
// OREDER BY id DESC is order result by descending

    $result = $conn->query($sql);
}else if($code=="python") {
    $sql="SELECT * FROM $tbl_name WHERE code = 'python' ORDER BY id DESC";
// OREDER BY id DESC is order result by descending

    $result = $conn->query($sql);
}

?>
    <div  id="navbar" class="navbar navbar-default navbar-fixed-top">
        <div class="navbar-header">
            <h3>THE CODE</h3>
        </div>
</div>
<br>
<br>
<br>
<br>
<div class="container">
<div class="form-group">
<a id="button" class="btn btn-default" href="./yoonjeewoo.php?id=<?php echo $id ?>" role="button">SHARE NEW CODE</a>
    <a id="button" class="btn btn-default" href="./index.php" role="button">GO TO HOMEPAGE</a>
</div>
<div class="form-group">
<a id="button" class="btn btn-default" href="./y_main_forum.php?id=<?php echo $id?>&code=all" role="button">ALL</a>
<a id="button" class="btn btn-default" href="./y_main_forum.php?id=<?php echo $id?>&code=c" role="button">C/C++</a>
<a id="button" class="btn btn-default" href="./y_main_forum.php?id=<?php echo $id?>&code=java" role="button">JAVA</a>
<a id="button" class="btn btn-default" href="./y_main_forum.php?id=<?php echo $id?>&code=python" role="button">PYTHON</a>
</div>
<div class="form-group">
<table class="table table-bordered" width="90%" border="0" align="center" cellpadding="3" cellspacing="1">
<tr>
<td width="5%" align="center" bgcolor="#E6E6E6"><strong>#</strong></td>
<td width="45%" align="center" bgcolor="#E6E6E6"><strong>Topic</strong></td>

<td width="20%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
<td width="20%" align="center" bgcolor="#E6E6E6"><strong>Name</strong></td>
<td width="10%" align="center" bgcolor="#E6E6E6"><strong>Code</strong></td>

</tr>

<?php
// Start looping table row
while($rows = $result->fetch_assoc()){
?>
<tr>
<td bgcolor="#FFFFFF"><? echo $rows['id']; ?></td>
<td bgcolor="#FFFFFF"><a href="./y_view_topic.php?id=<? echo $rows['id']; ?>"><? echo $rows['topic']; ?></a><BR></td>

<td align="center" bgcolor="#FFFFFF"><? echo $rows['datetime']; ?></td>
<td align="center" bgcolor="#FFFFFF"><? echo $rows['name']; ?></td>
<td align="center" bgcolor="#FFFFFF"><? echo $rows['code']; ?></td>

</tr>
<?php
// Exit looping and close connection 
}
mysql_close();

?>


<!--
<tr>
<td colspan="5" align="right" bgcolor="#E6E6E6"><a href="create_topic.php"><strong>Create New Topic</strong> </a></td>
</tr>
-->
</table>
</div>
    </div>
</body>
</html>