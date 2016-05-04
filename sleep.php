<?php
ob_start();
  date_default_timezone_set("CST6CDT");
  $currentDay = getdate()["weekday"];

  if(defined('STDIN') )
  {
    echo "Today is...\n";

    sleep(1);
    echo "$currentDay.\n";
    exit();
  }

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Today Is...?</title>
</head>

<body>
<?php

  echo "<h1>Today is...</h1>";
      ob_flush();
    ob_clean();
  sleep(1);
  echo "<h2>$currentDay.</h2> \n";

  while(FALSE)
  {
    echo "No, <p>\n" .
         "Today is " . $currentDay . ".\n";
  }
  ob_end_flush();

?>
</body>

</html> 
