<?php
$filePhp = fopen("file.txt", "r");



while(! feof($filePhp)) {
  $line = fgets($filePhp);
  echo $line. "<br>";
}

fclose($filePhp);

