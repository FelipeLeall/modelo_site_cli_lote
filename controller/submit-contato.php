<?php

$EMAIL_CONTATOS = array(
    'felipe'   => 'felipelealdafonseca@gmail.com'
);

$nome = 'teste';
$end_email ='felipelealdafonseca@gmail.com';
$telefone = '(16) 99231-8222';
$titulo = 'teste';
$mensagem = 'teste';
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

$email = "
  <style type='text/css'>
  body {
  margin:0px;
  font-family:Verdane;
  font-size:12px;
  color: #666666;
  }
  a{
  color: #666666;
  text-decoration: none;
  }
  a:hover {
  color: #FF0000;
  text-decoration: none;
  }
  </style>
    <html>
        <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
            <tr>
                <td>
                    <tr>
                        <td width='500'>Nome:$nome</td>
                    </tr>
                    <tr>
                    <td width='320'>E-mail:<b>$end_email</b></td>
                    </tr>
                    <tr>
                    <td width='320'>Telefone:<b>$telefone</b></td>
                    </tr>
                    <tr>
                    <td width='320'>Titulo:$titulo</td>
                    </tr>
                    <tr>
                    <td width='320'>Mensagem:$mensagem</td>
                    </tr>
                </td>
            </tr>  
          <tr>
            <td>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></td>
          </tr>
        </table>
    </html>
  ";

//$emailenviar = "seuemail@seudominio.com.br";
//$destino = $emailenviar;
$assunto = "Contato pelo Site Teste";

// É necessário indicar que o formato do e-mail é html
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: $nome <$end_email>";
//$headers .= "Bcc: $EmailPadrao\r\n";

foreach ($EMAIL_CONTATOS as $key => $value) {
  $enviaremail = mail($value, $assunto, $email, $headers);
}

header("Location: http://localhost/site/contato.php");
