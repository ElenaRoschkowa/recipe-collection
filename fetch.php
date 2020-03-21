<?php



$connect = mysqli_connect('localhost', 'root', '', 'existing_recipes');
$temp=$_POST["id"];
$test="SELECT * FROM existing_recipes where name_rezept='".$_POST["id"]."'";


    foreach ($connect->query($test) as $data) {
     //echo "<h1>".$row['name_rezept']." </h1>"."<br />"; 
     echo $data['description'];     
}




