<?php
$email2 = "primelog@primelogsolutions.com";

if($_POST['contato']){
	$erro = 0;
	echo '';
	if($_POST['nome'] == ''){
		echo '<span style="list-style: none">Informe um Nome</span><br>';
		$erro = 1;
	}
	if($_POST['email'] == ''){
		echo '<span style="list-style: none">Informe um E-mail</span><br>';
		$erro = 1;
	}else{
		$validacao = eregi("^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$",$_POST['email']); 
		if($validacao == 0){
			echo '<span style="list-style: none">Informe um Email Válido</span><br>';
			$erro = 1;
		}
	}
	if($_POST['mensagem'] == ''){
		echo '<span style="list-style: none">Informe uma Mensagem</span><br>';
		$erro = 1;
	}
	
	if($erro == 0){
		$cabecalho = "MIME-Version: 1.0\r\n";
		$cabecalho .= "Content-Type: text/html;\r\n charset=\"iso-8859-1\"\r\n";
		$cabecalho .= "Reply-To: ".$_POST['email']."\r\n";
		$cabecalho .= "From:".$_POST['nome']."<".$email2.">\r\n";
		$mensagem = '
			<html>   <title>'.utf8_decode('Contato Via Site').'</title> <body>
			<b>Nome:</b>'.$_POST['nome'].'<br />
			<b>E-mail:</b>'.$_POST['email'].'<br />
			<b>Telefone:</b>'.$_POST['telefone'].'<br />
			<b>Assunto:</b>'.$_POST['assunto'].'<br />
			<b>Mensagem / Descrição:</b>'.$_POST['mensagem'].'
			</html></body>			
		';
		$mail = 'primelog@primelogsolutions.com';
		if(@mail($mail,utf8_decode('Contato Via Site'),$mensagem,$cabecalho)){
			echo '<span style="list-style: none">Mensagem enviada com sucesso!</span>';
		}else{
			echo '<span style="list-style: none">Erro ao enviar a mensagem</span>';
		}
	echo '';	
	
	}
}
?>
