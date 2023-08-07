<?php

    // นำเข้าการเชื่อมต่อฐานข้อมูล
    include_once('../db.php');
    // คำสั่ง sql สำหรับการเพิ่มข้อมูล
    $sql = "DELETE FROM student  WHERE  id_stu = ?";

   $stmt = $conn->prepare($sql);
   $stmt->bind_param("s", $id_stu);
   // นำค่าที่รับมา กำหนดให้กับตัวแปรสำหรับ bind
   $id_stu = $_GET['id_stu'];

    // ทำการประมวลผลการเพิ่มข้อมูล
   $stmt->execute();
    //  ปิดการเชื่อมต่อ
   $stmt->close();
    //  ปิดการเชื่อมต่อฐานข้อมูล
   $conn->close();
    //  ย้ายตำแหน่งในการแสดงผลไปที่ show.php และออกจากคำสั่งทั้งหมด  exit(0)
   header( "location: showstudent.php" );
   exit(0);
?>
?>