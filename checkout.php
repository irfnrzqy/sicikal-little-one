<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="checkout.css">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Checkout Form</title>
</head>
<body>
	
		<h2> Checkout form</h2>
	<div class="row">
		<div class="col-100">
			<div class="container">
				<form action="/action_rage.php">
					<div class="row">
						<div class="col-58">
							<h3>Billing Address</h3>
		<label for="fname"><i class="fa fa-user mr-2"></i>Full Name</label>
		<input type="text" id="fname" name="firstname" placeholder="fullname">
		<label for="email"><i class="fa fa-envelope mr-2"></i>Email</label>
		<input type="text" id="email" name="email" placeholder="email">
		<label for="adr"><i class="fas fa-university mr-2"></i>Address</label>
		<input type="text" id="adr" name="Address" placeholder="Address">
		<label for="city"><i class="fas fa-city mr-2"></i>City</label>
		<input type="text" id="city" name="city" placeholder="City">
		<div class="row">
			<div class="col-25">
				<label for="state">State</label>
				<input type="text" id="State" name="state" placeholder="PP">
			</div>
			<div class="col-25">
				<label for="state">Zip</label>
				<input type="text" id="zip" name="zip" placeholder="1001">
			</div>
		</div>
	</div>
	<div class="class">
		<h3>Payment</h3>
		<label form="fname">Accepted Card</label>
		<div class="icon-container">
			<i class="fab fa-cc-visa  ml-2 mr-1" style="color: navy;"></i>
			<i class="fab fa-cc-amex mr-1" style="color: blue;"></i>
			<i class="fab fa-cc-mastercard mr-1" style="color: red;"></i>
			<i class="fab fa-cc-discover mr-1" style="color: orange;"></i>
		</div>
		<label for="cname">Name on Card</label>
		<input type="text" id="cname" name="cardnumber" placeholder="John More Done"></input>
	
		<label for="cname">Credit Card</label>
		<input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444"></input>

        <label for="cname">Exp Month</label>
		<input type="text" id="expmonth" name="expmonth" placeholder="September"></input>
		<div class="arow">
			<div class="col-25">
				<label for="expyear">Exp Year</label>
				<input type="text" id="expyear" name="cvv" placeholder="2020">
			</div>
			<div class="col-25">
				<label for="cvv">CVV</label>
				<input type="text" id="cvv" name="cvv" placeholder="532">
			</div>
		</div>
	</div>
	</div>
	<label>
	<input type="checkbox" checked="checked" name="sameadr">Shipping address same as billing</label>
	<button type="submit">Continue To checkbox</button>
				</form>
			</div>
		</div>
	<div class="col-25">
		<div class="container">
			<h4>Card<span class="price" style="color: black"><i class="fas fa-shopping-cart"></i><b>4</b></span></h4>
			<p><a href="#">Aku Suka Berkebun </a><span class="price">Rp.18.000,00</span></p>
			<p><a href="#">Aku Suka Berjualan </a><span class="price">Rp.18.000,00</span></p>
			<p><a href="#">Aku Suka Berkemah </a><span class="price">Rp.18.000,00</span></p>
			<p><a href="#">Aku Suka Berkunjung</a><span class="price">Rp.18.000,00</span></p>
			<hr>
			<p>Total <span class="price" style="color: black"><b>Rp.72.000,00</b></span></p>
		</div>
	</div>
	</div>
		</div>
	
</body>
</html>