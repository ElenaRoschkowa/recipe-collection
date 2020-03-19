<?php

$name=$_GET["name"];
require_once 'Modell.php';
use Modell\select_recipe;

$Rezept=new select_recipe();
$Rezept->SelectRezept($name);

?>
 <h2><a href="index.php">zurück</a></h2>

