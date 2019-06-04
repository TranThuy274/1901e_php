<?php
/**
 * Created by PhpStorm.
 * User: Park Park
 * Date: 5/30/2019
 * Time: 9:05 PM
 */

include_once "config.php";
if ( isset($_POST['id']) && isset($_POST['name']) && isset($_POST['address']) && isset($_POST['salary'])){
    if($_POST['name'] && $_POST['address'] && ($_POST['salary'] > 0)){
        $name = $_POST['name'];
        $address = $_POST['address'];
        $salary = $_POST['salary'];

        $sqlInsert = "UPDATE employees SET name='$name',address='$address',salary=$salary WHERE id = " . (int) $_POST['id'];
        if(mysqli_query($connection, $sqlInsert)){
            echo "Update thành công";
            /**
             * hàm header được dùng để chuyển hướng url
             */
            header('Location: index3.php');
            exit();
        } else {
            echo "Update thất bại";
        }
    }
}