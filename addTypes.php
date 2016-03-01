<?php
function __autoload ($name) {
	$str = "class." . $name . ".php";
	if (! include $str) echo ("Неудача");
}
$db = new DB();
$arr = $db->ShowTypes();
if (isset($_POST["name"])) {
	$db->AddTypes($_POST["name"]);
}
?>

<html>
<head>
	<title>AddTypes page!</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
<div id="content">
	<div id="menu">
			<ul>
				<li><a href="addGoods.php">ДОБАВИТЬ ТОВАР</a></li>
				<li><a href="addMarks.php">ДОБАВИТЬ МАРКИ</a></li>
				<li><a href="addChars.php">ДОБАВИТЬ ХАРАКТЕРИСТИКИ</a></li>
				<li><a href="addTypes.php">ДОБАВИТЬ ТИПЫ</a></li>
			</ul>
	</div>
	<div id="infoblock">
		<p>Уже добавленные типы:</p>
		<?php
			if(isset($arr)){
				foreach($arr as $val){
					echo("<p>".$val["name"]."</p>");
				}
			}
		?>
		<form action="addTypes.php" method="POST">
			<div id="main">
				<div class="field">
				   <label>Введите имя типа</label>
				   <input type="text" name="name" />
				</div>
			<div class="field">
				<input type="submit"/>
			</div>
			</div>
		</form>
	</div>
</div>
</body>
</html>