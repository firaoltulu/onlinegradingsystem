<?php 
require_once(LIB_PATH.DS.'database.php');
class scheduling{

    protected static $tbl_name= 'unity_avaliable_courses' ;
	
	function __construct(){}				
	
	function db_fields(){
		global $mydb;
		return $mydb->getFieldsOnOneTable(self::$tbl_name);
	}

	protected function attributes() { 
		// return an array of attribute names and their values
		global $mydb;
		$attributes = array();
		foreach($this->db_fields() as $field) {
			if(property_exists($this, $field)) {
				$attributes[$field] = $this->$field;
			}
		}
		return $attributes;
	}

	protected function sanitized_attributes() {
		global $mydb;
		$clean_attributes = array();
		foreach($this->attributes() as $key => $value){
			
		  $clean_attributes[$key] = $mydb->escape_value($value);
		  
		}
		return $clean_attributes;
	}  

	public function create() {
		global $mydb;

		$attributes = $this->sanitized_attributes();
		$sql = "INSERT INTO ".self::$tbl_name." (";
		$sql .= join(", ", array_keys($attributes));
		$sql .= ") VALUES ('";
		$sql .= join("', '", array_values($attributes));
		$sql .= "')";
		$mydb->setQuery($sql);
		if($mydb->executeQuery()) {
			$this->ins_id = $mydb->insert_id();
			return true;
		} 
		else {
			return false;
		}
	}
	
	function checksch(){
		global $mydb;
		$sql = "SELECT `course_id` FROM `cosc_avilable_courses`";	
		$mydb->setQuery($sql);
		$mydb->executeQuery();
		$cc = count($this->courses);
		for($i=0; $i<$cc; $i++){
	
		}
		$mydb->setQuery();



	}

	public function update($id=0) {
		global $mydb;
		  $attributes = $this->sanitized_attributes();
		  $attribute_pairs = array();
		  foreach($attributes as $key => $value) {
			$attribute_pairs[] = "{$key}='{$value}'";
		  }
		  $sql = "UPDATE ".self::$tbl_name." SET ";
		  $sql .= join(", ", $attribute_pairs);
		  $sql .= " WHERE id=". $id;
		$mydb->setQuery($sql);
		   if(!$mydb->executeQuery()) {return false;} 
		   
		   return true;
		  
	}


	public function delete($id=0) {
		global $mydb;
		  $sql = "DELETE FROM ".self::$tbl_name;
		  $sql .= " WHERE id=". $id;
		  $sql .= " LIMIT 1 ";
		  $mydb->setQuery($sql);
		  
		if(!$mydb->executeQuery()) return false; 	
	
	}

	function single_course($id=0){
		global $mydb;
		$mydb->setQuery("SELECT * FROM ".self::$tbl_name." Where id= {$id} LIMIT 1");
		$cur = $mydb->loadSingleResult();
		return $cur;
    }

}

?>