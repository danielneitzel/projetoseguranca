<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Cadastro de Usuarios</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="cadastrar.php" method="post" action="cadastrar_.php">
  <center>
    <font><strong>Nome:</strong></font>
    <br>
    <input name="nome" type="text" id="nome" maxlength="75">
    <br>
    <font><strong>Email:</strong></font>
    <br>
    <input name="email" type="text" id="email" maxlength="50">
    <br>
    <font><strong>Telefone:</strong></font>
    <br>
    <input name="telefone" type="text" id="telefone" maxlength="30">
    <br>
    <font><strong>Senha:</strong></font>
    <br>
    <input name="senha" type="password" id="senha" maxlength="30">
    <br>
    <br>
    <input name="enviar" type="submit" id="enviar" value="Enviar Cadastro">
    <input name="limpar" type="reset" id="limpar" value="Limpar Dados">
  </center>
</form>
</body>
</html>
