<?php

$from="test.elithecomputerguy.com";
$email="johnyboy@umich.edu";
$subject=$_POST['email'];
$message=$_POST['address'];


mail($email, $subject, $message, "From:".$from);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Plastic Pickup</title>
    <link rel="icon" 
      type="image/png" 
      href="/images/favicon.ico">

    <!-- Bootstrap -->
    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <div class="html">
    <div class="grid">
      <body>
        <div class="header">
        </div>
        <div class="motto">Helping you keep your <span class="greentext">environment</span> plastic bag-<span class="greentext">free</span>.
        </div>

        <div class="confirmation">
        	<span class="greentext">Done!</span> Just put all your plastic bags in a bunch outside the address where I can get it easily and I'll pick it up within 24 hours. That's it!
        </div>
        <div class="count"><span class="greentext">245</span> bags recycled so far</div>

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
          <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/bootstrap.min.js"></script>
	</body>
  </div>
  </div>
</html>