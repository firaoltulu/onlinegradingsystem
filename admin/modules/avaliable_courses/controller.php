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

    case 'post' :
    doPost();
    break;
	
	case 'delete' :
	doDelete();
	break;
}

function doDelete(){

	$id=$_POST['selector'];
	$key = count($id);
    if(!$key){
         message("NO Course(s) are selected!","error");
	    redirect('index.php?view=list');

    }
    else{
        $subj = new scheduling();	
        for($i=0;$i<$key;$i++){		
            $subj->delete($id[$i]);
        }
        message("Course(s) already Deleted!","info");
        redirect('index.php?view=list');
    }

}

function doPost(){
             global $mydb;
            //  echo $_SESSION['id'];
            $mydb->setQuery("SELECT * FROM `unity_departments` WHERE `head_id` = '{$_SESSION['head_id']}'");
             $cur = $mydb->executeQuery();
             $row_count = $mydb->num_rows($cur);
            if ($row_count == 1)
            {
                $dpartment_info = $mydb->loadSingleResult(); 
                $dp_id =$dpartment_info->id;
                // echo   $dp_id;
                $dp_name =$dpartment_info->department_name; 
                $dp_table =$dpartment_info->table_name; 
                $student_table =$dpartment_info->students_table; 
                $database_name =$dpartment_info->database_name;    

                $mydb->setQuery("SELECT * FROM `unity_avaliable_courses` WHERE `department_id` = '{$dp_id}' ORDER BY `semester` ASC");
                $cur = $mydb->loadResultlist();
               
                foreach ($cur as $result) { 
                    if($result->first_class_date =='' OR $result->first_class_time =='' OR $result->second_class_date ==''
                    OR $result->second_class_time =='' ){
                        message("Error schedule first and Try Again","error");
                       redirect('index.php');
                       return false;

                    } 
                    else{
                        $post = new Post($database_name,$result->course_id);

                        $sql = "SELECT 1 from `{$result->id}`";
                        $post->setQuery($sql);
                        $cc= $post->executeQuery();
                        if($cc !== FALSE)
                       {    
                           echo "Exists $database_name<br>";
                       }
                       else{
                           $post->course_id =$result->id;
                           $post->date =date("Y/m/d");
                           $post->teacher_name =$result->teacher_name;
                           $post->teacher_id =$result->teacher_id;
                           $post->type =$result->type;
                           $post->semester =$result->semester;
                           $istrue = $post->create();
                            if($istrue){
                                echo "doesnt<br>";
                                $post->createtable($result->id);
                                
                            }
                            else{
                                // echo date("Y/m/d");
                                // echo  $post->course_id."   ";
                                // echo $post->teacher_name."  ";
                                // echo $post->type."  ";

                                message("New Semester is not posted successfully!","error");
                                redirect('index.php');
                                return; 
                            }         
                        }

                    }
                    
                } 
                message("New Semester is added!","success");
                 redirect('index.php'); 

            }
}

function doEdit(){
	global $mydb;
	$rmid = $_GET['id'];
	
	if (isset($_POST['editcourse'])){

		if ($_POST['room_name'] == "" OR $_POST['teacher_name'] == "") {
			$message= "All field is required!";
            message($message,"error");
			redirect('index.php?view=edit&id='.$rmid);

		}
        else{
            $sch = new scheduling();
            $sq = "SELECT * from `unity_avaliable_courses` WHERE `id` = {$rmid}";
            $mydb->setQuery($sq);
             $teachers = $mydb->executeQuery();
             $count = $mydb->num_rows($teachers);
            if($count){
                $sql = "SELECT `id`, CONCAT( `first_name`, '  ' , `middle_name`, '  ' , `last_name`) AS `name`
                from `teachers` where `id` = ".trim($_POST['teacher_name']);
                $mydb->setQuery( $sql);
                $teachers = $mydb->executeQuery();
                $count = $mydb->num_rows($teachers);
                if($count){     
                    $teacher_info = $mydb->loadSingleResult(); 
                    $sch->teacher_id = $teacher_info->id;
                    $sch->teacher_name = $teacher_info->name;
                    $sq = "SELECT * from `unity_rooms` WHERE `id` = ".trim($_POST['room_name']);
                    $mydb->setQuery($sq);
                    $room = $mydb->executeQuery();
                    $count = $mydb->num_rows($room);       
                    if($count){ 
                        $room_info = $mydb->loadSingleResult();

                        if($room_info->special==1){
                            $sch->lab = true;
                        }
                        else{
                            $sch->lab = false;
                        }
                        $sch->room = $room_info->room_name;
                        $sch->first_class_date = '';
                        $sch->first_class_time = '';
                        $sch->second_class_date = '';
                        $sch->second_class_time = '';
                        
                        $istrue = $sch->update($rmid);
                        if($istrue){
                            $message= "one field is edited successfully!";
                            message($message,"success");
                            redirect('index.php');

                        }
                        else{
                            $message= "Error Try Again!";
                            message($message,"error");
                            redirect('index.php');

                        }

                    }
                    else{
                        $message= "Error Try Again!";
                        message($message,"error");
                        redirect('index.php');

                    }
               

                } 
                 else{
                    $message= "Error Try Again!";
                    message($message,"error");
                    redirect('index.php');

                }
            }
            else{
                $message= "Error Try Again!";
                message($message,"error");
                redirect('index.php');
            }
		}
    }
}



?>