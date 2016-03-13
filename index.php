<?php

$configFileName = "config.txt";
$configFileContent = file_get_contents($configFileName);

$randomNumber = 0;

do {
  $randomNumber = rand(1,20);
} while ($randomNumber == $configFileContent);

$configFile = fopen($configFileName, "w") or die();
fwrite($configFile, $randomNumber);
fclose($configFile);

$dir = 'images/';
$fileName = '600-'. $randomNumber .'.jpeg';
$path = $dir . $fileName;

header("Content-Type: image/jpg");
header("Content-Length: " . filesize($path));

readfile($path);

?>
