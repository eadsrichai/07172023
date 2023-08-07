<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.2.3/css/bootstrap.min.css">
    <title>แสดงข้อมูลนักเรียน</title>
</head>
<body>
    <div class="container">
    <div class="mt-3 fs-1 bg bg-primary text-white text-center">
    <p>ระบบฐานข้อมูลนักเรียน</p>
    </div>
    <?php
    include_once('../db.php');
    $sql = "SELECT  s.id_stu, s.gender_stu,s.fname_stu, s.lname_stu, s.tel_stu, s.email_stu, d.name_dep, t.fname_teach, t.lname_teach
            FROM  student  s
            LEFT JOIN  dep  d
            ON  s.id_dep = d.id_dep
            LEFT JOIN  teacher t
            ON  s.id_teach = t.id_teach";
            
    $result = $conn->query($sql);
    ?>
    <table  class="table">
    <?php
    if ($result->num_rows > 0) {  ?>
        <tr>
            <td>รหัส</td>
            <td>คำนำหน้า</td>
            <td>ชื่อ</td>
            <td>นามสกุล</td>
            <td>เบอร์โทร</td>
            <td>อีเมล์</td>
            <td>ชื่อแผนก</td>
            <td>ชื่อครูที่ปรึกษา</td>
            <td cols='2'>Action</td>
            <td></td>
        </tr>
        <?php
        while($row = $result->fetch_assoc()) {  ?>
            <tr>
                <td><?php echo $row['id_stu'] ?></td>
                <td><?php echo $row['gender_stu']?></td>
                <td><?php echo $row['fname_stu']?></td>
                <td><?php echo $row['lname_stu']?></td>
                <td><?php echo $row['tel_stu']?></td>
                <td><?php echo $row['email_stu']?></td>
                <td><?php echo $row['name_dep']?></td>
                <td><?php echo $row['fname_teach']?></td>
                <td><input type="button" class="btn btn-sm btn-outline-warning" value="Edit" /></td>
                <td><input type="button" class="btn btn-sm btn-outline-danger" value="Delete" /></td>
            </tr>
        
        
    <?php }
    
    } else {
        echo "0 results";
    }
    echo "</table>";
   
    $conn->close();
    ?>
     <input type="button" class="btn btn-sm btn-outline-primary" value="เพิ่มข้อมูล" />
    </div>
    </body>
</html>