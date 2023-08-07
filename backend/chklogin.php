<?php
$u = $_GET['username'];
$p = $_GET['password'];

include_once('../db.php');

$sql = "SELECT  acc_username, acc_password 
        FROM  account
        WHERE  acc_username = '$u'  
        AND    acc_password = '$p'
        ";

 $result = $conn->query($sql);


 if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
        echo "username and password ถูกต้อง";
        header( "location: showstudent.php" );
        exit(0);
     }
}else {
    echo "username and password ไม่ถูกต้อง";
}

?>