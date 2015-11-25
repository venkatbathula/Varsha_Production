<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 entirepage">
	<!-- Header Start Here -->
	  <?php
	    include('header.php');
	  ?>
	<!-- Header End Here -->
	<br><br>
	  <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
	  <script src="https://ubilabs.github.io/geocomplete/jquery.geocomplete.js"></script>
	  <script type="text/javascript">
	  	$.log = function(message){
		  var $logger = $("#logger");
		  $logger.html($logger.html() + "\n * " + message );
		}
	  </script>
	<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-centered">
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
			<h3>Get In Touch</h3>
			<form action='mail.php' method='post' id='contact_form'>  
				<div class="input-top-mid13 input-top-mid17">
					<span class="glyphicon glyphicon-user test">&nbsp;YourName</span>
					<input type="text" placeholder="" class="contacts_input" name='name' id='name' required="">
					<div class="clearfix"> </div>
				</div>
				<div class="input-top-mid13 input-top-mid17">
					<span class="glyphicon glyphicon-envelope test">&nbsp;Email</span>
					<input type="text" placeholder="" class="contacts_input" required="" name='email' id='email'>
					<div class="clearfix"> </div>
				</div>
				<div class="input-top-mid13 input-top-mid17">
					<span class="glyphicon glyphicon-comment test">&nbsp;Subject</span>
					<input type="text" placeholder="" class="contacts_input" required="" name='subject' id='subject'>
					<div class="clearfix"> </div>
				</div>
				<div class="input-top-mid13 input-top-mid17">
					<!--<span class="glyphicon glyphicon-comment">&nbsp;Message</span>-->
					<textarea placeholder="Message" class="contacts_input" required="" name='message' id='message'></textarea>
					<div class="clearfix"> </div>
				</div>
				<!--<div id='mail_success' class='success'><img src='images/success.png'> Thank you. The mailman is on his way.</div>  
				<div id='mail_fail' class='error'><img src='images/error.png'> Sorry, don't know what happened. Try later.</div> -->
				<button class="btn btn-lg btn-info pull-right" type='submit' id='send_message' name="send_message">Submit</button>
				<script type="text/javascript">
					$('#send_message').on('click', function(e) { 
						e.preventDefault();
						var isValid = true;
						$('.contacts_input').each(function() {
							if ($.trim($(this).val()) == '') {
								isValid = false;
								//$(".error").show();
								$(this).css({
									"border": "2px solid red",
									"background": "",
									"padding": ".9em"
								});
								$('.test').css({
									"background":"Red"
								});
							}
							else {
								$(this).css({
									"border": "",
									"background": ""
								});
								$('.test').css({
									"background":"#27ae60"
								});
							}
						});

						if (isValid == false)
							e.preventDefault();
						else{
							//$('#writeRevDiv').hide();
							//$("#ThankyouDiv").show();
						}

					});					
				</script>
			</form>
			<script type="text/javascript"> 
			    $('#send_message').click(function(e){  
			  
			        //stop the form from being submitted  
			        e.preventDefault();  
			  
			        /* declare the variables, var error is the variable that we use on the end 
			        to determine if there was an error or not */  
			        var error = false;  
			        var name = $('#name').val();  
			        var email = $('#email').val();  
			        var subject = $('#subject').val();  
			        var message = $('#message').val();  
			  
			        /* in the next section we do the checking by using VARIABLE.length 
			        where VARIABLE is the variable we are checking (like name, email), 
			        length is a javascript function to get the number of characters. 
			        And as you can see if the num of characters is 0 we set the error 
			        variable to true and show the name_error div with the fadeIn effect. 
			        if it's not 0 then we fadeOut the div( that's if the div is shown and 
			        the error is fixed it fadesOut. 
			 
			        The only difference from these checks is the email checking, we have 
			        email.indexOf('@') which checks if there is @ in the email input field. 
			        This javascript function will return -1 if no occurence have been found.*/  
			        if(name.length == 0){  
			            var error = true;  
			            $('#name_error').fadeIn(500);  
			        }else{  
			            $('#name_error').fadeOut(500);  
			        }  
			        if(email.length == 0 || email.indexOf('@') == '-1'){  
			            var error = true;  
			            $('#email_error').fadeIn(500);  
			        }else{  
			            $('#email_error').fadeOut(500);  
			        }  
			        if(subject.length == 0){  
			            var error = true;  
			            $('#subject_error').fadeIn(500);  
			        }else{  
			            $('#subject_error').fadeOut(500);  
			        }  
			        if(message.length == 0){  
			            var error = true;  
			            $('#message_error').fadeIn(500);  
			        }else{  
			            $('#message_error').fadeOut(500);  
			        }  
			  
			        //now when the validation is done we check if the error variable is false (no errors)  
			        if(error == false){  
			            //disable the submit button to avoid spamming  
			            //and change the button text to Sending...  
			            $('#send_message').attr({'disabled' : 'true', 'value' : 'Sending...' });  
			  
			            /* using the jquery's post(ajax) function and a lifesaver 
			            function serialize() which gets all the data from the form 
			            we submit it to send_email.php */  
			            $.post("send_email.php", $("#contact_form").serialize(),function(result){  
			                //and after the ajax request ends we check the text returned  
			                if(result == 'sent'){ 
			                    //if the mail is sent remove the submit paragraph 
			                     $('#cf_submit_p').remove(); 
			                    //and show the mail success div with fadeIn 
			                    $('#mail_success').fadeIn(500); 
			                }else{ 
			                    //show the mail failed div 
			                    $('#mail_fail').fadeIn(500); 
			                    //reenable the submit button by removing attribute disabled and change the text back to Send The Message 
			                    $('#send_message').removeAttr('disabled').attr('value', 'Send The Message');  
			                }  
			            });  
			        }
			    });  
			</script>


                       <?php
if (isset($_POST['send_message'])) {
$to = "venkatreddy251198@gmail.com";
$subject = $_POST['subject']; 
$txt = $_POST['message'];
$headers = $_POST['email']; 
"CC: somebodyelse@example.com";

if(mail($to,$subject,$txt,$headers)){
     echo 'Message Sent Successfully ';
}else{
    echo 'Failed';
}
}
?>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 Contactaddress_container">
			<h3>Address</h3>
			<div class="contact_address">
				<span>500 Lorem Ipsum Dolor Sit,</span><br>
				<span>22-56-2-9 Sit Amet, Lorem,</span><br>
				<span>USA</span><br>
				<span>Phone:(00) 222 666 444</span><br>
				<span>Fax: (000) 000 00 00 0</span><br>
				<span>Email: info@mycompany.com</span><br>
				<span>Follow on: Facebook, Twitter</span><br>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<h3>Find Us Here</h3>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div id="map-container" class="col-md-6"></div>
				<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
				<script>	
				    function init_map() {
						var var_location = new google.maps.LatLng(42.284411, -71.652770);
				        var var_mapoptions = {
				          center: var_location,
				          zoom: 14
				        };
						var var_marker = new google.maps.Marker({
							position: var_location,
							map: var_map,
							title:"Fountian Heads Apartments"});
				        var var_map = new google.maps.Map(document.getElementById("map-container"),
				            var_mapoptions);
						var_marker.setMap(var_map);	
				    }
				    google.maps.event.addDomListener(window, 'load', init_map);
			    </script>

			</div>	
		</div>
	</div><br><br>
	<!-- Footer Start Here -->
	  <?php
	    include('footer.php');
	  ?>
	<!-- Footer End Here -->
</div>




