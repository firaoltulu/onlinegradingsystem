
		<div class="wells">
				<h3 align="center" class="simple-text logo-normal" style="color:white;">List of Student</h3>
			    <form action="controller.php?action=delete" Method="POST">  					
					<table id="example" class="table table-striped table-bordered table-hover" cellspacing="0">
				
				  <thead>
				  	<tr>
				  		<!-- <th>No.</th> -->
				  		<th width="10%" align="left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> ID#.</th>
				  		<th>Fullname</th>
				  		<th>Sex</th>
						<th>Date</th>
				  		<!-- <th>Age</th>
				  		<th>Birth Date</th>
				  		<th>Email Address</th>
				  		<th>Options</th> -->
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php
					  $tb;
					  switch($_SESSION['id']){
						  case 1:
							$tb= "tblregistration";
							break;
							case 2:
								$tb= "tblregistration2";
								break;
								case 3: 
									$tb= "tblregistration3";
									break;
									case 4:
										$tb= "tblregistration4";
										break;
										default: 
										break;

					  }	  
					
					//   $pp->setQuery("SELECT  `IDNO` ,UPPER(CONCAT(  `LNAME` ,  ', ',  `FNAME` ,  ' ',  `MNAME` )) AS  'Name',
					//   `SEX` ,`AGE`, `BDAY` ,  `STATUS` ,  `EMAIL`
					//   FROM  `tblstudent`");	

				
											
				  	  	loadresult($tb);

				  	
				  		function loadresult($tb){
							$pp = new Post("entrance_card",$tb);
							$pp->setQuery("SELECT  `id` ,CONCAT(  `first_name` ,  ', ',  `mid_name` ,  ' ',  `sur_name` ) AS  'Name',
							`gender` ,`date` FROM  `{$tb}`");

					  		$cur = $pp->loadResultList();
							foreach ($cur as $student) {
					  		echo '<tr>';
					  		echo '<td width="10%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$student->id. '"/>
					  				<a href="index.php?view=edit&id='.$student->id.'">' . $student->id.'</a></td>';
					  		echo '<td  >'. $student->Name.'</td>';
					  		echo '<td >'. $student->gender.'</td>';
					  		echo '<td >'. $student->date.'</td>';
					  		// echo '<td  align="center">'. $student->BDAY.'</td>';
					  		// echo '<td>'. $student->EMAIL.'</td>';
					  		// echo '<td><a href = "index.php?view=view&studentId='.$student->IDNO.'" ><span class="glyphicon glyphicon-list-alt"> </span>  View</a></td>';
					  		echo '</tr>';
					  		}

				  		} 
				  	
				  	?>
				  </tbody>
				 
				</table>
				<?php 
					// if($_SESSION['DEPARTMENT']==1){
					// 	echo '
					// 	<div class="btn-group">
					// 	  <a href="index.php?view=add" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span>  New</a>
					// 	   <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
					// 	</div>';
					// }

				?>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->
