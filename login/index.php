<?php
include('conexao.php')

if(isset($_POST['email']) || isset($_POST['senha'])) {

  if(strlen($_POST['email']) == 0) {
    echo "Preencha seu email";
  } else if(strlen($_POST['senha']) == 0) {
    echo "Preencha sua senha";
  } else {
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Falha ao executar o código SQL: " . $mysqli->error);

    $quantidade = $sql_query->num_rows;

    if($quantidade == 1) {
      $usuario = $sqlquery->fetch_assoc();

      if(!isset($_SESSION)) {
        session_start();
      }

      $_SESSION['id'] = $usuario['id'];
      $_SESSION['nome'] = $usuario['nome']

      header("Location: painel.php")
      
    } else {
      echo "Falha ao logar! Email ou senha incorretos.";
    }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <h1>Acesso por E-mail</h1>
  <form action="" method="POST">
    <p>
      <label>E-mail</label>
      <input type="text" name="email">
    </p>
      <p>
        <label>Senha</label>
        <input type="text" name="senha">
      </p>
      <p>
        <button type="submit">Entrar</button>
      </p>
  </form>  
</body>
</html>