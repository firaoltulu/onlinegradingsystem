<?php 
require_once ("../../../includes/initialize.php");
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;
	
	case 'delete' :
	doDelete();
	break;
}


function doInsert(){
	global $mydb;
	$department = (isset($_GET['department']) && $_GET['department'] != '') ? $_GET['department'] : '';
	$semester = (isset($_GET['semester']) && $_GET['semester'] != '') ? $_GET['semester'] : '';
	$year = (isset($_GET['year']) && $_GET['year'] != '') ? $_GET['year'] : '';
	$ds = 0;
		switch($semester){

			case '0':
			$ds = 0;
			break;
			
			default:
			$ds =1;
			break;
		}
	
	if (isset($_POST['savecourse'])){			
		if($ds==0){
			if ($_POST['course_id'] == "" OR $_POST['course_name'] == "" OR $_POST['credit_hour'] == "" OR $_POST['contact_hour'] == ""  OR $_POST['semester'] == ""
			 ) {
				message("All field is requiredddd!","error");
				// check_message();
				 redirect('index.php?view=add&department='.$department.'&semester='.$semester.'&year='.$year);		
			}

			else{	
				$subj = new Subject($department);
				$bb = $subj->checktb();
				if($bb=false){
					message("404 FILE NOT FOUND","error");
			     	// check_message();
					 redirect('index.php?view=add&department='.$department.'&semester='.$semester.'&year='.$year);

				}
				else{
					$sql = "SELECT course_id FROM {$_SESSION['table_name']}";
					$mydb->setQuery($sql);
					$cur = $mydb->loadResultList();
					foreach($cur as $result){
						if($result->course_id==$_POST['course_id']){
							message("course with the same course id exist!","error");
							//check_message();
							redirect('index.php?view=add&department='.$department.'&semester='.$semester.'&year='.$year);
							return;

						}

			    	}
					$course_id      	= $_POST['course_id'];
					$course_name	 	= $_POST['course_name'];
					$credit_hour			= $_POST['credit_hour'];
					$contact_hour 			= $_POST['contact_hour'];				
					$semester 			= $_POST['semester'];
					$pre_id    			= $_POST['pre'];
					$type    			= $_POST['type'];
									
						$subj->course_id         = $course_id;
						$subj->course_name 		 = $course_name;
						$subj->credit_hour 	     = $credit_hour;
						$subj->contact_hour  	 = $contact_hour;
						$subj->semester 		 = $semester;

						if($pre_id=="0"){
							$subj->pre_course_id =0;
						}
						else{
					     	$subj->pre_course_id = $pre_id;
					    }  
						$subj->type 		     = $type;

							 
						
						$istrue = $subj->create(); 
						if ($istrue == 1){
							$post = new Post($_SESSION['database_name']);
						   $ff=	$post->createcourse($subj->course_id);
						   if ($ff == true){
							message("New Subject created successfully!","success");
							redirect('index.php?view=list&year='.$year);
						   }
						   else{
								echo "doesnt create".$course_id;
								return false;
							//    ECho "doesnt create";
						   }
							
							// message("New Subject created successfully!","success");
							// redirect('index.php?view=list&year='.$year);
						}
						else{
							message("404 FILE NOT FOUND","error");
							check_message();
							redirect('index.php?view=add&department='.$department.'&semester='.$semester.'&year='.$year);
				     	}
				}
			}
		}
		elseif($ds==1){
			if ($_POST['course_id'] == "" OR $_POST['course_name'] == "" OR $_POST['credit_hour'] == "" OR $_POST['contact_hour'] == ""
			){
				message("All field is required!","error");
				check_message();
				 redirect('index.php?view=add&department='.$department.'&semester='.$semester.'&year='.$year);
		
				}
				else{	
						
					$subj = new Subject($department);
					$bb = $subj->checktb();
				    if($bb==false){
						
				    	message("404 FILE NOT FOUND","error");
			         	// check_message();
						 redirect('index.php?view=add&department='.$department.'&semester='.$semester.'&year='.$year);

				    }
					else{
						$sql = "SELECT `course_id` FROM {$_SESSION['table_name']}";
						$mydb->setQuery($sql);
						$cur = $mydb->loadResultList();
						foreach($cur as $result){
							if($result->course_id==$_POST['course_id']){
								message("course with the same course id exist!","error");
								// check_message();
								 redirect('index.php?view=add&department='.$department.'&semester='.$semester.'&year='.$year);
								 return;
	
							}
	
						}	
						$course_id      	= $_POST['course_id'];
						$course_name	 	= $_POST['course_name'];
						$credit_hour 		= $_POST['credit_hour'];
						$contact_hour		= $_POST['contact_hour'];
						$semester 			= $semester;
						$pre_id    			= $_POST['pre'];
				     	$type    			= $_POST['type'];
					
						$subj->course_id         = $course_id;
						$subj->course_name 	  = $course_name;
						$subj->credit_hour 	          = $credit_hour;
						$subj->contact_hour 	      = $contact_hour;
						$subj->semester 		  = $semester;

						if($pre_id=="0"){
							$subj->pre_course_id =0;
						}
						else{
					     	$subj->pre_course_id     = $pre_id;
					    }  
						$subj->type 		     = $type;
							 
							$istrue = $subj->create();

							if ($istrue == true){
								//  echo $course_id;
								$post = new Post($_SESSION['database_name']);
								$ff= $post->createcourse($course_id);
								if ($ff == true){		 	  
									message("New Subject created successfully!","success");
									redirect('index.php?view=list&year='.$year);
								}
								else{
									echo "doesnt create".$course_id;
									return false;
								}
							
								message("New Subject created successfully!","success");
								redirect('index.php?view=list&year='.$year);
							}
							else{ 
								//  echo $_SESSION['table_name']."<br>";
								// echo $department."<br>";
								// echo $_SESSION['department_name'];
								message("Error Try Again","error");
								// check_message();
								redirect('index.php?view=add&department='.$department.'&semester='.$semester.'&year='.$year);
							}
					}
				}

			}
	}

}



