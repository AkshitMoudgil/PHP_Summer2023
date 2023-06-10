<?php
// add code here
require_once('database.php');
$res = $database->read();
?>
<!DOCTYPE html>
<html>

<head>
	<title>Pizza Record</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="this is the record page for all orders">
	<meta name="robots" content="noindex, nofollow">
	<!--stylesheet linked-->
	<link rel="stylesheet" href="./css/style.css">
</head>

<body class="records">
	<header>
		<h1>ORDER Details</h1>
	</header>
	<div>
		<!--creating table to display the data stored at backend sql database table-->
		<table>
			<tr>
				<th>ID</th>
				<th>Full Name</th>
				<th>Phone Number</th>
				<th>Email</th>
				<th>Delivery Address</th>
				<th>Pizza Size</th>
				<th>Crust Type</th>
				<th>Toppings</th>
				<th>Sauces</th>
				<th>Cheese</th>
				<th>Payment Method</th>
			</tr>
			<?php
			while ($r = mysqli_fetch_assoc($res)) {
				?>
				<tr>
					<!--data stored after gathering from sql backend-->
					<td>
						<?php echo $r['id']; ?>
					</td>
					<td>
						<?php echo $r['fullName']; ?>
					</td>
					<td>
						<?php echo $r['phoneNo']; ?>
					</td>
					<td>
						<?php echo $r['email']; ?>
					</td>
					<td>
						<?php echo $r['deliveryAddress']; ?>
					</td>
					<td>
						<?php echo $r['pizzaSize']; ?>
					</td>
					<td>
						<?php echo $r['crustType']; ?>
					</td>
					<td>
						<?php echo $r['finalToppings']; ?>
					</td>
					<td>
						<?php echo $r['finalSauces']; ?>
					</td>
					<td>
						<?php echo $r['cheeseType']; ?>
					</td>
					<td>
						<?php echo $r['paymentMethod']; ?>
					</td>
				</tr>
				<?php
			}
			?>
		</table>
	</div>
</body>

</html>