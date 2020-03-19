<html>
   <head>
       <title>recipe collection</title>
       <link rel="stylesheet" href="style1.css" type="text/css"></link>
   </head>
   
   
   
<?php

require_once 'Modell.php';
use Modell\sort_recipecollection;

$sortart=$_GET["sortart"];
$SortRezept=new sort_recipecollection();

$SortRezept->SortMethod($sortart);


    ?>
<h2><a href="index.php">zurück</a></h2>

</html>