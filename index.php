<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Chat-Local</title>
  <link rel="stylesheet" href="styles.css">
  <script src="myscripts.js"></script>
</head>

<body onload="table();">
  <script type="text/javascript">
    function go() {
    }
    function table() {
      const xhttp = new XMLHttpRequest();
      xhttp.onload = function() {
        document.getElementById("table").innerHTML = this.responseText;

        var objDiv = document.getElementById("table");
        objDiv.scrollTop = objDiv.scrollHeight;
        console.log(objDiv.scrollTop)
        console.log(objDiv.scrollHeight)
      }
      xhttp.open("GET", "system.php");
      xhttp.send();
    }
    setInterval(function() {
      table();
    }, 1000);
  </script>
  <div id="table">
  </div>

  <form action="insert.php" method="post" autocomplete="off">
    <br><br>
    <label>Escribe:</label><input type="text" name="Mensaje"><br><br>
    <button type="submit" name="EnviarMensaje">Submit</button>
  </form>
</body>
</html>
