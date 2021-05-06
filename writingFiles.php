<?php
$file = "exemple.txt";
if ($handle = fopen($file, 'w')) {

  fwrite($handle, 'php and this is relly a good stuff');
  fclose($handle);
} else {
  echo 'The application was not able to right on the file';
}