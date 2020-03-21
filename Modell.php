<?php
namespace Modell;

class recipecollection
{   

    public static $connect;


    public function __construct()
    {
        self::$connect = mysqli_connect('localhost', 'root', '', 'existing_recipes');
    }
   

   public function SelectAllRezept()
    {
     $array=array();
     $i=0;
     $test="SELECT * FROM existing_recipes ";
     foreach (self::$connect->query($test) as $row) {
     $array[$i] = $row['name_rezept']; 
     $i++;
     //echo "<h1><a href='Seite.php?name=".$row['name_rezept']."' style='color: green; font-size: 16pt'>".$row['name_rezept']."</a></h1><br>"; 
     }
     return $array;
    }

}

class insert_recipecollection extends recipecollection
{
    public $title;
    public $ingredients;
    public $description;
    
    public function __construct($title,$ingredients,$description)
    {
        parent::__construct();
        $this->title = $title;
        $this->ingredients = $ingredients;
        $this->description = $description; 
    }
    
    public function InsertRezept()
    {
        $ingredientss = explode("\n", str_replace("\r", "", $this->ingredients));
        $sql="INSERT INTO existing_recipes (name_rezept, description ) VALUES ('$this->title','$this->description')";
        if (self::$connect->query($sql) === TRUE) {
        //echo "New record created successfully";
        } else {
        echo "Error: " . self::$connect . "<br>" . self::$connect->error;
        }

        foreach ($ingredientss as $row) {       
        $sql="INSERT INTO ingredients (name , text ) VALUES ('$this->title','$row')";
        if (self::$connect->query($sql) === TRUE) {
        //echo "New record created successfully";
        } else {
        echo "Error: " . self::$connect . "<br>" . self::$connect->error;
        }
        }
        
        
    }
    
}

class sort_recipecollection extends recipecollection
{
    public function SortMethod($sortart)
    {if (($sortart=='A-Z' ) or ($sortart==''))  { 
    $test="SELECT * FROM existing_recipes ORDER BY name_rezept ASC ";}
    else {$test="SELECT * FROM existing_recipes ORDER BY name_rezept DESC ";}
    foreach (self::$connect->query($test) as $row) {
    echo "<h1><a href='Seite.php?name=".$row['name_rezept']."' style='color: green; font-size: 16pt'>".$row['name_rezept']."</a></h1>";  
     }

    }
    
}

class search_recipecollection extends recipecollection
{
     public function SearchRezept($search)
    {
    $test="SELECT * FROM existing_recipes WHERE name_rezept LIKE '%$search%' ";
    foreach (self::$connect->query($test) as $row) {
    echo "<h1><a href='Seite.php?name=".$row['name_rezept']."' style='color: green; font-size: 16pt'>".$row['name_rezept']."</a></h1>";  
     }
    }
    
}


class select_recipe extends recipecollection
{

   public function SelectRezept($name)
    {
    $test="SELECT * FROM existing_recipes where name_rezept='$name'";
    foreach (self::$connect->query($test) as $row) {
    echo "<h2>".$row['name_rezept']." </h2>"."<br />";     
    $name_rezept=$row['name_rezept'];       
    $test2="SELECT * FROM ingredients where name='$name_rezept'"; 
    echo "<h2>Ingredients</h2>";
    foreach (self::$connect->query($test2) as $row2) {
    echo "*".$row2['name']." ".$row2['text']."<br />";}
    echo "<h4>".$row['description']." </h1>"."<br />";
     }
    }
}