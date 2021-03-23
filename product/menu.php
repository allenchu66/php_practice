<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>電影院</title>
<link rel="stylesheet" href="style.css">
</head>

<style>
body{
background-color:#d18915;
}

nav a {
    color: inherit; /* 移除超連結顏色 */
    text-decoration: none;  /* 移除超連結底線 */
}

nav > ul {
    list-style: none;   /* 移除項目符號 */
}

nav > ul {
    background-color: rgb(230, 230, 230);
    list-style: none;   /* 移除項目符號 */
    margin: 0;
    padding: 0;
}
nav a {
    color: inherit; /* 移除超連結顏色 */
    display: block; /* 讓 <a> 填滿 <li> */
    font-size: 1.2rem;
    padding: 10px;
    text-decoration: none;  /* 移除超連結底線 */
}
nav a:hover {
    background-color: rgb(115, 115, 115);
    color: white;
}

.flex-nav {
    display: flex;
    justify-content: center;
    margin-top:-10px;
    margin-left:-10px;
    margin-right:-10px;
}

</style>
<body>
<nav>
    <ul class="flex-nav">
        <li><a href="product.php">商品</a></li>
        <li><a href="favorite-show.php">我的最愛</a></li>
        <li><a href="history.php">購買紀錄</a></li>
        <li><a href="cart-show.php">購物車</a></li>
        <li><a href="purchase-input.php">結帳</a></li>
        <li><a href="login-input.php">登入</a></li>
	<li><a href="logout-input.php">登出</a></li>
	<li><a href="customer-input.php">會員登入</a></li>
    </ul>
</nav>
</body>
</html>


