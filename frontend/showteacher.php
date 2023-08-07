<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.2.3/css/bootstrap.min.css">
    <title>แสดงข้อมูลแผนก</title>
</head>
<body>
 <!-- ส่วนหัว -->
 <div><?php include('header.html') ?></div>
<?php
 include_once('db.php');
 $sql = "SELECT  * FROM  teacher";

 $result = $conn->query($sql);

 echo "<table>";
 if ($result->num_rows > 0) {
     echo "<tr><td>รหัส</td><td>ชื่อ</td><td>นามสกุล</td></tr>";
     while($row = $result->fetch_assoc()) {
         echo "<tr>";
         echo "<td>" .$row['id_teach']. "</td>";
         echo "<td>" .$row['fname_teach']. "</td>";
         echo "<td>" .$row['lname_teach']. "</td>";
         echo "</tr>";
 }
 } else {
     echo "0 results";
 }
 echo "</table>";
 
 $conn->close();

?>
    <a href="addteacher.html">เพิ่มข้อมูล</a>
     <!-- ส่วนท้าย -->
     <div><?php include('footer.html') ?></div>
    </body>
</html>