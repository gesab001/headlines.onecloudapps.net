<!DOCTYPE html>
<html>
<body>

<div id="demo"></div>

<script>
var xhttp = new XMLHttpRequest();

xhttp.open("GET", "../../cgi-bin/headlines.py", false);
xhttp.send();

xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    myFunction(this);
    }
};
xhttp.open("GET", "nzherald.xml", false);
xhttp.send();

function myFunction(xml) {
    var xmlDoc = xml.responseXML;
    var titles = xmlDoc.getElementsByTagName("title");
    var text ="";
    for (var x=2; x<titles.length;x++){
         text += "<p>"+titles[x].childNodes[0].nodeValue+"</p>";
    }     
    document.getElementById("demo").innerHTML = text;
}
</script>

</body>
</html> 
