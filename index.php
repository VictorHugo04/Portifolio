<!DOCTYPE html>
<html lang='pt-br'>
	<head>
		<meta charset="UTF-8"/>
		<title>Portifólio - Victor Hugo</title>
		<link rel="stylesheet" href="css/estilos.css"/>
	</head>
	<body>
		<center>
			<header>
				<h2>Portifólio</h2>
					<hr/>
					<hr/>
					<br/>
			</header>
				<form action="salvar_arquivos.php" method="post" enctype="multipart/form-data">
				
					<p>
						<label>Nome: </label>
						<input class="en1" type="text" name="nomeAtiv" required="required"/>
					</p>
					
					<p>
						<label>Link: </label>
						<input class="en2" type="text" name="linkAtiv" requried="required"/>
					</p>
				
					<p>
						<label>Data: </label>
						<input class="en3" type="date" name="data" required="required"/>
					</p>

					<p>
						<label>Arquivo: </label>
						<input class="en4" type="file" name="arquivo"/>
					</p>
						<br/>
					<input class="sub" type="submit" value="Enviar"/>
				</form>
			<footer>
				<hr/>
				<hr/>
				<br/>
					<a class="url" href="index.php">Cadastrar</a>
					<a class="url" href="listar.php">Listar</a>
			</footer>
		</center>
	</body>
</html>
