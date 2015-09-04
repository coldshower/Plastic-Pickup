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


        <form action="emailscript.php" method="POST">
          <div class="input1">
        
              <span class="emaillabel">email (for confirmation) </span>
            
              <input class="inputs" type="text" name="email" size="35" placeholder="catdog@gmail.com (I hate spam too!)" spellcheck="false" />
          </div>

          <div class="input2">
          
           
              <span class="addresslabel">address (for pickup) </span> 
            
                <input class="inputs" type="text" name="address" size="35" placeholder="123 Cat Street, Ann Arbor, MI 48104" spellcheck="false" />
          </div>

          <div class="input3">
              <label>
                  <input class="submitbutton" type="submit" value=""/>
              </label>
          </div>
        </form>

        <div class="mapdirections">I am not Lance Armstrong so this is the only area I can pickup from for now.</div>
        <div class="maps">

        </div>
        
        

          <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
          <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/bootstrap.min.js"></script>
      </body>
    </div>
  </div>
</html>