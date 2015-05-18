<article class="registrationform">
	<h2>Registration form</h2>
	<p>We're not currently taking registrations for the Roux Academy Conference, but if you want to be placed into our mailing list for more information, please complete the form below.</p>

	<form class="registration form-horizontal" action="#">

	  <fieldset id="personalinfo">
	    <legend>Personal Info</legend>
			
			<section class="row">
				
				<label class="col-lg-4 control-label" for="myname">Name</label>
				<div class="controls">
					<input class="col-lg-8" type="text" name="myname" id="myname" autofocus placeholder="Last, First" required>
				</div>
			</section>
			
			<section class="row">	
				<label class="col-lg-4 control-label" for="companyname">Company Name</label>
				<div class="controls">
					<input class="col-lg-8" type="text" name="companybname" id="companyname" />
				</div>
			</section>

			<section class="row">	
				<label class="col-lg-4 control-label" for="myemail">Email</label>
				<div class="controls">
					<input type="email" name="myemail" id="myemail" required autocomplete="off" />
				</div>
			</section>
			
	  </fieldset><!-- personal info -->

	  <fieldset id="otherinfo">
			<legend>Other Info</legend>

				<section class="row">
		  	<label class="col col-lg-4 control-label">Request Type</label>
					<div class="controls col col-lg-8">
						<label class="radio">
							<input type="radio" name="requesttype" value="question" /> Question
						</label>
						<label class="radio">
							<input type="radio" name="requesttype" value="comment" /> Comment
						</label>
					</div><!-- controls -->
				</section><!-- row -->

				
				<section class="row">
		  	<label class="col col-lg-4 control-label">Subscribe</label>
					<div class="controls col col-lg-8">
					<label class="checkbox">
						<input type="checkbox" id="subscribe" name="subscribe" CHECKED value="yes" />
						Would you like to subscribe to our e-mail list?
					</label>
					</div><!-- controls -->
				</section><!-- row -->
			
				<section class="row">
		  	<label class="col col-lg-4 control-label" for="reference">How did you hear about the Roux Academy Conference?</label>
					<div class="controls col col-lg-8">
						<select   name="reference" id="reference">
							<option>Choose...</option>
							<option value="friend">A friend</option>
							<option value="facebook">Facebook</option>
							<option value="twitter">Twitter</option>
						</select>
					</div><!-- controls -->
				</section><!-- row -->

	  </fieldset>
	  <div class="form-group">
	  	<div class="col-sm-offset-4 col-sm-8">
	  		<button type="submit">Submit</button>
	  	</div>	
	  </div>
	</form>
</article>