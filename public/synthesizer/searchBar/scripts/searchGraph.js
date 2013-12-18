function isValidChemId(term) {
    var id = parseInt(term, 10);
    return !isNaN(id) && id.toString() === term;  
}

function searchGraph(term) {
    //Check if search term contains "graph"
    //if (term.indexOf("graph") == -1) {
    //    return false;
    //}    

    var baseURL = "http://pathway.berkeley.edu:28000/getpaths?";
    var defaultOptions = "&nodeLimit=50";
    var decomposeOption = "&decompose=false";
    var query = "";
    if (term.substring(0, 10) == "decompose ") {
        term = term.substring(10);
        decomposeOption = "&decompose=true";
    }
    if (term.substring(0, 6) == "InChI=") {
        query = "inchi=" + encodeURIComponent(term);
    } else if (isValidChemId(term)) {
        query = "chemid=" + term;
    } else {
        query = "name=" + encodeURIComponent(term);
    }
    
    var src = baseURL + query + defaultOptions + decomposeOption;
    document.getElementById('searchResult').style.display = "inline";
    document.getElementById('searchResult').src = src;
    //document.getElementById('mainContent').innerHTML = '<iframe id="searchResult" frameborder=0 seamless="seamless" style="width: 100%; height="600px" scrolling="auto" src=' + src + '></iframe>';
} 
