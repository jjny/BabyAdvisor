window.onload=function(){ 
    
    var object = document.getElementsByClassName("notes-svg");
    var svgDocument = [];
    var id = [];
    
    for (i = 0; i < object.length; i++)
        {
            id[i]= object[i].id;
            svgDocument[i] = object[i].contentDocument;
        }
    
    for (i = 0; i < object.length; i++){
        if(id[i]=="un"){
                $("svg .unEtoile", svgDocument[i]).css({"fill":"#f1a82c"});
        }
        if(id[i]=="deux"){
                $("svg .deuxEtoile", svgDocument[i]).css({"fill":"#f1a82c"});
                $("svg .unEtoile", svgDocument[i]).css({"fill":"#f1a82c"});
        }
        if(id[i]=="trois"){
                    $("svg .troisEtoile", svgDocument[i]).css({"fill":"#f1a82c"});
                    $("svg .deuxEtoile", svgDocument[i]).css({"fill":"#f1a82c"});
                    $("svg .unEtoile", svgDocument[i]).css({"fill":"#f1a82c"});
        }
        if(id[i]=="quatre"){
                    $("svg .quatreEtoile", svgDocument[i]).css({"fill":"#f1a82c"});
                    $("svg .troisEtoile", svgDocument[i]).css({"fill":"#f1a82c"});
                    $("svg .deuxEtoile", svgDocument[i]).css({"fill":"#f1a82c"});
                    $("svg .unEtoile", svgDocument[i]).css({"fill":"#f1a82c"});
        }
        if(id[i]=="cinque"){
                        $("svg .cinqueEtoile", svgDocument[i]).css({"fill":"#f1a82c"});
                        $("svg .quatreEtoile", svgDocument[i]).css({"fill":"#f1a82c"});
                        $("svg .troisEtoile", svgDocument[i]).css({"fill":"#f1a82c"});
                        $("svg .deuxEtoile", svgDocument[i]).css({"fill":"#f1a82c"});
                        $("svg .unEtoile", svgDocument[i]).css({"fill":"#f1a82c"});
        }
    }          
    
}