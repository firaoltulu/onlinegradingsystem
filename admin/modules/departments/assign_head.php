<?php 
require_once ("../../../includes/initialize.php");
if (isset($_POST['assign'])) { 
    
    $department_id = (isset($_GET['department_id']) && $_GET['department_id'] != '') ? $_GET['department_id'] : '';
    echo $department_id;
    $mydb->setQuery("SELECT * FROM `unity_departments` WHERE `id` ='{$department_id}'");
    $cur = $mydb->executeQuery();
    $row_count = $mydb->num_rows($cur);   
    if ($row_count == 1){
        $teach = new Teacher();
        $DB_NAME = $mydb->loadSingleResult();
        $teach->position = "teacher";
        $teach->update( $DB_NAME->head_id);
        $sql = "UPDATE  `unity_departments` SET `head_id` = ".trim($_POST['head_assign'])." where `id`= {$department_id}";
        $mydb->setQuery($sql);
        $cur = $mydb->executeQuery();
       
        $teach->position = "head";
        $teach->update(trim($_POST['head_assign']));

        message($DB_NAME->department_name." head has been assigned succesfully!","success");
        redirect('index.php'); 
        
    }
    else{
        
    }

}

else{
    $department_id = (isset($_GET['department_id']) && $_GET['department_id'] != '') ? $_GET['department_id'] : '';
        $mydb->setQuery("SELECT * FROM `unity_departments` WHERE `id` ='{$department_id}'");
        $cur = $mydb->executeQuery();
        $row_count = $mydb->num_rows($cur);   
        if ($row_count == 1){
            $DB_NAME = $mydb->loadSingleResult();
            $mydb->setQuery("SELECT `id`, CONCAT( `first_name`, '  ' , `middle_name`, '  ' , `last_name`) AS `name`, 
            `gender`, `field_of_study`, `level_of_study`, `age`, `department` FROM teachers");
            $teachers = $mydb->loadResultlist();

            echo '<form class="form-horizontal well span4" action="assign_head.php?department_id='.$department_id.'" method="POST">';      
            echo '<fieldset>';
            echo '<legend style="color:white;">Assign head To '.$DB_NAME->department_name.'</legend>';  
            echo '<div class="form-row col-md-6">';
            echo '<label class="mx-auto mt-2">Assign head</label>';
            echo '<select name="head_assign" class="form-control" required="required">';
            echo '<option> </option>';

            foreach($teachers  as $teacher){
                if($teacher->department==$DB_NAME->department_name){
                echo '<option value="'.$teacher->id.'">'.$teacher->name.'</option>';
                }
            }
            echo '</select>';
            echo '</div>';    
            echo'<div class="form-group">
                    <div class="col-md-8">
                        <label class="col-md-4 control-label" for="idno"></label>

                        <div class="col-md-8">
                        <button class="btn btn-default" name="assign" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span>Assign</button>
                        </div>
                    </div>
                </div>';
            echo '</form>';

        }
        else{
            echo "not";
        }
}
?>































