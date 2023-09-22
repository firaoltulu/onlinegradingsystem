<?php 
require_once ("../../../includes/initialize.php");
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;
	
	case 'delete' :
	doDelete();
	break;


	}
function doInsert(){
	global $mydb;		
if (isset($_POST['save'])){

	if ($_POST['rmname'] == "" OR $_POST['roomdesc'] == "") {
		message("All field is required!", "error");
		redirect('index.php?view=add');

	}else{
		
		$room = new Room();
		// $rmid		= $_POST['roomid'];
		$rmname     = $_POST['rmname'];
		$rmdesc 	= $_POST['roomdesc'];

		$res = $room->find_all_room($rmname);
				
		if ($res >=1) {
			message("Room name already exist!","error");
			redirect('index.php?view=add');

		}else{
			if($rmdesc =="1"){
				$type = 1;
			}
			else{
				$type = 0;
			}
			
			$room->room_name = $rmname;
			$room->special = $type;

			 $istrue = $room->create(); 
			 if ($istrue == 1){
			 
			 	message("New [". $rmname ."] Room created successfully!","success");
				redirect('index.php');

			 }
			 else{
				message("New  Room creating failed try again!","error");
				redirect('index.php');

			 }
		}	 

		
	}
}
}



function doEdit(){
	global $mydb;
	$rmid = $_GET['id'];
	

	if (isset($_POST['save'])){

		if ($_POST['rmname'] == "" OR $_POST['roomdesc'] == "") {
			$message= "All field is required!";
			redirect('index.php?view=edit&id='.$rmid);

		}else{
			$mydb->setQuery("SELECT * FROM `unity_rooms`");
			$cur = $mydb->loadResultList();
			foreach($cur as $result){
				if($result->room_name == trim($_POST['rmname']) && $result->id != $rmid ){
					$message= "room with the ".$_POST['rmname']." name exist!";
					message($message,"error");
					redirect('index.php?view=edit&id='.$rmid);
					return;
				}
				
			}

			$room = new Room();
			// $rmid		= $_POST['roomid'];
			$rmname     = $_POST['rmname'];
			$rmdesc 	= $_POST['roomdesc'];
			if($rmdesc =="1"){
				$type = 1;
			}
			else{
				$type = 0;
			}
					
			// $room->id	 = $rmid;
			$room->room_name = $rmname;
			$room->special = $type;
			$room->update($rmid);

			$message = $rmname. " has updated successfully!";
			redirect('index.php');
		}
}
}

function doDelete(){
		
	  @$id=$_POST['selector'];
	  $key = count($id);
	  if($key==0){
		message("Select room first to be deleted!","info");
		redirect('index.php');
		return;
		

	  }
	  else{
	//multi delete using checkbox as a selector
	
		for($i=0;$i<$key;$i++){

			$room = new Room();
			$room->delete($id[$i]);
		}

		message("Room(s) already Deleted!","info");
		redirect('index.php');
	}

}

?>