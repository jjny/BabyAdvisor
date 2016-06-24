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
    
    var object2 = document.getElementsByClassName("list-moyen-svg");
    var svgDocument2 = [];
    var id2 = [];
    
    for (i = 0; i < object2.length; i++)
        {
            id2[i]= object2[i].id;
            svgDocument2[i] = object2[i].contentDocument;
        }
    
    for (i = 0; i < object2.length; i++){
        if(id2[i]=="un"){
                $("svg .unCercle", svgDocument2[i]).css({"fill":"#f1a82c","stroke":"#f1a82c"});
        }
        if(id2[i]=="deux"){
                $("svg .deuxCercle", svgDocument2[i]).css({"fill":"#f1a82c","stroke":"#f1a82c"});
                $("svg .unCercle", svgDocument2[i]).css({"fill":"#f1a82c","stroke":"#f1a82c"});
        }
        if(id2[i]=="trois"){
                    $("svg .troisCercle", svgDocument2[i]).css({"fill":"#f1a82c","stroke":"#f1a82c"});
                    $("svg .deuxCercle", svgDocument2[i]).css({"fill":"#f1a82c","stroke":"#f1a82c"});
                    $("svg .unCercle", svgDocument2[i]).css({"fill":"#f1a82c","stroke":"#f1a82c"});
        }
        if(id2[i]=="quatre"){
                    $("svg .quatreCercle", svgDocument[i]).css({"fill":"#f1a82c","stroke":"#f1a82c"});
                    $("svg .troisCercle", svgDocument2[i]).css({"fill":"#f1a82c","stroke":"#f1a82c"});
                    $("svg .deuxCercle", svgDocument2[i]).css({"fill":"#f1a82c","stroke":"#f1a82c"});
                    $("svg .unCercle", svgDocument2[i]).css({"fill":"#f1a82c","stroke":"#f1a82c"});
        }
        if(id2[i]=="cinque"){
                        $("svg .cinqueCercle", svgDocument2[i]).css({"fill":"#f1a82c","stroke":"#f1a82c"});
                        $("svg .quatreCercle", svgDocument2[i]).css({"fill":"#f1a82c","stroke":"#f1a82c"});
                        $("svg .troisCercle", svgDocument2[i]).css({"fill":"#f1a82c","stroke":"#f1a82c"});
                        $("svg .deuxCercle", svgDocument2[i]).css({"fill":"#f1a82c","stroke":"#f1a82c"});
                        $("svg .unCercle", svgDocument2[i]).css({"fill":"#f1a82c","stroke":"#f1a82c"});
        }
    } 
    
}