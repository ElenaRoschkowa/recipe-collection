$(document).ready(function(){
 $('.hover').mousemove(function(e){
  $('#hint').text(e.clientX + ' ' + e.clientY);
 });
});  
