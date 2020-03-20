<?php

$connect = mysqli_connect('localhost', 'root', '', 'existing_recipes');
$test="SELECT * FROM existing_recipes";


    foreach ($connect->query($test) as $data) {
     //echo "<h1>".$row['name_rezept']." </h1>"."<br />"; 
     echo "<h2><a href='Seite.php?name=".$data['description ']."' style='color: red; font-size: 10pt'>".$data['description ']."</a></h2>";     
}



$test=$_GET["sortart"];
echo "HALLO".$test;

