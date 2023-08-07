<?php
    // รับค่าจาก form เก็บไว้ในตัวแปร
    $id_teacher = $_GET["id_teacher"];
    $fname_teacher = $_GET["fname_teacher"];
    $lname_teacher = $_GET["lname_teacher"];

    // แสดงผลค่าของตัวแปรที่รับมา
    echo  $id_teacher;
    echo   $fname_teacher;
    echo  $lname_teacher;

    // เชื่อมต่อฐานข้อมูล
    include_once('db.php');
    
    // บันทึกข้อมูลลงฐานข้อมูล ตาราง dep
    $sql = "INSERT INTO teacher(id_teach,fname_teach,lname_teach)VALUES(?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $id,$fname,$lname);
    
    // ผูกโยงกับตัวแปร
    $id = $id_teacher;
    $fname = $fname_teacher;
    $lname = $lname_teacher;

    // ทำการประมวลผลการเพิ่มข้อมูล
    $stmt->execute();
    //  ปิดการเชื่อมต่อ
    $stmt->close();
    //  ปิดการเชื่อมต่อฐานข้อมูล
    $conn->close();
    //  ย้ายตำแหน่งในการแสดงผลไปที่ showdep.php และออกจากคำสั่งทั้งหมด  exit(0)
    header( "location: showteacher.php" );
    exit(0);


?>