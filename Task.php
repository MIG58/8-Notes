<?php // This a CRUD Opt file named as Task
require('Config.php');
class Task extends Config{
    public function __construct(){
        parent::__construct();
    }
     function addTask($taskName,$desce){ // Create
        
        $sql_query = "INSERT INTO tasks (task_name, task_description) VALUES ('$taskName','$desce')";
        if($this->conn->query($sql_query)){
            return true;
        }
        else{
            return false;
        }
   }
//    Function add Task can accept huge paragraph
//    function addTask($taskName, $desce)
//     {
//         $sql_query = "INSERT INTO tasks (task_name, task_description) VALUES (?, ?)";
        
//         $stmt = $this->conn->prepare($sql_query);
    
//         if ($stmt) {
//             $stmt->bind_param("ss", $taskName, $desce);
    
//             if ($stmt->execute()) {
//                 $stmt->close();
//                 return true;
//             } else {
//                 $stmt->close();
//                 return false;
//             }
//         } else {
//             return false;
//         }
//     }
    function getAllTask(){ // Read
        $sql_query = "SELECT * FROM tasks";
        $result = $this->conn->query($sql_query);
        if(isset($result)){
            return $result;
        } 
    }
    public function updateTask($id){ // Update
        $sql_query="SELECT * FROM tasks WHERE id=".$_GET['id'];
        $result = $this->conn->query($sql_query);
        if(isset($result)){
            return $result;
        } else {
            return mysqli_error($this->conn);
        }
    }
    function updateProcess($sql_query){
        if($this->conn->query($sql_query)){
            return true;
        } else {
            return false;
        }
    }

    public function deleteTask($id){ // Delete
        $sql_query = "DELETE FROM tasks WHERE id={$id}";
        if($this->conn->query($sql_query)){
        // $rearrange_query = "SET @autoid := 0; UPDATE todo SET id = @autoid := (@autoid + 1); ALTER TABLE todo AUTO_INCREMENT = 1";
        // $this->conn->multi_query($rearrange_query);
            return true;
        }
    }
    
}
?>