<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="plugins/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="plugins/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Department head
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="<?php echo WEB_ROOT; ?>plugins/assets/css/bootstrap.min.css" rel="stylesheet" /> 
  <link href="<?php echo WEB_ROOT; ?>plugins/assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />

</head>
<style type="text/css">
  table {
    font-size: 9px;
  }
    table tr td{
      font-size: 12px;
    }
</style>
  <?php
 confirm_logged_in();
  ?>
</h>
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="blue">
      <P><?php echo WEB_ROOT; ?></P>
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo" style="text-align: center;"> 
        <a href="<?php echo WEB_ROOT; ?>admin/index.php" class="simple-text logo-normal">
        <?php 
        switch($_SESSION['POSITION']){
          case "head":
           echo ' <P>Department Head</P>';
          break;
          case "admin":
            echo ' <P>Unity Adminstrator</P>';
           break;
           default:
           echo ' <P>Unity Teacher</P>';
           break;

        }
         
        ?>
                 
        </a>
      </div>

      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">

            <li class="<?php echo (currentpage_admin() == '') ? "active" : false;?>">
              <a href="<?php echo WEB_ROOT; ?>admin/index.php"> 
                
                <p>Home</p>
              </a>
            </li> 
            
            <?php  if($_SESSION['POSITION']=="head"){
              ?>
              <!-- all students -->
              
                  <li class="<?php echo (currentpage_admin() == 'student') ? "active" : false;?> nav-item dropdown">
                      
                      <a class="dropdown-item" href="<?php echo WEB_ROOT; ?>admin/modules/student/index.php?view=list&year=1">

                        <P>Students</P>
                      </a>                  
                  </li>

                  <!-- all courses -->
                  <li class="<?php echo (currentpage_admin() == 'subject') ? "active" : false;?>">
                    <a class="dropdown-item" href="<?php echo WEB_ROOT; ?>admin/modules/subject/index.php">
                                                
                    <P>ALL COURSES</P>
                      
                    </a>
                  </li>
                  <!-- Teachers -->
                  <li  class="<?php echo (currentpage_admin() == 'Teacher') ? "active" : false;?>">
                    <a class="dropdown-item" href="<?php echo WEB_ROOT; ?>admin/modules/Teacher/index.php">
                      
                        <p>Teachers</p>  
                    </a>
                  </li>
                  <li class="<?php echo (currentpage_admin() == 'avaliable_courses') ? "active" : false;?>">
                    <a class="dropdown-item" href="<?php echo WEB_ROOT; ?>admin/modules/avaliable_courses/index.php">
                      
                        <p>Avaliable_courses</p>  
                    </a>
                  </li>

            <?php }  ?>

            <?php  if($_SESSION['POSITION']=="admin"){
              ?>
                  <!-- <li class="<?php echo (currentpage_admin() == 'student') ? "active" : false;?> nav-item dropdown">
                      <a class="nav-link dropdown-toggle rounded" id="navbarDropdownMenuLink" 
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" 
                        data-bs-toggle="collapse">
                        <span>Departments</span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo WEB_ROOT; ?>admin/modules/student/index.php?view=list&year=1">1st year</a>
                        <a class="dropdown-item" href="<?php echo WEB_ROOT; ?>admin/modules/student/index.php?view=list&year=2">2st year</a>
                        <a class="dropdown-item" href="<?php echo WEB_ROOT; ?>admin/modules/student/index.php?view=list&year=3">3st year</a>
                        <a class="dropdown-item" href="<?php echo WEB_ROOT; ?>admin/modules/student/index.php?view=list&year=4">4st year</a>
                      </div>
                        
                  </li> -->

                  <!-- all courses -->
                  <li class="<?php echo (currentpage_admin() == 'departments') ? "active" : false;?>">
                    <a class="dropdown-item" href="<?php echo WEB_ROOT; ?>admin/modules/departments/index.php">
                                                
                    <P>Departments</P>
                      
                    </a>
                  </li>
                 
                  <li class="<?php echo (currentpage_admin() == 'schedule') ? "active" : false;?>">
                    <a class="dropdown-item" href="<?php echo WEB_ROOT; ?>admin/modules/schedule/index.php">
                      
                        <p>Schedule</p>  
                    </a>
                  </li>
                  <li class="<?php echo (currentpage_admin() == 'room') ? "active" : false;?>">
                    <a class="dropdown-item" href="<?php echo WEB_ROOT; ?>admin/modules/room/index.php">
                      
                        <p>room</p>  
                    </a>
                  </li>
                  


            <?php }  ?>
            
            <?php  if($_SESSION['POSITION']=="head" || $_SESSION['POSITION']=="teacher"){
              ?>

                  <li class="<?php echo (currentpage_admin() == 'teacher_courses') ? "active" : false;?>">
                      <a class="dropdown-item" href="<?php echo WEB_ROOT; ?>admin/modules/teacher_courses/index.php">
                          <p>ASSIGN_COURSES</p>  
                      </a>
                  </li>             
             <?php }  ?>
               
        </ul> 
      </div>
    </div>

    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-sm navbar-transparent bg-primary navbar-absolute" data-color="yellow">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#">Unity university Adama Campus</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
              <!-- <form class="form-inline">
                <input class="form-control mr-sm-4" type="search" placeholder="Search" aria-label="Search">
               
               </form> -->
            <ul class="navbar-nav">
    
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_single-02"></i>
                 
                </a>
                <div class="dropdown-menu dropdown-menu-right text-white bg-dark" aria-labelledby="navbarDropdownMenuLink"> 
                  <?php  ?> 
                    <a class="dropdown-item " href="<?php echo WEB_ROOT; ?>admin/modules/inst_front/index.php?view=prof">
                      Profile 
                    </a> 

                <?php  ?>
                  <a class="dropdown-item " href="<?php echo WEB_ROOT; ?>admin/logout.php">Logout</a>
                </div>
              </li> 
            </ul>
          </div>
        </div>
      </nav>
      <div class="panel-header panel-header-sm"></div>

      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div>
            <div>
              <?php check_message(); ?>
              <?php require_once $content;?>
              
            </div>
              </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
     
    </div>

  </div>

     
      <script src="<?php echo WEB_ROOT; ?>plugins/assets/js/core/jquery.min.js"></script>
      <script src="<?php echo WEB_ROOT; ?>plugins/assets/js/core/popper.min.js"></script>
      <script src="<?php echo WEB_ROOT; ?>plugins/assets/js/core/bootstrap.min.js"></script>
      <script src="<?php echo WEB_ROOT; ?>plugins/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
      <script src="<?php echo WEB_ROOT; ?>plugins/assets/js/plugins/chartjs.min.js"></script>   
      <script src="<?php echo WEB_ROOT; ?>plugins/assets/js/plugins/bootstrap-notify.js"></script> 
      <script src="<?php echo WEB_ROOT; ?>plugins/assets/demo/demo.js"></script> 
      <script src="<?php echo WEB_ROOT; ?>js/popover.js"></script>
      <script type="text/javascript" src="<?php echo WEB_ROOT; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
      <script type="text/javascript" src="<?php echo WEB_ROOT; ?>js/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>       
     
