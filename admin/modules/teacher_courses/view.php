
<div class="wells">
    <h2 align="center" style="color:white;">List of students courses</h2>
<?php   
require_once ("../../../includes/initialize.php");
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';
$department_id = (isset($_GET['department_id']) && $_GET['department_id'] != '') ? $_GET['department_id'] : '';
if($id==''){
    echo "id is null";
}
else{
    if(isset($_POST['submitgrade'])){
        $mydb->setQuery("SELECT * FROM `unity_avaliable_courses` WHERE `teacher_id` ='{$_SESSION['MEMBER_ID']}' AND `id` = {$id} ");
        $cur = $mydb->executeQuery();
        $row_count = $mydb->num_rows($cur);

        if ($row_count == 1){
            $mydb->setQuery("SELECT * FROM `unity_departments` WHERE `id` ='{$department_id}' ");
            $cur = $mydb->executeQuery();
            $row_count = $mydb->num_rows($cur);
            if ($row_count == 1){

                $found_user = $mydb->loadSingleResult();

                $grade= new Grading($found_user->database_name,$id);
                $stu_grade = new Post($found_user->database_name,$id);
                $stu_grade->setQuery("SELECT * FROM `".$id."`");
                $val =$stu_grade->executeQuery();
                if(!$val){
                    message("course havent been posted!","error");
                    redirect('index.php?view='.$view.'&id='.$id.'&department_id='.$department_id);
                }
                else{ 
                   $cur = $stu_grade->loadResultlist();

                    foreach ($cur as $result) {
                            //  echo trim($_POST[$result->id.'first']).'<br>';
                        $grade->FIRST_MIDEXAM =  trim($_POST[$result->id.'first']); 
                        $grade->SECOND_MIDEXAM = trim($_POST[$result->id.'second']);
                        $grade->ASSIGNMENT =     trim($_POST[$result->id.'third']);
                        $grade->FINAL =          trim($_POST[$result->id.'fourth']);
                        $grade->CLASS_ATENDANCE = trim($_POST[$result->id.'fifth']);
                        $first=  (int) trim($_POST[$result->id.'first']);
                        $secound = (int) trim($_POST[$result->id.'second']);
                        $third = (int)trim($_POST[$result->id.'third']);
                        $fourth = (int)trim($_POST[$result->id.'fourth']);
                        $fifth =  (int) trim($_POST[$result->id.'fifth']);
                        $grade->TOTAL = ($first +$secound +  $third +$fourth + $fifth);
                        if($grade->FINAL !=0){
                               if($grade->TOTAL==100 OR $grade->TOTAL>80){
                                $grade->GRADE = 'A';
                               }
                               elseif($grade->TOTAL==80 OR $grade->TOTAL>60){
                                $grade->GRADE = 'B';
        
                               }
                               elseif($grade->TOTAL==60 OR $grade->TOTAL>50){
                                $grade->GRADE = 'c';
        
                               }
                               elseif($grade->TOTAL==50 OR $grade->TOTAL>40){
                                $grade->GRADE = 'D';
        
                               }
                               else{
                                $grade->GRADE = 'F';
                               }

                        }
                        else{
                            $grade->GRADE =0;
                        }
                            
                        $grade->update($result->id);

                    }
                    message("student grade has been submited successfully!","success");
                    redirect('index.php?view='.$view.'&id='.$id.'&department_id='.$department_id);
                }
                // loadresult($id,$found_user->database_name);   
            }
            else{
                echo "department by id doesnt exist".$id;
            }
        }

    }

    else{ 
        $mydb->setQuery("SELECT * FROM `unity_avaliable_courses` WHERE `teacher_id` ='{$_SESSION['MEMBER_ID']}' AND `id` = {$id} ");
        $cur = $mydb->executeQuery();
        $row_count = $mydb->num_rows($cur);//get the number of count
        if ($row_count == 1){
            $mydb->setQuery("SELECT * FROM `unity_departments` WHERE `id` ='{$department_id}' ");
            $cur = $mydb->executeQuery();
            $row_count = $mydb->num_rows($cur);
            if ($row_count == 1){
                $found_user = $mydb->loadSingleResult();
                loadresult($id,$found_user->database_name);    
            }
            else{
                echo "department by id doesnt exist".$id;
            }
        
        }
        else {
            echo "table by id name doesnt exist".$id;

        }
    }  

}

