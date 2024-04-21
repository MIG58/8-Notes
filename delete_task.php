<?php
require('Task.php');
$obj = new Task();
$id = $_GET['id'];
if($obj->deleteTask($id)){
    header("Location:index.php");
} else{
	echo "Error in deletion";
}

?>