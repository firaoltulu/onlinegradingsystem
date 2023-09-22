<?php 
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
$department = (isset($_GET['department']) && $_GET['department'] != '') ? $_GET['department'] : '';
$semester = (isset($_GET['semester']) && $_GET['semester'] != '') ? $_GET['semester'] : '';
$year = (isset($_GET['year']) && $_GET['year'] != '') ? $_GET['year'] : '';
require_once ("../../../includes/initialize.php");
?>
<?php  
echo '<form class="form-horizontal well span4" action="controller.php?action=add&department='.$department.'&semester='.$semester.'&year='.$year.'" method="POST">';  
?>
    <fieldset>
      <legend  style="color:white;">New Course</legend>
                        
           <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for="course_id">Course_id</label>

                <div class="col-md-8">
                   <input class="form-control input-sm" id="course_id" name="course_id" placeholder="Course id"
                    type="text" value="">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for="course_name">Course_name</label>

                <div class="col-md-8">
                   <input class="form-control input-sm" id="course_name" name="course_name" placeholder="Course name" 
                   type="text" value="">
                </div>
              </div>
            </div>

             <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for="credit_hour">credit hour</label>

                <div class="col-md-8">
                   <input class="form-control input-sm" id="credit_hour" name="credit_hour" placeholder="Credit_Hour" min="1" max="5"
                   type="number" value="">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for="contact_hour">Contact hour</label>

                <div class="col-md-8">
                   <input class="form-control input-sm" id="contact_hour" name="contact_hour" placeholder="Contact_Hour" min="1" max="5"
                   type="number" value="">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for="type">class</label>

                <div class="col-md-8">
                  <select class="form-control input-sm" id="type" name="type" placeholder="type" required>
                  <option value="Regular">Regular</option>
                  </select>
                   <!-- <input class="form-control input-sm" id="special" name="special" placeholder="special" min="1" max="5"
                   type="number" value=""> -->
                </div>
              </div>
            </div> 

            <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for="pre">Pre</label>

                <div class="col-md-8">
                  <select class="form-control input-sm" id="pre" name="pre" placeholder="PRE COURSE">
                    <option value="0">None</option>
                      <?php
                      $sql;
                      if($semester==0){
                        $sql = "SELECT * FROM {$_SESSION['table_name']}";
                      }
                      else{
                        $sql = "SELECT * FROM {$_SESSION['table_name']} where `semester` < {$semester} ";

                      }
                      $mydb->setQuery($sql);
                      $cur = $mydb->loadResultList();
                      foreach($cur as $result){
                        echo '<option value="'.$result->id.'">'.$result->course_name.'</option>';
                      }
                      ?>
                  </select>
                </div>
              </div>
            </div>


      <?php 
      
      switch($semester){

        case '0':
        echo '
           <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for="semester">Semester start from 1 to 12</label>

                <div class="col-md-8">
                   <input class="form-control input-sm" id="semester" name="semester" placeholder="Semester" 
                   type="number" value=""  min="1" max="12">
                </div>
              </div>
            </div>
            ';
            break;
            default:
            break;
      }
      ?>

         <!--    <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "pre">Prerequisite</label>

                <div class="col-md-8">-->
                   <!-- <input class="form-control input-sm" id="pre" name="pre" placeholder=
                      "Prerequisite" type="hidden" value=""> -->
            <!--    </div>
              </div>
            </div>-->
             <!-- <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "course">Year level</label>

                <div class="col-md-8">
                 <select class="form-control input-sm" name="course" id="course">
                      <?php
                      // $course = new Course();
                      // $cur = $course->listOfDistinctcourse(); 
                      // foreach ($cur as $course) {
                      //   echo '<option value="'. $course->COURSE_ID.'">'.$course->COURSE_NAME.' </option>';
                      // }

                      ?>
              
            </select> 
                </div>
              </div>
            </div> -->

            <!-- <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "ay">Academic Year</label>

                <div class="col-md-8">
                  <select class="form-control input-sm" name="ay" id="ay">
            <option value="2013-2014">2013-2014</option>
            <option value="2014-2015">2014-2015</option>
            <option value="2015-2016">2015-2016</option>
            <option value="2016-2017">2016-2017</option>
            <option value="2017-2018">2017-2018</option>
            <option value="2018-2019">2018-2019</option>
            <option value="2019-2020">2019-2020</option>  
          </select> 
                </div>
              </div>
            </div> -->
      <!--  <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "Semester">Semester</label>

                <div class="col-md-8">
                   <select class="form-control input-sm" name="Semester" id="Semester">
            <option value="First">First</option>
            <option value="Second">Second</option>  
            <option value="Summer">Summer</option>  
      </select>-->
          <!-- <input class="form-control input-sm" id="Semester" name="Semester" placeholder="Prerequisite" 
          type="hidden" value="First"> -->
           <!--     </div>
              </div>
            </div>
      -->

       <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for="idno"></label>

                <div class="col-md-8">
                  <button class="btn btn-default" name="savecourse" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
                 <!-- <button class="btn btn-default" name="saveandnewcourse" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save and Add new</button> -->
                </div>
              </div>
      </div>

        
    </fieldset> 

            
  </form>
<!--End of container-->