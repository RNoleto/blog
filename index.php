<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
<?php

require_once 'sistema/configuracao.php';
include_once 'sistema/Nucleo/helpers.php';
include './sistema/Nucleo/Mensagem.php';
include './sistema/Nucleo/Controlador.php';

use sistema\Nucleo\Controlador;

$controlador = new Controlador();
echo '<hr>';