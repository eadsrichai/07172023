<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
 include_once('db.php');
 $sql1 = "SELECT  s.id_stu, s.fname_stu, s.lname_stu, d.name_dep, t.fname_teach, t.lname_teach
 FROM  student  s
 LEFT JOIN  dep  d
 ON  s.id_dep = d.id_dep
 LEFT JOIN  teacher t
 ON  s.id_teach = t.id_teach";

 $result1 = $conn->query($sql1);

 echo "<table>";
 if ($result1->num_rows > 0) {
     echo "<tr><td>รหัส</td><td>ชื่อ</td><td>นามสกุล</td><td>แผนก</td><td>ชื่อ</td><td>นามสกุล</td></tr>";
     while($row = $result1->fetch_assoc()) {
         echo "<tr>";
         echo "<td>" .$row['id_stu']. "</td>";
         echo "<td>" .$row['fname_stu']. "</td>";
         echo "<td>" .$row['lname_stu']. "</td>";
         echo "<td>" .$row['name_dep']. "</td>";
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
    <a href="add.html">เพิ่มข้อมูล</a>
    </body>
</html>