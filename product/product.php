<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>電影院</title>
<link rel="stylesheet" href="style.css">
</head>

<style>
.search{
//margin-top:10px;
background-color:#FF8888;
border-top: #FF8888 solid 10px;
border-bottom: #FF8888 solid 10px;
margin-bottom:5px;
 margin-left:-10px;
 margin-right:-10px;}

h1{
margin-bottom:-40px;
}

</style>
<body>
<?php require 'menu.php'; ?>
<form action="product.php" method="post">
<div class="search">商品搜尋
<input type="text" name="keyword">
<input type="submit" value="搜尋">
</div>
</form>

<h1>電影院</h1>

<?php

echo '<table>';

echo '<th>商品編號</th><th>商品名稱</th><th>價格</th>';
$pdo=new PDO('mysql:host=sql307.byethost.com;dbname=b4_25019321_shop;charset=utf8', 'b4_25019321', 'Q0931737836');
if (isset($_REQUEST['keyword'])) {
	$sql=$pdo->prepare('select * from product where name like ?');
	$sql->execute(['%'.$_REQUEST['keyword'].'%']);
} else {
	$sql=$pdo->prepare('select * from product');
	$sql->execute([]);
}
foreach ($sql->fetchAll() as $row) {
	$id=$row['id'];
	echo '<tr>';
	echo '<td>', $id, '</td>';
	echo '<td>';
	echo '<a href="detail.php?id=', $id, '">', $row['name'], '</a>';
	echo '</td>';
	echo '<td>', $row['price'], '</td>';
	echo '</tr>';
}  
echo '</table>';


?>


</body>
</html>
