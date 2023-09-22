<?php

require_once(LIB_PATH.DS.'post.php');
require_once ("../../../includes/initialize.php");
class Grading{
	
	protected  $tbl_name;
    protected  $db;

    protected $post;
    function __construct($db_name,$tbl_name) {
        $this->db = $db_name;
        $this->tbl_name =strval($tbl_name);
        
	}

    function db_fields(){
		 $post = new Post($this->db, $this->tbl_name);
		return $post->getFieldsOnOneTable($this->tbl_name);
	}

    protected function attributes() { 
		// return an array of attribute names and their values
        $post = new Post($this->db, $this->tbl_name);
        $attributes = array();
	  foreach($this->db_fields() as $field) {
	    if(property_exists($this, $field)) {
			$attributes[$field] = $this->$field;
		}
	  }
	  return $attributes;
	}

    protected function sanitized_attributes() {
        $post = new Post($this->db, $this->tbl_name);
        $clean_attributes = array();
        foreach($this->attributes() as $key => $value){
          $clean_attributes[$key] = $post->escape_value($value);
        }
        return $clean_attributes;
    }

    public function create() {
        $post = new Post($this->db, $this->tbl_name);
		// Don't forget your SQL syntax and good habits:
		// - INSERT INTO table (key, key) VALUES ('value', 'value')
		// - single-quotes around all values
		// - escape all values to prevent SQL injection
		$attributes = $this->sanitized_attributes();
		$sql = "INSERT INTO `".$this->tbl_name."` (";
		$sql .= join(", ", array_keys($attributes));
		$sql .= ") VALUES ('";
		$sql .= join("', '", array_values($attributes));
		$sql .= "')";
	  echo $post->setQuery($sql);
	
	 if($post->executeQuery()) {
	    $this->id = $post->insert_id();
	    return true;
	  } 
	  else {
	    return false;
	  }
	}
	
    public function update($id=0) {
        $post = new Post($this->db, $this->tbl_name);
          $attributes = $this->sanitized_attributes();
          $attribute_pairs = array();
          foreach($attributes as $key => $value) {
            $attribute_pairs[] = "{$key}='{$value}'";
          }
          $sql = "UPDATE `".$this->tbl_name."` SET ";
          $sql .= join(", ", $attribute_pairs);
          $sql .= " WHERE id=". $id;
        $post->setQuery($sql);
           if(!$post->executeQuery()) {return false;} 
           
           return true;
          
    }

    public function delete($id=0) {
        $post = new Post($this->db, $this->tbl_name);
		  $sql = "DELETE FROM `".$this->tbl_name."`";
		  $sql .= " WHERE id=". $id;
		  $sql .= " LIMIT 1 ";
		  $post->setQuery($sql);
		  
			if(!$post->executeQuery()) return false; 	
	
	}

}
?>