<meta http-equiv="Content-Type" content="text/html; charset="utf-8">
<?php
session_start();

if(@$_SESSION['email'] && @$_SESSION['senha']){
    header("Location: ok.php");
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<center>
    <font ><strong>Login do Usuario:</strong></font>
<form name="login" method="post" action="login_.php">
    <font >Email:</font>
    <input name="email" type="text" id="email">
    <br>
    <font>Senha:</font>
    <input name="senha" type="password" id="senha">
    <br>
    <font><a href="senha.php">Esqueceu a senha? clique aqui.</a></font>
    <br>
    <input style="width:200px" name="entrar" type="submit" id="entrar" value="Logar">
    <br>
    <font><a href="cadastrar.php">Cadastre-se Agora</a></font>
</form>
</center>
</body>
</html>
