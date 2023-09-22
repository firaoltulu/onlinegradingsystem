<?php
/**
* Description:	This is a class for member.
* Author:		Joken Villanueva
* Date Created:	Nov. 2, 2013
* Revised By:		
*/
require_once(LIB_PATH.DS.'database.php');
class User{
	 
	protected static $tbl_name = "member_accounts";	
	function db_fields(){
		global $mydb;
		return $mydb->getFieldsOnOneTable(self::$tbl_name);
	}

	function listOfmembers(){
		global $mydb;
		$mydb->setQuery("Select * from ".self::$tbl_name);
		$cur = $mydb->loadResultList();
		return $cur;
	
	}
	function find_all_user($name=""){
			global $mydb;
			$mydb->setQuery("SELECT * 
							FROM  ".self::$tbl_name." 
							WHERE  `ACCOUNT_NAME` ='{$name}'");
			$cur = $mydb->executeQuery();
			$row_count = $mydb->num_rows($cur);//get the number of count
			return $row_count;
	}
	function sign_up_members($id){
		global $mydb;
	   $mydb->setQuery("SELECT * FROM `member_accounts` WHERE `member_id`='{$id}'");
		$cur = $mydb->executeQuery();
		$row_count = $mydb->num_rows($cur);
		 if ($row_count == 0){
			 return true;
		 }
		 else {
			 return false;
		 }

	}
	

	static function AuthenticateUser($EMAIL="", $h_upass=""){
		global $mydb;
		$mydb->setQuery("SELECT * FROM ".self::$tbl_name." WHERE `email`='{$EMAIL}' and `password`='{$h_upass}'");
		$cur = $mydb->executeQuery();
		$row_count = $mydb->num_rows($cur);//get the number of count

		if ($row_count == 1){
		    $found_user = $mydb->loadSingleResult();
		    $_SESSION['ID'] 	 = $found_user->id;
            $_SESSION['MEMBER_ID']     = $found_user->member_id;
            $_SESSION['EMAIL']      =$found_user->email;
            $_SESSION['PASSWORD']          = $found_user->password;
			$mydb->setQuery("SELECT * FROM `teachers` WHERE `id`='{$_SESSION['MEMBER_ID']}'");
			$cur = $mydb->executeQuery();
			$row_count = $mydb->num_rows($cur);
			if ($row_count == 1){
				$found_user = $mydb->loadSingleResult();
				$_SESSION['FIRST_NAME']      =$found_user->first_name;
				$_SESSION['MIDDLE_NAME']          = $found_user->middle_name;
				$_SESSION['LAST_NAME']      =$found_user->last_name;
				$_SESSION['GENDER']          = $found_user->gender;
				$_SESSION['FIELD_OF_STUDY']      =$found_user->field_of_study;
				$_SESSION['LEVEL_OF_STUDY']          = $found_user->level_of_study;
				$_SESSION['AGE']      =$found_user->age;
				$_SESSION['DEPARTMENT']          = $found_user->department;
				$_SESSION['POSITION']      =$found_user->position;
			}			
			else{

			}
			if($_SESSION['POSITION']=='head'){
				$mydb->setQuery("SELECT * FROM `unity_departments` WHERE `head_id` = ".$_SESSION['MEMBER_ID']);
				$cur = $mydb->executeQuery();
				$row_count = $mydb->num_rows($cur);//get the number of count
				if ($row_count == 1){
						$DB_NAME = $mydb->loadSingleResult();
						$_SESSION['id']=$DB_NAME->id;
						$_SESSION['department_name']=$DB_NAME->department_name;
						$_SESSION['table_name']=$DB_NAME->table_name;
						$_SESSION['head_id']=$DB_NAME->head_id;
						$_SESSION['study_year']=$DB_NAME->study_year;	
						$_SESSION['database_name']=$DB_NAME->database_name;	
						$_SESSION['avaliable_corses_table']=$DB_NAME->avaliable_corses_table;					
				
					}				
			}
			elseif($_SESSION['POSITION']=='teacher'){
				// $mydb->setQuery("SELECT * FROM `unity_departments WHERE` `department_name` = ".$_SESSION['DEPARTMENT']);
				// $cur = $mydb->executeQuery();
				// $row_count = $mydb->num_rows($cur);//get the number of count
				// if ($row_count == 1){
				// 		$DB_NAME = $mydb->loadSingleResult();
				// 		$_SESSION['id']=$DB_NAME->id;
				// 		$_SESSION['department_name']=$DB_NAME->department_name;
				// 		$_SESSION['table_name']=$DB_NAME->table_name;
				// 		$_SESSION['head_id']=$DB_NAME->head_id;
				// 		$_SESSION['study_year']=$DB_NAME->study_year;				
		     	// }
				// else{
				//   echo "not";
				// }
				
			}

			elseif ($_SESSION['POSITION']=='admin') {
				$mydb->setQuery("SELECT * FROM `unity_schedule`");
				$cur = $mydb->executeQuery();
				$row_count = $mydb->num_rows($cur);//get the number of count
				if ($row_count == 1){
					$DB_NAME = $mydb->loadSingleResult();
					$date1 = new DateTime($DB_NAME->final_start_day);
					$date2 = new DateTime();
				    if($date1>$date2){

					}
					else{
						$sql = "UPDATE `unity_schedule` SET `registration_begin_day` = '' ,
						`registration_end_day` = '', `class_start_day` = '', `final_start_day` = ''
						where `id` = 1";
						$mydb->setQuery($sql);
						$cur = $mydb->executeQuery();

						$sql = "select * From `unity_rooms";
						$mydb->setQuery($sql);
						$cur = $mydb->loadResultList();
						$room = new Room();
						foreach($cur as $result){
							$room->morning_1 = 0;
							$room->morning_2 = 0;
							$room->morning_3 = 0;
							$room->morning_4 = 0;
							$room->morning_5 = 0;
							$room->morning_6 = 0;
							$room->morning_7 = 0;
							$room->morning_8 = 0;
							$room->morning_9 = 0;
							$room->morning_10 = 0;
							$room->morning_11 = 0;
							$room->morning_12 = 0;

							$room->afternoon_1 = 0;
							$room->afternoon_2 = 0;
							$room->afternoon_3 = 0;
							$room->afternoon_4 = 0;
							$room->afternoon_5 = 0;
							$room->afternoon_6 = 0;
							$room->afternoon_7 = 0;
							$room->afternoon_8 = 0;
							$room->afternoon_9 = 0;
							$room->afternoon_10 = 0;
							$room->afternoon_11 = 0;
							$room->afternoon_12 = 0;

							$room->update($result->id);

						}

					}

				}
			}

        	return true;
		}
		else{
				return false;
			}	
				
	} 

	function single_user($id=0){
			global $mydb;
			$mydb->setQuery("SELECT * FROM ".self::$tbl_name." Where ACCOUNT_ID= {$id} LIMIT 1");
			$cur = $mydb->loadSingleResult();
			return $cur;
	}	

	static function instantiate($record) {
		$object = new self;

		foreach($record as $attribute=>$value){
		  if($object->has_attribute($attribute)) {
		    $object->$attribute = $value;
		  }
		} 
		return $object;
	}
	
	
	/*--Cleaning the raw data before submitting to Database--*/
	private function has_attribute($attribute) {
	  // We don't care about the value, we just want to know if the key exists
	  // Will return true or false
	  return array_key_exists($attribute, $this->attributes());
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
	  // sanitize the values before submitting
	  // Note: does not alter the actual value of each attribute
	  foreach($this->attributes() as $key => $value){
	    $clean_attributes[$key] = $mydb->escape_value($value);
	  }
	  return $clean_attributes;
	}
	
	
	/*--Create,Update and Delete methods--*/
	public function save() {
	  // A new record won't have an id yet.
	  return isset($this->id) ? $this->update() : $this->create();
	}
	
	public function create() {
		global $mydb;
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
	 	if(!$mydb->executeQuery()) return false; 	
		 
		 return true;
	}

	public function delete($id=0) {
		global $mydb;
		  $sql = "DELETE FROM ".self::$tbl_name;
		  $sql .= " WHERE ACCOUNT_ID=". $id;
		  $sql .= " LIMIT 1 ";
		  $mydb->setQuery($sql);
		  
			if(!$mydb->executeQuery()) return false; 	
	
	}
		
}
?>