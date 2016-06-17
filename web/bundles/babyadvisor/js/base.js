$(document).ready(function(){ 
    $("#now-anchor").on('click', function(e){
    
   // prevent default anchor click behavior
   e.preventDefault();

   // store hash
   var hash = this.hash;
    
    var navOffset;
  navOffset = $('#navigation-bar').height();

    // animate
   $('html, body').animate({
       scrollTop: $(hash).offset().top - navOffset
     }, 400);
    });
});
$(document).ready(function(){ 
    $("#best-notes-anchor").on('click', function(e){
    
   // prevent default anchor click behavior
   e.preventDefault();

   // store hash
   var hash = this.hash;
    
    var navOffset;
  navOffset = $('#navigation-bar').height();

    // animate
   $('html, body').animate({
       scrollTop: $(hash).offset().top - navOffset
     }, 500);
    });
});