<?php
//Variaveis

$obj = $_POST['obj'];
$hc1 = $_POST['hc1'];
$hcd1 = $_POST['hcd1'];
$hc2 = $_POST['hc2'];
$hcd2 = $_POST['hcd2'];
$hc3 = $_POST['hc3'];
$hcd3 = $_POST['hcd3'];
$hc4 = $_POST['hc4'];
$hcd4 = $_POST['hcd4'];
$hc5 = $_POST['hc5'];
$hcd5 = $_POST['hcd5'];
$hc6 = $_POST['hc6'];
$hcd6 = $_POST['hcd6'];
$hc7 = $_POST['hc7'];
$hcd7 = $_POST['hcd7'];
$hc8 = $_POST['hc8'];
$hcd8 = $_POST['hcd8'];
$hc9 = $_POST['hc9'];
$hcd19 = $_POST['hcd19'];
$hc10 = $_POST['hc10'];
$hcd10 = $_POST['hcd10'];
$atv1 = $_POST['atv1'];
$atv1e = $_POST['atv1e'];
$atv1i = $_POST['atv1i'];
$atv1f = $_POST['atv1f'];
$atv2 = $_POST['atv2'];
$atv2e = $_POST['atv2e'];
$atv2i = $_POST['atv2i'];
$atv2f = $_POST['atv2f'];
$atv3 = $_POST['atv3'];
$atv3e = $_POST['atv3e'];
$atv3i = $_POST['atv3i'];
$atv3f = $_POST['atv3f'];
$atv4 = $_POST['atv4'];
$atv4e = $_POST['atv4e'];
$atv4i = $_POST['atv4i'];
$atv4f = $_POST['atv4f'];
$atv5 = $_POST['atv5'];
$atv5e = $_POST['atv5e'];
$atv5i = $_POST['atv5i'];
$atv5f = $_POST['atv5f'];
$atv6 = $_POST['atv6'];
$atv6e = $_POST['atv6e'];
$atv6i = $_POST['atv6i'];
$atv6f = $_POST['atv6f'];
$atv7 = $_POST['atv7'];
$atv7e = $_POST['atv7e'];
$atv7i = $_POST['atv7i'];
$atv7f = $_POST['atv7f'];
$atv8 = $_POST['atv8'];
$atv8e = $_POST['atv8e'];
$atv8i = $_POST['atv8i'];
$atv8f = $_POST['atv8f'];
$atv9 = $_POST['atv9'];
$atv9e = $_POST['atv9e'];
$atv9i = $_POST['atv9i'];
$atv9f = $_POST['atv9f'];
$atv10 = $_POST['atv10'];
$atv10e = $_POST['atv10e'];
$atv10i = $_POST['atv10i'];
$atv10f = $_POST['atv10f'];
$atv11 = $_POST['atv11'];
$atv11e = $_POST['atv11e'];
$atv11i = $_POST['atv11i'];
$atv11f = $_POST['atv11f'];
$atv12 = $_POST['atv12'];
$atv12e = $_POST['atv12e'];
$atv12i = $_POST['atv12i'];
$atv12f = $_POST['atv12f'];
$f1 = $_POST['f1'];
$f1i = $_POST['f1i'];
$f1f = $_POST['f1f'];
$f2 = $_POST['f2'];
$f2i = $_POST['f2i'];
$f2f = $_POST['f2f'];
$f3 = $_POST['f3'];
$f3i = $_POST['f3i'];
$f3f = $_POST['f3f'];
$f4 = $_POST['f4'];
$f4i = $_POST['f4i'];
$f4f = $_POST['f4f'];
$f5 = $_POST['f5'];
$f5i = $_POST['f5i'];
$f5f = $_POST['f5f'];

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$opcoes = $_POST['escolhas'];
$mensagem = $_POST['msg'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

// -------------

// Compo E-mail

	
	$arquivo = "
	<article id="objetivos">
			<h2>Objetivo</h2>
				<p>
				$obj
				</p>
		</article>

		<article id="habilidades">
			<h2>Habilidades e Competências</h2>
				<dl>
						<dt> $hc1 </dt>
							<dd> $hcd1 </dd>
						<dt> $hc2 </dt>
							<dd> $hcd1 </dd>
						<dt> $hcd2 </dt>
							<dd> $hcd2 </dd>
						<dt> $hc3 </dt>
							<dd> $hcd3 </dd>
						<dt> $hc4 </dt>
							<dd> $hcd4 </dd>
						<dt> $hc5 </dt>
							<dd> $hcd5 </dd>
						<dt> $hc6 </dt>
							<dd> $hcd6 </dd>
						<dt> $hc7 </dt>
							<dd> $hcd7 </dd>
						<dt> $hc8 </dt>
							<dd> $hcd8 </dd>
						<dt> $hc9 </dt>
							<dd> $hcd9 </dd>
						<dt> $hc10 </dt>
							<dd> $hcd10 </dd>				
				</dl>
		</article>

		<article id="experiencia">
			<h2>Experiência</h2>
				<ul>
						<li><strong> $atv1 </strong> na $atv1e. [de $atv1i à $atv1f]</li>
						<li><strong> $atv2 </strong> na $atv2e. [de $atv2i à $atv2f]</li>
						<li><strong> $atv3 </strong> na $atv3e. [de $atv3i à $atv3f]</li>
						<li><strong> $atv4 </strong> na $atv4e. [de $atv4i à $atv4f]</li>
						<li><strong> $atv5 </strong> na $atv5e. [de $atv5i à $atv5f]</li>
						<li><strong> $atv6 </strong> na $atv6e. [de $atv6i à $atv6f]</li>
						<li><strong> $atv7 </strong> na $atv7e. [de $atv7i à $atv7f]</li>
						<li><strong> $atv8 </strong> na $atv8e. [de $atv8i à $atv8f]</li>
						<li><strong> $atv9 </strong> na $atv9e. [de $atv9i à $atv9f]</li>
						<li><strong> $atv10 </strong> na $atv10e. [de $atv10i à $atv10f]</li>
						<li><strong> $atv11 </strong> na $atv11e. [de $atv11i à $atv11f]</li>
						<li><strong> $atv12 </strong> na $atv12e. [de $atv12i à $atv12f]</li>
				</ul>
		</article>

		<article id="Formação">
			<h2>Formação</h2>
				<ul>
						<li><strong> $f1 </strong>[de $f1i à $f1f ]</li>
						<li><strong> $f2 </strong>[de $f2i à $f2f ]</li>
						<li><strong> $f3 </strong>[de $f3i à $f3f ]</li>
						<li><strong> $f4 </strong>[de $f4i à $f4f ]</li>
						<li><strong> $f5 </strong>[de $f5i à $f5f ]</li>
				</ul>
		</article>
	
	";

// -------------------------

//enviar
	
	// emails para quem será enviado o formulário
	$destino = "conceptive.co@gmail.com";
	$assunto = "Contato pelo Site";

	// É necessário indicar que o formato do e-mail é html
	$headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: $nome <$email>';
	//$headers .= "Bcc: $EmailPadrao\r\n";
	
	$enviaremail = mail($destino, $assunto, $arquivo, $headers);
	if($enviaremail){
	$mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
	echo "<meta http-equiv='refresh' content='3;URL=contato.html'>";
	} else {
	$mgm = "ERRO AO ENVIAR E-MAIL!";
	echo "";
	}
?>