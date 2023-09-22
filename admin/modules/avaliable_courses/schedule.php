<?php 
require_once ("../../../includes/initialize.php");

if(isset($_POST['schedule'])){
    global $mydb;
    $id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';
    if(!empty($_POST['favorite_pet'])){
        if(count($_POST['favorite_pet'])==2){
            $firstdate;
            $firsttime;
            $seconddate;
            $secondtime;
            $firstcol;
            $secondcol;
            $a = array($_POST['favorite_pet']);
            //  echo $_POST['favorite_pet'][0] ;

            switch($_POST['favorite_pet'][0]){
                case 1:
                    $firstdate = "monday";
                    $firsttime = "2:30 local";
                    $firstcol= "morning_1";
                    break;
                case 2:
                    $firstdate = "tusday";
                    $firsttime = "2:30 local";
                    $firstcol= "morning_2";
                        break;
                case 3:
                    $firstdate = "wednesday";
                    $firsttime = "2:30 local";
                    $firstcol= "morning_3";
                    break; 
                case 4:
                     $firstdate = "thursday";
                    $firsttime = "2:30 local";
                    $firstcol= "morning_4";
                    break;
                case 5:
                     $firstdate = "firday";
                     $firsttime = "2:30 local";
                     $firstcol= "morning_5";
                     break;  
                case 6:
                     $firstdate = "saturday";
                     $firsttime = "2:30 local";
                     $firstcol= "morning_6";
                    break;
                case 7:
                        $firstdate = "monday";
                        $firsttime = "4:30 local";
                        $firstcol= "morning_7";
                        break;
                case 8:
                        $firstdate = "tusday";
                        $firsttime = "4:30 local";
                        $firstcol= "morning_8";
                            break;
                case 9:
                        $firstdate = "wednesday";
                        $firsttime = "4:30 local";
                        $firstcol= "morning_9";
                        break; 
                case 10:
                         $firstdate = "thursday";
                        $firsttime = "4:30 local";
                        $firstcol= "morning_10";
                        break;
                case 11:
                         $firstdate = "firday";
                         $firsttime = "4:30 local";
                         $firstcol= "morning_11";
                         break;  
                case 12:
                         $firstdate = "saturday";
                         $firsttime = "4:30 local";
                         $firstcol= "morning_12";
                        break; 
                        
                case 13:
                            $firstdate = "monday";
                            $firsttime = "7:30 local";
                            $firstcol= "afternoon_1";
                         break;
                        case 14:
                            $firstdate = "tusday";
                            $firsttime = "7:30 local";
                            $firstcol= "afternoon_2";
                                break;
                        case 15:
                            $firstdate = "wednesday";
                            $firsttime = "7:30 local";
                            $firstcol= "afternoon_3";
                            break; 
                        case 16:
                             $firstdate = "thursday";
                            $firsttime = "7:30 local";
                            $firstcol= "afternoon_4";
                            break;
                        case 17:
                             $firstdate = "firday";
                             $firsttime = "7:30 local";
                             $firstcol= "afternoon_5";
                             break;  
                        case 18:
                             $firstdate = "saturday";
                             $firsttime = "7:30 local";
                             $firstcol= "afternoon_6";
                            break;
                        case 19:
                                $firstdate = "monday";
                                $firsttime = "9:30 local";
                                $firstcol= "afternoon_7";
                                break;
                        case 20:
                                $firstdate = "tusday";
                                $firsttime = "9:30 local";
                                $firstcol= "afternoon_8";
                                    break;
                        case 21:
                                $firstdate = "wednesday";
                                $firsttime = "9:30 local";
                                $firstcol= "afternoon_9";
                                break; 
                        case 22:
                                 $firstdate = "thursday";
                                $firsttime = "9:30 local";
                                $firstcol= "afternoon_10";
                                break;
                        case 23:
                                 $firstdate = "firday";
                                 $firsttime = "9:30 local";
                                 $firstcol= "afternoon_11";
                                 break;  
                        case 24:
                                 $firstdate = "saturday";
                                 $firsttime = "9:30 local";
                                 $firstcol= "afternoon_12";
                                break;
                                default:
                                  break;                        

            }

            switch($_POST['favorite_pet'][1]){
                case 1:
                    $seconddate = "monday";
                    $secondtime = "2:30 local";
                    $secondcol= "morning_1";
                    break;
                case 2:
                    $seconddate = "tusday";
                    $secondtime = "2:30 local";
                    $secondcol= "morning_2";
                        break;
                case 3:
                    $seconddate = "wednesday";
                    $secondtime = "2:30 local";
                    $secondcol= "morning_3";
                    break; 
                case 4:
                     $seconddate = "thursday";
                    $secondtime = "2:30 local";
                    $secondcol= "morning_4";
                    break;
                case 5:
                     $seconddate = "firday";
                     $secondtime = "2:30 local";
                     $secondcol= "morning_5";
                     break;  
                case 6:
                     $seconddate = "saturday";
                     $secondtime = "2:30 local";
                     $secondcol= "morning_6";
                    break;
                case 7:
                        $seconddate = "monday";
                        $secondtime = "4:30 local";
                        $secondcol= "morning_7";
                        break;
                case 8:
                        $seconddate = "tusday";
                        $secondtime = "4:30 local";
                        $secondcol= "morning_8";
                            break;
                case 9:
                        $seconddate = "wednesday";
                        $secondtime = "4:30 local";
                        $secondcol= "morning_9";
                        break; 
                case 10:
                         $seconddate = "thursday";
                        $secondtime = "4:30 local";
                        $secondcol= "morning_10";
                        break;
                case 11:
                         $seconddate = "firday";
                         $secondtime = "4:30 local";
                         $secondcol= "morning_11";
                         break;  
                case 12:
                         $seconddate = "saturday";
                         $secondtime = "4:30 local";
                         $secondcol= "morning_12";
                        break; 
                        
                case 13:
                            $seconddate = "monday";
                            $secondtime = "7:30 local";
                            $secondcol= "afternoon_1";
                         break;
                        case 14:
                            $seconddate = "tusday";
                            $secondtime = "7:30 local";
                            $secondcol= "afternoon_2";
                                break;
                        case 15:
                            $seconddate = "wednesday";
                            $secondtime = "7:30 local";
                            $secondcol= "afternoon_3";
                            break; 
                        case 16:
                             $seconddate = "thursday";
                            $secondtime = "7:30 local";
                            $secondcol= "afternoon_4";
                            break;
                        case 17:
                             $seconddate = "firday";
                             $secondtime = "7:30 local";
                             $secondcol= "afternoon_5";
                             break;  
                        case 18:
                             $seconddate = "saturday";
                             $secondtime = "7:30 local";
                             $secondcol= "afternoon_6";
                            break;
                        case 19:
                                $seconddate = "monday";
                                $secondtime = "9:30 local";
                                $secondcol= "afternoon_7";
                                break;
                        case 20:
                                $seconddate = "tusday";
                                $secondtime = "9:30 local";
                                $secondcol= "afternoon_8";
                                    break;
                        case 21:
                                $seconddate = "wednesday";
                                $secondtime = "9:30 local";
                                $secondcol= "afternoon_9";
                                break; 
                        case 22:
                                 $seconddate = "thursday";
                                $secondtime = "9:30 local";
                                $secondcol= "afternoon_10";
                                break;
                        case 23:
                                 $seconddate = "firday";
                                 $secondtime = "9:30 local";
                                 $secondcol= "afternoon_11";
                                 break;  
                        case 24:
                                 $seconddate = "saturday";
                                 $secondtime = "9:30 local";
                                 $secondcol= "afternoon_12";
                                break;
                                default:
                                  break;                        

            }
            // echo "first class date ".$firstdate." first class time ".$firsttime."<br>";
            // echo "second class date ".$seconddate." second class time ".$secondtime."<br>";
            // echo "FIRST COLOMN ".$firstcol." second COLOMN ".$secondcol."<br>";

               $mydb->setQuery("SELECT room FROM `unity_avaliable_courses` WHERE `id` ='{$id}'");
               $cur = $mydb->executeQuery();
                $row_count = $mydb->num_rows($cur);
                if ($row_count==1)
                {
                    $room_info = $mydb->loadSingleResult(); 
                    
                           
                        $mydb->setQuery("SELECT * FROM `unity_rooms` WHERE `room_name` = '{$room_info->room}'");
                        $cur = $mydb->executeQuery();
                        $row_count = $mydb->num_rows($cur);
                        if($row_count==1)
                        {
                            $room_info = $mydb->loadSingleResult();       
                            $sch = new scheduling();
                            $sch->first_class_date = $firstdate;
                            $sch->first_class_time = $firsttime;
                            $sch->second_class_date = $seconddate;
                            $sch->second_class_time = $secondtime;
                            // $room_info = $mydb->loadSingleResult(); 
                            if($sch->update($id)){
                                $sql = "UPDATE `unity_rooms` SET `{$firstcol}` = 1, `{$secondcol}` = 1 where `id` ={$room_info->id} ";
                                // echo $sql;
                                $mydb->setQuery($sql);
                                $mydb->executeQuery();
                                message("couses id = ".$id." has been scheduled successfully!","success");
                                redirect('index.php');   

                            }
                            else{
                                message("couses id = ".$id." doesnt scheduled successfully!","error");
                                redirect('index.php'); 
                            }
                        
                        }
                        else{
                            message("couses id = ".$id." doesnt scheduled successfully!","error");
                                redirect('index.php'); 

                        }
                    
                }
                else{
                    message("couses id = ".$id." doesnt scheduled successfully!","error");
                            redirect('index.php'); 

                }
        }
        elseif(count($_POST['favorite_pet'])> 2 || count($_POST['favorite_pet']) < 2 ){
            message("select only two check boxes!","error");
            redirect('index.php?view=schedule&id='.$id); 
            
        }

    }
    else{
        message("select two check boxes!","error");
        redirect('index.php?view=schedule&id='.$id); 

    }
}

