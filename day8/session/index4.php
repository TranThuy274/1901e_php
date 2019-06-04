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

<div>
    <?php
    //Kiểm tra xem 1 session có tồn tại không
    if(isset($_SESSION['username'])):
        ?>
    <p>username là : <?php echo $_SESSION['username']?> </p>
    <?php endif; ?>

    <?php if(isset($_SESSION['user_email'])) : ?>

    <p>user_email là : <?php echo $_SESSION['user_email'] ?> </p>
    <?php endif; ?>

    <?php if (isset($_SESSION["user_location"])) : ?>
        <p>user_location là : <?php echo $_SESSION["user_location"] ?></p>
    <?php endif; ?>

</div>
</body>
</html>