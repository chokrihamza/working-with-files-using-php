<?php
$file = "exemple.txt";
if ($handle = fopen($file, 'r')) {

  echo $content = fread($handle, filesize($file));
  echo filesize($file);
  fclose($handle);
} else {
  echo 'The application was not able to right on the file';
}