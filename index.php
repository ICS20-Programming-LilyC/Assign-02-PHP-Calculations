<!DOCTYPE html>
<html lang="en-ca">
  <head>

    <!-- Meta data -->
    <meta charset="utf-8">
    <meta name="description" content="Discounting calculor in PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Lily C">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index1/apple-touch-ion.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index1/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index1/favicon-16x16.png">
    <link rel="manifest" href="./fav_index1/site.webmanifest">

    
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">

    <!--Title-->
    <title>Discount Calculator in PHP</title>
  </head>
    <?php echo "<h1>Discount Calculator in PHP</h1>" ?>

    <!--Image-->
      <center>
        <img src="./images/discount-coupon.png">
      </center>

    <!--Header-->
    <?php echo "<h3>Please enter the following requirements below:</h3>" ?>
  
    <!--PHP code-->
    <form action="./calculations.php" method="post" target="result">
      <label for="originalPrice">Price of your purchase:</label>
      <input type="number" step="0.01" id="original-price" placeholder="Price" name="original-price">
      <br><br>
      <label for="discountRate">Discount rate:</label>
      <input type="number" step="0.01" id="discount-rate" placeholder="(Write in decimal form)" name="discount-rate">
      <br><br>
      <input type="submit" value="Enter">
      <br><br>
    </form>
    <div id="result"></div>
    <center>
      <iframe id="result" name="result"></iframe>
      <br>
      <br>
      </center>

    <!--Question to go with my extra founctionality-->
  <h2>Complete the following text field, by indicating your favourite store to shop at!</h2>

    <!--MDL Textfield with Floating Label-->
      <form action="#">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" type="text" id="sample3">
          <label class="mdl-textfield__label" for="sample3">is my favourite store to shop at.</label>
    
    <!--MDL checkboxes-->
  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
  <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input" checked>
  <span class="mdl-checkbox__label">Checkbox</span>
</label>

        </div>
      </form>
  </body>
</html>