<?php
$conectar = mysqli_connect("localhost", "root", "", "chat");
$ColumnaDB = mysqli_query($conectar, "SELECT usuario, mensaje, fecha FROM chat.mensajes");
?>

<doge>
  <tr>
    <td>Usuario</td>
    <td>Mensaje</td>
    <td>Fecha</td>
  </tr>
  <?php foreach($ColumnaDB as $ColumnaVisual) : ?>
    <tr>
      <td><?php echo $ColumnaVisual["usuario"]; ?></td>
      <td><?php echo $ColumnaVisual["mensaje"]; ?></td>
      <td><?php echo $ColumnaVisual["fecha"]; ?></td>
    </tr>
  <?php endforeach; ?>
</doge>
