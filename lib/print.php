<?php
	function print_title(){
		if (isset($_GET['id'])){
			echo htmlspecialchars($_GET['id']);
		} else {
			echo "Welcome";
		}
	}

	function print_list(){
		$list = scandir('./data');
		for ($i = 0; $i < count($list); $i++){
			$id = htmlspecialchars($list[$i]);
			if($id != '.' && $id != '..'){
				echo "<li><a href=\"index.php?id=$id\">$id</a></li>";
			}
		}
	}

	function print_desc(){
		if (isset($_GET['id'])){
			$basename = basename($_GET['id']);
			echo htmlspecialchars(file_get_contents('data/'.$basename));
		} else {
			echo "Hello, PHP!";
		}
	}
?>