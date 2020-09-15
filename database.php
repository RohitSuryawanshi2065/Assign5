<?php
class database
{
    private $host;
    private $username;
    private $password;
    private $dbname;
    
    public $conn;

    public function __construct() {
        $this->host = 'localhost';
        $this->dbname = 'id14871732_rohit';
        $this->username = 'id14871732_root';
        $this->password = '^R62Ma4yYu$2<]Vg';
    }

    public function Connect(){
    
        $this->conn=mysqli_connect($this->host,$this->username,$this->password,$this->dbname);
        if(mysqli_connect_error()){
            echo "error connecting to database";
        }
        else{
            return $this->conn; 
        }
         
    }
}

?>
