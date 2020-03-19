
 <html>



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

<head>
       <title>recipe collection</title>
       <link rel="stylesheet" href="style.css" type="text/css"></link>
   </head>
<body>

<div class="container">
  <img src="background.jpg" class="icon1">
  <h1>existing recipes</h1>
  <form action="sortieren.php" method="POST">
  <button type="submit" name="submit" class="button">sortieren</button>
  </form>


</div>

</body>


<?php

$connect = mysqli_connect('localhost', 'root', '', 'existing_recipes');


 $test="SELECT * FROM existing_recipes ";
     foreach ($connect->query($test) as $row) {
     echo "<h1>".$row['name_rezept']." </h1>"."<br />";
     $name_rezept=$row['name_rezept'];
        
     $test2="SELECT * FROM ingredients where name='$name_rezept'"; 
     echo "<h2>Ingredients</h2>";
     foreach ($connect->query($test2) as $row2) {
     echo "*".$row2['name']." ".$row2['text']."<br />";}
     echo "<h4>".$row['description']." </h1>"."<br />";
     }
    ?>
     <h5><a href="index.php">zurück</a></h5>
     
  </html>