<?php
session_start();
if(!isset($_SESSION['iduser'])){
    Header("Location:index.php");
}

	function mysqli_result($res, $row, $field=0) { 
		$res->data_seek($row); 
		$datarow = $res->fetch_array(); 
		return $datarow[$field]; 
	} 
?>
<html>
	<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />		
		
		<title>Alterar PassWord</title>
		
			
		<link rel="stylesheet" href="Estilos.css" type="text/css" media="screen" charset="utf-8" />
		
	</head>
		<?php include "DBConnection.php"; echo "<br>" ?>
	<body>
	<div id = "Body" > 
	
		 <?php
		if (isset($_SESSION["iduser"])) 
		{	 
		 $fiduser = $_SESSION['iduser'];
		}
		 ?>
		<?php
							
			if (isset($_POST["fiduser"])) 
			{
			$fuser = $_POST['fuser'];
			$fpass = $_POST['fpass'];
			$fiduser2 = $_POST['fid2'];

			$query = mysqli_query($link,"update utilizadores set  user = '$fuser', pass = '$fpass' where id = '$fiduser2'");
			
			if($query){
				echo "<div class=\"rounded-md px-5 py-4 mb-2 bg-theme-9 text-white\">Atualizado com sucesso</div>";
						
			}else{
				echo "<div class=\"rounded-md px-5 py-4 mb-2 bg-theme-6 text-white\">Erro ao atualizar! Erro:".mysqli_error($link);"</div>";
                                    }	
		  }
		?>
		<?php 

		$query  = "SELECT * FROM utilizadores where id = '$fiduser'";
		$result = mysqli_query($link,$query);
		$num = mysqli_num_rows($result);
		mysqli_close($link);
		$i=0;
		//echo $result;
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		
		while($i < $num)
		{
    	 	  $campo1 = mysqli_result($result,$i,"id");
		 $campo2 = mysqli_result($result,$i,"user");
		 $campo3 = mysqli_result($result,$i,"pass");
		 
		 
		?>	
		<fieldset> <legend> <b>Alteração do User e Password</b> </legend>
		<form name="alterar_password" id="alterar_password" 
		action="formalterarpass.php" method = "post">
			
			
			<input id="fiduser" name="fiduser" value=" <?php echo $fiduser ?>" type="hidden" size = "20"  />
			<label id="fiduser" for="fiduser"></label>
			<table width="100%" border="0">
              <tr>
                <td><label id="fid2" for="label">
                    <div align="right"><b></b></div>
                  </label></td>
                <td><label id="fid2" for="label"></label>
                    <input id="fid2" name="fid2" value="<?php echo $campo1 ?>" type= "text" size = "2" /></td>
              </tr>
              <tr>
                <td><div align="right"><b>User: </b></div></td>
                <td><input id="fuser" name="fuser" value="<?php echo $campo2 ?>" type="text" size = "30" /></td>
              </tr>
              <tr>
                <td><div align="right"><b>Password:</b></div></td>
                <td><input  id="fpass" name="fpass" value="<?php echo $campo3 ?>" type= "text" size = "30" /></td>
              </tr>
              <tr>
			  <tr>
                <td><button> 
                <div align="right"><b> Guardar </b></div>
                </button>
                    <div align="right"></div></td> </tr>
              </tr>
            </table>
        </form>
		</fieldset>
		<?php $id = $_SESSION['iduser'] ?>
		<a href="<?php echo $aux = ($id==0) ? 'admin.php' : 'users.php'?>">Página Inicial</a>
		</div>
	</body>
	<?php
	$i++;
	}
	?>
</html>