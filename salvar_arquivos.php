<?php
	$nome	= $_POST["nomeAtiv"];
	$link	= $_POST["linkAtiv"];
	$data	= $_POST["data"];
	
	if(isset($_FILES["arquivo"])){
		$x = strtolower (substr($_FILES['arquivo']['name'],-4));
		$NewName = @date("Y-m-d-H-i-s") . $x;
		$pasta = 'arquivo/';
		
		move_uploaded_file($_FILES['arquivo']['tmp_name'], $pasta.$NewName);	
	}else{
		
	}
	$arquivo = $pasta.$NewName;
	if(!file_exists("xml/datas.xml")){
		$xml = 
		"<?xml version = '1.0' encoding = 'utf-8' ?>
			<atividades>
				<atividade>
					<nome>$nome</nome>
					<link>$link</link>
					<data>$data</data>
					<arquivo>$arquivo</arquivo>
				</atividade>	
			</atividades>
		";

	file_put_contents("xml/datas.xml", $xml);
	
	}else{
		
		$xml = simplexml_load_file("xml/datas.xml");
		
		$arq = $xml->addChild("atividade");
		
		$arq->addChild("nome", $nome);
		$arq->addChild("link", $link);
		$arq->addChild("data", $data);
		$arq->addChild("arquivo", $arquivo);
		
		file_put_contents("xml/datas.xml", $xml->asXML());
	}
	header("Location:listar.php");
	
?>
