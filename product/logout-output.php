<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>電影院</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php require 'menu.php'; ?>

<?php
session_start();
if (isset($_SESSION['customer'])) {
	unset($_SESSION['customer']);
	echo '登出成功。';
} else {
	echo '您原本就已登出。';
}
?>

</body>
</html>
