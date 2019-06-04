<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
include_once "config.php";
$sql = "SELECT * FROM employees";

/**
 * mysqli_query(tham số 1, tham số 2) là hàm thực hiện câu query
 *
 */

$result = mysqli_query($connection, $sql);



?>
<div class="container" style="margin-top: 100px">
    <div class="row">
        <div class="col-md-12">
            <div style="margin: 30px 0">
                <a href="create.php" class="btn btn-success">Thêm mới nhân viên</a>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Lương</th>
                    <th scope="col">Hành động</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <th scope="row"><?php echo $row['id']?></th>
                            <td><?php echo $row['name']?></td>
                            <td><?php echo $row['address']?></td>
                            <td><?php echo $row['salary']?></td>
                            <td>
                                <div>
                                    <a class="btn btn-warning" href="edit.php?id=<?php echo $row['id'] ?>">Sửa nhân viên</a>
                                </div>

                                <div>
                                    <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'] ?>">Xóa nhân viên</a>
                                </div>
                            </td>
                        </tr>
                        <?php
                    }
                } else{
                    echo "<br> Không có bản ghi nào trong CSDL";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>