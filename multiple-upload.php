<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Upload de Arquivos</title>
</head>
<body>
	<form action="multiple-upload.php" method="post" enctype="multipart/form-data">
		<input type="text" name="nome" placeholder="Seu Nome">
		<!-- File para multiplos arquivos -->
		<input type="file" name="arquivo[]" multiple>
		
		<!-- File para arquivo único -->
		<!-- <input type="file" name="arquivo"> -->
		
		<input type="submit" name="enviar">
	</form>

	<?php 
	if (isset($_POST['enviar'])) {
		//print_r($_FILES['arquivo']);
		if (!empty($_FILES['arquivo']['name'][0])) {
		 	$erros = array();

		 	foreach ($_FILES['arquivo']['name'] as $key => $nomeArquivo) {
		 		$tipo = $_FILES['arquivo']['type'][$key];
		 		$nomeTemporario = $_FILES['arquivo']['tmp_name'][$key];
		 		$tamanho = $_FILES['arquivo']['size'][$key];

		 		$tamanhoMaximo = 1024 * 1024 * 5; //5MB
		 		if ($tamanho > $tamanhoMaximo) {
		 			$erros[] = "O arquivo $nomeArquivo excede o tamanho máximo<br>";
		 		}

		 		$arquivosPermitidos = ["png", "jpg", "jpeg"];
		 		$extensao = pathinfo($nomeArquivo, PATHINFO_EXTENSION);
		 		if (!in_array($extensao, $arquivosPermitidos)) {
		 			$erros[] = "O arquivo $nomeArquivo não é permitido.<br>";
		 		}

		 		$typesPermitidos = ["image/png", "image/jpg", "image/jpeg"];
		 		if (!in_array($tipo, $typesPermitidos)) {
		 			$erros[] = "O tipo de arquivo $nomeArquivo não é permitido.<br>";
		 		}

		 		if (!empty($erros)) {
		 			foreach ($erros as $erro) {
		 				echo $erro;
		 			}
		 		}else {
		 			$caminho = "uploads/";
		 			$hoje = date("d-m-Y_h-i");
		 			$user = $_POST['nome'];
		 			$novoNome = $user . "-" . $nomeArquivo;
		 			if (move_uploaded_file($nomeTemporario, $caminho . $novoNome)) {
		 				echo "Upload do arquivo $nomeArquivo feito com sucesso!<br>";
		 			} else {
		 				echo "Erro ao enviar o arquivo $nomeArquivo!<br>";
		 			}
		 		}
		 	}
		}
	}
	?>
</body>
</html>
```