<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Cookie được sử dụng để nhận diện người dùng
    Cookie là 1 file nhỏ được server nhúng vào máy tính của người dùng
    Mỗi lần máy tính đó guiwt request dến server nó  cũng sẽ gửi coookie đến
    Với Php bạn có thể tạo và lấy giá trị của cooke
    Để tại mới cookie bạn sử dụng hàm setcookie()
    Cú pháp:
    setcookie(name, value, expire, path, domain, secure, httponly);

    chí có tham số name đầu tiên là bắt buộc phải truyền vào
     [PHPSESSID] => 1jhts25u2kcve3mb4mc10ikpsr
    PHPSESSID : cookie này sẽ cho phép nhận diện người dùng do PHP tự sinh ra


</pre>

<?php
/**
 * Thời gian 1 ngày là 86400 giây
 * Cookie dưới sẽ sống trong 30 ngày
 *
 *
 */

$cookie_name = "username";
$cookie_value = "admin";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

?>

<?php
//xem tất cả cookie
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";


//truy cập vào 1 cookie
if(!isset($_COOKIE["username"])){
    echo '<br> Cookie $_COOKIE[username] chưa đc tạo';
}else{
    echo '<br> Cookie $_COOKIE[username] là: ' . $_COOKIE["username"];
}
?>
</body>
</html>