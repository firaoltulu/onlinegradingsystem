<?php 
$department_id = (isset($_GET['department_id']) && $_GET['department_id'] != '') ? $_GET['department_id'] : '';

?>
<div class="wells">

<h3 align="center" style="color:white;">List of students</h3>		 
<?php

    $mydb->setQuery("SELECT * FROM `unity_departments` WHERE `id` = '{$department_id}'");
    $cur = $mydb->executeQuery();
    $row_count = $mydb->num_rows($cur);
    if ($row_count == 1)
    {
       $db_students = $mydb->loadSingleResult();  
       $mydb->setQuery("SELECT * FROM `unity_avaliable_courses` WHERE `department_id` = '{$department_id}' ORDER BY `SEMESTER` ASC");
       loadresult();
    }
    else{
        echo 'not';
        

    }
    function loadresult(){
        $department_id = (isset($_GET['department_id']) && $_GET['department_id'] != '') ? $_GET['department_id'] : '';
        ?>
        <div class="table-responsive">
                                <table id="example" class="table table-striped border table-bordered table-hover table-sm " cellspacing="0">
                                    <thead class="">
                                        <tr class="h5">
                                            <th>NO.</th>
                                            <th>COURSE_ID</th>
                                            <th>COURSE_NAME</th>
                                            <th>CREDIT_HOUR</th>
                                            <th>CONTACT_HOUR</th>
                                            <th>TEACHER_NAME</th>
                                            <th>SEMESTER</th>
                                            <th>LAB</th>
                                            <th>FIRST_CLASS</th>
                                            <th>SECOND_CLASS</th>
                                            <th>CLASS</th>                                    
                                         
                                        </tr>	
                                    </thead>
                                    <tbody>
                                        <?php
                                            global $mydb;
                                            $cur = $mydb->loadResultlist();
                                            foreach ($cur as $result) {
                                                    
                                                echo '<tr>';
                                                echo '<td ><input type="checkbox" name="selector[]" value="'.$result->id.'"/>'.$result->id.'</td>';
                                                echo '<td >'. $result->course_id.'</td>';
                                                echo '<td >'. $result->course_name.'</td>';
                                                echo '<td >'. $result->credit_hour.'</td>';
                                                echo '<td >'. $result->contact_hour.'</td>';
                                                echo '<td >'. $result->teacher_name.'</td>';
                                                echo '<td >'. $result->semester.'</td>';
                                                echo '<td >'. $result->lab.'</td>';  
                                                echo '<td >date '.$result->first_class_date.' time '.$result->first_class_time.'</td>';
                                                echo '<td >date '.$result->second_class_date.' time '.$result->second_class_time.'</td>';
                                                echo '<td >'. $result->room.'</td>';
                                                echo '</tr>';
                                            }
                                        ?>
                                        
                                    </tbody>

                                </table>
        </div>
      
    <?php

    }


?>