<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
</head>
<body id=add_topic>

<?php
    $host="localhost"; // Host name 
    $username="root"; // Mysql username 
    $password="root"; // Mysql password 
    $db_name="test"; // Database name 
    $tbl_name="members"; // Table name 
    // Connect to server and select database.
    
    $conn = mysqli_connect("$host", "$username", "$password","$db_name") or die("cannot connect"); 
    
    $id = $_POST['loginID'];
    $password = $_POST['loginPASS'];
    
    $sql = "select id from members where id='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo $row["id"];
    echo $row["password"];
    if($row["id"] == $id) {
        $sql = "select password from members where id='$id'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    
        if($row["password"] == $password) {
            echo "PASS!";
            echo "<script>location.replace('./y_main_forum.php?id=$id&name=all');</script>";
        }else {
            echo "PASSWORD ERROR";
            echo "<br>";
            echo "<a href=login_page.php>GO BACK</a>"; 
        }
    }else {
        echo "ID DOESN'T EXIST";
        echo"<BR>";
        echo "<a href=login_page.php>GO BACK</a>"; 
    }
//    
//    $getID = "SELECT id FROM MEMBERS WHERE id='$id'";
//	$getID = mysqli_query($conn,$getID);
//    $getID = mysqli_fetch_array($getID,MYSQLI_ASSOC);
//    
//    if($getID["id"]) {
//        $getPASS = "SELECT password FROM members WHERE id='$id'";
//        $getPASS = mysqli_query($conn,$getPASS);
//        $getPASS = mysqli_fetch_array($getPASS,MYSQLI_ASSOC);
//        if($getPASS["password"] == $password) {
//			echo "PASS!";
//            echo "<script>location.replace('./yoonjeewoo.php?id=$getID[id]');</script>";
//		}
//		else {
//			echo "PASSWORD ERROR";
//            echo "<br>";
//            echo "<a href=login_page.php>GO BACK</a>"; 
//		}
//	}
//	
//	else {
//		echo "ID DOESN'T EXIST";
//        echo"<BR>";
//        echo "<a href=login_page.php>GO BACK</a>"; 
//	}
?>
    
</body>
</html>