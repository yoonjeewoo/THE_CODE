<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
</head>
<body>
<div id="navbar" class="navbar navbar-default navbar-fixed-top">
        <div class="navbar-header">
            <h3>THE CODE</h3>
        </div>
</div>
<br>
<br>
<br>
<br>

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
$sql="SELECT * FROM $tbl_name WHERE id='$id'";
$result = $conn->query($sql);
    $rows = $result->fetch_assoc();
?>
<div class="container">
<div class="form-group">
<a id="button" class="btn btn-default" href="./y_main_forum.php<?php echo $id; ?>" role="button">GO BACK</a>
<a id="button" class="btn btn-default" href="./y_delete.php?id=<?php echo $id; ?>&name=<?php echo $name?> " role="button">DELETE</a>
</div>
<table class="table table-bordered" width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td><table class="table table-bordered" width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#FFFFFF">
<tr>
<td bgcolor="#F8F7F1"><strong><? echo $rows['topic']; ?></strong></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><? echo $rows['detail']; ?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>Date/time : </strong><? echo $rows['datetime']; ?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>Name : </strong><? echo $rows['name']; ?></td>
</tr>
</table></td>
</tr>
</table>
<BR>

<?php
                                                      

$sql3="SELECT view FROM $tbl_name WHERE id='$id'";
$result3=mysqli_query($conn,$sql3);
$rows=mysqli_fetch_array($result3,MYSQLI_ASSOC);
$view=$rows['view'];
 
// if have no counter value set counter = 1
if(empty($view)){
$view=1;
$sql4="INSERT INTO $tbl_name(view) VALUES('$view') WHERE id='$id'";
$result4=mysqli_query($sql4,MYSQLI_ASSOC);
}
 
// count more value
$addview=$view+1;
$sql5="update $tbl_name set view='$addview' WHERE id='$id'";
$result5=mysqli_query($sql5,MYSQLI_ASSOC);
mysqli_close();
?>
    
    </div>
    
    </body>
</html>