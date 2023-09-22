<?php 
require_once ("../../../includes/initialize.php");
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'change' :
	doChange();
	break;

    case 'post' :
        doPost();
        break;

    	
	case 'delete' :
	doDelete();
	break;
}
function doChange(){
    $head_id = (isset($_GET['head_id']) && $_GET['head_id'] != '') ? $_GET['head_id'] : '';
    if (isset($_POST['change'])){

		if($_POST['first_name'] == "" OR $_POST['last_name'] == "" OR $_POST['middle_name'] == "" OR $_POST['field_of_study'] == "" 
		OR $_POST['level_of_study'] == "" OR $_POST['age'] == ""){
			message("Cannot live any field null!","error");
				redirect('index.php?view=head&head_id='.$head_id);	
		}
        else{
               $tech = new Teacher();
                $tech->first_name	    = $_POST['first_name']	 ;
                $tech->middle_name       = $_POST['middle_name']  ;
                $tech->last_name	 	= $_POST['last_name'];
                $tech->field_of_study	 = $_POST['field_of_study'];
                $tech->level_of_study	 = $_POST['level_of_study'];
                $tech->age	         	= $_POST['age'];

                $istrue =$tech->update($head_id);
                if ($istrue == true){
                   
                    message("Editing is successfully!","success");
                    redirect('index.php?view=head&head_id='.$head_id);
                }
                else{
                    message("Editing is not successful!","error");
                    redirect('index.php?view=head&head_id='.$head_id);

                }
        }

    }

}

function doPost(){
    $department_id = (isset($_GET['department_id']) && $_GET['department_id'] != '') ? $_GET['department_id'] : '';
    global $mydb;
    if (isset($_POST['post'])){
        $mydb->setQuery("SELECT * FROM `unity_departments` WHERE `id` = '{$department_id}'");
        $cur = $mydb->executeQuery();
        $row_count = $mydb->num_rows($cur);
        if ($row_count == 1)
        {
           $db_students = $mydb->loadSingleResult();  
           $mydb->setQuery("SELECT * FROM `unity_avaliable_courses` WHERE `department_id` = '{$department_id}' ORDER BY `semester` ASC");
           $cur = $mydb->loadResultlist();
           $post = new Post($db_students->database_name);
           foreach ($cur as $result) {
            //    echo $result->id;
             $dd =  $post->createtable($result->id);
            //    if($dd==false){
            //        return "false";   
            //    }
       
           }          
        //    echo $db_students->database_name;
        }
        else{
            message("Error Creating Semester Try Again","error");
                    check_message();
             redirect('index.php?view=semester&department_id='.$department_id);
        }
        message("New Semester is added!","success");
          redirect('index.php?view=semester&department_id='.$department_id);     
    }
  
}
function doInsert(){
    global $mydb;
    $department_id = (isset($_GET['department_id']) && $_GET['department_id'] != '') ? $_GET['department_id'] : '';
    if (isset($_POST['saveteacher'])){
        if ($_POST['first_name'] == "" OR $_POST['middle_name'] == "" OR $_POST['last_name'] == "" OR $_POST['field_of_study'] == ""  OR $_POST['level_of_study'] == ""
        OR $_POST['age'] == "" OR $_POST['gender'] == "" OR $_POST['position'] == "") {
            message("All field is required!","error");
            check_message();
            redirect('index.php?view=faculty&department_id='.$department_id);
        
        }
        else{
            $mydb->setQuery("SELECT * FROM `unity_departments` WHERE `id` = '{$department_id}'");
            $cur = $mydb->executeQuery();
            $row_count = $mydb->num_rows($cur);
            if ($row_count == 1)
            {
               $db_unity = $mydb->loadSingleResult(); 
               $tech = new Teacher(); 
               $department_name = $db_unity->department_name;
               $mydb->setQuery("SELECT * FROM `unity_avaliable_courses` WHERE `department_id` = '{$department_id}' ORDER BY `semester` ASC");
               $first_name	    	= $_POST['first_name'];
               $middle_name      	= $_POST['middle_name'];
               $last_name	 	    = $_POST['last_name'];
               $field_of_study 	= $_POST['field_of_study'];
               $level_of_study		= $_POST['level_of_study'];
               $age	         	= $_POST['age'];
               $gender	         	= $_POST['gender'];
               $position		   = $_POST['position'];
               $department 			= $department_name;

               $tech->first_name	    =$first_name	 ;
               $tech->middle_name       = $middle_name  ;
               $tech->last_name	 	= $last_name;
               $tech->field_of_study   =$field_of_study;
               $tech->level_of_study   =$level_of_study;	
               $tech->age	             = $age;
               $tech->gender	        =   $gender	 ;
               $tech->position		    = $position	;
               $tech->department 	    = $department ;
               $istrue = $tech->create();

               if ($istrue == 1){            
                    message("New Faculty Member is created successfully!","success");
                    redirect('index.php?view=viewfaculty&department_id='.$department_id);
                }

            }
            else{
                message("404 FILE NOT FOUND","error");
                check_message();
                redirect('index.php?view=viewfaculty&department_id='.$department_id);
                
        
            }
       

        }

    }

}

?>

