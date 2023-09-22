<?php require_once("../includes/initialize.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Unity Faculty Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../plugins/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../plugins/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../plugins/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../plugins/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../plugins/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../plugins/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../plugins/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../plugins/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../plugins/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../plugins/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="../plugins/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
<!-- <?php
//  if (logged_in()) {
// ?>
   <script type="text/javascript">
            window.location = "index.php";
    </script>
<?php //}  ?> -->

<?php
if (isset($_POST['btnsign'])) {
  
    $unid = trim($_POST['unid']);
    $uemail = trim($_POST['uemail']);
    $pass = trim($_POST['pass']);
    $repass = trim($_POST['repass']);
    // $upass = trim($_POST['pass']);   
    //$h_upass = sha1($upass);
   
    if ($unid == '' OR $uemail=='' OR $pass== '' OR $repass=='' ) {
       ?> <script type="text/javascript">
                alert("Invalid Username, Email or Password!");
           </script>
        <?php
        
    }
    elseif($pass != $repass){
        ?> <script type="text/javascript">
               alert("Invalid Password!");
           </script>
        <?php
    }
	else {
        $user = new User();
        
        if($user->sign_up_members($unid)){
            $user->member_id = $unid;
            $user->email =   $uemail ;
            $user->password = $pass;
            if($user->create()){
                $res = $user->AuthenticateUser($uemail, $pass);
                if($res == true){
                    ?>   <script type="text/javascript">
                            //then it will be redirected to home.php
                            window.location = "index.php";
                        </script>
                    <?php                 
                }
                else {
                    ?><script type="text/javascript">
                           alert("Username or Password Not Registered! Contact Your administrator.");
                           window.location = "index.php";
                           </script>
                   <?php
                }

            }
            else {
                echo 'doesnt create';
            }
            
            
        }
        
        else{
            ?><script type="text/javascript">
                alert("The id have already have an account");
                window.location = "signup.php";
                </script>
            <?php
        }
	
    }
}
 else {
    
    $unid="";
    $uemail = "";
    $pass ="";
    $repass="";
    
}

?>
	<div class="limiter">
		<div class="container-login100" style="background-color : rgb(222,122,122); ">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
				  Faculty Sign up
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="signup.php" method="POST">

					<div class="wrap-input100 validate-input" data-validate = "Enter your id">
						<input class="input100" type="number" name="unid" placeholder="Enter Your Id" required>
						<!-- <span class="focus-input100" data-placeholder="&#xe82a;"></span> -->
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter your Email">
						<input class="input100" type="text" name="uemail" placeholder="Enter Your Email" required>
						<!-- <span class="focus-input100" data-placeholder="&#xe82a;"></span> -->
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Enter password">
						<input class="input100" id="pass" type="password" name="pass" placeholder="Enter password" required>
						<!-- <span class="focus-input100" data-placeholder="&#xe82a;"></span> -->
					</div>

					<div class="wrap-input100 validate-input" data-validate="re password">
						<input class="input100" id="repass" type="password" name="repass" placeholder="re Password">
						<!-- <span class="focus-input100" data-placeholder="&#xe80f;"></span> -->
					 </div>

					<div class="container-login100-form-btn m-t-55">
						<button class="btn m-2 btn-secondary" name="btnsign">
							sign_up
						</button>
					</div>

					<div class="container-login100-form-btn m-t-22">
						  <a href="login.php" class="btn btn-link"><span ></span>Login</a>
					</div>    
		
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="../plugins/login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script>
        var pass = document.getElementById("pass"),
            repass = document.getElementById("repass");

        function validatePassword(){
            if(pass.value != repass.value) {
                repass.setCustomValidity("Passwords Don't Match");
            } 
            else {
                repass.setCustomValidity('');
            }
        }

        pass.onchange = validatePassword;
        repass.onkeyup = validatePassword;

    </script>
<!--===============================================================================================-->
	<script src="../plugins/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../plugins/login/vendor/bootstrap/js/popper.js"></script>
	<script src="../plugins/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../plugins/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../plugins/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="../plugins/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../plugins/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../plugins/login/js/main.js"></script>

</body>
</html>