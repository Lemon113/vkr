<?php
	class DB extends mysqli {
	
		function __construct (){
			parent::__construct('localhost', 'root', '', 'market');
		}
		
		function ShowMarks(){
			$sql = "SELECT * FROM marknames";
			if ($res = $this->query($sql)) {
			
			$arr = array();
			$i = 0;
			while ($v = $res->fetch_array(MYSQLI_ASSOC)){
				$arr[$i]["id"] 			= $v["id"];
				$arr[$i]["name"] 		= $v["name"];
				$i++;
			}	
			return $arr;
			}else {
				echo $this->error."<br>";	
			}
		}
		
		function AddMarks ($name){
			$sql = "INSERT INTO 
						marknames (name)
					VALUES
						('$name')";
			
			if ($this->query($sql)) {
				echo "<br> New stuff is added! <br>";
				header("location: addMarks.php");
				exit;
			}else {
				echo $this->error."<br>";	
			}
		}
	}
?>