<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงข้อมูลแผนก</title>
</head>
<body>

<?php
 include_once('db.php');
 $sql = "SELECT  * FROM  dep";

 $result = $conn->query($sql);

 echo "<table>";
 if ($result->num_rows > 0) {
     echo "<tr><td>รหัสแผนก</td><td>ชื่อแผนก</td></tr>";
     while($row = $result->fetch_assoc()) {
         echo "<tr>";
         echo "<td>" .$row['id_dep']. "</td>";
         echo "<td>" .$row['name_dep']. "</td>";
         echo "</tr>";
 }
 } else {
     echo "0 results";
 }
 echo "</table>";
 
 $conn->close();

?>
    <a href="adddep.html">เพิ่มข้อมูล</a>
    </body>
</html>