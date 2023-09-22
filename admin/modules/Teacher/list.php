<div class="wells">
    <h3 align="center" style="color:white;">List of Teachers</h3>	
    <?php
            $mydb->setQuery("SELECT * FROM `teachers` WHERE `department` = '".$_SESSION['department_name']."'");
            loadresult();
            function loadresult(){
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
                                            // echo '<td ><a href="index.php?view=assignteacher&department='.$_SESSION['department_name'].'&semester='.$frsemester.'"><span class="glyphicon glyphicon-plus-sign"></span>View</a></td >';
                                            echo '<td >'. $result->id.'</td>';
                                            echo '<td >'. $result->first_name.'</td>';
                                            echo '<td >'. $result->middle_name.'</td>';
                                            echo '<td >'. $result->last_name.'</td>';
                                            echo '<td >'. $result->gender.'</td>';
                                            echo '<td >'. $result->field_of_study.'</td>';
                                            echo '<td >'. $result->level_of_study.'</td>';
                                            echo '<td >'. $result->age.'</td>';
                                            echo '<td ><a href="index.php?view=assignteacher&department='.$_SESSION['department_name'].'&semester='.$frsemester.'" class="btn btn-default m-2"><span class="glyphicon glyphicon-plus-sign"></span>edit</a></td >';
                                            // echo '<td ><a href="index.php?view=edit&department='.$_SESSION['department_name'].'&semester='.$frsemester.'&year='.$year.'&id='.$result->id.'" id="btedit" class="btn btn-default m-2"><span class="glyphicon glyphicon-plus-sign"></span>Edit</a> </td>';
                                            echo '</tr>';
                                            // $trid +=1;
                                        }

                                    ?>

                                </tbody>
                    
                            </table>


                        </div>

                        <div class="btn-group">
								<?php echo '<a href="index.php?view=add&department='.$_SESSION['department_name'].'" class="btn btn-default m-2"><span class="glyphicon glyphicon-plus-sign"></span>ADD</a>'; ?>
								<?php   ?>
										
							</div>'
                        
                <?php } ?>

</div>