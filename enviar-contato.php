<?php

require_once './src/Email.php';

$nome = $_GET['nome'];
$telefone = $_GET['telefone'];
$email = $_GET['email'];
$assunto = $_GET['assunto'];
$texto = $_GET['mensagem'];

$mensagem .= "<b>Nome:</b> $nome<br>";
$mensagem .= "<b>Telefone:</b> $telefone<br>";
$mensagem .= "<b>Email:</b> $email<br>";
$mensagem .= "<b>Assunto:</b> $assunto<br>";
$mensagem .= "<b>Mensagem:</b> $texto";

Email::enviarEmail("atendimento@ghitecnologia.com.br", "Contato - GHI Tecnologia", $mensagem);
echo "Mensagem Enviada!";