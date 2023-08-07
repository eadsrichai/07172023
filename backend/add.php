<?php
    // รับข้อมูลจาก form
    $ids = $_GET['id_stu'];
    $g = $_GET['gender'];
    $f = $_GET['fname'];
    $l = $_GET['lname'];
    $e = $_GET['email'];
    $t = $_GET['tel'];
    $idd = $_GET['id_dep'];
    $idt = $_GET['id_teach'];

    // แสดงข้อมูลออกมาดู
    echo  $ids;

    // นำเข้าการเชื่อมต่อฐานข้อมูล
    include_once('db.php');
    // คำสั่ง sql สำหรับการเพิ่มข้อมูล
    $sql = "INSERT INTO student(id_stu,gender_stu,fname_stu,lname_stu,email_stu,tel_stu,id_dep,id_teach)
    VALUES(?,?,?,?,?,?,?,?)";
   $stmt = $conn->prepare($sql);
   $stmt->bind_param("ssssssss", $id_stu, $gender, $fname,$lname,$email,$tel,$id_dep,$id_teach);
   // นำค่าที่รับมา กำหนดให้กับตัวแปรสำหรับ bind
   $id_stu = $ids;
   $gender = $g;
   $fname = $f;
   $lname = $l;
   $email = $e;
   $tel = $t;
   $id_dep = $idd;
   $id_teach = $idt;
    // ทำการประมวลผลการเพิ่มข้อมูล
   $stmt->execute();
    //  ปิดการเชื่อมต่อ
   $stmt->close();
    //  ปิดการเชื่อมต่อฐานข้อมูล
   $conn->close();
    //  ย้ายตำแหน่งในการแสดงผลไปที่ show.php และออกจากคำสั่งทั้งหมด  exit(0)
   header( "location: show.php" );
   exit(0);
?>