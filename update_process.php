<?php
require('Task.php');
$obj=new Task();
if(isset($_REQUEST['Add']))
{
    $id = $_POST['id'];  // line to get the id from the form
    $sql_query = "UPDATE tasks SET task_name='{$_POST['t_name']}', task_description='{$_POST['t_desc']}' WHERE id={$id}";

 if($obj->updateProcess($sql_query))
	 header("Location:index.php");
else
	echo "Error in deletion";
}
?>