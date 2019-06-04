<?php
/**
 * Created by PhpStorm.
 * User: Park Park
 * Date: 6/4/2019
 * Time: 8:00 PM
 */

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

/**
 * Xóa cookie bằng cách đặt thời gian cho nnos là 1 thời gian đã qua
 * time() là thời gian hiện tại
 * time() - 3600 là cách đây 1h
 * session sẽ tự chết
 */

$time = time() - 3600;
setcookie("username", "", $time);
// in ra cookie sau khi xóa

echo "<br> Sau khi xóa";
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";