
<section class="features-icons bg-light text-center">
<?php 
echo '<div class="container">';
echo '<div class="row" >';

$mydb->setQuery("SELECT * FROM `unity_departments`");
		loadresult();
        function loadresult(){
            global $mydb;
            $cur = $mydb->loadResultlist();					
				foreach ($cur as $result) {
                    echo '<div class="card border rounded border-info col-lg-5 mt-3 ml-5" id="dev1">';
                    echo '<div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">';
                    echo '<div class="features-icons-icon d-flex"><i class="bi-window m-auto text-primary"></i></div>';
                    echo '<h3>'.$result->department_name.'</h3>';
                    $mydb->setQuery("SELECT `id`,CONCAT( `first_name`, '  ' , `middle_name`, '  ' , `last_name`) AS `name` FROM `teachers` where `id`=".$result->head_id);
                        $cur = $mydb->executeQuery();
                        $row_count = $mydb->num_rows($cur);   
                        if ($row_count == 1){
                            $DB_NAME = $mydb->loadSingleResult();
                            echo '<h6><a href="index.php?view=head&head_id='.$DB_NAME->id.'">Head Name '.$DB_NAME->name.'</a></h6>';
                        }
                    echo '<ul class="list-group  mb-0">';
                    echo '<li class="list-group-item"><a href="index.php?view=students&department_id='.$result->id.'"><span class="glyphicon glyphicon-plus-sign"></span>students</a></li>';
                    echo '<li class="list-group-item"><a href="index.php?view=semester&department_id='.$result->id.'"><span class="glyphicon glyphicon-plus-sign"></span>avaliable courses</a></li>';
                    echo '<li class="list-group-item"><a href="index.php?view=allcourses&table_name='.$result->table_name.'"><span class="glyphicon glyphicon-plus-sign"></span>all courses</a></li>';
                    echo '<li class="list-group-item"><a href="index.php?view=viewfaculty&department_id='.$result->id.'"><span class="glyphicon glyphicon-plus-sign"></span>all Faculty</a></li>';

                    // echo '<li class="list-group-item"><a href="index.php?view=faculty&department_id='.$result->id.'"><span class="glyphicon glyphicon-plus-sign"></span>add Faculty</a></li>';
                    echo '<li class="list-group-item"><a href="index.php?view=assign_head&department_id='.$result->id.'"><span class="glyphicon glyphicon-plus-sign"></span>Assign head</a></li>';
                    echo '</ul>';
                    // echo '<p class="lead mb-0">This theme will look great on any device, no matter the size!</p>';
                    echo '</div>';
                    echo '</div>';

                }
                ;
                echo '<div class="card border rounded border-info col-lg-5 mt-3 ml-5" h-25 id="dev1">';
                echo '<div class="features-icons-item mx-auto mb-5 mb-lg-0 h-25 mb-lg-3">';
                echo '<div class="features-icons-icon d-flex"><i class="bi-window m-auto text-primary"></i></div>';
                  echo '<li class="list-group-item"><a href="index.php?view=add_department&department_id='.$result->id.'"><span class="glyphicon glyphicon-plus-sign"></span>ADD ANOTHER DEPARTMENTS</a></li>';

                echo '</div>';
                echo '</div>';

                // echo '<li class="list-group-item"><a href="index.php?view=add_department&department_id='.$result->id.'"><span class="glyphicon glyphicon-plus-sign"></span>Assign head</a></li>';

        }



?>

                
                      
                           
                </div>
            </div>

</section>
