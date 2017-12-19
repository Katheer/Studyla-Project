
<!DOCTYPE html>
<html>
	<head>
		<?php require 'includes/head.php'; ?>
	</head>
	<body>
		<h1 hidden> Studyla Company Siite </h1>
		<?php require 'includes/sign-in-header.php'; ?>
		<!-- main -->
		<main class="customer-signup">	
			<section>
				<h2 hidden>Sign Up Form</h2>
				<div class="container">
					<div class="social-logins a-center">
						<h3> Create an account using</h3>
						<ul>
							<li>
								<a href="#" class="fb">
									<img src="assets/images/custom/icons/social-logins/fb.svg" alt="" />
									Facebook
								</a>
							</li>
							<li>
								<a href="#" class="google">
									<img src="assets/images/custom/icons/social-logins/google.svg" alt="" />
									Google
								</a>
							</li>
							<li>
								<a href="#" class="microsoft">
									<img src="assets/images/custom/icons/social-logins/microsoft.svg" alt="" />
									Microsoft
								</a>
							</li>
						</ul>
					</div>
					<div class="formsection">
						<div class="reponse-mesaages error">
							<p>Please enter valid email address</p>
						</div>
						<div class="reponse-mesaages success">
							<p>Account Successfully created</p>
						</div>
						<div class="reponse-mesaages warning">
							<p>Un authorized login</p>
						</div>
						<div class="form-title"><h3>or create a new one here</h3></div>
						<form>
							<div class="inputfield">
								<input type="text" class="valid-error" placeholder="Full Name" />
							</div>
							<div class="inputfield">
								<input type="text"  class="valid-success" placeholder="User Name" />
							</div>
							<div class="inputfield">
								<input type="email" placeholder="Email Address" />
							</div>
							<div class="selectionfield">
								<select>
									<option>Singapore</option>
									<option>Srilanka</option>
									<option>Australia</option>
								</select>
							</div>
							<div class="choose-group">
								<div class="checkbox">
                                    <input type="checkbox" id="checkbox1" checked/>
                                    <label for="checkbox1">
                                    	<span>
	                                    	Support education research by providing additional information
	                                    </span>
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox2" />
                                    <label for="checkbox2">
                                    	<span>
		                                    I agree to the Studyla <a href="#" class="terms-link">Terms of Service</a>
		                                </span>
		                            </label>
                                </div>
							</div>
							<div class="button-field">
								<input type="submit" value="Create an account" />
							</div>
						</form>
					</div>	
				</div>
			</section>	
		</main>
		<?php require 'includes/footer.php'; ?>
	</body>
</html>