<?php

$usuario = 'root';
$senha = '';
$database = 'login';
$host = 'localhost';

$mysqli = new mysqli($host, $database, $usuario, $senha);

if ($mysqli->error) {
  die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}