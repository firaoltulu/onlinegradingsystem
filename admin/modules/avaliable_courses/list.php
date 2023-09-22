<?php 
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
$year = (isset($_GET['year']) && $_GET['year'] != '') ? $_GET['year'] : '';
?>

<div class="wells">

 <h3 align="center" style="color:white;">List of semester_courses</h3>
    <?php

        $mydb->setQuery("SELECT * FROM `unity_avaliable_courses` WHERE `department_id` ='{$_SESSION['id']}' ORDER BY `unity_avaliable_courses`.`semester`,`type` ASC");

        loadresult();

        function loadresult(){
            echo '<form action="controller.php?action=delete" Method="POST">'; 
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
                                            <th>TEACHER_NAME</th>
                                            <th>SEMESTER</th>
                                            <th>LAB</th>
                                            <th>FIRST_CLASS</th>
                                            <th>SECOND_CLASS</th>
                                            <th>CLASS</th>
                                            <th>TYPE</th>
                                            <th>DEPARTMENT</th>
                                            <th>SCEDULE</th>
                                            <th>OPTION.</th>               
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
                                                echo '<td >'. $result->type.'</td>';
                                                echo '<td >'. $result->department_id.'</td>';
                                                echo'<td><a href="index.php?view=schedule&id='.$result->id.'&room" class="btn btn-default m-2"><span class="glyphicon glyphicon-plus-sign"></span>Schedule</a></td>';
                                                echo'<td><a href="index.php?view=edit&id='.$result->id.'" class="btn btn-default m-2"><span class="glyphicon glyphicon-plus-sign"></span>Edit</a></td>';
                                                echo '</tr>';

                                            }
                                        ?>
                                    </tbody>                                  
                                </table>

                </div>
                <div class="btn-group">
                    <?php //echo '<a href="index.php?view=add&department='.$_SESSION['department_name'].'&semester='.$frsemester.'&year='.$year.' " class="btn btn-default m-2"><span class="glyphicon glyphicon-plus-sign"></span>ADD</a>'; ?>
                    <?php echo '<a href="controller.php?action=post" class="btn btn-default m-2"><span class="glyphicon glyphicon-plus-sign"></span>Post</a>';  ?>
                    <?php echo '<a href="index.php?view=add_special" class="btn btn-default m-2"><span class="glyphicon glyphicon-plus-sign"></span>Add Special</a>';  ?>

                    <button type="submit" class="btn btn-default m-2" name="delete"><span class="glyphicon glyphicon-trash"></span>Delete Selected</button>								
			    </div>
            </form>
        <?php } ?>
            

        
    
</div>
