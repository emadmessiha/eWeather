<?php
$current_page=basename($_SERVER['PHP_SELF']);
$home="index.php";
$fiveday="five-day.php";
$help="help.php";

?>
<div class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
            <a href="/" class="navbar-brand"><img src="images/eweather.png">Emad WEATHER</a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li<?php if($current_page==$home){ echo ' class="active"'; } ?>>
                <a href="/">Current</a>
              </li>
              <li<?php if($current_page==$fiveday){ echo ' class="active"'; } ?>>
                <a href="<?php echo $fiveday; ?>">5-Day forecast</a>
              </li>
              <li<?php if($current_page==$help){ echo ' class="active"'; } ?>>
                <a href="<?php echo $help; ?>">Help</a>
              </li>
            </ul>
          </div>
        </div>
      </div>