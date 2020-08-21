<?php
include ('config.php');
// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (!empty($_POST) AND (empty($_POST['email']) OR empty($_POST['senha']))) {
      header("Location: index.php"); exit;
  }
  $email = ($_POST['email']);
  $senha = ($_POST['senha']);
 
  // Validação do usuário/senha digitados
  $sql = "SELECT * FROM condominos WHERE email = '$email' AND senha = '$senha' AND status = 1";
  $query = $mysqli->query($sql);
  if (mysqli_num_rows($query) == 0) {
      $sql = "SELECT * FROM funcionario where email = '$email' AND senha = '$senha' AND status = 1";  
      $query = $mysqli->query($sql);
      var_dump($query);
    if(mysqli_num_rows($query) == 0){
        // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
        echo "Login inválido!"; 
    }
    else { 
      // Salva os dados encontados na variável $resultado
      $resultado = $query->fetch_assoc();
    }    
    
  }
  else { 
      // Salva os dados encontados na variável $resultado
      $resultado = $query->fetch_assoc();
    }
  
    if ($resultado) {
      // Se a sessão não existir, inicia uma
      if (!isset($_SESSION)) session_start();

      // Salva os dados encontrados na sessão
      $_SESSION['Usuario'] = $resultado;
      

      // Redireciona o visitante
      header("Location: home.php"); exit;
  }
  $query->close();
  ?>

