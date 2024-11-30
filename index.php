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
};
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


<script>
function remItem(str) {
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
    xmlhttp.open("GET","remcat.php?r="+str,true);
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
<div id="cview"></div><br/>
<input id="recip" type="button" onclick="printDiv('cview')" value="RECEIPT" />
</div>

</div>


<script>

function printDiv(divId) {
     var printContents = document.getElementById(divId).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}

</script>

</body>
</html>