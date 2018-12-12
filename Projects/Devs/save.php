<?php
//Variaveis
date_default_timezone_set('America/Sao_Paulo');
$l1 = $_POST['l1'];
$c1 = $_POST['c1'];
$l2 = $_POST['l2'];
$c2 = $_POST['c2'];
$l3 = $_POST['l3'];
$c3 = $_POST['c3'];
$l4 = $_POST['l4'];
$c4 = $_POST['c4'];
$l5 = $_POST['l5'];
$c5 = $_POST['c5'];

$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');
$fi1 = $_FILES['f1']['name'];

// -------------

// Nas versões do PHP anteriores a 4.1.0, $HTTP_POST_FILES deve ser utilizado ao invés
// de $_FILES.

$uploaddir = '/storage/ssd4/145/8060145/public_html/Projects/Save/';
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
<p><b>Link: </b><a href='$l1'>$l1</a>. <b>Comentários sobre:</b>  $c1.</p>
<p><b>Link: </b><a href='$l2'>$l2</a>. <b>Comentários sobre:</b>  $c2.</p>
<p><b>Link: </b><a href='$l3'>$l3</a>. <b>Comentários sobre:</b>  $c3.</p>
<p><b>Link: </b><a href='$l4'>$l4</a>. <b>Comentários sobre:</b>  $c4.</p>
<p><b>Link: </b><a href='$l5'>$l5</a>. <b>Comentários sobre:</b>  $c1.</p>

 <p> Você salvou o arquivo:</p>
<p><a href='https://rodconceptive.000webhostapp.com/Projects/Save/$fi1'>$fi1</a> 
</p>
Enviado em $data_envio às $hora_envio.
	";

// -------------------------

//enviar
	
	// emails para quem será enviado o formulário
	$destino = "conceptive.co@gmail.com";
	$assunto = "Salvar";

	// É necessário indicar que o formato do e-mail é html
	$headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: Rodrigo <rodrigomendoncca@gmail.com>';
	//$headers .= "Bcc: $EmailPadrao\r\n";
	
	$enviaremail = mail($destino, $assunto, $arquivo, $headers);
	if($enviaremail){
	$mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
	echo " <meta http-equiv='refresh' content='3;URL=http://rodcordeiro.github.io/Depdevs/save.html'>
	<h1>Itens enviados com sucesso capitão!!</h1>";
	} else {
	$mgm = "ERRO AO ENVIAR E-MAIL!";
	echo "";
	}
?>