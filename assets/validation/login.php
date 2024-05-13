<?php

include_once('../config/connect.php');

// $usuario = $_POST['usuario'];
// $senha   = $_POST['senha'];
$usuario = 'welington';
$senha   = '220720@We';

$requisicao = "SELECT * FROM usuarios WHERE usuario_usuario = '$usuario' AND senha_usuario = '$senha'";
$resultado = $connect->query($requisicao);

if($resultado->num_rows > 0){
    echo 'Usuário encontrado';
    $linha = $resultado->fetch_assoc();
}else{
    echo 'O usuário não está registrado!';
}
?>
