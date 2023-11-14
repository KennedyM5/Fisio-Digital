<?php
session_start();
if (isset($_SESSION['id'])) {
    $usuario = $_SESSION['id'];
    $dados = array(
        'doctorname' => $usuario,
        
    );
    
    // Converta o objeto PHP em JSON
    $json_dados = json_encode($dados);
    
    // Defina o cabeçalho como JSON
    header('Content-Type: application/json');
    
    // Envie o JSON de volta como resposta
    echo $json_dados;
}

?>