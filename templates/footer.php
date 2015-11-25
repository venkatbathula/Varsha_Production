<!-- Latest Feeds & Catch Up Section Start Here -->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-centered feeds_Catchup">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 feeds_Container">
			<h3>Our Latest feeds</h3>
			<ul class="pull-left col-lg-8 col-md-8 col-sm-8 col-xs-8">
				<li><a href="#">Lorem ipsum dolor consectetur adiping</a></li>
				<li><a href="#">Nunc sagittis mollis eros, at venenatis</a></li>
				<li><a href="#">Morbi nec dolor ipsum vel congugue</a></li>
				<li><a href="#">Nullam a odio ipsum, at sodales lorem.</a></li>
				<li><a href="#">Nullam imperdiet vulputate congugue</a></li>
			</ul>
			<img src="../images/Socials/f-icon.png">
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 catchup_container">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-8">
				<h3>Catch on</h3>
				<div><a href="#">Events Club</a></div>
				<div><a href="#">West Coast, CA</a></div>
				<div><a href="#">Facebook - I Music</a></div>
				<div><a href="#">Login</a></div>
				<div><a href="#">yourname(at)companyname.com</a></div>
			</div>
			<img src="../images/Socials/foot-icon.png">
		</div>
	</div>
</div>
<!-- Latest Feeds & Catch Up Section End Here -->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer padding_none">
	<footer class="footer_navbar padding_none">
		<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-centered">
			<ul class="nav navbar-nav">
	            <li class="Home"><a href="../index.php">Home</a></li>
	            <li class="AboutUs"><a href="../templates/AboutUs.php">About</a></li>
	            <li class="Services" ><a href="../templates/Services.php">Services</a></li>
	            <li class="Gallery"><a href="../templates/Gallery.php">Gallery</a></li>
	            <li class="Events"><a href="../templates/Events.php">Events</a></li>
	            <li class="Contact"><a href="../templates/ContactUs.php">Contact</a></li>
	        </ul>
	        <select class="footer_navbar_Select" onChange="window.location.href=this.value">
			    <option class="Select_Home" value="../index.php">Home</option> 
			    <option class="Select_AboutUs" value="../templates/AboutUs.php">About</option> 
			    <option class="Select_Services" value="../templates/Services.php">Services</option> 
			    <option class="Select_Gallery" value="../templates/Gallery.php">Gallery</option> 
			    <option class="Select_Events" value="../templates/Events.php">Events</option> 
			    <option class="Select_Contact" value="../templates/ContactUs.php">Contact</option> 
			</select>
			<script type="text/javascript">
				current_page = document.location.href 
				if (current_page.match(/index/)) {
				$(".Select_Home").css('select','selected');
				}else if (current_page.match(/AboutUs/)) {
					$(".Select_AboutUs").css('select','selected');
				} else if (current_page.match(/Services/)) {
					$(".Select_Services").css('select','selected');
				}else if (current_page.match(/Gallery/)) {
					$(".Select_Gallery").css('select','selected');
				} else if (current_page.match(/Events/)) {
					$(".Select_Events").css('select','selected');
				} else if (current_page.match(/ContactUs/)) {
					$(".Select_Contact").css('select','selected');
				} else { // don't mark any nav links as selected
					$(".Select_Home").css('select','selected');
				};
			</script>
		</div>
    </footer>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer padding_none footer_down">
	    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-centered">
	    	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 first">
	    		<div>
	    			<a class="" data-placement="top" data-toggle="popover" data-title="Login" data-container="body" type="button" data-html="false" id="login">Sign up for Events club</a>
		            <div id="popover-content" class="hide">
		              <form class="form-inline" role="form" method="post" action="php\login.php">
		                <div class="form-group">
		                  <input type="text" placeholder="User Name" name="login_username" class="form-control margin_b10px" maxlength="20" style="margin-bottom: 10px;">
		                  <input type="text" placeholder="Password" name="login_password" class="form-control margin_b10px" maxlength="20" style="margin-bottom: 10px;">
		                  <button type="submit" name="login_submit" class="btn btn-primary" href="php\login.php">submit</button>                                  
		                </div>
		              </form>
		            </div>
	    			<!--<button data-placement="bottom" data-toggle="popover" data-title="Login" data-container="body" type="button" data-html="false" href="#" id="login">Sign up for Events club</button>-->
	    		</div>
	    	</div>
	    	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 middle">
	    		<div>
	    			<span>Copy rights @ Events Club 2015</span>
	    		</div>
	    	</div>
	    	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 last">
	    		<div>
	    			Join us on:
	    			<a href="#"><img class="facebook"></a>
	    			<a href="#"><img class="twitter"></a>
	    			<a href="#"><img class="googleplus"></a>
	    			<a href="#"><img class="linkedin"></a>
	    			<a href="#"><img class="youtube"></a>
	    		</div>
	    	</div>
	    </div>
    </div>
</div>