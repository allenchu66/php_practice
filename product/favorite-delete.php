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
	$sql=$pdo->prepare('delete from favorite where customer_id=? and product_id=?');
	$sql->execute([$_SESSION['customer']['id'], $_REQUEST['id']]);
	echo '所選商品已從我的最愛移除。';
	echo '<hr>';
} else {
	echo '請先登入，才能從我的最愛移除商品。';
}
require 'favorite.php';
?>

</body>
</html>

