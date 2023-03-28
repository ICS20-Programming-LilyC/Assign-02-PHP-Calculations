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
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.pngg">
    <link rel="manifest" href="./fav_index/site.webmanifest">
    
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- Title -->
    <title>Discount Calculator in PHP</title>
  </head>

    <!--PHP code-->
    <?php echo "<h1>Discount Calculator in PHP</h1>" ?>
    <?php echo "<h3>Please enter the following requirements below:</h3>" ?>
    <form action="./calculations.php" method="post" target="result">
      <label for="originalPrice">Price of your purchase:</label>
      <input type="number" step="0.01" id="orginal-price" placeholder="Price" name="orginal-price">
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
    </center>
  </body>
</html>