?>

<?php
    
    function loadresult($tb_name='',$db=''){
                
            $view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
            $id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';
            $department_id = (isset($_GET['department_id']) && $_GET['department_id'] != '') ? $_GET['department_id'] : '';
            $id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

        echo '<form action="view.php?view='.$view.'&id='.$id.'&department_id='.$department_id.'" name="firform" Method="POST">'; 
?>
         <div class="table-responsive">
            <table id="example" class="table table-striped border table-hover table-lg font-weight-bold " cellspacing="0">
                <thead >
                    <tr >
                        <th class="font-weight-bold">No.</th>
                        <th class="font-weight-bold">STUDENT_ID</th>
                        <th class="font-weight-bold">STUDENT_NAME</th>
                        <th class="font-weight-bold">FIRST_MIDEXAM</th>
                        <th class="font-weight-bold">SECOND_MIDEXAM(ASS)</th>
                        <th class="font-weight-bold">ASSIGNMENT</th>
                        <th class="font-weight-bold">FINAL_EXAM</th>
                        <th class="font-weight-bold">CLASS_ATENDANCE</th>
                        <th class="font-weight-bold">TOTAL_MARK</th>
                        <th class="font-weight-bold">GRADE</th>
                    </tr>
                </thead>

                <tbody>																
                    <?php
                        $stu_grade = new Post($db,$tb_name);
                        $stu_grade->setQuery("SELECT * FROM `".$tb_name."`");
                        $cur = $stu_grade->executeQuery();
                        if(!$cur){
                            echo "not posted yet";
                        }   
                        else{
                            $cur = $stu_grade->loadResultList();
                            foreach ($cur as $result) {
                                echo '<tr class = "col-md-8 col-lg-6">';
                                    echo '<td >'. $result->id.'</td>';
                                    echo '<td >'. $result->student_id.'</td>';
                                    echo '<td >'. $result->student_name.'</td>';

                                    echo '<td > <input class="form-control" id="level_of_study" name="'.$result->id.'first" placeholder="First MIDEXAM"
                                    type="number" min=0 value="'.$result->FIRST_MIDEXAM.'" input = "grad('.$result->id.'first)" ></td>';

                                    echo '<td ><input class="form-control " id="level_of_study" name="'.$result->id.'second" placeholder="Second MIdEXAM"
                                    type="number" min=0 value="'. $result->SECOND_MIDEXAM.'" onblur = "grad('.$result->id.'second)"></td>';

                                    echo '<td ><input class="form-control " id="level_of_study" name="'.$result->id.'third" placeholder="ASSIGNMENT"
                                    type="number" min=0 value="'. $result->ASSIGNMENT.'" onblur = "grad('.$result->id.'third)"></td>';

                                    echo '<td ><input class="form-control " id="level_of_study" name="'.$result->id.'fourth" placeholder="FINAL"
                                    type="number" min=0 value="'. $result->FINAL.'" onblur = "grad('.$result->id.'fourth)"></td>';

                                    echo '<td ><input class="form-control" id="level_of_study" name="'.$result->id.'fifth" placeholder="CLASS_ATENDANCE"
                                    type="number" min=0 value="'.$result->CLASS_ATENDANCE.'" onblur = "grad('.$result->id.'fifth)"></td>';

                                    echo '<td  name= "'.$result->id.'total" >'. $result->TOTAL.'</td>';
                                    echo '<td name="'.$result->id.'grade" >'. $result->GRADE.'</td>';
                                echo '</tr>';
                                                                            
                            }
                         }
                     ?>
                </tbody>  

            </table>

         </div>

        <div class="col-md-8">
            <button class="btn btn-primary" name="submitgrade" type="submit" >Submit</button>
        </div>
        </form>

    <?php
    }?>
</div>

