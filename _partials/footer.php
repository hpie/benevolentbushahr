
            <!-- Footer Start -->
            <div style="padding:0px 200px 1px 60px; background-color:#000">
				<div> 
					<a href="#home" style="display:inline; padding:1px; color:fff; background-color:#000">Home</a> 
					| 
					<a href="#news" style="display:inline; padding:1px; color:fff; background-color:#000">News</a>
					|
					<a href="#contact" style="display:inline; padding:1px; color:fff; background-color:#000">Contact</a>
					|
					<a href="#about" style="display:inline; padding:1px; color:fff; background-color:#000">About</a>
				</div>
				
				<!--<ul>
				  <li style="float:left; color:#FFF; padding:0px 20px"  ><a href="#home" style="display:block; padding:1px; background-color:#999">Home</a></li>
				  <li style="float:left; color:#FFF; padding:0px 20px"><a href="#news" style="display:block; padding:1px; background-color:#000">News</a></li>
				  <li style="float:left; color:#FFF; padding:0px 20px"><a href="#contact" style="display:block; padding:1px; background-color:#000">Contact</a></li>
				  <li style="float:left; color:#FFF; padding:0px 20px"><a href="#about" style="display:block; padding:1px; background-color:#000">About</a></li>
				</ul>-->
			</div>
    
            <!-- Footer End -->            
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <!--<script src="lib/jquery/jquery-3.4.1/jquery-3.4.1.min.js"></script>-->
		<script src="lib/jquery/jquery-3.1.1/jquery-3.1.1.min.js"></script>
		<script src="lib/jquery/jquery-validate/1.19.3/jquery.validate.min.js"></script>
		<script src="lib/jquery/jquery-validate/1.19.3/additional-methods.min.js"></script>
        <script src="lib/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
		 
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-184191005-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-184191005-1');
		</script>
		
		 <!-- Validation Javascript -->
		<script>
			jQuery.validator.setDefaults({
			  debug: false,
			  success: "valid"
			});
			
			$( "#volunteerform" ).validate({
			  rules: {
				sort: {
				   required: true
				},
				profession: {
				   required: true
				},
				subprofession: {
				   required: true
				},
				firstname: {
				   required: true,
					minlength: 2
				},
				emailid: {
				  email: true
				},
				mobileno: {
				  required: true,
				  number: true,
				  minlength: 10,
				  maxlength: 10
				}
			  }
			});
			
			$( "#donationform" ).validate({
			  rules: {
				sort: {
				   required: true
				},
				subsort: {
				   required: true
				},
				budget: {
				   required: true
				},
				firstname: {
				   required: true,
					minlength: 2
				},
				emailid: {
				  email: true
				},
				mobileno: {
				  required: true,
				  number: true,
				  minlength: 10,
				  maxlength: 10
				}
			  }
			});
		</script>
