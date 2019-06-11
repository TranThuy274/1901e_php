<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Lambda là hàm không có tên</h1>
<?php
function hello($name){
    echo "<br> Hello " . $name;
}

hello("funtion");

/**
 * Có những hàm chỉ cần sử dụng 1 lần duy nhất
 * Khi mình khai báo và gán 1 cái lambda cho đến biến thì cần kết thúc lambda bằng dấu chấm phẩy
 *
 */

$hello = function ($name){
    return "<br> Hello " . $name;
};

/**
 * Gọi lambda qua biến
 * $bien("truyền vào tham số nếu có");
 */
echo $hello("lambda");

/**
 * Callback
 * Khi mà thực hiện xong 1 hành đọng mới cho phép 1 hành động khác chạy ngay đó
 * thì người ta gọi cái hành động chạy phía sau là callback
 * @param $country
 *
 * tham số truyền vào hàm này bắt buộc phải làm là 1 lambda đóng vai trò là callback của hàm showMesseage()
 * tức là hàm showMessage() chạy trc sau đó gọi là lambda callback phía sau
 *
 */

function showMessage($country){
    /**
     * Khi biến chắc chắn tham số truyền vào là hàm lambda thì gọi
     * tham sooss $thamso()
     */

    echo "<br> Xin chào " . $country();
}

/**
 * funtion(){
 * return "Korea";
 * }
 * đóng vai trò là giá trị truyền vào và nó là 1 lambda
 *
 */

showMessage(function (){
    return "lambda truyền vào ở dạng callback";
});

?>
<h1>Closurem là lambda nhưng mà sẽ sử dụng các biến toàn cục khi khai báo closure</h1>

<?php
//2 biến global
$city = "Hà Nội";
$country = "Việt Nam";

$go = function ($vehicle) use ($city, $country){
  echo "<br>go to travel city " . $city . " country " .$country . " by " . $vehicle;
};

$go("motor");

/**
 * Ví dụ tương tự closure
 */
$go1 = function ($vehicle, $city, $country){
    echo "<br>Go to travel city " . $city . " country " . $country . " by " . $vehicle;
};

// gọi hàm
$go1("motor", $city, $country);

/**
 * Closure sử dụng biến global mà khai báo closure
 * còn thằng truyền tham số sẽ truyền vào khi gọi hàm
 * khi mà tách quá trình khai báo closure
 * và sử dụn closure ra 2 file khác nhau
 */

?>

</body>
</html>