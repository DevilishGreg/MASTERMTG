<!DOCTYPE html>
<html> 
  <head>
    <meta charset="UTF-8">
<!--
File: image.html
91.462 Project: Mastering Magic
Michael Mammosser, Computer Science Major @ UMass Lowell
Contact: michael_mammosser@student.uml.edu
Copyright (c) 2015 by Michael Mammosser.  All rights reserved.
Updated on March 30, 2015.

A simple html/php page that displays Magic the gathering decks.
-->
    <title>Image</title>

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  </head>
  <body>
    <script>
      $request = '<?php echo $_GET["search"] ?>';
    </script>
    <div id='image'></div>
  </body>
  <script src='js/image.js'></script>
</html> 