<?php

require_once('autoloader.php');
$cat = new Cat('garfield');
echo($cat->getName());
echo "<br>";
echo($cat->meow());