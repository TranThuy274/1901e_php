<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
Trong vòng lặp có 3 có thành phần quan trọng nhất :
1 . sự khởi đầu vòng lặp
2 . điều kiện chạy vòng lặp
3 . sự thay đổi sau mỗi vòng lặp
<?php
$i = 1;
while ($i < 100) {
    if (($i % 2) == 0) {

        echo "<br>" . $i;
    }
    $i++;
}

?>
</body>
</html>