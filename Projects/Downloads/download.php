<?php
//Variaveis
date_default_timezone_set('America/Sao_Paulo');
$title = $_POST['titulo'];
$coment = $_POST['desc'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');
$fi1 = $_FILES['f1']['name'];
$ext = $_POST['ext'];
// -------------

// Nas versões do PHP anteriores a 4.1.0, $HTTP_POST_FILES deve ser utilizado ao invés
// de $_FILES.

$uploaddir = '/storage/ssd4/145/8060145/public_html/Projects/Downloads/';
$uploadfile = $uploaddir . basename($_FILES['f1']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['f1']['tmp_name'], $uploadfile)) {
    echo "Arquivo válido e enviado com sucesso.\n";
} else {
    echo "Possível ataque de upload de arquivo!\n";
}

echo 'Aqui está mais informações de debug:';
print_r($_FILES);

print "</pre>";
// -------------


// Compo E-mail

	
	$arquivo = "
				<li>
					<div>
						<h1> $title </h1>
						<p>
							$coment
						</p>
					</div>
					<a download='$fi1' href='https://rodconceptive.000webhostapp.com/Projects/Downloads/$fi1'>
						<button class='btn btn-3 btn-3e'>Download</button>
					</a>

				</li>
	";

// -------------------------

//enviar
	
	// emails para quem será enviado o formulário
	$destino = "conceptive.co@gmail.com";
	$assunto = "Salvar";

	// É necessário indicar que o formato do e-mail é html
	$headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: Rodrigo <rodrigomendoncca@gmail.com>';
	//$headers .= "Bcc: $EmailPadrao\r\n";
	
	$enviaremail = mail($destino, $assunto, $arquivo, $headers);
	if($enviaremail){
	$mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
	echo "
	<meta http-equiv='refresh' content='3;URL=http://rodcordeiro.github.io/Blog/Projects/Downloads/upload.html'>
	<h1>Itens enviados com sucesso capitão!!</h1>

	";
	} else {
	$mgm = "ERRO AO ENVIAR E-MAIL!";
	echo "";
	}
?>