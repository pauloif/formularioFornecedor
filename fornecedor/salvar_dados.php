<?php  

	# Receber os dados do formulário
	$dados = $_POST;

	# Transformar os dados em uma string
	$string = implode(" - ", $dados);

	# Guardar os dados do cadastro em arquivo TXT
	//fopen("nome dado ao arquivo","modo de tratamento")
	$arquivo = fopen("dados.txt", "a+");

	#Escrever os dados dentro do arquivo, incluir "\n"para pular uma linha
	fwrite($arquivo, $string."\n");

	#Fechar o arquivo
	fclose($arquivo);

	# Redirecionar para o cadastro novamente
	header("location: formulario.php");

?>