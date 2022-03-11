<?php
    if(isset($_POST['first-name'])){
        include('smtp_mail/smtp_send.php');    
        $sendmail = new SMTP_mail();
        $respMail = $sendmail->sendResponseMail($_POST);
		$thankMail = $sendmail->sendThankyouMail($_POST);            
        //print_r($respMail);
		//print_r($thankMail);
		//die;
        
?>
	<script>
		alert('Vulunteering interest successfully captured, please check your email.');
	</script>
<?php
        
    }    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Benvolent Bushahr</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Law Firm Website Template" name="keywords">
        <meta content="Law Firm Website Template" name="description">
		
		<!-- Start Includes Head -->
        <?php
			include('_partials/includes.php'); // Includes Head Tags, Scripts and Libs
        ?>
        <!-- End Includes Head -->	
    </head>

    <body>
        <div class="wrapper">
            
            <!-- Start Includes Top Bar -->
			<?php
				include('_partials/top-bar.php'); // Includes Top Bar Logo and Title
			?>
			<!-- End Includes Top Bar -->

            <!-- Start Includes Navbar -->
			<?php
				include('_partials/navbar.php'); // Includes Menu Links
			?>
			<!-- End Includes Navbar -->
            
            
             <!-- Start Includes Carousel -->
			<?php
				include('_partials/carousel.php'); // Includes Carousel
			?>
			<!-- End Includes Carousel -->
           
            
            
            <!-- About Start -->
            <div class="about">
                <div class="container">
                    <div class="row align-items-center">
                        <!--<div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="img/SDM.jpeg" alt="Image">
                            </div>
                        </div>-->
                        <!--<div class="col-lg-7 col-md-6">-->
                            <div class="section-header">
                                <h2>Volunteering</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    Wealth alone will not make “Benevolent Bushahr” a success. We want human resources also to help the deprived. 
									Volunteering services can be right choice for you, if you really want to help your fellow citizens. 
									You may enter into the life of somebody who is looking up for help. 
									If you can spare time and energy, then this is the right place. 
									We will provide the details of those, who need your time.
                                </p>
                                <p>
                                    
                                </p>
                                Yes I am ready &nbsp; &nbsp; &nbsp; <input type="checkbox" />
                            </div>
                        <!--</div>-->
                    </div>
                </div>
			</div>
            <!-- About End -->

			
            <!-- Contact Form Start -->
            <div class="contact">
                <div class="container">
                    <div class="row align-items-center">
                        <!--<div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="img/SDM.jpeg" alt="Image">
                            </div>
                        </div>-->
                        <!--<div class="col-lg-7 col-md-6">-->
                            <div class="section-header">
                                <h2>Volunteer Registration Form</h2>
                            </div>
                            <div class="contact-form">
							<form name="volunteerform" id="volunteerform" action="volunteer.php" method="post">
                                <table>
								
									<tr>
										<td>Sort</td>
										<td>
											<select id="select-sort" name="select-sort">
												<option value="0">---Select One---</option>
												<option value="gau-sadan-rampur">Gau Sadan Rampur</option>
												<option value="govt-primary-school">Govt Primary School</option>
												<option value="govt-srsec-school">Govt Sr. Sec. School</option>
												<option value="humara-bushahr-volunteer">Humara Bushahr Volunteer</option>
												<option value="muncipal-corporation-rampur">MC Rampur</option>
												<option value="police-station-rampur">Police Station Rampur</option>
												<option value="sdm-office-rampur">SDM Office Rampur</option>
												<option value="tehsil-office-rampur">Tehsil Office Rampur</option>
												<option value="taffic-help-rampur">Traffic Help Rampur</option>
											</select>
										</td>
									</tr>
									
									<tr>
										<td>Profession</td>
										<td>
											<select id="select-profession" name="select-profession">
												<option value="0">---Select One---</option>
												<option value="councillor">Councillor</option>
												<option value="doctor">Doctor</option>
												<option value="nurse">Nurse</option>
												<option value="physiology">Physiology</option>
												<option value="social-worker">Social Worker</option>
												<option value="teacher">Teacher</option>
											</select>
										</td>
									</tr>
									
									<tr>
										<td>Sub Profession</td>
										<td>
											<select id="select-subprofession" name="select-subprofession">
												<option value="0">---Select One---</option>
												<option value="councillor-english">Councillor English</option>
												<option value="councillor">Councillor Hindi</option>
												<option value="doctor-allopathy">Doctor Allopathy</option>
												<option value="doctor-animal-husbandry">Doctor (Animal Husbandry)</option>
												<option value="doctor-ayurvedic">Doctor (Ayurvedic)</option>
												<option value="teacher-english">Teacher (English)</option>
												<option value="teacher-maths">Teacher (Maths)</option>
												<option value="teacher-music">Teacher (Music)</option>
												<option value="teacher-primary">Teacher (Primary)</option>
												<option value="teacher-sports">Teacher (Sports)</option>
												<option value="teacher-yoga">Teacher (Yoga)</option>
											</select>
										</td>
									</tr>
									
									<tr>
										<td>First Name</td>
										<td>
											<input type="text" id="first-name" name="first-name" />
										</td>
									</tr>
									<tr>
										<td>Last Name</td>
										<td>
											<input type="text" id="last-name" name="last-name" />
										</td>
									</tr>
									<tr>
										<td>Mobile No.</td>
										<td>
											<input type="text" id="mobile-no" name="mobile-no" />
										</td>
									</tr>
									<tr>
										<td>Email ID</td>
										<td>
											<input type="text" id="email-id" name="email-id" />
										</td>
									</tr>
									<tr>
										<td>Current Profession</td>
										<td>
											<input type="text" id="current-profession" name="current-profession" />
										</td>
									</tr>
									<tr>
										<td><input type="reset" id="btn-reset" name="btn-reset" class="btn" value="Reset Form"/></td>
										<td>
											<input type="submit" id="btn-submit" name="btn-submit" class="btn" value="Submit Interest"/>
										</td>
									</tr>
								</table>
								<div>                               
                                    <script nonce='S51U26wMQz' type="text/javascript" src="https://www.google.com/recaptcha/api.js" async defer></script>
                                    <script nonce='S51U26wMQz' type="text/javascript">
                                        function enableLogin() {
                                            document.getElementById("btn-submit").disabled = false;
                                        }
                                    </script>
                                    <!-- <div class="g-recaptcha" style="" data-sitekey="6LcpauoZAAAAAA9KUPEGMDJMYoIu3WRkuuOS8N9G" data-callback="enableLogin"></div>-->
									<div class="g-recaptcha" style="" data-sitekey="6Lc3xQgcAAAAAAjsxlofZ3X0axLXJxlgzVFzdqSe1" data-callback="enableLogin"></div>		
                                    <br>
                                </div>
								</form>
								
                            </div>
                        <!--</div>-->
                    </div>
                </div>
			</div>
            <!-- Contact Form End -->


            <!-- Blog Start -->
            <div class="blog">
                <div class="container">
                    <div class="section-header">
                        <h2>Highlights</h2>
                    </div>
                    <div class="owl-carousel blog-carousel">
                        <div class="blog-item">
                            <img src="img/blog-1.jpg" alt="Blog">
                            <h3>Lorem ipsum dolor</h3>
                            <div class="meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Civil Law</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2045</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="blog-item">
                            <img src="img/blog-2.jpg" alt="Blog">
                            <h3>Lorem ipsum dolor</h3>
                            <div class="meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Family Law</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2045</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="blog-item">
                            <img src="img/blog-3.jpg" alt="Blog">
                            <h3>Lorem ipsum dolor</h3>
                            <div class="meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Business Law</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2045</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="blog-item">
                            <img src="img/blog-1.jpg" alt="Blog">
                            <h3>Lorem ipsum dolor</h3>
                            <div class="meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Education Law</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2045</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="blog-item">
                            <img src="img/blog-2.jpg" alt="Blog">
                            <h3>Lorem ipsum dolor</h3>
                            <div class="meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Criminal Law</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2045</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="blog-item">
                            <img src="img/blog-3.jpg" alt="Blog">
                            <h3>Lorem ipsum dolor</h3>
                            <div class="meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Cyber Law</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2045</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="blog-item">
                            <img src="img/blog-1.jpg" alt="Blog">
                            <h3>Lorem ipsum dolor</h3>
                            <div class="meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Business Law</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2045</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog End -->
            
            
            <!-- Newsletter Start -->
            <!-- Newsletter End -->


            <!-- Start Includes Footer -->
			<?php
				include('_partials/footer.php'); // Includes Footer Links
			?>
			<!-- End Includes Footer -->
		
    </body>
</html>
