<?php
class Config{
    
    private $servername = "localhost";
    private $uname = "root";
    private $password = "";
    private $db = "task_manager";

    protected $conn;

     function __construct(){
        if($this->conn = mysqli_connect($this->servername,$this->uname,$this->password,$this->db)){
            return ($this->conn);
        } else {
                echo die("Connection Error" . mysqli_connect_error());
        }

    }

}
// -- MYSQL QUERY to Always start with 1 and in sequence
// Set @autoid :=0;
// update todo set id = @autoid := (@autoid+1);
// alter table todo AUTO_increment = 1;

?>
