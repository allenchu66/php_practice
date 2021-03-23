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
$pdo=new PDO('mysql:host=sql307.byethost.com;dbname=b4_25019321_shop;charset=utf8', 'b4_25019321', 'Q0931737836');

if (isset($_SESSION['customer'])) {
        $id=$_SESSION['customer']['id'];
	$sql=$pdo->prepare('update customer set name=?, address=?, '.'login=?, password=? where id=?');
	$sql->execute([$_REQUEST['name'], $_REQUEST['address'], $_REQUEST['login'], $_REQUEST['password'], $id]);
	$_SESSION['customer']=['id'=>$id, 'name'=>$_REQUEST['name'], 'address'=>$_REQUEST['address'], 'login'=>$_REQUEST['login'], 'password'=>$_REQUEST['password']];
	echo '客戶資料修改完成。';
} else {
	$sql=$pdo->prepare('insert into customer values(null,?,?,?,?)');
	$sql->execute([$_REQUEST['name'], $_REQUEST['address'], $_REQUEST['login'], $_REQUEST['password']]);
	echo '客戶資料新增完成。';
}
?>

</body>
</html>

