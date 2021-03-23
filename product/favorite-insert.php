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
	$pdo=new PDO('mysql:host=sql307.byethost.com;dbname=b4_25019321_shop;charset=utf8', 'b4_25019321', 'Q0931737836');
	$sql=$pdo->prepare('insert into favorite values(?,?)');
	$sql->execute([$_SESSION['customer']['id'], $_REQUEST['id']]);
	echo '商品加入我的最愛成功。';
	echo '<hr>';
	require 'favorite.php';
} else {
	echo '請先登入，才能將商品加入我的最愛。';
}
?>

</body>
</html>

