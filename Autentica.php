<?php

//CONECTA COM A BASE DE DADOS
include 'DBConnection.php';

//RECEBE OS DADOS DO FORMULÁRIO
$user=$_POST['user'];
$pass=$_POST['pass'];

if($user != 'admin')
{
	$pass = md5($pass);
}

//VERIFICA
$sql   =   mysqli_query($link,"SELECT * FROM utilizadores 
WHERE  user  =  '$user'  AND pass   =  '$pass'") or die("ERRO NO COMANDO SQL");

//LINHAS AFECTADAS PELA CONSULTA
$row   =  mysqli_num_rows($sql);

//VERIFICA SE DEVOLVEU ALGO
if($row == 0){
session_start();
$pag='index.php?erro=1';
$_SESSION['erro']=1;   
Header("Location:$pag");
}
else { 
	
	$row = mysqli_fetch_array($sql,MYSQLI_ASSOC);
	
	$id = $row['id'];
	 //INICIALIZA A SESSÃO
	session_start();
	
	//GRAVA AS VARIÁVEIS NA SESSÃO
	  
	$_SESSION['iduser'] = $id;
	$_SESSION['erro']=0;  
	
	$query = "SELECT * FROM utilizadores WHERE id = $id";
	$result = mysqli_query($link, $query);
	$row = mysqli_fetch_array($result);
	$_SESSION['user-name'] = $row['user'];

	Header("Location:dashboard.php");
}//FECHA ELSE
?>





