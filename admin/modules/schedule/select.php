<?php
$mydb->setQuery("SELECT * FROM `unity_schedule`");
$cur = $mydb->executeQuery();
$row_count = $mydb->num_rows($cur);   
if ($row_count == 1){
    $DB_NAME = $mydb->loadSingleResult();
}
?>

<section class="features-icons bg-light text-center">
<div class="container ml-5">
    <div class="row mt-5 ml-5 " >
      <div class="card border rounded border-info col-lg-5 mt-3 ml-5" id="dev1">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-5">
                <div class="features-icons-icon d-flex"><i class="bi-window m-auto text-primary"></i></div>
                <h3>Scheduling</h3>
                <h6>registration start date :<?php echo  $DB_NAME->registration_begin_day; ?> </h6>
                <h6>registration end date : <?php echo  $DB_NAME->registration_end_day; ?></h6>
                <h6>class start date :  <?php echo  $DB_NAME->class_start_day; ?></h6>
                <h6>final start date :  <?php echo  $DB_NAME->final_start_day; ?></h6>
                <ul class="list-group  mb-0">
                  <li class="list-group-item"><a href="index.php?view=sched"><span class="glyphicon glyphicon-plus-sign"></span>schedule</a></li>
                </ul>
            </div>
      </div>
    </div>
</div>