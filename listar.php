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
			</center>
				<h3>Lista de Atividades:</h3>
			<center>
				<table border="1">
					<thead>
						<tr>
							<th>Nome</th>
							<th>Data</th>
							<th>Download</th>
						</tr>
					</thead>
					<tbody>
					<?php
						if(file_exists("xml/datas.xml")){
							$xml = simplexml_load_file("xml/datas.xml");
							
							foreach($xml->children() as $ptf){
								echo"<tr>";
								echo"<td><a class=\"tab\" href='".$ptf->link."'/>$ptf->nome</a></td>";
								echo"<td>$ptf->data</td>";
								echo"<td><a class=\"tab\" href=\"$ptf->arquivo\" download>Download</a></td>";
								echo"</tr>";	
							}
						}else{
							header("Location:index.php");
								
						}
							
					?>
					</tbody>
				</table>
			<footer>
				<hr/>
				<hr/>
				<br/>
					<a class="url" href="index.php">Cadastrar</a>
					<a class="url" href="listar.php">Listar</a>
			</footer>
		</body>
	</center>
</html>
