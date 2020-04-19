<!DOCTYPE html>
<html>
<body>


<select name="news" onchange="changeNews(this.value)">
<option selected value="nzherald">NZ Herald</option>
<option value="smh">Sydney Morning Herald</option>
</select>

<div id="demo"></div>

<script>

var xhttp = new XMLHttpRequest();
var news = "smh";
changeNews(news);

function changeNews(news){
 news = news;
 xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       loadNews(news);
    }
 };
 xhttp.open("GET", "../../cgi-bin/headlines2.py?news="+news, true);
 xhttp.send();
}

function loadNews(news){

 xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    myFunction(this);
    }
 };
 xhttp.open("GET", news+".xml", true);
 xhttp.send();
}

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
