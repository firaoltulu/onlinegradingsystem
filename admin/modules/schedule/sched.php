<?php  
echo '<form class="form-horizontal well span4" action="controller.php?action=schedule" method="POST">';  
?>
    <fieldset>
      <legend  style="color:white;">Schedule</legend>
             <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for="reg_day">Semester registration Beginning Day</label>

                <div class="col-md-8">
                   <input class="form-control input-sm" id="reg_day" name="reg_day" placeholder="registration begin Day" required
                   type="date" value="">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for="reg_end_day">Semester registration End Day</label>
                <div class="col-md-8">
                   <input class="form-control input-sm" id="reg_end_day" name="reg_end_day" placeholder="registration end Day" required
                   type="date" value="">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for="start_day">Class Starting Day</label>

                <div class="col-md-8">
                   <input class="form-control input-sm" id="start_day" name="start_day" placeholder="starting Day" required 
                   type="date" value="">
                </div>
              </div>
            </div>

          

       <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for="idno"></label>

                <div class="col-md-8">
                  <button class="btn btn-default" name="schedule" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span>Schedule</button>
                 <!-- <button class="btn btn-default" name="saveandnewcourse" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save and Add new</button> -->
                </div>
              </div>
      </div>

        
    </fieldset> 

            
  </form>