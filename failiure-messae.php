
<!DOCTYPE html>
<html>
	<head>
		<?php require 'includes/head.php'; ?>
	</head>
	<body>
		<h1 hidden> Studyla Company Siite </h1>
		<?php require 'includes/checkout-header.php'; ?>
		<!-- main -->
		<main class="checkout-response">	
			<section class="response-block">
				<h2 hidden>Checkout Response</h2>
				<div class="container a-center">
					<div class="icons">
						<img src="assets/images/custom/icons/response/error.svg" alt="" />
					</div>
					<div class="content">
						<h3>Failed</h3>
						<p>An error occured in the process of payment</p>
					</div>
					<div class="show-more-link">
						<a href="#">Go back</a>
					</div>	
				</div>
			</section>	
		</main>
		<?php require 'includes/footer.php'; ?>
	</body>
</html>