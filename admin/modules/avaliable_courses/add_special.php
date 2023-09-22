<?php 
require_once ("../../../includes/initialize.php");

if(isset($_POST['addspecial'])){
    $subj = new scheduling();
    $mydb->setQuery("SELECT * FROM {$_SESSION['table_name']} WHERE `id` = ".trim($_POST["addcoursename"]));
    $frarray = $mydb->executeQuery();
    $count = $mydb->num_rows($frarray );
    if($count==1){

        $found_course = $mydb->loadSingleResult();
        $subj->cour_id =$found_course->id ;
        $subj->course_id =$found_course->course_id ;
        $subj->course_name =$found_course->course_name ;
        $subj->credit_hour =$found_course->credit_hour ;
        $subj->contact_hour =$found_course->contact_hour ;
        $subj->type = "Special";

        $sql = "SELECT `id`,CONCAT( `first_name`, '  ' , `middle_name`, '  ' , `last_name`) AS `name`
        FROM `teachers` WHERE `id` =".trim($_POST["addcourseteacher"]);
        $mydb->setQuery($sql);   
        $teacher =  $mydb->executeQuery();
        $tech_count = $mydb->num_rows($teacher);

        if ($tech_count == 1){
            $found_teacher = $mydb->loadSingleResult();   
            $subj->teacher_id =$found_teacher->id ;
            $subj->teacher_name =$found_teacher->name ;        
            $subj->semester = trim($_POST["addcoursesemester"]);
            $subj->department_id = $_SESSION['id'];
            $subj->scheduled = 0;

            $mydb->setQuery('SELECT * FROM `unity_rooms` where `id` ='.trim($_POST["addcourseroom"]));
            $room =  $mydb->executeQuery();
            $room_count = $mydb->num_rows($room);

            if ($room_count == 1){   
                $found_room = $mydb->loadSingleResult();
                $subj->room =$found_room->room_name ;
                if($found_room->special==1){
                $subj->lab ='true' ;
                }
                else{
                $subj->lab = 'false' ;
                }
                         
            }

            $id = $subj->create();
            message("Course ".$id." has been added as special successfully!","success");
			 redirect('index.php');     

        }
    }
    else{
        
    }

}
else{
    
    $mydb->setQuery("SELECT * FROM {$_SESSION['table_name']}");
    $frarray = $mydb->loadResultlist();

    $mydb->setQuery("SELECT * FROM unity_rooms");
    $rooms = $mydb->loadResultlist();


    $mydb->setQuery("SELECT `id`, CONCAT( `first_name`, '  ' , `middle_name`, '  ' , `last_name`) AS `name`, 
    `gender`, `field_of_study`, `level_of_study`, `age`, `department` FROM teachers");
    $teachers = $mydb->loadResultlist();

    $mydb->setQuery("SELECT * FROM unity_departments");
    $unitys = $mydb->loadResultlist();

    echo '<legend  style="color:white;">Assign special class</legend>';  
    echo '<form class="form-horizontal well span4" action="add_special.php" method="POST" name="myform" >';      
    echo '<fieldset>';
        echo '<div class="form-row">';
            echo '<label class="mx-auto mt-5">Select Course</label>';
            echo '<select name="addcoursename" class="form-control" required="required">';
            echo '<div class="form-group col-md-6">';
            echo '<option> </option>';
            foreach($frarray  as $result){                              
            echo '<option value="'.$result->id.'"> '.$result->course_name.' </option>';     
                
            }
            echo '</div>';
            echo '</select>';        
        echo '</div>';

        echo '<div class="form-row">';
            echo '<label class="mx-auto mt-5">Select Teacher</label>';
            echo '<select name="addcourseteacher" class="form-control" required="required">';
            echo '<div class="form-group col-md-6">';
            echo '<option> </option>';
            foreach($unitys  as $unity){     
                echo '<optgroup label='.$unity->department_name.'>';
            foreach($teachers  as $teacher){
                if($teacher->department==$unity->department_name){
                    echo '<option value="'.$teacher->id.'"> '.$teacher->name.' </option>';
                }
            }
            }
            echo '</div>';
            echo '</select>';      
        echo '</div>';

        echo '<div class="form-row">';
            echo '<label class="mx-auto mt-5">Select Room</label>';
            echo '<select name="addcourseroom" class="form-control" required="required">';
            echo '<div class="form-group col-md-6">';
            echo '<option> </option>';
            foreach($rooms  as $room){                              
            echo '<option value="'.$room->id.'"> '.$room->room_name.' </option>';     
                
            }
            echo '</div>';
            echo '</select>';      
        echo '</div>';

        echo '<div class="form-row">';
            echo '<label class="mx-auto mt-5">Select Semester</label>';
            echo '<select name="addcoursesemester" class="form-control" required="required">';
            echo '<div class="form-group col-md-6">';
            for($i=1; $i<13; $i++){                              
            echo '<option value="'.$i.'"> '.$i.' </option>';     
            }
            echo '</div>';
            echo '</select>';      
        echo '</div>';

    echo '</div>';
    echo '</fieldset>';


    ?>
    <div class="form-group">
                        <div class="col-md-8">
                            <label class="col-md-4 control-label" for="idno"></label>

                            <div class="col-md-8">
                            <button class="btn btn-default" name="addspecial" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span>ADD</button>
                            </div>
                        </div>
    </div>
    </form>
<?php } ?>