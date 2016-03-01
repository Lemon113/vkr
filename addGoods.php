<?php
function __autoload ($name) {
	$str = "class." . $name . ".php";
	if (! include $str) echo ("НЕ получилось");
}
$db = new DB();
$marksArr = $db->ShowMarks();
$typesArr = $db->ShowTypes();
$charsArr = $db->ShowChars();
?>

<html>
<head>
	<title>AddGoods page!</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<script language="javascript">
<?php
if(isset($charsArr)){
	echo ("var arr=new Array(2);\n");
	echo ("arr[0]=new Array(".count($charsArr).");\n");
	echo ("arr[1]=new Array(".count($charsArr).");\n");
	$i = 0;
	foreach($charsArr as $val){
		echo ("arr[0][".$i."]='<option value=".$val["id"].">'\n");
		echo ("arr[1][".$i."]='".$val["name"]."</option>'\n");
		$i++;
		//echo("div.insertAdjacentHTML( 'beforeBegin', text );\n");
	}
	echo("var max=".$i.";");
}
?>
var clicks = 0;
function addCharact(){
var div = document.getElementById( 'genLink' );
var text = '<div class="field">\n<label>Характеристика товара</label>\n<select id="test'+clicks+'">\n';
div.insertAdjacentHTML( 'beforeBegin', text );
var vid = document.getElementById('test'+clicks);
for (var i=0; i<max; i++){
	vid.insertAdjacentHTML( 'afterBegin', arr[0][i]+arr[1][i] );
}
text = '</select>\n</div>';
div.insertAdjacentHTML( 'beforeBegin', text );
clicks++;
}
</script>
<body>
	<h1 class="topic">There are you can add some goods</h1>
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
		<form action="post.php">
			<div id="main">
				<div class="field">
				   <label>Имя товара</label>
				   <input type="text" name="name" />
				</div>
				<div class="field">
				   <label>Тип товара</label>
				   <select>
					<?php
						if(isset($typesArr)){
							foreach($typesArr as $val){
								echo("<option value=".$val["id"].">".$val["name"]."</option>\n");
							}
						}
					?>
				   </select>
				</div>
				<div class="field">
				   <label>Марка товара</label>
				   <select>
					<?php
						if(isset($marksArr)){
							foreach($marksArr as $val){
								echo("<option value=".$val["id"].">".$val["name"]."</option>\n");
							}
						}
					?>
				   </select>
				</div>
				<a class="link" onClick="addCharact();" id="genLink">Добавить характеристику</a>
				<div class="field">
					<input type="submit" />
				</div>
			</div>
		</form>
	</div>
	</div>
</body>
</html>