<?php 
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
$year = (isset($_GET['year']) && $_GET['year'] != '') ? $_GET['year'] : '';
$pervyear = (int)$year;
$nextyear = (int)$year;
if($pervyear!=1){
	$pervyear =$pervyear-1;
}
if($nextyear!=4){
	$nextyear =$nextyear+1;
}

?>

<div class="wells">

		<h3 align="center" style="color:white;">List of Subject</h3>		 
				  	<?php
				  	    
						 $hg;
						 $hj;
						 $hl;							     
						 $hh=$_SESSION['table_name'];
										
							 switch($year){
								 case '1':
									$hg ='1';
									$hj='2';
									$hl='3';
									break;
									case '2':
										$hg='4';
										$hj='5';
										$hl='6';
										break;
										case '3':
											$hg='7';
											$hj='8';
											$hl='9';
											break;
											case '4':
												$hg='10';
												$hj='11';
												$hl='12';
												break;
                                     default:
									 break;    

							}

							//  "SELECT * FROM ".$hh. `subject` s,  `course` c WHERE s.`COURSE_ID` = c.`COURSE_ID` "
					  		$mydb->setQuery("SELECT * FROM ".$hh." WHERE `semester` ='{$hg}'");
						  	loadresult();

							  $mydb->setQuery("SELECT * FROM ".$hh." WHERE  `semester` ='{$hj}'");
						  	loadresult();
							  $mydb->setQuery("SELECT * FROM ".$hh." WHERE `semester` ='{$hl}'");
						  	loadresult();
			function loadresult(){
					$year = (isset($_GET['year']) && $_GET['year'] != '') ? $_GET['year'] : '';
					     $frdb = '';
						 echo	'<form action="controller.php?action=delete&department='.$_SESSION['department_name'].'&year='.$year.'" Method="POST">'; 
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
										<th>PRE_COURSE ID.</th>
										<th>TYPE.</th>
										<th>OPTION.</th>		
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
											
				              		echo '<td ><input type="checkbox" name="selector[]" value="'.$result->id. '"/>
												 ' . $result->id.'</a></td>';
											echo '<td >'. $result->course_id.'</td>';
											echo '<td >'. $result->course_name.'</td>';
											echo '<td >'. $result->credit_hour.'</td>';
											echo '<td >'. $result->contact_hour.'</td>';
											echo '<td >'. $result->semester.'</td>';
											echo '<td >'. $result->pre_course_id.'</td>';
											echo '<td >'. $result->type.'</td>';
											$frsemester = $result->semester;
											echo '<td ><a href="index.php?view=edit&department='.$_SESSION['department_name'].'&semester='.$frsemester.'&year='.$year.'&id='.$result->id.'" id="btedit" class="btn btn-default m-2"><span class="glyphicon glyphicon-plus-sign"></span>Edit</a> </td>';
											echo '</tr>';
											$trid +=1;
										}

									?>

								</tbody>
					
							</table>
							<div class="btn-group">
								<?php echo '<a href="index.php?view=add&department='.$_SESSION['department_name'].'&semester='.$frsemester.'&year='.$year.' " class="btn btn-default m-2"><span class="glyphicon glyphicon-plus-sign"></span>ADD</a>'; ?>

								<?php echo '<a href="index.php?view=assignteacher&department='.$_SESSION['department_name'].'&semester='.$frsemester.'&year='.$year.' " class="btn btn-default m-2"><span class="glyphicon glyphicon-plus-sign"></span>Assign Teacher</a>';  ?>

								<button type="submit" class="btn btn-default m-2" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
										
							</div>
						 </div>

					</form>

				 <?php      }?>
				       			
				<div class="btn-group">
				<?php echo '<a href="index.php?view=list&year='.$pervyear.' " class="btn btn-default m-2"><span class="glyphicon glyphicon-plus-sign"></span>Previous</a>';  ?>
				<?php echo '<a href="index.php?view=list&year='.$nextyear.' " class="btn btn-default m-2"><span class="glyphicon glyphicon-plus-sign"></span>Next</a>';  ?>

				</div>;
		
				
	  	</div><!--End of well-->

</div><!--End of container-->