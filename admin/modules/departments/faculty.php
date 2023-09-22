<?php 
    $department_id = (isset($_GET['department_id']) && $_GET['department_id'] != '') ? $_GET['department_id'] : ''; 
    echo '<form class="form-horizontal well span4" action="controller.php?action=add&department_id='.$department_id.'" method="POST">';  
    
?>
<fieldset>
      <legend  style="color:white;">New Teacher</legend>
                        
        <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for="first_name">First Name</label>

                <div class="col-md-8">
                   <input class="form-control input-sm" id="first_name" name="first_name" placeholder="First Name"
                    type="text" value="" required>
                </div>
              </div>
        </div>

        <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for="middle_name">Middle Name</label>

                <div class="col-md-8">
                   <input class="form-control input-sm" id="middle_name" name="middle_name" placeholder="Middle Name"
                    type="text" value="" required>
                </div>
              </div>
        </div>

        <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for="last_name">Last Name</label>

                <div class="col-md-8">
                   <input class="form-control input-sm" id="last_name" name="last_name" placeholder="Last Name"
                    type="text" value="" required>
                </div>
              </div>
        </div>

            <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for="field_of_study">Field of Study</label>

                <div class="col-md-8">
                   <input class="form-control input-sm" id="field_of_study" name="field_of_study" placeholder="Field of study"
                    type="text" value="" required>
                </div>
              </div>
             </div>

             <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for="level_of_study">level of Study</label>

                <div class="col-md-8">
                   <input class="form-control input-sm" id="level_of_study" name="level_of_study" placeholder="Level of study"
                    type="text" value="" required>
                </div>
              </div>
             </div>
             <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for="age">Age</label>

                <div class="col-md-8">
                   <input class="form-control input-sm" id="age" name="age" placeholder="age" min="25" 
                   type="number" value="" required>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for="gender">Gender</label>

                <div class="col-md-8">
                   <select  class="form-control input-sm" id="gender" name="gender" placeholder="Position"  
                     type="text" value="" required>
                     <option ></option>
                      <option value="teacher">Male</option>
                      <option value="teacher">Female</option>
                                    
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for="position">Position</label>

                <div class="col-md-8">
                   <select  class="form-control input-sm" id="position" name="position" placeholder="Position"  
                     type="text" value="" required>
                      <option value="teacher">Teacher</option>
                                    
                  </select>
                </div>
              </div>
            </div>



       <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for="idno"></label>

                <div class="col-md-8">
                  <button class="btn btn-default" name="saveteacher" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
                 <!-- <button class="btn btn-default" name="saveandnewcourse" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save and Add new</button> -->
                </div>
              </div>
      </div>

        
    </fieldset> 

            
  </form>