else{
    $id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

              $mydb->setQuery("SELECT * FROM `unity_avaliable_courses` WHERE `id` ='{$id}'");
               $cur = $mydb->executeQuery();
                $row_count = $mydb->num_rows($cur);
                if ($row_count==1)
                {
                    $room_info = $mydb->loadSingleResult(); 
                    if($room_info->first_class_date !='' OR $room_info->first_class_time !='' OR
                    $room_info->second_class_date !='' OR $room_info->second_class_date !=''){
                        message("the course are already scheduled!","info");
                        redirect('index.php'); 
                        return;

                    }
                    
                }




        ?>

        <h3 align="center" style="color:white;">List of AVALABLE TIME</h3>
        <?php echo '<form method="post" action="schedule.php?id='.$id.' ">'; ?>
            <fieldset>  
    <table id="example" class="table table-striped border table-bordered table-hover table-sm " cellspacing="0">
       <thead class="">
            <tr class="h5">
                <th>NAME.</th>
                <th>MONDAY</th>
                <th>TUESDAY</th>
                <th>WEDNESDAY</th>
                <th>THURSDAY</th>
                <th>FIRDAY</th>
                <th>SATURDAY</th>
                <!-- <th>SUNDAY</th>               -->
            </tr>   
       </thead>
       <tbody>
            <?php  
                $id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

                $mydb->setQuery("SELECT room FROM `unity_avaliable_courses` WHERE `id` ='{$id}'");
                $cur = $mydb->executeQuery();
                $row_count = $mydb->num_rows($cur);
                if ($row_count==1)
                {
                    $room_info = $mydb->loadSingleResult(); 
                    $mydb->setQuery("SELECT * FROM `unity_rooms` WHERE `room_name` = '{$room_info->room}'");
                    $cur = $mydb->executeQuery();
                    $row_count = $mydb->num_rows($cur);
                    if($row_count==1)
                    {
                        $room_info = $mydb->loadSingleResult(); 
                        $start = 1;
                        $end= 7;
                        for($i=1;$i<5;$i++){
                            echo '<tr>';                       
                            switch($i){         
                                case 1:
                                    echo '<td >morning_1</td>';
                                    break 1;
                                    case 2:
                                        echo '<td >morning_2</td>';
                                        break 1;
                                        case 3:
                                            echo '<td >afternoon_1</td>';
                                            break 1;
                                            case 4:
                                                echo '<td >afternoon_2</td>';
                                                break 1;
                                                default:
                                                break;
                            }
                            for($x=$start; $x<$end; $x++){
                                switch($x){         
                                    case 1:
                                        if($room_info->morning_1==0){
                                            // echo '<td >'.$room_info->morning_1.'</td>';
                                            echo '<td ><input type="checkbox" name="favorite_pet[]" value="1"></td>';
                                        }
                                        else{
                                            echo '<td >anava</td>';


                                        }
                                    break 1; 

                                    case 2:
                                        if($room_info->morning_2==0){
                                            // echo '<td >'.$room_info->morning_2.'</td>';
                                            echo '<td ><input type="checkbox" name="favorite_pet[]" value="2"></td>';

                                        }
                                        else{
                                            echo '<td >anava</td>';


                                        }
                                    break 1;

                                    case 3:
                                        if($room_info->morning_3==0){
                                            // echo '<td >'.$room_info->morning_3.'</td>';
                                            echo '<td ><input type="checkbox" name="favorite_pet[]" value="3"></td>';

                                        }
                                        else{

                                            echo '<td >anava</td>';

                                        }
                                     break 1;

                                    case 4:
                                        if($room_info->morning_4==0){
                                            // echo '<td >'.$room_info->morning_4.'</td>';
                                            echo '<td ><input type="checkbox" name="favorite_pet[]" value="4"></td>';


                                        }
                                        else{
                                            echo '<td >anava</td>';


                                        }
                                    break 1;

                                    case 5:
                                        if($room_info->morning_5==0){
                                            // echo '<td >'.$room_info->morning_5.'</td>';
                                            echo '<td ><input type="checkbox" name="favorite_pet[]" value="5"></td>';


                                        }
                                        else{
                                            echo '<td >anava</td>';


                                        }
                                    break 1;

                                    case 6:
                                         if($room_info->morning_6==0){
                                            echo '<td ><input type="checkbox" name="favorite_pet[]" value="6"></td>';

                                            // echo '<td >'.$room_info->morning_6.'</td>';

                                        }
                                        else{
                                            echo '<td >anava</td>';


                                        }
                                    break 1;

                                     case 7:
                                        if($room_info->morning_7==0){
                                            echo '<td ><input type="checkbox" name="favorite_pet[]" value="7"></td>';

                                            // echo '<td >'.$room_info->morning_7.'</td>';

                                        }
                                        else{
                                            echo '<td >anava</td>';


                                        }
                                     break 1;
                                     case 8:
                                        if($room_info->morning_8==0){
                                            echo '<td ><input type="checkbox" name="favorite_pet[]" value="8"></td>';

                                            // echo '<td >'.$room_info->morning_8.'</td>';

                                        }
                                        else{
                                            echo '<td >anava</td>';


                                        }
                                     break 1;
                                    case 9:
                                        if($room_info->morning_9==0){
                                            echo '<td ><input type="checkbox" name="favorite_pet[]" value="9"></td>';

                                            // echo '<td >'.$room_info->morning_9.'</td>';

                                        }
                                        else{
                                            echo '<td >anava</td>';


                                        }
                                     break 1;
                                    case 10:
                                        if($room_info->morning_10==0){
                                            echo '<td ><input type="checkbox" name="favorite_pet[]" value="10"></td>';

                                            // echo '<td >'.$room_info->morning_10.'</td>';


                                        }
                                        else{
                                            echo '<td >anava</td>';


                                        }
                                       break 1;
                                    case 11:
                                        if($room_info->morning_11==0){
                                            echo '<td ><input type="checkbox" name="favorite_pet[]" value="11"></td>';

                                            // echo '<td >'.$room_info->morning_11.'</td>';

                                        }
                                        else{
                                            echo '<td >anava</td>';


                                        }
                                     break 1;
                                    case 12:
                                        if($room_info->morning_12==0){
                                            echo '<td ><input type="checkbox" name="favorite_pet[]" value="12"></td>';

                                            // echo '<td >'.$room_info->morning_12.'</td>';

                                        }
                                        else{
                                            echo '<td >anava</td>';


                                        }
                                    break 1;
                                    case 13:
                                        if($room_info->afternoon_1==0){
                                            echo '<td ><input type="checkbox" name="favorite_pet[]" value="13"></td>';

                                            // echo '<td >'.$room_info->afternoon_1.'</td>';

                                        }
                                        else{
                                            echo '<td >anava</td>';


                                        }
                                     break 1;
                                    case 14:
                                            if($room_info->afternoon_2==0){
                                                echo '<td ><input type="checkbox" name="favorite_pet[]" value="14"></td>';

                                                // echo '<td >'.$room_info->afternoon_2.'</td>';
                                            }
                                            else{
                                                echo '<td >anava</td>';
    
    
                                            }
                                    break 1;
                                    case 15:
                                        if($room_info->afternoon_3==0){
                                            echo '<td ><input type="checkbox" name="favorite_pet[]" value="15"></td>';

                                        //   echo '<td >'.$room_info->afternoon_3.'</td>';

                                        }
                                        else{
                                            echo '<td >anava</td>';


                                        }
                                   break 1;
                                    case 16:
                                        if($room_info->afternoon_4==0){
                                            echo '<td ><input type="checkbox" name="favorite_pet[]" value="16"></td>';

                                            //  echo '<td >'.$room_info->afternoon_4.'</td>';

                                        }
                                        else{
                                            echo '<td >anava</td>';


                                        }
                                    break 1;
                                    case 17:
                                            if($room_info->afternoon_5==0){
                                                echo '<td ><input type="checkbox" name="favorite_pet[]" value="17"></td>';

                                                // echo '<td >'.$room_info->afternoon_5.'</td>';

                                            }
                                            else{
                                                echo '<td >anava</td>';
    
    
                                            }
                                    break 1; 
                                    case 18:
                                            if($room_info->afternoon_6==0){
                                                echo '<td ><input type="checkbox" name="favorite_pet[]" value="18"></td>';

                                                // echo '<td >'.$room_info->afternoon_6.'</td>';
                                            }
                                            else{
                                                echo '<td >anava</td>';
    
    
                                            }

                                    break 1;
                                    case 19:
                                            if($room_info->afternoon_7==0){
                                                echo '<td ><input type="checkbox" name="favorite_pet[]" value="19"></td>';

                                                // echo '<td >'.$room_info->afternoon_7.'</td>';

                                            }
                                            else{
                                                echo '<td >anava</td>';
    
    
                                            }

                                    break 1;
                                    case 20:

                                            if($room_info->afternoon_8==0){
                                                echo '<td ><input type="checkbox" name="favorite_pet[]" value="20"></td>';

                                                // echo '<td >'.$room_info->afternoon_8.'</td>';

                                            }
                                            else{
                                                echo '<td >anava</td>';
    
    
                                            }
                                    break 1;
                                     case 21:
                                            if($room_info->afternoon_9==0){
                                                echo '<td ><input type="checkbox" name="favorite_pet[]" value="21"></td>';

                                                // echo '<td >'.$room_info->afternoon_9.'</td>';

                                            }
                                            else{
                                                echo '<td >anava</td>';
    
    
                                            }
                                     break 1;
                                    case 22:
                                            if($room_info->afternoon_10==0){
                                                echo '<td ><input type="checkbox" name="favorite_pet[]" value="22"></td>';

                                                // echo '<td >'.$room_info->afternoon_10.'</td>';

                                            }
                                            else{
                                                echo '<td >anava</td>';
    
    
                                            }
                                    break 1; 
                                    case 23:
                                            if($room_info->afternoon_11==0){
                                                echo '<td ><input type="checkbox" name="favorite_pet[]" value="23"></td>';

                                                // echo '<td >'.$room_info->afternoon_11.'</td>';

                                            }
                                            else{
                                                echo '<td >anava</td>';
    
    
                                            }
                                    break 1;
                                    case 24:
                                        if($room_info->afternoon_12==0){
                                            echo '<td ><input type="checkbox" name="favorite_pet[]" value="24"></td>';

                                            // echo '<td >'.$room_info->afternoon_12.'</td>';

                                        }
                                        else{
                                            echo '<td >anava</td>';


                                        }
                                    break 1;
                                    default:
                                    break;
                                }
                            }
                            $start +=6;
                            $end +=6;
                            echo '</tr>'; 
                        }                                  
                    }
                    else{
                        message("couses id = ".$id." doesnt scheduled successfully!","error");
                                redirect('index.php'); 
    
                    }
                }
                else{
                    message("couses id = ".$id." doesnt scheduled successfully!","error");
                            redirect('index.php'); 

                }
              
            ?>
       </tbody>
    </table>
     </fieldset>  
     <div class="btn-group">
         <button type="submit" class="btn btn-default m-2" name="schedule"><span class="glyphicon glyphicon-trash"></span>Schedule</button>								
	 </div>
     
    </form>
<?php } ?>





