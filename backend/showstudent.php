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
    <?php
    include_once('../db.php');
    $sql = "SELECT  * FROM  student";
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
            </tr>
    <?php }
    } else {
        echo "0 results";
    }
    echo "</table>";
    
    $conn->close();
    ?>
    </div>
    </body>
</html>