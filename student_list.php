<?php
	include 'dbconnect.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Registration form wizard">
	<meta name="author" content="Ansonika">
	<title>Student List</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="css/animate.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
	<link href="css/skins/square/grey.css" rel="stylesheet">
	
	<!-- BASE CSS -->
	<link href="css/date_time_picker.css" rel="stylesheet">
	
	<!-- COLOR CSS -->
	<link href="css/color_2.css" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">

	<script src="js/modernizr.js"></script>
	<!-- Modernizr -->
<style>
	table{
		min-width: max-content;
		margin:auto;
	}
	th{
		text-align: center;
	}
	.button{
		margin: auto;
		
	}

@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}
	
	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
	}
/*
	Label the data
	
	td:nth-of-type(1):before { content: "First Name"; }
	td:nth-of-type(2):before { content: "Last Name"; }
	td:nth-of-type(3):before { content: "Email"; }
	td:nth-of-type(4):before { content: "Telephone"; }
	td:nth-of-type(5):before { content: "Age"; }
	td:nth-of-type(6):before { content: "Gemder"; }
	td:nth-of-type(7):before { content: "Registration ID"; }
	td:nth-of-type(8):before { content: "Section"; }
	td:nth-of-type(9):before { content: "Roll"; }
	td:nth-of-type(10):before { content: "Semester"; }
	td:nth-of-type(11):before { content: "Session"; }
	td:nth-of-type(12):before { content: "Department"; }
	td:nth-of-type(13):before { content: "Blood Group"; }
	td:nth-of-type(14):before { content: "Action"; } */

}

</style>
</head>

<body>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->
	
	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->

	<header>
		<div class="container-fluid">
		    <div class="row">
                <div class="col-3">
                    <div id="logo_home">
						<h1><a href="index.php" style="color: #662D91; font-size: 35px; position: absolute; margin-left:10px; margin-bottom: 5px;">Demo</a></h1>
                    </div>
                </div>
                <div class="col-9">
                    <div id="social">
                        <ul>
						<ul>
			                            <li><a href="https://www.facebook.com/39xHack.69xCracked.8xDone.0xCJ" target="_blank"><i class="icon-facebook"></i></a></li>
			                            <li><a href="https://twitter.com/ahmod__abdullah" target="_blank"><i class="icon-twitter"></i></a></li>
			                            <li><a href="mailto:ahmodabdullah876@gmail.com"><i class="icon-google"></i></a></li>
			                            <li><a href="https://www.linkedin.com/in/ahmod-abdullah-5a741a218/" target="_blank"><i class="icon-linkedin"></i></a></li>
			                        </ul>
                    </div>
                    <!-- /social -->
                    <nav>
					<ul class="cd-primary-nav">
                            <li><a href="index.php" class="animated_link">Registration</a></li>
                            <li><a href="student_list.php" class="animated_link">Students List</a></li>
                            <li><a href="#0" class="animated_link">Terms and conditions</a></li>
                            <li><a href="#0" class="animated_link">About Us</a></li>
                            <li><a href="contacts.php" class="ansimated_link">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
		</div>
		<!-- container -->
	</header>
	<!-- End Header -->


	<section class="col-12 justify-content-center" style="margin-top: 100px;">
		<div class="container">
		<div class="button">
				<a href="index.php" class="btn btn-primary active" role="button" aria-pressed="true">Get Yourself Registered</a>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-1">
					<h2 class="heading-section mb-3">Registered Student's list</h2>
				</div>
				<table class="table" style="display: block; height: auto; overflow-x: scroll;">
			</div>		
  <thead bgcolor="#9b0dd6" style="color: #ffffff;">

    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Telephone</th>
      <th scope="col">Age</th>
      <th scope="col">Gemder</th>
      <th scope="col">Registration ID</th>
      <th scope="col">Section</th>
      <th scope="col">Roll</th>
      <th scope="col">Semester</th>
      <th scope="col">Session</th>
      <th scope="col">Department</th>
      <th scope="col">Blood Group</th>
      <th scope="col">Action</th>
    </tr>

  </thead>
  <tbody  bgcolor="#ffffff">

<?php

$sql="Select * from `register`";
$result=mysqli_query($conn,$sql);
if($result){
	while($row=mysqli_fetch_assoc($result)){
		$id = $row['ID'];
		$firstname = $row['firstname'];
		$lastname = $row['lastname'];
		$email = $row['email'];
		$telephone = $row['telephone'];
		$age = $row['age'];
		$gender = $row['gender'];
		$registraion = $row['registraion'];
		$section = $row['section'];
		$roll = $row['roll'];
		$semester = $row['semester'];
		$session = $row['session'];
		$department = $row['department'];
		$blood_group = $row['blood_group'];
		echo '<tr>
		<th scope="row">'.$id.'</th>
		<td>'.$firstname.'</td>
		<td>'.$lastname.'</td>
		<td>'.$email.'</td>
		<td>'.$telephone.'</td>
		<td>'.$age.'</td>
		<td>'.$gender.'</td>
		<td>'.$registraion.'</td>
		<td>'.$section.'</td>
		<td>'.$roll.'</td>
		<td>'.$semester.'</td>
		<td>'.$session.'</td>
		<td>'.$department.'</td>
		<td>'.$blood_group.'</td>
		<td>
			<a href="update.php?updateid='.$id.'" class="btn btn-primary " role="button" aria-pressed="true">Update</a> 
			<a href="delete.php?deleteid='.$id.'" class="btn btn-danger " role="button" aria-pressed="true">Delete</a> 
		</td>
	  </tr>';
		
	}
}

?>
				

  </tbody>
</table>
		</div>
	</section>
	
	<footer id="home" class="clearfix">
		<p>© 2022 Ahmod Abdullah</p>
		<ul>
			<li><a href="#0" class="animated_link">About Us</a></li>
			<li><a href="#0" class="animated_link">Terms and conditions</a></li>
			<li><a  href="contacts.php" class="ansimated_link">Contacts</a></li>
		</ul>
	</footer>
	<!-- end footer-->

	<div class="cd-overlay-nav">
		<span></span>
	</div>
	<!-- cd-overlay-nav -->

	<div class="cd-overlay-content">
		<span></span>
	</div>
	<!-- cd-overlay-content -->

	<a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a>

	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<!-- Modal info -->
	<div class="modal fade" id="more-info" tabindex="-1" role="dialog" aria-labelledby="more-infoLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="more-infoLabel">Frequently asked questions</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<!-- SCRIPTS -->
	<!-- Jquery-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<!-- Common script -->
	<script src="js/common_scripts.js"></script>
	<!-- Wizard script -->
	<script src="js/reservation_wizard_func.js"></script>
	<!-- Menu script -->
	<script src="js/velocity.min.js"></script>
	<script src="js/main.js"></script>
	<!-- Theme script -->
	<script src="js/functions.js"></script>
	<!-- Datepicker script -->
	<script src="js/datepicker_func.js"></script>
	
</body>
</html>