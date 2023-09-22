<div class="wells">
    <h3 align="center" style="color:white;">List of Teachers</h3>	
    <?php
    
        $department_id = (isset($_GET['department_id']) && $_GET['department_id'] != '') ? $_GET['department_id'] : '';

        $mydb->setQuery("SELECT * FROM `unity_departments` WHERE `id` = '{$department_id}'");
        $cur = $mydb->executeQuery();
        $row_count = $mydb->num_rows($cur);
        if ($row_count == 1)
        {
            $db_unity = $mydb->loadSingleResult(); 
            $mydb->setQuery("SELECT * FROM `teachers` WHERE `department` = '".$db_unity->department_name."'");
            loadresult();
        }
        else{
          echo "not"; 

        }
     
            function loadresult(){
                $department_id = (isset($_GET['department_id']) && $_GET['department_id'] != '') ? $_GET['department_id'] : '';

    ?>
                        <div class="table-responsive">
                            <table id="example" class="table table-striped border table-bordered table-hover table-sm " cellspacing="0">
                                <thead class="">
                                    <tr class="h5">
                                       <th>ID</th>           
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Last Name</th>
                                        <th>Gender</th>
                                        <th>Field Of Study</th>
                                        <th>Level of Study</th>
                                        <th>age</th>
                                        <th>Postion</th>
                                        <th>Option</th>                                   
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
                                            echo '<td >'.$result->id.'</td>';
                                            echo '<td >'. $result->first_name.'</td>';
                                            echo '<td >'. $result->middle_name.'</td>';
                                            echo '<td >'. $result->last_name.'</td>';
                                            echo '<td >'. $result->gender.'</td>';
                                            echo '<td >'. $result->field_of_study.'</td>';
                                            echo '<td >'. $result->level_of_study.'</td>';
                                            echo '<td >'. $result->age.'</td>';
                                            echo '<td >'. $result->position.'</td>';
                                            echo '<td ><a href="index.php?view=editteacher&department_id='.$department_id.'&id='.$result->id.'" class="btn btn-default m-2"><span class="glyphicon glyphicon-plus-sign"></span>edit</a></td >';
                                            echo '</tr>';
                                        }

                                    ?>

                                </tbody>
                    
                            </table>


                        </div>
       
                <?php } ?>
                <div class="btn-group">
								<?php echo '<a href="index.php?view=faculty&department_id='.$department_id.'" class="btn btn-default m-2"><span class="glyphicon glyphicon-plus-sign"></span>ADD</a>'; ?>
								<?php   ?>
										
							</div>'

</div>