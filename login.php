<?php
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  // Verifica se as credenciais fornecidas estão corretas
  if($email == 'usuario@exemplo.com' && $senha == 'senha123'){
    header('Location: pagina_secreta.php');
  } else {
    header('Location: index.php?login=failed');
  }
?>
