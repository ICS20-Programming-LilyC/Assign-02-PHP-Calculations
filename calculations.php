<?php

'use strict'

  //Get the user input
  $originalPrice = floatval($_POST["orginal-price"]);
  $discountRate = floatval($_POST["discount-rate"]);

  //Calculate the discounted price
  $discountAmount = ($originalPrice - $originalPrice * $discountRate);
  $discountAmountRounded = round($discountAmount, 2);

  //Calculate the amount of money you saved
  $totalSaved = ($originalPrice * $discountRate);
  $totalSavedRounded = round($totalSaved, 2);
?>

<h3>Results:</h3>
The discounted price of your purchase is $ <?php echo "$discountAmountRounded" ?>.
<br>
The total amount of money you saved is $ <?php echo "$totalSavedRounded" ?>.