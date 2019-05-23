<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
if(isset($_POST)&& !empty($_POST)){
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}
?>

<h1>Form HTML</h1>
<pre>
    isset() được sử dụng để kiểm tra xem có sự tồn tại của biến trong hàm isset() hay không
    nếu có tồn tại hàm trả về true, không tồn tại trả về false
    $_POST khi gửi form đi và method="post" trong form
    thì $_POST sẽ gửi đi 1 mảng dữ liệu với key là tên ô input còn value là giá trị trong ô input đó

</pre>

<div>
    <form name="register" action="" method="post">
        <div>
            <label>Username</label>
            <input type="text" name="username" placeholder="Nhập Username" value="">

        </div>
        <div>
            <label>Password</label>
            <input type="password" value="" name="password" placeholder="Nhập Password">

        </div>
        <div>
            <input type="submit" name="submit" value="Submit">
        </div>
    </form>
</div>
</body>
</html>