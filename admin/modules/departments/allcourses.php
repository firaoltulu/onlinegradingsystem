<?php 
$table_name = (isset($_GET['table_name']) && $_GET['table_name'] != '') ? $_GET['table_name'] : '';
?>

<div class="wells">

<h3 align="center" style="color:white;">List of Subject</h3>
<?php

    $mydb->setQuery("SELECT * FROM ".$table_name." ORDER BY `semester` asc ");
    loadresult();
    function loadresult(){
        global $mydb;
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
                            <th>SEMESTER.</th>                         
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
                                    echo '<td >'. $result->course_id.'</td>';
                                    echo '<td >'. $result->course_id.'</td>';
                                    echo '<td >'. $result->course_name.'</td>';
                                    echo '<td >'. $result->credit_hour.'</td>';
                                    echo '<td >'. $result->contact_hour.'</td>';
                                    echo '<td >'. $result->semester.'</td>';
                
                                    echo '</tr>';

                                }
                                ?>
                    </tbody>
                  </table>
            </div>	




  <?php
    }
?>                               