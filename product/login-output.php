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
unset($_SESSION['customer']);
$pdo=new PDO('mysql:host=sql307.byethost.com;dbname=b4_25019321_shop;charset=utf8', 'b4_25019321', 'Q0931737836');
$sql=$pdo->prepare('select * from customer where login=? and password=?');
$sql->execute([$_REQUEST['login'], $_REQUEST['password']]);
foreach ($sql->fetchAll() as $row) {
	$_SESSION['customer']=[
		'id'=>$row['id'], 'name'=>$row['name'], 
		'address'=>$row['address'], 'login'=>$row['login'], 
		'password'=>$row['password']];
}
if (isset($_SESSION['customer'])) {
	echo '親愛的', $_SESSION['customer']['name'], '、歡迎光臨。';
} else {
	echo '登入ID或密碼有誤。';
}
?>
</body>
</html>
