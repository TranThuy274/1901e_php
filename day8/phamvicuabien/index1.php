<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Phạm vi của biến</h1>
<pre>
    -Biến cục bộ : chỉ có ảnh hưởng và đc sử dụng trong một không gian nhất định
    -Biến toàn cục: có ảnh hưởng và có thể sử dụng mọi nơi
    -Nếu tên biến bị trùng thì nếu sử dụng ngoài hàm thì php sẽ lấy giá trị của biến toàn cụ

    Tham số kho khái báo hàm là biến cục bộ và chỉ có tác dụng trong hàm
    Ví dụ như $r alf biến cục bộ
</pre>

<?php
//Biến cục bộ
$r = 100;
/*
 * Khai báo hàm với $r là tham số cần truyền vào
 */
function tinhchuvihinhtron($r = 10) {
    // $chuvi là biến cục bộ
    $chuvi = 3.14*$r*2;
    return $chuvi;
}
// gọi hàm
// Biến $ketqua bên ngoài hàm là biến toàn cục
$ketqua = tinhchuvihinhtron(15);
echo "<br> Chu vi hinh tron là : " . $ketqua;
echo '<br>Test thử biến $r : ' . $r
?>
</body>
</html>