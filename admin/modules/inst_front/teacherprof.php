<div class="container">

		<div class="wellss">
			<?php 

				// $mydb->setQuery("SELECT * 
				// 					FROM instructor
				// 					WHERE  `INST_EMAIL` ='{$_SESSION['ACCOUNT_USERNAME']}'");
				// $cur = $mydb->loadSingleResult();
			?>
			  		
			<fieldset>
						<legend style="color:white;">Faculty Information</legend>
						<?php echo '<form action="controller.php?action=change&department='.$_SESSION['DEPARTMENT'].'" Method="POST">'; ?>

					<table class="table table-bordered" cellspacing="0">
						
						<tr><td>ID Number :</td>
						<td width="80%"><?php echo  $_SESSION['MEMBER_ID']; ?></td>
					   </tr>	
							<td>First Name :</td>
							<td> <input class="form-control input-sm" id="email" name="first_name" placeholder="email"
                                 type="text" value="<?php echo 	$_SESSION['FIRST_NAME'];?>"></td>
							</tr>
							<td>Middle Name :</td>
							<td> <input class="form-control input-sm" id="email" name="middle_name" placeholder="email"
                                 type="text" value="<?php echo 	$_SESSION['MIDDLE_NAME'];?>"></td>
							</tr>
							<td>Last Name :</td>
							<td> <input class="form-control input-sm" id="email" name="last_name" placeholder="email"
                                 type="text" value="<?php echo 	$_SESSION['LAST_NAME'];?>"></td>
							</tr>
							<td>Field of study :</td>
							<td><?php echo $_SESSION['FIELD_OF_STUDY'];	?></td></tr>
							<td>level of study :</td>
							<td><?php echo $_SESSION['LEVEL_OF_STUDY'];	?></td></tr>
							<td>Gender :</td>
							<td><?php echo $_SESSION['GENDER'];	?></td></tr>
							<td>age :</td>
							<td><?php echo $_SESSION['AGE'];	?></td></tr>
							<td>postion :</td>
							<td><?php echo $_SESSION['POSITION'];	?></td></tr>
							<td>department :</td>
							<td><?php echo $_SESSION['DEPARTMENT'];	?></td></tr>
							<td>Email :</td>
							<td> <input class="form-control input-sm" id="email" name="email" placeholder="email"
                                 type="text" value="<?php echo $_SESSION['EMAIL'];?>"></td></tr>
							<td>Password :</td>
							<td> <input class="form-control input-sm" id="pass" name="pass" placeholder="password"
                              type="text" value="<?php echo $_SESSION['PASSWORD'];?>"></td></tr>							
							</tr>
						</tr>

					</table>
					<div class="form-group">
                     
                        <div class="col-md-8">
                          <button class="btn btn-default" name="change" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span>Change</button>
                        </div>
                    
                   </div>


				</form>


				</fieldset>
				
							
			
	  	</div><!--End of well-->

</div><!--End of container-->