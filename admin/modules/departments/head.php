<?php 
$head_id = (isset($_GET['head_id']) && $_GET['head_id'] != '') ? $_GET['head_id'] : '';
$mydb->setQuery("SELECT * FROM `teachers` where `id`=".$head_id);
$cur = $mydb->executeQuery();
$row_count = $mydb->num_rows($cur);   
if ($row_count == 1){
    $DB_NAME = $mydb->loadSingleResult();
    ?>
<div class="container">
<div class="wellss">           
    <fieldset>
     <legend style="color:white;">Head Information</legend>
                <?php echo '<form action="controller.php?action=change&head_id='.$DB_NAME->id.'" Method="POST">'; ?>

            <table class="table table-bordered" cellspacing="0">         
                <tr><td>ID Number :</td>
                <td width="80%"><?php echo  $DB_NAME->id; ?></td>
               </tr>	
                    <td>First Name :</td>
                    <td> <input class="form-control input-sm" id="email" name="first_name" placeholder="email"
                         type="text" value="<?php echo 	$DB_NAME->first_name;?>"></td>
                    </tr>
                    <td>Middle Name :</td>
                    <td> <input class="form-control input-sm" id="email" name="middle_name" placeholder="email"
                         type="text" value="<?php echo 	$DB_NAME->middle_name;?>"></td>
                    </tr>
                    <td>Last Name :</td>
                    <td> <input class="form-control input-sm" id="email" name="last_name" placeholder="email"
                         type="text" value="<?php echo 	$DB_NAME->last_name;?>"></td>
                    </tr>
                    <td>Field of study :</td>
                    <td> <input class="form-control input-sm" id="email" name="field_of_study" placeholder="email"
                         type="text" value="<?php echo $DB_NAME->field_of_study;?>"></td></tr>
                    <td>level of study :</td>
                    <td> <input class="form-control input-sm" id="email" name="level_of_study" placeholder="email"
                         type="text" value="<?php echo $DB_NAME->level_of_study;?>"></td></tr>
                    <td>Gender :</td>
                    <td><?php echo $DB_NAME->gender;?></td></tr>
                    <td>age :</td>
                    <td><input class="form-control input-sm" id="email" name="age" placeholder="email"
                         type="number" value="<?php echo $DB_NAME->age;?>"></td></tr>
                    <td>postion :</td>
                    <td><?php echo $DB_NAME->position;?></td></tr>
                    <td>department :</td>
                    <td><?php echo $DB_NAME->department;?></td></tr>
                    <!-- <td>Email :</td>
                    <td><?php //echo $_SESSION['EMAIL'];?></td></tr>
                    -->
                  </tr>							
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

</div>




  <?php  
}
else{



}

?>
<!--End of container-->