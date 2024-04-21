<?php
header("Refresh: 2;url=index.php");
require('Task.php');

if (isset($_POST["Add"])) {
    $title = $_REQUEST['t_name'];
    $desce = $_REQUEST['t_desc'];
    $obj = new Task();

    if ($obj->addTask($title, $desce)) {
        echo '<script>alert("Data Added Successfully...!! ");</script>';
    } else {
        echo 'Error: ' . mysqli_error($obj->getConnection());
    }
}
?>

<!-- Fatal error: Uncaught mysqli_sql_exception: Unknown column 'ww' in 'field list' in C:\Users\Bourne\Desktop\PHP\0_Course_Code\TASKS\TODO\Task.php:10 Stack trace: #0 C:\Users\Bourne\Desktop\PHP\0_Course_Code\TASKS\TODO\Task.php(10): mysqli->query('INSERT INTO tas...') #1 C:\Users\Bourne\Desktop\PHP\0_Course_Code\TASKS\TODO\add_task.php(11): Task->addTask('ww', 'ww') #2 {main} thrown in C:\Users\Bourne\Desktop\PHP\0_Course_Code\TASKS\TODO\Task.php on line 10 -->