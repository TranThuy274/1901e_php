<?php
/**
 * Created by PhpStorm.
 * User: Park Park
 * Date: 5/28/2019
 * Time: 8:49 PM
 */

/**
 * Câu lệnh include "đường dẫn của file";
 * thì có thể sử dụng nhứng hàm hoặc class hoặc biến hoặc hằng số của file
 */

require "funtion.php";
$cv = tinhchuvihinhtron(3);

/**
 * gặp thông báo lỗi
 * Fatal error: Uncaught Error: Call to undefined function tinhchuvihinhtron() in C:\xampp\htdocs\1901ephp1\day7\napinclude\index3.php:4 Stack trace: #0 {main} thrown in C:\xampp\htdocs\1901ephp1\day7\napinclude\index3.php on line 4
 */
echo "Chu vi: " , $cv;