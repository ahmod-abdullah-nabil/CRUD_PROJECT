<!DOCTYPE html>
			<html lang="en">

			<head>
			    <meta charset="utf-8">
			    <meta http-equiv="X-UA-Compatible" content="IE=edge">
			    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			    <meta name="description" content="Registration form wizard">
			    <meta name="author" content="Ansonika">
			    <title>Registration form wizard</title>

			    <!-- GOOGLE WEB FONT -->
			    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

			    <!-- BASE CSS -->
			    <link href="css/bootstrap.min.css" rel="stylesheet">
			    <link href="css/style.css" rel="stylesheet">
			    <link href="css/responsive.css" rel="stylesheet">
			    <link href="css/menu.css" rel="stylesheet">
			    <link href="css/animate.min.css" rel="stylesheet">
			    <link href="css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
			    <link href="css/skins/square/grey.css" rel="stylesheet">

			    <!-- YOUR CUSTOM CSS -->
			    <link href="css/custom.css" rel="stylesheet">

			    <script src="js/modernizr.js"></script>
			    <!-- Modernizr -->

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
			                        <h1><a href="index.php" style="color: #662d91; font-size: 35px; position: absolute; margin-left:10px; margin-bottom: 5px;">Demo</a></h1>
			                    </div>
			                </div>
			                <div class="col-9">
			                    <div id="social">
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
				
			    <main>
			        <div id="form_container">
			            <div class="row">
			                <div class="col-lg-5">
			                    <div id="left_form">
			                        <figure><img src="img/registration_bg.svg" alt=""></figure>
			                        <h2>Registration</h2>
			                        <p>Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque usu, facete detracto patrioque an per, lucilius pertinacia eu vel.
			                        </p>
			                        <a href="#0" id="more_info" data-toggle="modal" data-target="#more-info"><i class="pe-7s-info"></i></a>
			                    </div>
			                </div>
			                <div class="col-lg-7">

			                    <div id="wizard_container">
			                        <div id="top-wizard">
			                            <div id="progressbar"></div>
			                        </div>
			                        <!-- /top-wizard -->
			                        <form name="example-1" id="wrapped" action="registration_send.php" method="POST">
			                            <input id="website" name="website" type="text" value="">
			                            <!-- Leave for security protection, read docs for details -->
			                            <div id="middle-wizard">

			                                <div class="step">
			                                    <h3 class="main_question"><strong>1/3</strong>Please fill with your details</h3>
			                                    <div class="row">
			                                        <div class="col-md-6">
			                                            <div class="form-group">
			                                                <input type="text" name="firstname" class="form-control required" placeholder="Enter Your First name">
			                                            </div>
			                                        </div>
			                                        <div class="col-md-6">
			                                            <div class="form-group">
			                                                <input type="text" name="lastname" class="form-control required" placeholder="Enter Your Last name">
			                                            </div>
			                                        </div>
			                                    </div>
			                                    <!-- /row -->

			                                    <div class="row">
			                                        <div class="col-md-6">
			                                            <div class="form-group">
			                                                <input type="email" name="email" class="form-control required" placeholder="Enter Your Email">
			                                            </div>
			                                        </div>
			                                        <div class="col-md-6">
			                                            <div class="form-group">
			                                                <input type="text" name="telephone" class="form-control required" placeholder="Enter Your Telephone">
			                                            </div>
			                                        </div>
			                                    </div>
			                                    <!-- /row -->

			                                    <div class="row">
			                                        <div class="col-md-6">
			                                            <div class="form-group">
			                                                <input type="number" name="age" class="form-control required" placeholder="Enter Your Age">
			                                            </div>
			                                        </div>
			                                        <div class="col-md-6">
			                                            <div class="form-group radio_input">
			                                                <label><input type="radio" value="Male" checked name="gender" class="icheck">Male</label>
			                                                <label><input type="radio" value="Female" name="gender" class="icheck">Female</label>
			                                            </div>
			                                        </div>
			                                    </div>
			                                    <!-- /row -->
			                                    <div class="col-md-12">
			                                        <div class="row">
			                                            <input type="numebr" name="registraion" class="form-control required" placeholder="Enter Your Registrartion ID">
			                                        </div>
			                                    </div>
			                                </div>
			                                <!-- /step-->
			                                <div class="step">
			                                    <h3 class="main_question"><strong>2/3</strong>Please fill up additional info</h3>
			                                    <div class="row">

			                                        <!-- /col-sm-12 -->
			                                    </div>
			                                    <!-- /row -->
			                                    <div class="row">
			                                        <div class="col-md-6">
			                                            <div class="form-group">
			                                                <input type="text" name="section" class="form-control required" placeholder="Enter Your Section">
			                                            </div>
			                                        </div>
			                                        <div class="col-md-6">
			                                            <div class="form-group">
			                                                <input type="number" name="roll" class="form-control required" placeholder="Enter Your Roll">
			                                            </div>
			                                        </div>
			                                    </div>
			                                    <!-- /row -->
			                                    <div class="row">

													
												<div class="col-md-6">
			                                            <div class="form-group">
			                                                <div class="styled-select">
			                                                    <select class="required" name="semester" id="semester">
			                                                        <option value="" selected>Select your Semester</option>
			                                                        <option value="1st Semester">1st Semester</option>
			                                                        <option value="2nd Semester">2nd Semester</option>
			                                                        <option value="3rd Semester">3rd Semester</option>
			                                                        <option value="4th Semester">4th Semester</option>
			                                                        <option value="5th Semester">5th Semester</option>
			                                                        <option value="6th Semester">6th Semester</option>
			                                                        <option value="7th Semester">7th Semester</option>
			                                                        <option value="8th Semester">8th Semester</option>
			                                                    </select>
			                                                </div>
			                                            </div>
			                                        </div>
													
													<div class="col-md-6">
			                                            <div class="form-group">
			                                                <input type="text" name="session" id="session" class="form-control required" placeholder="Enter Your Session">
			                                            </div>
			                                        </div>

			                                        <div class="col-md-6">
			                                            <div class="form-group">
			                                                <div class="styled-select">
			                                                    <select class="required" name="department">
			                                                        <option value=""selected>Select your Department</option>
			                                                        <option value="Computer">Computer</option>
			                                                        <option value="Civil">Civil</option>
			                                                        <option value="Electrical">Electrical</option>
			                                                        <option value="Environmental">Environmental</option>
			                                                        <option value="Mechanical">Mechanical</option>
			                                                        <option value="Power">Power</option>
			                                                        <option value="Constructions">Constructions</option>
			                                                        <option value="Electronics">Electronics</option>
			                                                    </select>
			                                                </div>
			                                            </div>
			                                        </div>

			                                        <div class="col-md-6">
			                                            <div class="form-group">
			                                                <div class="styled-select">
			                                                    <select class="required" name="blood_group">
			                                                        <option value="" selected>Select your Blood Group</option>
			                                                        <option value="A Positive(+)">A Positive(+)</option>
			                                                        <option value="A Negative(-)">A Negative(-)</option>
			                                                        <option value="B Positive(+)">B Positive(+)</option>
			                                                        <option value="B Negative(-)">B Negative(-)</option>
			                                                        <option value="O Positive(+)">O Positive(+)</option>
			                                                        <option value="O Negative(-)">O Negative(-)</option>
			                                                        <option value="AB Positive(+)">AB Positive(+)</option>
			                                                        <option value="AB Negative(-)">AB Negative(-)</option>
			                                                    </select>
			                                                </div>
			                                            </div>
			                                        </div>
													<div class="col-md-12">
			                                            <div class="form-group">
			                                                <input type="password" name="password" id="password" class="form-control required" placeholder="Enter Your Password">
			                                            </div>
			                                        </div>

			                                    </div>
			                                    <!-- /row -->
			                                </div>
			                                
			                                <!-- /step-->
			                                <div class="submit step">
			                                    <h3 class="main_question"><strong>3/3</strong>Send an optional message</h3>
			                                    <div class="form-group">
			                                        <textarea name="additional_message" class="form-control" style="height:150px;"
			                                            placeholder="Write your messagere here, if you have got anything to let us know!"></textarea>
			                                    </div>
			                                    <div class="form-group terms">
			                                        <input name="terms" type="checkbox" class="icheck required" value="yes">
			                                        <label>Please accept the<a href="#" data-toggle="modal" data-target="#terms-txt">terms and conditions</a> ?</label>
			                                    </div>
			                                </div>
			                                <!-- /step-->
			                            </div>
			                            <!-- /middle-wizard -->
			                            <div id="bottom-wizard">
			                                <button type="button" name="backward" class="backward">Backward </button>
			                                <button type="button" name="forward" class="forward">Forward</button>
			                                <button type="submit" name="process" class="submit">Submit</button>
			                            </div>
			                            <!-- /bottom-wizard -->
			                        </form>
			                    </div>
			                    <!-- /Wizard container -->
			                </div>
			            </div><!-- /Row -->
			        </div><!-- /Form_container -->
			    </main>

			    <footer id="home" class="clearfix">
			        <p>© 2022 Ahmod Abdullah</p>
			        <ul>
			            <li><a href="#0" class="animated_link">About Us</a></li>
			            <li><a href="#0" class="animated_link">Terms and conditions</a></li>
			            <li><a href="contacts.php" class="ansimated_link">Contacts</a></li>
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
			                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore
			                        postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
			                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex
			                        prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei
			                        ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
			                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex
			                        prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
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
			                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore
			                        postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
			                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex
			                        prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei
			                        ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
			                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex
			                        prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
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
			    <script src="js/common_scripts_min.js"></script>
			    <!-- Wizard script -->
			    <script src="js/registration_wizard_func.js"></script>
			    <!-- Menu script -->
			    <script src="js/velocity.min.js"></script>
			    <script src="js/main.js"></script>
			    <!-- Theme script -->
			    <script src="js/functions.js"></script>
				
			</body>

			</html>