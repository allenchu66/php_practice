<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>電影院</title>
<link rel="stylesheet" href="style.css">
</head>
<style>
.img{
 width:50%;
}
</style>
<body>
<?php require 'menu.php'; ?>
<?php
$pdo=new PDO('mysql:host=sql307.byethost.com;dbname=b4_25019321_shop;charset=utf8', 'b4_25019321', 'Q0931737836');
$sql=$pdo->prepare('select * from product where id=?');
$sql->execute([$_REQUEST['id']]);
foreach ($sql->fetchAll() as $row) {
	echo '<p><img src="image/', $row['id'], '.jpg"  ></p>';
	echo '<form action="cart-insert.php" method="post">';
	echo '<p>商品編號：', $row['id'], '</p>';
	echo '<p>商品名稱：', $row['name'], '</p>';
	echo '<p>價格：', $row['price'], '</p>';
	echo '<p>數量：<select name="count">';
	for ($i=1; $i<=10; $i++) {
		echo '<option value="', $i, '">', $i, '</option>';
	}
	echo '</select></p>';
	echo '<input type="hidden" name="id" value="', $row['id'], '">';
	echo '<input type="hidden" name="name" value="', $row['name'], '">';
	echo '<input type="hidden" name="price" value="', $row['price'], '">';
	echo '<p><input type="submit" value="放入購物車"></p>';
	echo '</form>';
	echo '<p><a href="favorite-insert.php?id=', $row['id'],'">加入我的最愛</a></p>';
}
?>
</body>
</html>

