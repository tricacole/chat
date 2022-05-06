var numero = 0;

function recargar() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("tabla").innerHTML = this.responseText;

    var objDiv = document.getElementById("tabla");
    objDiv.scrollTop = objDiv.scrollHeight;
    console.log(objDiv.scrollTop)
    console.log(objDiv.scrollHeight)
  }
  xhttp.open("GET", "system.php");
  xhttp.send();
}
setInterval(function() {
  recargar();
}, 1);
