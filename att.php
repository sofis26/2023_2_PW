<?php

$alunos = array(
	[
		"nome" => "Felipe",
		"curso" => "Engenharia Mecânica",
		"nota" => "A"
	],
	[
		
		"nome" => "Charles",
		"curso" => "Fisioterapia",
		"nota" => "B"
	],
	[
		
		"nome" => "Ronin",
		"curso" => "Nutrição",
		"nota" => "C"
	],
	[
		
		"nome" => "Christian",
		"curso" => "Marketing",
		"nota" => "B"
	],
	[
		
		"nome" => "Aizen",
		"curso" => "Medicina",
		"nota" => "C"
	]


);
foreach ($alunos as $aluno) {
	echo "O aluno " . $aluno['nome'] . " do curso de " . $aluno['curso'] . " tirou nota " . $aluno['nota'];
	echo "<br>";
}


?>