<?php

$rmid = $_GET['id'];
$room = new Room();
$object = $room->single_room($rmid);

?>
<?php
    check_message();
      
    ?>

 <form class="form-horizontal well span6" action="controller.php?action=edit&id=<?php echo $rmid;?>" method="POST">

          <fieldset>
            <legend>Edit Room</legend>
                              
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "rmname">Room Name</label>

                      <div class="col-md-8">
                        <input name="roomid" type="hidden" value="<?php echo $object->id;?>">
                         <input class="form-control input-sm" id="rmname" name="rmname" placeholder=
                            "Room Name" type="text" value="<?php echo $object->room_name;?>">
                      </div>
                    </div>
                  </div>

             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for="roomdesc">Room Type</label>

                      <div class="col-md-8">
                        <select class="form-control input-sm" id="roomdesc" name="roomdesc" placeholder=
                            "Room Type" type="text">
                            <option value="1">lab</option>
                            <option value="2">class</option>
                        </select>
                      </div>
                    </div>
              </div>
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for="idno"></label>

                      <div class="col-md-8">
                        <button class="btn btn-primary" name="save" type="submit" >Save</button>
                      </div>
                    </div>
                  </div>

              
          </fieldset> 
          
        </form>
        </div><!--End of well-->

        </div><!--End of container-->
      