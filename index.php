<!DOCTYPE html>
<html>
  <head>
    <title>Tela de Login</title>
  </head>
  <body>
    <h1>Tela de Login</h1>
    <?php
      if(isset($_GET['login']) && $_GET['login'] == 'failed'){
        echo "<p>As credenciais fornecidas estão incorretas. Tente novamente.</p>";
      }
    ?>
    <form action="login.php" method="POST">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br><br>
      <label for="senha">Senha:</label>
      <input type="password" id="senha" name="senha" required><br><br>
      <input type="submit" value="Login">
    </form>
  </body>
</html>
