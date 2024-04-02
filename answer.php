<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="Area of a trapazoid" />
    <meta name="keywords" content="mths, ics2o" />
    <meta name="author" content="Pablo Fiallos" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.yellow-lime.min.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
    <link rel="manifest" href="site.webmanifest" />
    <title>Area of a trapazoid</title>
  </head>
  <body>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Area of a trapazoid</span>
        </div>
      </header>
      <main class="mdl-layout__content">
        <div class="right-image">
          <img src="./images/trapezoid.svg" alt="trapezoid" width="250" />
        </div>
        <div class="page-content-php">
          <div id="user-info">
            <?php
              $a_value = $_POST["a_value"];
              $b_value = $_POST["b_value"];
              $h_value = $_POST["h_value"];
              $area = ($a_value + $b_value) / 2 * $h_value;
              $area_rounded = round($area, 2);
              echo "A = " . $area_rounded . "u <sup>2</sup>";
            ?>
          </div>
        </div>
      </main>
    </div>
  </body>
</html>