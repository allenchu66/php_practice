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
$id=$_REQUEST['id'];
if (!isset($_SESSION['product'])) {
	$_SESSION['product']=[];
}
$count=0;
if (isset($_SESSION['product'][$id])) {
	$count=$_SESSION['product'][$id]['count'];
}
$_SESSION['product'][$id]=['name'=>$_REQUEST['name'], 'price'=>$_REQUEST['price'], 'count'=>$count+$_REQUEST['count']];
echo '<p>商品放入購物車成功。</p>';
echo '<hr>';
require 'cart.php';
?>
</body>
</html>

