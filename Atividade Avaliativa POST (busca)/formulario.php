<?php include "resultado.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="post" form action="">
	<input type="text" name="linguagem">
	<input type="submit" name="">
</form>

<?php

if ( isset($_POST['linguagem']) ) {
    if (in_array($_POST["linguagem"], $ling) == True){
        echo "Encontrado :)";
    } else {
        echo "Não foi encontrado!";
    };

	};

 ?>

</body>
</html>