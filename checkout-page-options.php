
<!DOCTYPE html>
<html>
	<head>
		<?php require 'includes/head.php'; ?>
	</head>
	<body>
		<h1 hidden> Studyla Company Siite </h1>
		<?php require 'includes/checkout-header.php'; ?>
		<!-- main -->
		<main class="checkout">	
			<section>
				<h2 hidden>Checkout Response</h2>
				<div class="container">
					<!-- Heading -->
					<div class="sub-heading">
						<h2>Start Your Subscription</h2>
					</div>
					<div class="checkout-steps">
						<!-- Step 1 -->
						<div class="step-1">
							<!-- Order detail block 1 -->
							<div class="ordered-details">
								<div class="course-details">
									<div class="img">
										<img src="assets/images/custom/uploads/checkout/product.svg" alt="" />
									</div>
									<div class="name">
										<h3>Academic and Business Writing</h3>
										<p>Business & Management</p>
										<a href="#" class="">X Remove from cart</a>
									</div>
								</div>
								<div class="price-details">
									<span>$64.99</span>	
								</div>
							</div>
							<!-- Order detail block  2 -->
							<div class="ordered-details">
								<div class="course-details">
									<div class="img">
										<img src="assets/images/custom/uploads/checkout/product.svg" alt="" />
									</div>
									<div class="name">
										<h3>Academic and Business Writing</h3>
										<p>Business & Management</p>
										<a href="#" class="">X Remove from cart</a>
									</div>
								</div>
								<div class="price-details">
									<span>$64.99</span>	
								</div>
							</div>
							<!-- Order detail block  3 -->
							<div class="ordered-details">
								<div class="course-details">
									<div class="img">
										<img src="assets/images/custom/uploads/checkout/product.svg" alt="" />
									</div>
									<div class="name">
										<h3>Academic and Business Writing</h3>
										<p>Business & Management</p>
										<a href="#" class="">X Remove from cart</a>
									</div>
								</div>
								<div class="price-details">
									<span>$64.99</span>	
								</div>
							</div>

							<!-- Total blocks -->
							<div class="total-values">
								<div class="value-row">
									<div class="left">Subtotal</div> <div class="right">$64.99</div>
								</div>
								<div class="value-row">
									<div class="left">Discount</div> <div class="right">$0.99</div>
								</div>
								<div class="value-row">
									<div class="left total">Today's Total</div> <div class="right amount">$64.00</div>
								</div>
							</div>
						</div>
						<!-- Step 2 -->
						<div class="step-2">
							<div class="payment-methods">
								<!-- Payment option block  1 -->
								<div class="payment-options">
									<!-- input radio button -->
									<input type="radio" name="payment" id="credit-card"  value="1" />
									<!-- input label -->
									<label for="credit-card" class="payment-title">
										Credit or Debit Card
									</label>
									<!-- Payment icons block -->
									<div class="icons">
										<p>
											<img src="assets/images/custom/uploads/checkout/payment-icons/visa.svg" alt="" /><img src="assets/images/custom/uploads/checkout/payment-icons/mastercard.svg" alt="" /><img src="assets/images/custom/uploads/checkout/payment-icons/amex.svg" alt="" /><img src="assets/images/custom/uploads/checkout/payment-icons/discover.svg" alt="" />
										</p>
									</div>
									<!-- Payment details section :: If available only -->
									<div class="payment-details">
										<div class="formsection">
											<form>
												<div class="inputfield">
													<label>Card Number</label>
													<!-- card number field ::  validate visa card -->
													<input type="text"  placeholder="xxx xxx xxx xxx" class="visa" />
													<!-- card number field ::  validate master card -->
													<input type="text"  placeholder="xxx xxx xxx xxx" class="mastercard" />
													<!-- card number field ::  validate amex -->
													<input type="text"  placeholder="xxx xxx xxx xxx" class="amex" />
													<!-- card number field ::  validate discover -->
													<input type="text"  placeholder="xxx xxx xxx xxx" class="discover" />
												</div>
												<div class="inputfield">
													<label>Name on the Card</label>
													<!-- card name field with :: validation (error) -->
													<input type="text" class="valid-error" />
												</div>
												<div class="inputfield date">
													<label>Expiration Date</label>
													<input type="text"  placeholder="MM" class="month" />
													<input type="text"  placeholder="YYYY" class="year" />
												</div>
												<div class="inputfield cvv">
													<label>CVV</label>
													<!-- cvv field with ::  validation (success) -->
													<input type="text"  placeholder="992"  class="valid-success " />
												</div>
											</form>
										</div>
									</div>
								</div>
								<!-- Payment option block  2 -->
								<div class="payment-options">
									<input type="radio" name="payment" id="paypal"  value="2" />
									<label for="paypal" class="payment-title">
										Paypal
									</label>
									<div class="icons">
										<p>
											<img src="assets/images/custom/uploads/checkout/payment-icons/paypal.svg" alt="" />
										</p>
									</div>	
								</div>
							</div>
						</div>
						<!-- Step 3 -->
						<div class="step-3">
							<div class="terms">
								<p>
									By confirming this purchase, I agree to the Terms of Use, Refund Policy and Privacy Policy.
								</p>
							</div>
							<div class="button">
								<input type="submit" value="Checkout"  />
							</div>
						</div>
					</div>
				</div>
			</section>	
		</main>
		<?php require 'includes/footer.php'; ?>
	</body>
</html>