<?php
	$department = (isset($_GET['department']) && $_GET['department'] != '') ? $_GET['department'] : '';
	$semester = (isset($_GET['semester']) && $_GET['semester'] != '') ? $_GET['semester'] : '';
	$year = (isset($_GET['year']) && $_GET['year'] != '') ? $_GET['year'] : '';
 
 $subjid = $_GET['id'];
$singlesubject = new Subject($department);
$object = $singlesubject->single_subject($subjid);
echo '<form class="form-horizontal well span4" action="controller.php?action=edit&department='.$department.'&semester='.$semester.'&year='.$year.'&id='.$subjid.'" method="POST">';
?>

<fieldset>
	<legend style="color:white;">Edit Subject</legend>
										

		<div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for="course_id">Course Id </label>

          <div class="col-md-8">
             <input class="form-control input-sm" id="course_id" name="course_id" placeholder="Subject Code"
              type="text" value="<?php echo $object->course_id;?>">
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for="course_name">Course Name</label>

          <div class="col-md-8">
             <input class="form-control input-sm" id="course_name" name="course_name" placeholder="Subject Description"
              type="text" value="<?php echo $object->course_name;?>">
          </div>
        </div>
      </div>

       <div class="form-group">
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
      </div>
     

      <div class="col-md-8">
            <button class="btn btn-primary" name="editcourse" type="submit" >Save Edit</button>
          </div>
		
</fieldset>	

				
</form>
</div><!--End of container-->