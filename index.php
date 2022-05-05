<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Chat</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body onload = "table();">
    <script type="text/javascript">
      function table(){
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function(){
          document.getElementById("table").innerHTML = this.responseText;
        }
        xhttp.open("GET", "system.php");
        xhttp.send();
      }

      setInterval(function(){
        table();
      }, 1000);
    </script>
    <div id="table">

    </div>
  </body>
</html>
