<?php

    // นำเข้าการเชื่อมต่อฐานข้อมูล
    include_once('../db.php');
    // คำสั่ง sql สำหรับการเพิ่มข้อมูล
    $sql = "INSERT INTO student(id_stu,gender_stu,fname_stu,lname_stu,email_stu,tel_stu,id_dep,id_teach)
    VALUES(?,?,?,?,?,?,?,?)";
   $stmt = $conn->prepare($sql);
   $stmt->bind_param("ssssssss", $id_stu, $gender, $fname,$lname,$email,$tel,$id_dep,$id_teach);
   // นำค่าที่รับมา กำหนดให้กับตัวแปรสำหรับ bind
   $id_stu = $_GET['id_stu'];
   $gender = $_GET['gender'];
   $fname = $_GET['fname'];
   $lname = $_GET['lname'];
   $email = $_GET['email'];
   $tel = $_GET['tel'];
   $id_dep = $_GET['id_dep'];
   $id_teach = $_GET['id_teach'];
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