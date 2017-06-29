<?php


$host = "localhost";
$porta = "5432";
$banco_dados_nome = "gerenciadorPesca";
$usuario = "postgres";
$senha = "root";

$conexao = pg_connect("host=".$host." port=".$porta." dbname=".$banco_dados_nome." user=".$usuario." password=".$senha);


