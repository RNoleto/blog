<?php

require_once 'sistema/configuracao.php';
include_once 'helpers.php';
include './sistema/Nucleo/Mensagem.php';

$msg = new Mensagem();

echo $msg->rendereizar();