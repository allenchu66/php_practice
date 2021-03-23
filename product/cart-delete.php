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
unset($_SESSION['product'][$_REQUEST['id']]);
echo '所選商品已移出購物車。';
echo '<hr>';
require 'cart.php';
?>

</body>
</html>

