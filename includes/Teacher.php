<?php
/**
* Description:	This is a class for student.
* Author:		Joken Villanueva
* Date Created:	June 8, 2013
* Revised By:		
*/
require_once(LIB_PATH.DS.'database.php');
class Teacher{
	
	protected static $tbl_name = "teachers";

    function __construct() {
	}

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
		// Don't forget your SQL syntax and good habits:
		// - INSERT INTO table (key, key) VALUES ('value', 'value')
		// - single-quotes around all values
		// - escape all values to prevent SQL injection
		$attributes = $this->sanitized_attributes();
		$sql = "INSERT INTO ".self::$tbl_name." (";
		$sql .= join(", ", array_keys($attributes));
		$sql .= ") VALUES ('";
		$sql .= join("', '", array_values($attributes));
		$sql .= "')";
	  echo $mydb->setQuery($sql);
	
	 if($mydb->executeQuery()) {
	    $this->id = $mydb->insert_id();
	    return true;
	  } 
	  else {
	    return false;
	  }
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

	
    

}
?>