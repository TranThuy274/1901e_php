<?php
// khởi động session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Tạo session trong PHP</h1>
<?php
//$_SESSION là một mảng
$_SESSION["username"] = "admin";
$_SESSION["user_email"] = "admin@gmail.com";

$location = "Hà Nội";

$_SESSION["user_email"] = $location;

//xem tất cả các hoạt động
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

?>

<?php
//huye toàn bộ sesion trong php
session_unset();
session_destroy();
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>
</body>
</html>