function doEdit(){
	global $mydb;
	$department = (isset($_GET['department']) && $_GET['department'] != '') ? $_GET['department'] : '';
	$semester = (isset($_GET['semester']) && $_GET['semester'] != '') ? $_GET['semester'] : '';
	$year = (isset($_GET['year']) && $_GET['year'] != '') ? $_GET['year'] : '';

	if (isset($_POST['editcourse'])){
	
		if ($_POST['course_id'] == "" OR $_POST['course_name'] == "" OR $_POST['credit_hour'] == "" OR $_POST['contact_hour'] == ""){
			message("All field is required!","error");
		   redirect('index.php?view=edit&department='.$department.'&semester='.$semester.'&year='.$year.'&id='.$_GET['id']);
	     }
	    else{
		      $subj = new Subject($department);
				$bb = $subj->checktb();
			if($bb==false){
		    	message("404 FILE NOT FOUND","error");
	         	check_message();
		    }

			 else{
				$sql = "SELECT course_id FROM {$_SESSION['table_name']} WHERE `id` !=".$_GET['id'];;
				$mydb->setQuery($sql);
				$cur = $mydb->loadResultList();
				foreach($cur as $result){
					if($result->course_id==$_POST['course_id']){
						message("course with the same course id exist!","error");
						//check_message();
						redirect('index.php?view=edit&department='.$department.'&semester='.$semester.'&year='.$year.'&id='.$_GET['id']);
						return;

					}

				}
				$Subjectid	    	= $_GET['id'];
				$course_id      	= $_POST['course_id'];
				$course_name	 	= $_POST['course_name'];
				$credit_hour 		= $_POST['credit_hour'];
				$contact_hour		= $_POST['contact_hour'];
				$semester 			= $semester;
		
				$subj->course_id          = $course_id;
				$subj->course_name 	      = $course_name;
				$subj->credit_hour 	       = $credit_hour;
				$subj->contact_hour 	   = $contact_hour;
				$subj->semester 		   = $semester;

						$istrue =$subj->update($Subjectid);
						if ($istrue == true){
								
							message("Editing is successfully!","success");
							redirect('index.php?view=list&year='.$year);

						}
						message("Error Try Again","error");
			         	check_message();
						 redirect('index.php?view=add&department='.$department.'&semester='.$semester.'&year='.$year);

			 }
			 
			
		}	 

		
	}
		
}

function doDelete(){
	$department = (isset($_GET['department']) && $_GET['department'] != '') ? $_GET['department'] : '';
	$year = (isset($_GET['year']) && $_GET['year'] != '') ? $_GET['year'] : '';

	if($_POST['selector']==''){
		message("NO COURSE IS SELECTED","error");
			redirect('index.php?view=list&year='.$year);
			return;
	}
	
	$id=$_POST['selector'];
	$key = count($id);
	//multi delete using checkbox as a selector
	$subj = new Subject($department);
	$bb = $subj->checktb();
		if($bb=false){
			message("NO COURSE IS SELECTED","error");
			redirect('index.php?view=list&year='.$year);
             
	     	// check_message();
		}	
		else{
			for($i=0;$i<$key;$i++){		
				$subj->delete($id[$i]);
			}
			message("Course(s) already Deleted!","success");
			redirect('index.php?view=list&year='.$year);
		}
}

?>