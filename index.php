<?php
echo "Remote addr: " . $_SERVER['REMOTE_ADDR']."<br/>";
echo "X Forward: " . $_SERVER['HTTP_X_FORWARDED_FOR']."<br/>";
echo "Server IP: " . $_SERVER['SERVER_ADDR']."<br/>";
echo "Client Browser: " . $_SERVER['HTTP_USER_AGENT']."<br/>";
if (!empty($_SERVER['HTTPS']))
{
  echo 'Protocol: HTTPS';
}
else
{
echo 'Protocol: HTTP'."\n";
}


?>
