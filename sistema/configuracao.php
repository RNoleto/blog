<?php
//Arquivo de configuração do sistema

//Define o fuso horario
date_default_timezone_set('America/Sao_Paulo');

//Configuração banco de dados do blog
define('DB_HOST', 'localhost');
define('DB_PORTA', '3306');
define('DB_NOME', 'blog');
define('DB_USUARIO', 'root');
define('DB_SENHA', '');

//informações do site
define('SITE_NOME', 'UnSet');
define('SITE_DESCRICAO', 'UnSet - Tecnologia em Sistemas');

//urls do sistema
define('URL_PRODUCAO', 'http://unset.com.br');
define('URL_DESENVOLVIMENTO', 'http://localhost/blog');

define('URL_SITE', 'blog/');