

<?php


?>

  <div class="container">
  <h1>Create new recipes with ingredients</h1>
  <table>
  <form method="POST" action="InsertMethod.php"  enctype="multipart/form-data">
  <tr><td> Title </td> <td><input type="text" name="title" > </td></tr>
  
  <tr><td>Ingredients</td> <td><textarea rows='15' name="ingredients" placeholder="Ihre TEXT"></textarea></p></td><tr>
  <tr><td>Description</td><td><textarea  rows='15' name="description" placeholder="Ihre TEXT"></textarea></p></td><tr>

  <tr><td>Upload </td> <td><input type="submit" name="submit_image"value=insert></td></tr>

  
  </form>
  </table>	
  
<h2><a href="index.php">zurück</a></h2>
 
 
</div>

