<?php
$filePhp = ["hi","i love",];




// while(! feof($filePhp)) {
//   $line = fgets($filePhp);
//   echo $line. "<br>";
// }

// fclose($filePhp);

foreach ($filePhp as $key => $i) {
    echo $i;
}