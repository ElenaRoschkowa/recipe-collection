<?php

require_once 'Modell.php';
use Modell\insert_recipecollection;


$title=$_POST["title"];
$ingredients=$_POST["ingredients"];
$description=$_POST["description"];



$InsertRezept=new insert_recipecollection($title,$ingredients,$description);

$InsertRezept->InsertRezept();
$InsertRezept->SelectAllRezept();

 
   ?>
 <h2><a href="index.php">zurück</a></h2>