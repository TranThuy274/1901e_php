<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
if(isset($_GET)&& !empty($_GET)){
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
}
?>

<h1>Form HTML</h1>
<pre>
    $_GET gửi sữ liệu qua url
    ví dụ mặc định http://localhost/1901ephp1/day3/1.senddata/get.php
    khi form có method="get" gửi dữ liệu đi :
    http://localhost/1901ephp1/day3/1.senddata/get.php?username=aaa&password=111&submit=%C4%90%C4%83ng+k%C3%BD
    lúc này php sẽ đưa các tên của ô input trong form và giá trị của chúng
    lên trên query string của URL

</pre>

<div>
    <form name="register" action="" method="get">
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