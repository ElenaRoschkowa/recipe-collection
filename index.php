<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
   <head>
        <title>recipe collection</title>
        
  
       <title>recipe collection</title>
       <link rel="stylesheet" href="style1.css" type="text/css"></link>
       <script src ="https://code.jquery.com/jquery-1.12.4.js"></script>
       <script src ="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
       <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>


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
        echo '<h1><a href="Seite.php?name='.$row.'  " class= "hover" id='.$row.' style="font-size:16pt;color: green" title=" ">'.$row.'</a></h1>';
        //echo "<h1><a href='Seite.php?name=".$row."  ' style='color: green; font-size: 16pt' id='.$row.' >".$row."</a></h1>"; 

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

 $('hover').tooltip({

   title: fetchData,
   html: true,
   placement: 'right'
  });

  function fetchData()
  {
   var fetch_data = '';
   var element = $(this);
   var id = element.attr("id");
   $.ajax({
    url:"fetch.php",
    method:"POST",
    async: false,
    data:{id:id},
    success:function(data)
    {
     fetch_data = data;
    }
   });   
   return fetch_data;
  }
 });
</script> 





</body>
</html>

