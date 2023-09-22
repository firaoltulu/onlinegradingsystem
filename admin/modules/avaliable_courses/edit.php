<?php

 $subjid = $_GET['id'];
$singlesubject = new scheduling();
$object = $singlesubject->single_course($subjid);

 $mydb->setQuery("SELECT `id`, CONCAT( `first_name`, '  ' , `middle_name`, '  ' , `last_name`) AS `name`, 
`gender`, `field_of_study`, `level_of_study`, `age`, `department` FROM teachers");
 $teachers = $mydb->loadResultlist();

 $mydb->setQuery("SELECT * FROM unity_departments");
 $unitys = $mydb->loadResultlist();

 
 $mydb->setQuery("SELECT * FROM unity_rooms");
 $unityrooms = $mydb->loadResultlist();

echo '<form class="form-horizontal well span4" action="controller.php?action=edit&id='.$subjid.'" method="POST">';
?>
<fieldset>
	<legend style="color:white;">Edit Assigned Course</legend>
										
		<div class="form-group">
          <div class="col-md-8">
            <label class="col-md-4 control-label" for="teacher_name">Assigned Teacher name</label>

            <div class="col-md-8">
                <select name="teacher_name" id="teacher_name" class="form-control input-sm">
                    <!-- <input class="form-control input-sm" id="course_id" name="teacher_name" placeholder="Subject Code" -->
                    <option><?php echo $object->teacher_name;?></option>
                    <?php 
                    foreach($unitys  as $unity){     
                        echo '<optgroup label='.$unity->department_name.'>';

                    foreach($teachers  as $teacher){
                        if($teacher->department==$unity->department_name){
                            echo '<option value="'.$teacher->id.'"> '.$teacher->name.' </option>';
                        }
                    }
                    }
                    echo '</optgroup>';                            
                    ?>
                </select>           
            </div>
          </div>
      </div>

      <div class="form-group">
          <div class="col-md-8">
            <label class="col-md-4 control-label" for="room_name">Assigned room</label>

            <div class="col-md-8">
                <select name="room_name" id="room_name" class="form-control input-sm">
                    <!-- <input class="form-control input-sm" id="course_id" name="teacher_name" placeholder="Subject Code" -->
                    <option><?php echo $object->room;?></option>
                    <?php 
                    foreach($unityrooms  as $room){                  
                          echo '<option value="'.$room->id.'"> '.$room->room_name.' </option>';              
                    }
                                               
                    ?>
                </select>           
            </div>
          </div>
      </div>

      <!-- <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for="lab">Lab Needs</label>
             <input class="form-control input-md col-md-2" id="lab" name="lab" placeholder="Subject lab need"
             type="checkbox" value="<?php echo $object->lab;?>">
          
        </div>
      </div> -->

       <!-- <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for="credit_hour">credit hour</label>

          <div class="col-md-8">
             <input class="form-control input-sm" id="credit_hour" name="credit_hour" placeholder="Credit Hour"
              type="number" min="3" max="5" value="<?php echo $object->credit_hour;?>">
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for="contact_hour">Contact Hour</label>

          <div class="col-md-8">
             <input class="form-control input-sm" id="contact_hour" name="contact_hour" placeholder="No of units" 
              type="number" min="3" max="5" value="<?php echo $object->contact_hour;?>">
          </div>
        </div>
      </div> -->
     

      <div class="col-md-8">
            <button class="btn btn-primary" name="editcourse" type="submit" >Save Edit</button>
      </div>
		
</fieldset>	

				
</form>
</div>