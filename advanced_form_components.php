<!DOCTYPE html PUBLIC "" "">
<html xmlns="">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DUK</title>
</head>
 <link href="img/favicon.png" rel="duk">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-fileupload/bootstrap-fileupload.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-timepicker/compiled/timepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datetimepicker/datertimepicker.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>


  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>

<?php

$host = "localhost";
$user = "root";  //username
$pass = "";  //password
$db   = "proj";    //database

$con = mysqli_connect($host, $user, $pass,$db);


if (isset($_POST['submit'])) 
				{
             
				# code...
					$p_name = $_POST['p_name'];
					$p_price = $_POST['p_price'];
					$p_size = $_POST['p_size'];
					$p_id = $_POST['p_id'];
					$quantity = $_POST['quantity'];
					$catogrey = $_POST['catogrey'];
					$brand = $_POST['brand'];
					
					# creating path of image to upload
					$target = "uploads/" .basename($_FILES['file']['name']) ;
					$filenamee = $_FILES['file']['name'];
					
					
					
	$query2 = "INSERT INTO stock(product_id,qty) VALUES (".$p_id.",".$quantity.")";	
    $query = "INSERT INTO product(product_name,product_price,product_id,product_image,product_size,category,brand) VALUES ('".$p_name."','".$p_price."','".$p_id."','".$filenamee."','".$p_size."','".$catogrey."','".$brand."')";
	
	/*
	         $stmt->bindParam(":p_name", $p_name); 
            $stmt->bindParam(":p_price", $p_price);
            $stmt->bindParam(":p_size", $p_size);
			$stmt->bindParam(":p_id", $p_id);
		
            $stmt->bindParam(":catogrey", $catogrey);
		   $stmt1->bindParam(":brand", $brand); 
			 $stmt->bindParam(":filenamee", $filenamee);
			 	$stmt1 = $con->prepare("INSERT INTO stock(qty) VALUES(:quantity)");
            $stmt->bindParam(":quantity", $quantity);
	*/
				if(mysqli_query($con,$query))
						{
							if(mysqli_query($con,$query2))
							{
								echo '<div class="alert alert-success text-center" role="alert">stock is added.</div>';
							}
							else
								{
									echo '<div class="alert alert-danger text-center" role="alert">'. mysqli_error($con) . '</div>';
								}
						} 
					else
						{
							echo '<div class="alert alert-danger text-center" role="alert">'. mysqli_error($con) . '</div>';
						}

				}
		
		?>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="indexn.php" class="logo"><b>DU<span>K</span></b></a>
      <!--logo end-->
      <div class="nav notify-row navbar-fixed-top"ss id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme">4</span>
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 4 pending tasks</p>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Dashio Admin Panel</div>
                    <div class="percent">40%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Database Update</div>
                    <div class="percent">60%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Product Development</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Payments Sent</div>
                    <div class="percent">70%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                      <span class="sr-only">70% Complete (Important)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">5</span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 5 new messages</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span>
                  <span class="subject">
                  <span class="from">Zac Snider</span>
                  <span class="time">Just now</span>
                  </span>
                  <span class="message">
                  Hi mate, how is everything?
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-divya.jpg"></span>
                  <span class="subject">
                  <span class="from">Divya Manian</span>
                  <span class="time">40 mins.</span>
                  </span>
                  <span class="message">
                  Hi, I need your help with this.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>
                  <span class="subject">
                  <span class="from">Dan Rogers</span>
                  <span class="time">2 hrs.</span>
                  </span>
                  <span class="message">
                  Love your new Dashboard.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-sherman.jpg"></span>
                  <span class="subject">
                  <span class="from">Dj Sherman</span>
                  <span class="time">4 hrs.</span>
                  </span>
                  <span class="message">
                  Please, answer asap.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">7</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 7 new notifications</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Server Overloaded.
                  <span class="small italic">4 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span>
                  Memory #2 Not Responding.
                  <span class="small italic">30 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Disk Space Reached 85%.
                  <span class="small italic">2 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span>
                  New User Registered.
                  <span class="small italic">3 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a  href="login.php" class="logout" >Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="indexx.php"><img src="../project/images/17.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Dua Kainat</h5>
          <li class="mt">
            <a href="indexx.php">
              <i class=""></i>
              <span>Dashboard</span>
              </a>
          </li>
		   <li class="mt">
            <a href="adl.php">
              <i class=""></i>
              <span>PL</span>
              </a>
          </li>
          
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Picture Upload</h3>
        <div class="row mt">
          <!--  DATE PICKERS -->
             <div class="form-group">
                  <label class="control-label col-md-3">Start with years viewMode</label>
                  <div class="col-md-3 col-xs-11">
                    <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-01-2014" class="input-append date dpYears">
                      <input type="text" readonly value="01-01-2014" size="16" class="form-control">
                      <span class="input-group-btn add-on">
                        <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                        </span>
                    
               
                </div>
            
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- row -->
        <!--  TIME PICKERS -->
             
            
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- row -->
        <!--ADVANCED FILE INPUT-->
         <main class="my-form">
		    <div class="cotainer">
		        <div class="row justify-content-center">
		            <div class="col-md-12 wht-bg img-thumbnail">
		                    <div  class="" >
		                       
		                        <div class="card-body">
		                           <form name="my-form" method="post" enctype="multipart/form-data" style="margin-left:20%; margin-top:5%;" align="center">
		                                <div class="form-group row">
		                                    
		                                    <div class="col-md-6">
		                                        <input type="text" id="full_name" class="form-control" name="p_name" placeholder="Product Name">
		                                    </div>
		                                </div>

		                                <div class="form-group row">
		                             
		                                    <div class="col-md-6">
		                                        <input type="text" id="email_address" class="form-control" name="p_price" placeholder="Product Price">
		                                    </div>
		                                </div>

		                                 <div class="form-group row">
		                                    
		                                    <div class="col-md-6">
		                                        <input type="text" id="phone_number" class="form-control" name ="p_size" placeholder="Product Size">
		                                    </div>
		                                </div>
                                        <div class="form-group row">
		                                 
		                                    <div class="col-md-6">
		                                        <input type="number" id="present_address" class="form-control" name ="p_id" placeholder="Product Id">
		                                    </div>
		                                </div>
                                        
                                         <div class="form-group row">
		                                   <div class="col-md-6">
		                                        <input type="number" id="present_address" class="form-control" name ="quantity" placeholder="Product Quantity">
		                                    </div>
		                                </div>
                                         
                                         
                                         <div class="form-group row">
		                                   <div class="col-md-6">
		                                        <input type="text" id="present_address" class="form-control" name ="catogrey" placeholder="Product Category">
		                                    </div>
		                                </div>

                                         
                                         <div class="form-group row">
		                                   <div class="col-md-6">
		                                        <input type="text" id="present_address" class="form-control" name ="brand" placeholder="Product Brand">
		                                    </div>
		                                </div>

		                               

		                           

		                                <div class="form-group row">
		                                  
		                                    <div class="col-md-6">
		                                        <input type="file" id="profile-img" class="form-control btn-sm" name="file" required="required">
		                                    </div>
		                                </div>
                                        
                                        <div class="form-group row">
                                        <div id="img">
		                                   
                                           <div class="col-md-3" > 
                                                  <img src"#" id="profile-img-tag" class="img-thumbnail float-right" alt="Chosen image will be displayed here" height="266" width="176"  />
                                           <script type="text/javascript">
													function readURL(input) {
														if (input.files && input.files[0]) {
															var reader = new FileReader();
															
															reader.onload = function (e) {
																$('#profile-img-tag').attr('src', e.target.result);
															}
															reader.readAsDataURL(input.files[0]);
														}
													}
													$("#profile-img").change(function(){
														readURL(this);
													});
											</script>
                                                
        </div>
                                                       
                                          <?php /*?>  <?php
											if(isset($_POST['submit']))
												{
													
													$filename = $_FILES['file']['name'];
													$tmp_name = $_FILES['file']['tmp_name'];
													#echo $filename;
													#echo $tmp_name;
													$filepath = 'uploads/'.$filename;
													if(move_uploaded_file($tmp_name,$filepath))
														{
															
															echo '<img  id="profile-img-tag" class=" img-thumbnail" src="'.$filepath.'" height="100px" width="250px" style="border:solid;" />'	;
														}
													else
														{
															echo " ;( ";
														}
														
												}
											
										?><?php */?>
		                                    
		                                   </div>    
		                                    </div>
		                                </div>
                                        


		                                    <div class="col-md-6 offset-md-4 text-center">
		                                        <button type="submit" class="btn btn-primary" name ="submit">
		                                        Register
		                                        </button>
		                                      <!--
		                                        <button type="submit" class="btn btn-info" name ="sub"> <a href="page.php">
		                                        Show data</a>	-->	                                        </button>
                                         <?php /*?>       <?php 
												
									 if(isset($_POST['sub'])){
										header('Location: page.php');
										 
										 }
										 
									 ?><?php */?>

                                                
		                                    </div>
		                                </div>
                                        
		                            </form></center>
		                        </div>
		                    </div>
		            </div>
		        </div>
		    </div>

		</main>
          
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer ">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Duaimam</strong>. @gmail.com
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          <a href="https://templatemag.com/"></a>
        </div>
        <a href="advanced_form_components.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script src="lib/advanced-form-components.js"></script>

</body>

</html>

