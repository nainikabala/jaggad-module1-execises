<?php

$fileName = "test.txt";
$someContent = "Add this to the file\n";

if (!is_writable($fileName)){
    echo "The file $fileName is not writable";
} else {
    $fp = fopen($fileName, 'a');
    fwrite($fp, $someContent);
    fclose($fp);
}

$filePhp = fopen("test.txt", "r");



while(! feof($filePhp)) {
  $line = fgets($filePhp);
  echo $line. PHP_EOL;
}

fclose($filePhp);