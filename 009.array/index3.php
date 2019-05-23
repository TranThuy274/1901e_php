<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Toán tử ! là toán tử phủ định</h1>

<?php
//mảng chỉ số
$student = array("Nguyen van a", "Nguyen van b", "Nguyen van c");
echo "<pre>";
print_r($student);
echo "</pre>";
//dạng foreach đầy đủ
if(is_array($student) && !empty($student)){
    foreach ($student as $key => $value){
        echo "<br> Key: " .$key . " Value: " . $value;
    }
}

echo "<br> Dạng foreach rút gọn";
//dạng foreach rút gọn chỉ lặp và xuất ra cái value
if(is_array($student) && !empty($student)){
    foreach ($student as $value){
        echo "<br> Value: " . $value;
    }
}
?>
</body>
</html>