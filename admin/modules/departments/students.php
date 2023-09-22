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
        $mydb->setQuery("SELECT `id`,CONCAT( `first_name`, '  ' , `middle_name`, '  ' , `last_name`) AS `name`,`gender`,`age`,`contact_info` FROM ".$db_students->students_table);        
        loadresult($db_students->students_table);
     }
     else{
         echo 'not';
         

     }

    function loadresult($tb_name){
        $department_id = (isset($_GET['department_id']) && $_GET['department_id'] != '') ? $_GET['department_id'] : '';
           echo	'<form action="controller.php?action=delete&department_id='.$department_id.'" Method="POST">'; 
        ?>
            <div class="table-responsive">
                                <table id="example" class="table table-striped border table-bordered table-hover table-sm " cellspacing="0">
                                    <thead class="">
                                        <tr class="h5">
                                            <th>ID.</th>
                                            <th>STUDENT_NAME</th>
                                            <th>GENDER</th>
                                            <th>AGE</th>
                                            <th>CONTACT_INFO</th>
                                            <th>VIEW</th>                                          
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

                                                echo '<td >'. $result->id.'</a></td>';
                                                echo '<td >'. $result->name.'</td>';
                                                echo '<td >'. $result->gender.'</td>';
                                                echo '<td >'. $result->age.'</td>';
                                                echo '<td >'. $result->contact_info.'</td>';
                                                echo '<td ><a href="index.php?view=edit&department_id='.$department_id.'&id='.$result->id.'" id="btedit" class="btn btn-default m-2"><span class="glyphicon glyphicon-plus-sign"></span>Edit</a></td>';
                                                echo '</tr>';
                                                $trid +=1;
                                            }
                                        ?>
                                        
                                    </tbody>

                                </table>
            </div>
       </form>


<?php

    } 


?>
