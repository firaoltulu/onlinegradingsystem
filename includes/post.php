<?php
/**
* Description:	This is a class for member.
* Author:		Joken Villanueva
* Date Created:	Nov. 2, 2013
* Revised By:		
*/
require_once(LIB_PATH.DS.'database.php');
class Post{
    protected static $tbl_name;	
    protected static $db_name;
    private $conn;
    private $DB_SERVER = "localhost"; 
    var $sql_string = '';
    

    function __construct($db_name,$tbl_name) {
        self::$db_name = $db_name;
        self::$tbl_name =strval($tbl_name);

		$this->open_connection();
		$this->magic_quotes_active = ""; /**get_magic_quotes_gpc();*/
		$this->real_escape_string_exists = function_exists("mysqli_real_escape_string");
	}

    public function open_connection() {
		$this->conn = mysqli_connect(DB_SERVER, "root", "", self::$db_name);
		if(!$this->conn){
			echo "Problem in database connection! Contact administrator!";
			exit();
		}
        // else{
        //     echo "created database succesfully done u fuckur";
        // }

	}

    	
	function setQuery($sql='') {
		$this->sql_string=$sql;
	}
	
	function executeQuery() {
		$result = mysqli_query($this->conn,$this->sql_string);
		$this->confirm_query($result);
		return $result;
	}
    
    private function confirm_query($result) {
		if(!$result){
			$this->error_no = mysqli_errno( $this->conn );
			$this->error_msg = mysqli_error( $this->conn );
			return false;				
		}
		return $result;
	}

    function loadResultList( $key='' ) {
		$cur = $this->executeQuery();
		$array = array();
		while ($row = mysqli_fetch_object( $cur )) {
			if ($key) {
				$array[$row->$key] = $row;
			} else {
				$array[] = $row;
			}
		}
		mysqli_free_result( $cur );
		return $array;
	}
	
	function loadSingleResult() {
		$cur = $this->executeQuery();
		while ($row = mysqli_fetch_object( $cur )) {
			$data = $row;
		}
		mysqli_free_result( $cur );
		return $data;
	}
	
	function getFieldsOnOneTable( $tbl_name ) {
	
		$this->setQuery("DESC `".$tbl_name."`");
		$rows = $this->loadResultList();
		
		$f = array();
		for ( $x=0; $x<count( $rows ); $x++ ) {
			$f[] = $rows[$x]->Field;
			
		}
		
		return $f;
	}	

	public function fetch_array($result) {
		return mysqli_fetch_array($result);
	}
	//gets the number or rows	
	public function num_rows($result_set) {
		return mysqli_num_rows($result_set);
	}

    public function insert_id() {
        // get the last id inserted over the current db connection
            return mysqli_insert_id($this->conn);
    }
      
    public function affected_rows() {
            return mysqli_affected_rows($this->conn);
    }
        
    public function escape_value( $value ) {
            if( $this->real_escape_string_exists ) { 
                 $value = stripslashes( $value ); 
                $value = mysqli_real_escape_string($this->conn, $value );
            } else {
                 $value = stripslashes( $value ); 
                 echo $value."<br>";
            }
            return $value;
    }

    public function close_connection() {
            if(isset($this->conn)) {
                mysqli_close($this->conn);
                unset($this->conn);
            }
    }
    protected function sanitized_attributes() {
		$clean_attributes = array();
		foreach($this->attributes() as $key => $value){
			
		  $clean_attributes[$key] = $this->escape_value($value);
		  
		}
		return $clean_attributes;
	}  
    function db_fields(){
		return $this->getFieldsOnOneTable(self::$tbl_name);
	}

    protected function attributes() { 
		// return an array of attribute names and their values
		$attributes = array();
		foreach($this->db_fields() as $field) {
			if(property_exists($this, $field)) {
				$attributes[$field] = $this->$field;
			}
		}
		return $attributes;
	}

    public function create() {
    //    echo self::$tbl_name;
		$attributes = $this->sanitized_attributes();
		$sql = "INSERT INTO `".self::$tbl_name."` (";
		$sql .= join(", ", array_keys($attributes));
		$sql .= ") VALUES ('";
		$sql .= join("', '", array_values($attributes));
		$sql .= "')";
        echo $sql;
		$this->setQuery($sql);
		if($this->executeQuery()) {
			$this->ins_id = $this->insert_id();
			return true;
		} 
		else {
			return false;
		}
	}
    

    public function createtable($name=0) {
        if($name ==0){

        }	
        else{
            $sql = "CREATE TABLE `".$name."` (
                `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                `student_id` varchar(255) UNIQUE  NOT NULL,
                `student_name` varchar(255) NOT NULL, 
                `FIRST_MIDEXAM` int(11) NOT NULL,
                `SECOND_MIDEXAM` int(11) NOT NULL,
                `ASSIGNMENT` int(11) NOT NULL,
                `FINAL` int(11) NOT NULL,    
                `CLASS_ATENDANCE` int(11) NOT NULL,
                `TOTAL` int(11) NOT NULL,
                `GRADE` varchar(255) NOT NULL )";
                $this->setQuery($sql);
                if($this->executeQuery()) {
                    return true;
                } 
                else {       
                    return false;
                }

        }
    }
	
	public function createcourse($name="") {
        if($name ==""){

        }	
        else{
            $sql = "CREATE TABLE `".$name."` (
                `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                `course_id` int(11) NOT NULL,
                `date` varchar(255) NOT NULL,
                `teacher_name` varchar(255) NOT NULL,
                `teacher_id` int(11) NOT NULL,   
				`type` varchar(255) NOT NULL, 
                `semester` int(11) NOT NULL 
                ) ";
                $this->setQuery($sql);
                if($this->executeQuery()) {
                    return true;
                } 
                else {  
					// echo $name."<br>";     
                    return false;
                }

        }
    }

      
}
    
?>