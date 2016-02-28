<?php
function __autoload ($name) {
	$str = "class." . $name . ".php";
	if (! include $str) echo ("НЕ получилось");
}
$db = new DB();
?>

<html>
<head>
	<title>AddGoods page!</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<h1 class="topic">There are you can add some goods</h1>
	<div id="content">
	<div id="menu">
			<ul>
				<li><a href="addGoods.php">ДОБАВИТЬ ТОВАР</a></li>
				<li><a href="addMarks.php">ДОБАВИТЬ МАРКИ</a></li>
				<li><a href="#">ДОБАВИТЬ ХАРАКТЕРИСТИКИ</a></li>
				<li><a href="#">ДОБАВИТЬ ТИПЫ</a></li>
			</ul>
	</div>
	<form action="post.php">
		<div id="main">
			<div class="field">
			   <label for="n">Имя товара</label>
			   <input type="text" name="name" />
			</div>
			<div class="field">
			   <label for="ln">Тип товара</label>
			   <select>
				<option value="1">Ноутбук</option>
				<option value="2">Кофеварка</option>
			   </select>
			</div>
			<div class="field">
			   <label for="a">Марка товара</label>
			   <select>
				<option value="1">Sony</option>
				<option value="2">Toshiba</option>
			   </select>
			</div>
			<a class="link" href="#">Добавить характеристику</a>
			<div class="field">
				<input type="submit" />
			</div>
		</div>
	</form>
	</div>
</body>
</html>