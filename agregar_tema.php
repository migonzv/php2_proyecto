<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles.css">
</head>
<body>
  <?php include "./menu.php"; ?>
    <form method="post" action="./agregar_tema2.php">
      <table>
        <tr>
          <td><label for="titulo">Titulo:</label></td>
          <td><input type="text" name="titulo" id="titulo" /></td>
        </tr>

        <tr>
          <td><label for="contenido">Mensaje:</label></td>
          <td><textarea name="contenido" id="contenido"></textarea></td>
        </tr>

        <tr>
          <td><label for="auto">Autor:</label></td>
          <td><input type="text" name="autor" id="autor" ></td>
        </tr>
        <tr>
        
        <tr>
          <td><label for="categoria">Categoria:</label></td>
          <td><input type="text" name="categoria" id="categoria" ></td>
        </tr>
        <tr>

        <tr>
          <td><label for="pais">Pais:</label></td>
          <td><input type="text" name="pais" id="pais" ></td>
        </tr>
        <tr>

          <td colspan="2" class="td-center"><input type="submit" name="button" id="button" value="Enviar"></td>
        </tr>
      </table>
    </form>
</body>
</html>