<?php
    if(isset($_POST['firstname'])){
        include('smtp_mail/smtp_send.php');    
        $sendmail = new SMTP_mail();
        $respMail = $sendmail->sendDonationMail($_POST);
		$thankMail = $sendmail->sendDonerThankyouMail($_POST);            
        //print_r($respMail);
		//print_r($thankMail);
		//die;
        
?>
	<script>
		alert('Thank you. We will contact you. \n Congratulation');
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
            
            
              <!-- Page Header Start -->
            <div class="page-header">
				<div class="col-12">
					<h2>Can You Donate?</h2>
				</div>
            </div>
            <!-- Page Header End -->
           
            
            
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
                                <h2>Submit a Donation Interest</h2>
                            </div>
                            <div class="about-text">
                                <p>
									Many person in Sub Division Rampur are living a life, which we can never imagine. 
									They are deprived off even the prime needs. 
									This prompted us to ask the question to ourselves “Can You Donate”.
									This initiative is for the kind of person like you, who is having money, time, and generosity to help the needy; but does not know how to and to whom.
									If you have the zeal and compassion, this is really for you. 
									You can donate to those needy person by filling the from below and don’t forget to share your details.
                                </p>
                                <p>
                                    
                                </p>
                               
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
                                <h2>Donation Interest Form</h2>
                            </div>
                            <div class="contact-form">
							<form name="donationform" id="donationform" action="donate.php" method="post">
                                <table>
								
									<tr>
										<td>Sort *</td>
										<td>
											<select id="select-sort" name="sort">
												<option value="">---Select One---</option>
												<option value="Administration">Administration</option>
												<option value="Bus-Stand-Rampur">Bus Stand Rampur</option>
												<option value="Gau-Sadan-Rampur">Gau Sadan Rampur</option>
												<option value="Govt-Collage-Rampur">Govt Collage Rampur</option>
												<option value="Govt-Hospital">Govt Hospital</option>
												<option value="Govt-School">Govt School</option>
												<option value="Govt-Offices">Govt Offices</option>
												<option value="Koshish-Ek-Aasha-Rampur">Koshish Ek Aasha Rampur</option>
												<option value="Library-Rampur">Library Rampur</option>
												<option value="MGHSC-Khaneri">MGHSC Khaneri</option>
											</select>
										</td>
									</tr>
									
									<tr>
										<td>Sub-sort *</td>
										<td>
											<select id="select-subsort" name="subsort">
												<option value="">---Select One---</option>
												<option value="Almirah">	Almirah	</option>
												<option value="Bedding">	Bedding	</option>
												<option value="Benches">	Benches	</option>
												<option value="Benches-and-Desk">	Benches and Desk	</option>
												<option value="Books">	Books	</option>
												<option value="Books-for-School-Library">	Books for School Library	</option>
												<option value="Capturing-Lifting-Machine">	Capturing Lifting Machine	</option>
												<option value="Chair-and-Table">	Chair and Table	</option>
												<option value="CCTV-Camera">	CCTV Camera	</option>
												<option value="Chairs">	Chairs	</option>
												<option value="Competitive-Books">	Competitive Books	</option>
												<option value="Desktop">	Desktop	</option>
												<option value="Display-Board">	Display Board	</option>
												<option value="Emergency-Light">	Emergency Light	</option>
												<option value="Entertainment-Rider">	Entertainment Rider	</option>
												<option value="File-Rack">	File Rack	</option>
												<option value="Food-and-Bhusa">	Food and Bhusa	</option>
												<option value="Furniture">	Furniture	</option>
												<option value="Hospital-Bedding">	Hospital Bedding	</option>
												<option value="Hospital-Benches">	Hospital Benches	</option>
												<option value="Hospital-Trolley">	Hospital Trolley	</option>
												<option value="Hospital-Wheel-Chair">	Hospital Wheel Chair	</option>
												<option value="Other">	Other	</option>
												<option value="Physlo-role">	Physlo role  	</option>
												<option value="Round-Ball-Pool">	Round Ball Pool	</option>
												<option value="School-Chairs">	School Chairs	</option>
												<option value="Smart-TV-Set">	Smart TV Set	</option>
												<option value="Solar-Light">	Solar Light	</option>
												<option value="Sports-Kit">	Sports Kit	</option>
												<option value="Steel-Cot">	Steel Cot	</option>
												<option value="Steel-Covering">	Steel Covering	</option>
												<option value="Tables">	Tables	</option>
												<option value="Tarpaulin">	Tarpaulin	</option>
												<option value="Tasler">	Tasler                  	</option>
												<option value="Therapy-Ball">	Therapy Ball 	</option>
												<option value="Towels">	Towels	</option>
												<option value="Tunnel">	Tunnel        	</option>
												<option value="Utensils">	Utensils	</option>
												<option value="Utensils-for-school">	Utensils for school	</option>
												<option value="Water-Purifier">	Water Purifier	</option>
											</select>
										</td>
									</tr>
									
									<tr>
										<td>Budget *</td>
										<td>
											<select id="select-budget" name="budget">
												<option value="">---Select One---</option>
												<option value="500-to-5000">500 to 5000</option>
												<option value="5000-to-10000">5000 to 10000</option>
												<option value="10000-to-50000">10000 to 50000</option>
												<option value="50000-to-100000">50000 to 100000</option>
												<option value="Above-100000 ">Above 100000</option>
											</select>
										</td>
									</tr>
									
									<tr>
										<td>First Name *</td>
										<td>
											<input type="text" id="first-name" name="firstname" />
										</td>
									</tr>
									<tr>
										<td>Last Name</td>
										<td>
											<input type="text" id="last-name" name="lastname" />
										</td>
									</tr>
									<tr>
										<td>Mobile No. *</td>
										<td>
											<input type="text" id="mobile-no" name="mobileno" />
										</td>
									</tr>
									<tr>
										<td>Email ID </td>
										<td>
											<input type="text" id="email-id" name="emailid" />
										</td>
									</tr>
									<tr>
										<td><input type="reset" id="btn-reset" name="btn-reset" class="btn" value="Reset Form"/></td>
										<td>
											<input type="submit" id="btn-submit" name="btn-submit" class="btn" value="Submit Interest" disabled="true"/>
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
                                    <div class="g-recaptcha" style="" data-sitekey="6LfIINIeAAAAAAcWgL96t6vKP4VWlOfdlTBwKaxX" data-callback="enableLogin"></div>		
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
