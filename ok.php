<meta http-equiv="Content-Type"  charset="utf-8">
<?php 
	session_start();

if(@!$_SESSION['email'] && @!$_SESSION['senha']){
    header("Location: login.php");
}
echo "você está logado com o email:";
echo "<br><br>";
echo $_SESSION['email'];
?>
<br>
<br>
<a href="sair.php">Deslogar</a>