<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>電影院</title>
<link rel="stylesheet" href="style.css">
</head>

<style>
.login{
margin-top:10%;
}
</style>
<body>
<?php require 'menu.php'; ?>
<div class="login">
<form action="login-output.php" method="post">
登入<input type="text" name="login"><br>
密碼<input type="password" name="password"><br>
<input type="submit" value="登入">
</form>
</div>

</body>
</html>


