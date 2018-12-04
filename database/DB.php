<?php

$banco = $_ENV['banco_db'];
$usuario = $_ENV['usuario_db'];
$senha = $_ENV['senha_db'];

$conn = new mysqli($banco, $usuario, $senha);

?>