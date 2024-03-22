<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<?php


require_once 'sistema/configuracao.php';
include_once 'helpers.php';
include './sistema/Nucleo/Mensagem.php';

$msg = new Mensagem();

echo $msg->sucesso('Mensagem de sucesso')->rendereizar();
echo '<hr>';
echo $msg->erro('Mensagem de erro')->rendereizar();
echo '<hr>';
echo $msg->alerta('Mensagem de alerta')->rendereizar();
echo '<hr>';
echo $msg->informa('Mensagem de informação')->rendereizar();
echo '<hr>';