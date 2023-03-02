<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงข้อมูลรายวิชา</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
<div class="container-fluid py-5">
        <br>
        <div class="col-md-auto">
            <h1 class="text-center" style="color: #fe965a;">ข้อมูลรายวิชา</h1><br>
        </div>

        <?

        ?>

        <table class="table">
            <thead>
                <tr>
                    <th class="col-1">รหัสวิชา</th>
                    <th>ชื่อวิชา</th>
                    <th>หน่วยกิจ</th>
                    <th class="col-1">จำนวนกลุ่ม</th>
                    <th>จำนวนที่รับ(ต่อกลุ่ม)</th>
                    <th>แก้ไข</th>
                    <th class="col-1">ลบ</th>
                </tr>
            </thead>
            <tbody>
                <?php $sql = "SELECT * FROM course";
                $result = mysqli_query($conn,$sql);
                while ($row = mysqli_fetch_assoc($result)): 
                ?>
                <tr>
                    <td>
                        <?php echo $row['cou_id']; ?>
                    </td>
                    <td>
                        <?php echo $row['cou_name']; ?>
                    </td>
                    <td>
                        <?php echo $row['cou_credit']; ?>
                    </td>
                    <td>
                        <?php echo $row['cou_num_of_group']; ?>
                    </td>
                    <td>
                        <?php echo $row['cou_num_of_student']; ?>
                    </td>
                   
                    <td ><a href="JavaScript:if(confirm('Confirm Edit?')==true){window.location='Course_editForm.php?couID=<?php echo $row['cou_id'];?>';} "class="btn btn-warning">Edit</a></td>
                    <td ><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='Course_delete.php?couID=<?php echo $row['cou_id'];?>';}"class="btn btn-danger">Delete</a></td>
                
                
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
  
        <a href="Course_addForm.php" class="btn btn-success" >เพิ่มข้อมูลรายวิชา</a>


    </div>





</body>

</html>
