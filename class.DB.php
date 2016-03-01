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
		
		function ShowTypes(){
			$sql = "SELECT * FROM types";
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
		
		function AddTypes($name){
			$sql = "INSERT INTO 
						types (name)
					VALUES
						('$name')";
			
			if ($this->query($sql)) {
				echo "<br> New stuff is added! <br>";
				header("location: addTypes.php");
				exit;
			}else {
				echo $this->error."<br>";	
			}
		}
		
		function ShowChars(){
			$sql = "SELECT * FROM charnames";
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
		
		function AddChars($name){
			$sql = "INSERT INTO 
						charnames (name)
					VALUES
						('$name')";
			
			if ($this->query($sql)) {
				echo "<br> New stuff is added! <br>";
				header("location: addChars.php");
				exit;
			}else {
				echo $this->error."<br>";	
			}
		}
	}
?>