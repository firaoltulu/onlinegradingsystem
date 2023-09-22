<?php 
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
$year = (isset($_GET['year']) && $_GET['year'] != '') ? $_GET['year'] : '';
?>
<div class="wells">
    <h3 align="center" style="color:white;">List of assigned courses</h3>
    <?php

        $mydb->setQuery("SELECT * FROM `unity_avaliable_courses` WHERE `teacher_id` ='{$_SESSION['MEMBER_ID']}' ORDER BY `unity_avaliable_courses`.`semester` ASC");
        loadresult();

        function loadresult(){
            echo	'<form action="controller.php?action=delete&department='.$_SESSION['DEPARTMENT'].'" Method="POST">'; 
            ?>
             <div class="table-responsive">
                <table id="example" class="table table-striped border table-bordered table-hover table-sm " cellspacing="0">
                    <thead class="">
                        <tr class="h5">
                            <th>No.</th>
                            <th>COURSE_ID</th>
                            <th>COURSE_NAME</th>
                            <th>CREDIT_HOUR</th>
                            <th>CONTACT_HOUR</th>
                            <th>SEMESTER</th>
                            <th>ROOM</th>
                            <th>FIRST_CLASS</th>
                            <th>SECOND_CLASS</th>
                            <th>STUDENTS.</th>                            
                        </tr>

                    </thead>
                    <tbody>																
                        <?php
                             global $mydb;
                             $frsemester=0;
                            global $trid;
                            $cur = $mydb->loadResultlist();
                            $trid+=100;
                            foreach ($cur as $result) {
                                echo '<tr>';
                                echo '<td >'. $result->id.'</td>';
                                echo '<td >'. $result->course_id.'</td>';
                                echo '<td >'. $result->course_name.'</td>';
                                echo '<td >'. $result->credit_hour.'</td>';
                                echo '<td >'. $result->contact_hour.'</td>';
                                echo '<td >'. $result->semester.'</td>';
                                echo '<td >'. $result->room.'</td>';
                                echo '<td >date '.$result->first_class_date.' time '.$result->first_class_time.'</td>';
                                echo '<td >date '.$result->second_class_date.' time '.$result->second_class_time.'</td>';
                                echo'<td><a href="index.php?view=view&id='.$result->id.'&department_id='.$result->department_id.'" class="btn btn-default m-2"><span class="glyphicon glyphicon-plus-sign"></span>View
                                </a></td>';                                               
                            }

                         ?>

                    </tbody>                                  
                </table>
            </form>


        <?php
        }?>

</div>































