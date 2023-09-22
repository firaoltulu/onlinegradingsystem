<form class="form-horizontal well span4" action="controller.php?action=add" method="POST">


          <fieldset>
            <legend>New Room</legend>
                              
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "rmname">Room Name</label>

                      <div class="col-md-8">
                        <input name="roomid" type="hidden" value="">
                         <input class="form-control input-sm" id="rmname" name="rmname" placeholder=
                            "Room Name" type="text" value="">
                      </div>
                    </div>
                  </div>

             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "roomdesc">Room Type</label>

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
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                        <button class="btn btn-default" name="save" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
                      </div>
                    </div>
                  </div>

              
          </fieldset> 

       
          
        </form>
      

        </div><!--End of container-->