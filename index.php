<?php
    require_once('assets/func/func.php');
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ultimate Scraper</title>
    <link rel="stylesheet" href="assets/css/foundation.css" />
    <style>
    #tradePlaceholder {
        display:none;
    }
    </style>
    <script src="assets/js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <div class="row">
      <div class="large-12 columns">
        <h1>Welcome to UScraper</h1>
      </div>
    </div>
    
    <div class="row">
      <div class="large-12 columns">
      	<div class="panel">
            <?= stateDropDown(); ?>
      	</div>
        <div class="panel" id="tradePlaceholder">
            <?= tradeDropDown(); ?>
        </div>
      </div>
      </div>
    
    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
      $(function() {
          $('#state').change(function() {
            $('#tradePlaceholder').show();
          });
      });
    </script>
  </body>
</html>
