<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Comment trong php</h1>
<pre>
    Comment 1 dòng ://
    Comment nhiều dòng /*  */

    Phân biệt sự khác biệt khi echo giá trị của 1 biến bằng nháy kép hoặc nháy đơn:
    Nếu trong nháy kép có $a thì php sẽ in ra giá trị của biến đó
    Nếu trong nháy đơn có $a thì php sẽ hiểu đó là 1 chuỗi bình thường
</pre>
<?php
$a = 5;
echo 'giá trị của biến $a bằng: ' . $a;
echo "<br>";
echo "giá trị của biến $a bằng: " . $a;
?>
</body>
</html>