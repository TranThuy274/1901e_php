<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Else ìf trong js viết cách ra thì trong php elseif viết liền </h1>

<?php
$tuoi = 19;
if($tuoi >= 18){
    echo "đã đủ tuổi trưởng thành";
} else {
    echo "đang ở tuổi vị thành niên";
}


$point = 6.8;
if ($point >= 9) {
    echo "<br> Xuất sắc";
} elseif($point >= 8) {
    echo "<br> giỏi";
} elseif ($point >= 7) {
    echo "<br> khá";
} elseif ($point >= 6.5) {
    echo "<br> tb khá";
} elseif($point >= 5) {
    echo "<br> trung bình";
} else {
    echo "<br> yếu kém";
}
?>
</body>
</html>