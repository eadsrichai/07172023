<?php
    // รับค่าจาก form เก็บไว้ในตัวแปร
    $id_dep = $_GET["id_dep"];
    $name_dep = $_GET["name_dep"];

    // แสดงผลค่าของตัวแปรที่รับมา
    echo  $id_dep;
    echo   $name_dep;

    // เชื่อมต่อฐานข้อมูล
    include_once('db.php');
    
    // บันทึกข้อมูลลงฐานข้อมูล ตาราง dep
    $sql = "INSERT INTO dep(id_dep,name_dep)VALUES(?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $id,$name);
    
    // ผูกโยงกับตัวแปร
    $id = $id_dep;
    $name = $name_dep;

    // ทำการประมวลผลการเพิ่มข้อมูล
    $stmt->execute();
    //  ปิดการเชื่อมต่อ
    $stmt->close();
    //  ปิดการเชื่อมต่อฐานข้อมูล
    $conn->close();
    //  ย้ายตำแหน่งในการแสดงผลไปที่ showdep.php และออกจากคำสั่งทั้งหมด  exit(0)
    header( "location: showdep.php" );
    exit(0);


?>