<script>
  function grad(id){
    var name=document.firform.id.value;
    if(name==0){

    }
    else{
      name = parseInt(name);
      var f =id.charAt(0);
       f += "total";
      var total=document.firform.f.value; 
      var n = parseInt(total) + name;
      document.firform.f.value =n;
    }
  }

    function checkall(selector)
    {
      if(document.getElementById('chkall').checked==true)
      {
        var chkelement=document.getElementsByName(selector);
        for(var i=0;i<chkelement.length;i++)
        {
          chkelement.item(i).checked=true;
        }
      }
      else
      {
        var chkelement=document.getElementsByName(selector);
        for(var i=0;i<chkelement.length;i++)
        {
          chkelement.item(i).checked=false;
        }
      }
    }

    function enadd(id){
      var tabrow = document.getElementById("dfdf");
      var  y = tabrow.getElementById("td1");
      var x = y.getElementById("in2");
      x.checked =true;
    }

    function fircheck(sel){

        switch(sel){
          case '1':
            window.location = "<?php echo WEB_ROOT; ?>admin/modules/subject/index.php?view=list&year=1";
            break;
          case '2':
            window.location = "<?php echo WEB_ROOT; ?>admin/modules/subject/index.php?view=list&year=2";
            break;
          case '3':
            window.location = "<?php echo WEB_ROOT; ?>admin/modules/subject/index.php?view=list&year=3";     
            break;
            case '4':      
            window.location = "<?php echo WEB_ROOT; ?>admin/modules/subject/index.php?view=list&year=4";
            break;
          default:
          break;   
        }

    }

    function afircheck(sel){
      switch(sel){
          case '1':
            window.location = "<?php echo WEB_ROOT; ?>admin/modules/subject/index.php?view=add&year=1";
            break;
          case '2':
            window.location = "<?php echo WEB_ROOT; ?>admin/modules/subject/index.php?view=add&year=2";
            break;
          case '3':
            window.location = "<?php echo WEB_ROOT; ?>admin/modules/subject/index.php?view=add&year=3";     
            break;
            case '4':      
            window.location = "<?php echo WEB_ROOT; ?>admin/modules/subject/index.php?view=add&year=4";
            break;
          default:
          break;   
        }


    }
    
    function checkNumber(textBox){
          while (textBox.value.length > 0 && isNaN(textBox.value)) {
            textBox.value = textBox.value.substring(0, textBox.value.length - 1)
          }
          textBox.value = trim(textBox.value);
    }
      
      function checkText(textBox)
        {
          var alphaExp = /^[a-zA-Z]+$/;
          while (textBox.value.length > 0 && !textBox.value.match(alphaExp)) {
            textBox.value = textBox.value.substring(0, textBox.value.length - 1)
          }
          textBox.value = trim(textBox.value);
        }
        function calculate(){  

              var first = document.getElementById('first').value; 
              var second = document.getElementById('second').value; 
              var third = document.getElementById('third').value;  
              var fourth = document.getElementById('fourth').value;  

              var totalVal = parseInt(first) + parseInt(second) + parseInt(third) + parseInt(fourth) ;
              document.getElementById('finalave').value = totalVal;
              document.getElementById('finalave').value = Math.round((parseInt(totalVal)/4));  
        }

  </script> 

  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>

  <script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
    var t = $('#example').DataTable( {
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 1
        } ],
        "order": [[ 3, 'asc' ]]
    } );
 
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
     } );
       
  </script>
    
</body>

</html>