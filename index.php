<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
   <head>
        <title>recipe collection</title>
        
        <!-- jQuery -->
        <script src="jquery-3.1.1.min.js" type='text/javascript'></script>
        <!-- Bootstrap -->
        <link href='bootstrap/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
        <script src='bootstrap/js/bootstrap.min.js' type='text/javascript'></script>

        <link href='style1.css' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="style1.css" type="text/css"></link>
        <script src ="https://code.jquery.com/jquery-1.12.4.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">  
        <script src ="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    
        

   </head>
   
 
   
 
 <div class="header"><h1>Rezepte</h1></div>
  

  <div class="ud_box">  
  <form action="SearchMethod.php" method="POST" id="ud_form2">
  <label for="site-search">Rezeptsuche:</label>
  <input type="search" id="site-search" name="search"
  aria-label="Search through site content">
  <button type="submit" name="submit" class="button" >search</button>
  </form>
 
   
  <form action="SortMethod.php" method="POST" id="ud_form">
  <p>Sortieren:</p>
    <fieldset >
    <input type="radio" id="mc" name="sortart" value="A-Z" checked="checked">
    <label for="mc"> A-Z</label> 
    <input type="radio" id="vi" name="sortart" value="Z-A">
    <label for="vi"> Z-A</label>
    <button type="submit" name="submit"  class="button">sortieren</button>
   </fieldset>
   </form>

 <div class="ud_box" id="ud_output">
      
        <?php

        require_once 'Modell.php';
        use Modell\recipecollection;
        $AllRezepte=new recipecollection();
        $array=$AllRezepte->SelectAllRezept();

        foreach ($array as $row) 
       // echo '<tr><td><b><a href="Seite.php?name=".$row."  " id="'.$row.'" title=" ">'.$row.'</a></b></td></tr></br>';
        echo "<h1><a href='Seite.php?name=".$row."  ' style='color: green; font-size: 16pt' id='.$row.' >".$row."</a></h1>"; 

        ?>
 </div>
 <form action="Insert_Modell.php" method="POST">
 <button type="submit" name="submit" class="button">add_recipes</button>
 </form>  
 <p id="toplink"><a href="#top">zum Seitenanfang</a></p>


 </div> 

<script>
$('#ud_form').submit(function(event){ 
  event.preventDefault () ;
  $.ajax({
      type:'GET',
      url: 'SortMethod.php',
      data: $(this).serialize(),
      success: function(data){
          $('#ud_output').html(data);
      }
  });
  
 $('#ud_form')[0].reset(); 
});

$('#ud_form2').submit(function(event){ 
  event.preventDefault () ;
  $.ajax({
      type:'GET',
      url: 'SearchMethod.php',
      data: $(this).serialize(),
      success: function(data){
          $('#ud_output').html(data);
      }
  });
  
 $('#ud_form')[0].reset(); 
});


 

$(document).ready(function(){ 

 $('a').tooltip({
  classes:{
   "ui-tooltip":"highlight"
  },
  position:{ my:'left center', at:'right+50 center'},
  content:function(result){
   $.post('fetch.php', {
    id:$(this).attr('id')
   }, function(data){
    result(data);
   });
  }
 });
  
});  

</script>



</body>
</html>

