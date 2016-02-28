<?php
function __autoload ($name) {
	$str = "class." . $name . ".php";
	if (! include $str) echo ("Неудача");
}
$db = new DB();
$arr = $db->ShowMarks();
if (isset($_POST["name"])) {
	$db->AddMarks($_POST["name"]);
}
?>

<html>
<head>
	<title>AddGoods page!</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
<div id="content">
	<div id="menu">
			<ul>
				<li><a href="addGoods.php">ДОБАВИТЬ ТОВАР</a></li>
				<li><a href="addMarks.php">ДОБАВИТЬ МАРКИ</a></li>
				<li><a href="#">ДОБАВИТЬ ХАРАКТЕРИСТИКИ</a></li>
				<li><a href="#">ДОБАВИТЬ ТИПЫ</a></li>
			</ul>
	</div>
	<p>Уже добавленные марки:</p>
	<?php
		if(isset($arr)){
			foreach($arr as $val){
				echo("<p>".$val["name"]."</p>");
			}
		}
	?>
	<form action="addMarks.php" method="POST">
		<div id="main">
			<div class="field">
			   <label>Введите имя марки</label>
			   <input type="text" name="name" />
			</div>
		<div class="field">
			<input type="submit"/>
		</div>
		</div>
	</form>
</div>
</body>
</html>