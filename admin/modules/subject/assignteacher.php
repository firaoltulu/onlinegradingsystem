<?php  
require_once ("../../../includes/initialize.php");
    $department = (isset($_GET['department']) && $_GET['department'] != '') ? $_GET['department'] : '';
    $semester = (isset($_GET['semester']) && $_GET['semester'] != '') ? $_GET['semester'] : '';
    $year = (isset($_GET['year']) && $_GET['year'] != '') ? $_GET['year'] : '';

    if($semester==0){
      message("semester has no course add courses first!","error");
								redirect('index.php?view=list&year='.$year);


    }

    else{

      function checktb(){
          global $mydb;
           $tbl_name = '';
          $department = (isset($_GET['department']) && $_GET['department'] != '') ? $_GET['department'] : '';
            $mydb->setQuery("SELECT * FROM unity_departments");
            $cur = $mydb->loadResultlist();
            foreach ($cur as $result) {
              switch($result->department_name){
                        case $department;
                        $tbl_name = $result->table_name;                                  
                      return $tbl_name;
                        break;
                        default:
                        break;
              }
                          
            }
            return false;
      }

        $tbl_name  = checktb();
        if(!$tbl_name){
          message("404 FILE NOT FOUND","error");
          check_message();
        }
      
       else{
          if (isset($_POST['assign'])) {           
              $mydb->setQuery("SELECT * FROM ".$tbl_name." where `semester` =".$semester);
              $frarray = $mydb->loadResultlist();           
              $corsarr = array();
              $poarr = array();
              $roomarr = array(); 

              foreach($frarray  as $result){
                  array_push($corsarr,$result->id);
                  array_push($poarr,trim($_POST[$result->course_id]));
                  array_push($roomarr,trim($_POST[$result->id]));

              }
                $subj = new scheduling();
                $cc = count($corsarr);
                for($i=0; $i<$cc; $i++){
                    $subj->cour_id =$frarray[$i]->id ;
                    $subj->course_id =$frarray[$i]->course_id ;
                    $subj->course_name =$frarray[$i]->course_name ;
                    $subj->credit_hour =$frarray[$i]->credit_hour ;
                    $subj->contact_hour =$frarray[$i]->contact_hour ;
                    $subj->type =$frarray[$i]->type ;
                    $subj->batch = $_POST['year'];

                    $sql = "SELECT `id`,CONCAT( `first_name`, '  ' , `middle_name`, '  ' , `last_name`) AS `name`
                    FROM `teachers` WHERE `id` = {$poarr[$i]}";
                    $mydb->setQuery($sql);
                    $teacher =  $mydb->executeQuery();
                    $tech_count = $mydb->num_rows($teacher);

                    if ($tech_count == 1){
                      
                      $found_teacher = $mydb->loadSingleResult();
                      $subj->teacher_id =$found_teacher->id ;
                      $subj->teacher_name =$found_teacher->name ;
                      $subj->semester = $semester;

                      // $subj->lab = $roomarr[$i] ;
                      $subj->department_id = $_SESSION['id'] ;

                      $mydb->setQuery("SELECT * FROM `unity_rooms` where `id` ={$roomarr[$i]}");
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
            
                    }
                    
                  $subj->create();

                }

                message("semester ".$year." has been scheduled successfully!","success");
							   redirect('index.php?view=list&year='.$year);     
          }

          else{
                echo '<form class="form-horizontal well span4" action="assignteacher.php?action=assign&department='.$department.'&semester='.$semester.'&year='.$year.'" method="POST" onsubmit="return validateForm()" name="myform" >';      
                echo '<fieldset>';
                echo '<legend  style="color:white;">Assignning of Teacher</legend>';  
                echo '<div class="form-row">';
                  
                  $mydb->setQuery("SELECT * FROM ".$tbl_name." where `semester` =".$semester);
                  $frarray = $mydb->loadResultlist();

                  $mydb->setQuery("SELECT `id`, CONCAT( `first_name`, '  ' , `middle_name`, '  ' , `last_name`) AS `name`, 
                    `gender`, `field_of_study`, `level_of_study`, `age`, `department` FROM teachers");
                  // $cur = $mydb->executeQuery();
                  $teachers = $mydb->loadResultlist();

                  $mydb->setQuery("SELECT * FROM unity_departments");
                  $unitys = $mydb->loadResultlist();

                  $mydb->setQuery("SELECT * FROM unity_rooms");
                  $rooms = $mydb->loadResultlist();

                  echo '<div class="container-fluid mx-auto border border-dark ">';
                  foreach($frarray  as $result){                   
                    echo '<div class="form-group col-md-6">';
                    echo '<label >'.$result->course_name.'</label>';
                    echo '<select name="'.$result->course_id.'" class="form-control" required="required">';
                    echo '<option> </option>';

                    foreach($unitys  as $unity){     
                       echo '<optgroup label='.$unity->department_name.'>';

                      foreach($teachers  as $teacher){
                          if($teacher->department==$unity->department_name){
                           echo '<option value="'.$teacher->id.'"> '.$teacher->name.' </option>';
                          }
                      }
                    }

                    echo '</optgroup>';
                    echo '</select>';
                    echo '</div>';
                   
                  }


                  echo '</div>';
                  echo '<label class="mx-auto mt-5">Assign Class Room</label>';
                  echo '<div class="container-fluid mx-auto border border-dark ">';
                  foreach($frarray  as $result){                   
                    echo '<div class="form-group col-md-6">';
                    echo '<label >'.$result->course_name.'</label>';
                    echo '<select name="'.$result->id.'" class="form-control" required="required">';
                    echo '<option> </option>';

                      foreach($rooms  as $room){                  
                          echo '<option value="'.$room->id.'"> '.$room->room_name.' </option>';     
                      }

                    echo '</select>';

                    echo '</div>';
                   
                  }
                  echo '</div>';
                  echo '<label class="mx-auto mt-5">Assign Year</label>';
                  echo '<div class="container-fluid mx-auto border border-dark ">';
                  echo '<select name="year" class="form-control" required="required">';
                  echo '<option value=""></option>';     
                  echo '<option value="COSC/R/13"> First year</option>';     
                  echo '<option value="COSC/R/12"> Second year </option>';     
                  echo '<option value="COSC/R/11"> third year </option>';
                  echo '<option value="COSC/R/10"> fourth year </option>';  
                  echo '</div>';  
                  echo '</select>';

    
          ?>      
                </div>
            
                <div class="form-group">
                      <div class="col-md-8">
                        <label class="col-md-4 control-label" for="idno"></label>

                        <div class="col-md-8">
                          <button class="btn btn-default" name="assign" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Assign</button>
                        </div>
                      </div>
                </div>

                  
              </fieldset> 

                      
            </form>
                
  <?php } } } ?>