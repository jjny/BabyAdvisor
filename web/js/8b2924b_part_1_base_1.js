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

function displayHome(){
    $('#menu').css({"display":"block"});
    $('#main-content').css({"display":"block"}); 
    $('#close').css({"display":"none"});
    $('#menu-panel').css({"display":"none"});
}
function displayMenu(){
    $('#menu').css({"display":"none"});
    $('#main-content').css({"display":"none"}); 
    $('#close').css({"display":"block"});
    $('#menu-panel').css({"display":"block"});
}