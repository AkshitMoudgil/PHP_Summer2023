<!DOCTYPE html>
<html>

<head>
  <title>Pizza Order Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="this is a pizza order form">
  <meta name="robots" content="noindex, nofollow">
  <!--stylesheet linked-->
  <link rel="stylesheet" href="./css/style.css">
</head>

<body class="page">
  <header>
    <h1>CUSTOMIZE Your Own PIZZA</h1>
  </header>
  <!--creating form-->
  <form method="post">
    <!--using different fieldset elements-->
    <fieldset>
      <!--text input used-->
      <legend>Customer Information</legend>
      <label for="full-name">Full Name:</label>
      <input type="text" id="full-name" name="fullName" required>

      <label for="phone-number">Phone Number:</label>
      <input type="tel" id="phone-number" name="phoneNo" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="delivery-address">Delivery Address:</label>
      <input type="text" id="delivery-address" name="deliveryAddress" required>
    </fieldset>

    <fieldset>
      <!--radio input used-->
      <legend>Pizza Size</legend>
      <label for="size-small">Small (8-inch)</label>
      <input type="radio" id="size-small" name="pizzaSize" value="small" required>

      <label for="size-medium">Medium (12-inch)</label>
      <input type="radio" id="size-medium" name="pizzaSize" value="medium">

      <label for="size-large">Large (16-inch)</label>
      <input type="radio" id="size-large" name="pizzaSize" value="large">

    </fieldset>

    <fieldset>
      <!--radio input used-->
      <legend>Crust Type</legend>
      <label for="crust-thin">Thin Crust</label>
      <input type="radio" id="crust-thin" name="crustType" value="thin" required>

      <label for="crust-thick">Thick Crust</label>
      <input type="radio" id="crust-thick" name="crustType" value="thick">

      <label for="crust-stuffed">Stuffed Crust</label>
      <input type="radio" id="crust-stuffed" name="crustType" value="stuffed">
    </fieldset>

    <fieldset>
      <!--checkbox input used-->
      <legend>Toppings</legend>
      <input type="checkbox" id="topping-pepperoni" name="toppings[]" value=" pepperoni ">
      <label for="topping-pepperoni">Pepperoni</label>

      <input type="checkbox" id="topping-mushrooms" name="toppings[]" value=" mushrooms ">
      <label for="topping-mushrooms">Mushrooms</label>

      <input type="checkbox" id="topping-sausage" name="toppings[]" value=" sausage ">
      <label for="topping-sausage">Sausage</label>

      <input type="checkbox" id="topping-chicken" name="toppings[]" value=" chicken ">
      <label for="topping-chicken">Chicken</label>

      <input type="checkbox" id="topping-jalapenos" name="toppings[]" value=" jalapenos ">
      <label for="topping-jalapenos">Jalapenos</label>

      <input type="checkbox" id="topping-bacon" name="toppings[]" value=" bacon ">
      <label for="topping-bacon">Bacon</label>


    </fieldset>

    <fieldset>
      <!--checkbox input used-->
      <legend>Sauces</legend>
      <input type="checkbox" id="sauce-marinara" name="sauces[]" value=" Marinara ">
      <label for="sauce-marinara">Marinara</label>

      <input type="checkbox" id="sauce-pesto" name="sauces[]" value=" Pesto ">
      <label for="sauce-pesto">Pesto</label>

      <input type="checkbox" id="sauce-alfredo" name="sauces[]" value=" Alfredo ">
      <label for="sauce-alfredo">Alfredo</label>

      <input type="checkbox" id="sauce-barbecue" name="sauces[]" value=" Barbecue ">
      <label for="sauce-barbecue">Barbecue</label>

      <input type="checkbox" id="sauce-ranch" name="sauces[]" value=" Ranch ">
      <label for="sauce-ranch">Ranch</label>
    </fieldset>

    <fieldset>
      <!--radio input used-->
      <legend>Cheese</legend>
      <label for="cheese-mozzarella">Mozzarella</label>
      <input type="radio" id="cheese-mozzarella" name="cheeseType" value="mozzarella" required>

      <label for="cheese-cheddar">Cheddar</label>
      <input type="radio" id="cheese-cheddar" name="cheeseType" value="cheddar">

      <label for="cheese-parmesan">Parmesan</label>
      <input type="radio" id="cheese-parmesan" name="cheeseType" value="parmesan">
    </fieldset>




    <fieldset>
      <!--dropDown menu created to choose payment method-->
      <legend>Payment Method</legend>
      <label for="payment-method">Choose your mode of payment:</label>
      <select id="payment-method" name="paymentMethod" required>
        <option value="" disabled selected>Choose Payment Option</option>
        <option value="CashOnDelivery">Cash on Delivery</option>
        <option value="CreditCard">Credit Card</option>
        <option value="DebitCard">Debit Card</option>
      </select>
    </fieldset>


    <button type="submit">Submit Order</button>
  </form>
  <footer>
    <!--order record databasePage linked to the main page-->
    <a href="view.php">View the ORDER records</a>
  </footer>
  <?php
  //data sanitizing and storage after user input
  require_once('database.php');
  if (isset($_POST) & !empty($_POST)) {
    $fullName = $database->sanitize($_POST['fullName']);
    $phoneNo = $database->sanitize($_POST['phoneNo']);
    $email = $database->sanitize($_POST['email']);
    $deliveryAddress = $database->sanitize($_POST['deliveryAddress']);
    $pizzaSize = $database->sanitize($_POST['pizzaSize']);
    $crustType = $database->sanitize($_POST['crustType']);
    $finalToppings = " ";
    $toppingName = $_POST['toppings'];
    foreach ($toppingName as $toppingValue) {
      $finalToppings .= $toppingValue;
    }
    $finalSauces = " ";
    $sauceName = $_POST['sauces'];
    foreach ($sauceName as $sauceValue) {
      $finalSauces .= $sauceValue;
    }
    $cheeseType = $database->sanitize($_POST['cheeseType']);
    $paymentMethod = $database->sanitize($_POST['paymentMethod']);


    $res = $database->create($fullName, $phoneNo, $email, $deliveryAddress, $pizzaSize, $crustType, $finalToppings, $finalSauces, $cheeseType, $paymentMethod);
    if ($res) {
      echo "<p>Good Job!</p>";
    } else {
      echo "<p>you failed</p>";
    }

  }
  ?>

</body>

</html>