<?php
require_once ("../../../includes/initialize.php");

	$department_id = (isset($_GET['department_id']) && $_GET['department_id'] != '') ? $_GET['department_id'] : '';
	
    $tech_id = $_GET['id'];
   $mydb->setQuery("SELECT * FROM `teachers` WHERE `id` = '{$tech_id}'");
  $cur = $mydb->executeQuery();
 $row_count = $mydb->num_rows($cur);
 if ($row_count == 1)
 {
     $db_unity = $mydb->loadSingleResult(); 
    //  loadresult();
 }
 else{
   echo "not";
   return false; 

 }

 if(isset($_POST['editcourse'])){

    if ($_POST['first_name'] == "" OR $_POST['middle_name'] == "" OR $_POST['last_name'] == "" OR $_POST['field_of_study'] == ""
      OR $_POST['level_of_study'] == "" OR $_POST['age'] == "" OR $_POST['gender'] == "") {
        message("All field is required!","error");
        check_message();
        redirect('index.php?view=editteacher&department_id='.$department_id."&id=".$tech_id);
    
    }
    else{

        $singlesubject = new Teacher();
        $db_unity = $mydb->loadSingleResult(); 
        $tech = new Teacher(); 
        $first_name	    	= $_POST['first_name'];
        $middle_name      	= $_POST['middle_name'];
        $last_name	 	    = $_POST['last_name'];
        $field_of_study 	= $_POST['field_of_study'];
        $level_of_study		= $_POST['level_of_study'];
        $age	         	= $_POST['age'];
        $gender	         	= $_POST['gender'];
   
        $tech->first_name	    =$first_name	 ;
        $tech->middle_name       = $middle_name  ;
        $tech->last_name	 	= $last_name;
        $tech->field_of_study   =$field_of_study;
        $tech->level_of_study   =$level_of_study;	
        $tech->age	             = $age;
        $tech->gender	        =   $gender	 ;
        $istrue = $tech->update($db_unity->id);
        if ($istrue == 1){            
             message("Faculty Member  is edited successfully!","success");
             redirect('index.php?view=viewfaculty&department_id='.$department_id);
         }

    }
    
 }
 else{
echo '<form class="form-horizontal well span4" action="editteacher.php?department_id='.$department_id.'&id='.$db_unity->id.'" method="POST">';
?>

<fieldset>
	<legend style="color:white;">Edit teacher</legend>
										

		<div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for="first_name">First name </label>

          <div class="col-md-8">
             <input class="form-control input-sm" id="first_name" name="first_name" placeholder="first name"
              type="text" value="<?php echo $db_unity->first_name;?>">
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for="middle_name">middle Name</label>

          <div class="col-md-8">
             <input class="form-control input-sm" id="middle_name" name="middle_name" placeholder="Middle Name"
              type="text" value="<?php echo $db_unity->middle_name;?>">
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for="last_name">Last Name</label>

          <div class="col-md-8">
             <input class="form-control input-sm" id="last_name" name="last_name" placeholder="Last Name"
              type="text" value="<?php echo $db_unity->last_name;?>">
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for="gender">Gender</label>

          <div class="col-md-8">
             <input class="form-control input-sm" id="gender" name="gender" placeholder="gender"
              type="text" value="<?php echo $db_unity->gender;?>">
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for="field_of_study">field of study</label>

          <div class="col-md-8">
             <input class="form-control input-sm" id="field_of_study" name="field_of_study" placeholder="field of study"
              type="text" value="<?php echo $db_unity->field_of_study;?>">
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for="level_of_study">level of study</label>

          <div class="col-md-8">
             <input class="form-control input-sm" id="level_of_study" name="level_of_study" placeholder="gender"
              type="text" value="<?php echo $db_unity->level_of_study;?>">
          </div>
        </div>
      </div>

       <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for="age">Age</label>

          <div class="col-md-8">
             <input class="form-control input-sm" id="age" name="age" placeholder="Age"
              type="number" min="23" max="60" value="<?php echo $db_unity->age;?>">
          </div>
        </div>
      </div>
      <div class="col-md-8">
            <button class="btn btn-primary" name="editcourse" type="submit" >Save Edit</button>
          </div>
		
</fieldset>	

				
</form>
</div><!--End of container-->

<?Php } ?>





























