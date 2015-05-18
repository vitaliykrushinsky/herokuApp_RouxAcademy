<article class="registrationform">
	<h2>Registration form</h2>
	<p>We're not currently taking registrations for the Roux Academy Conference, but if you want to be placed into our mailing list for more information, please complete the form below.</p>

	<form class="registration form-horizontal" action="#">

	  <fieldset id="personalinfo">
	    <legend>Personal Info</legend>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="myname">Name</label>
				<input class="col-sm-5" type="text" name="myname" id="myname" autofocus placeholder="Last, First" required>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label" for="companyname">Company Name</label>
				<input class="col-sm-5" type="text" name="companybname" id="companyname" />
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label" for="myemail">Email</label>
				<input class="col-sm-5" type="email" name="myemail" id="myemail" required autocomplete="off" />
			</div>
	  </fieldset><!-- personal info -->

	  <fieldset id="otherinfo">
			<legend>Other Info</legend>
					
		  			<label>Request Type</label>
		  		<div class="radio">
					<label class="radio">
						<input type="radio" name="requesttype" value="question" /> Question
					</label>
				</div>

				<div class="radio">
					<label class="radio">
						<input type="radio" name="requesttype" value="comment" /> Comment
					</label>
				</div>
				
		  		
				<div class="checkbox">
					<label class="checkbox">
						<input type="checkbox" id="subscribe" name="subscribe" CHECKED value="yes" />
						Would you like to subscribe to our e-mail list?
					</label>
				</div>
			
		  	<label for="reference">How did you hear about the Roux Academy Conference?</label>
					<select class="col-sm-3 form-control" name="reference" id="reference">
						<option>Choose...</option>
						<option value="friend">A friend</option>
						<option value="facebook">Facebook</option>
						<option value="twitter">Twitter</option>
					</select>
			
	  </fieldset>
	  <div class="form-group">
	  	<div class="col-sm-offset-4 col-sm-8">
	  		<button id="register-button" type="submit">Submit</button>
	  	</div>	
	  </div>
	</form>
</article>