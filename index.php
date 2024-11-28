<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="resp.css">


<script>
var xmlhttp=new XMLHttpRequest();
xmlhttp.onreadystatechange=function() {
if (this.readyState==4 && this.status==200) {
      document.getElementById("menulist").innerHTML=this.responseText;
   }
}
xmlhttp.open("GET","menu.php",true);
xmlhttp.send();

</script>


<script>
function showCat(str) {
  if (str == "") {
    document.getElementById("catlist").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("catlist").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","categ.php?q="+str,true);
    xmlhttp.send();
  }
}

</script>


<script>
function addItem(str) {
  if (str == "") {
    document.getElementById("cview").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("cview").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","addcat.php?q="+str,true);
    xmlhttp.send();
  }
}

</script>


</head>


<body>
<div id="grid">

<div id="menu"><br/>
<div id="menulist"></div>
</div>

<div id="scat"><br/>
<div id="catlist"></div>
</div>



<div id="calc"><br/>
<div id="cview"></div>
</div>

</div>

</body>
</html>