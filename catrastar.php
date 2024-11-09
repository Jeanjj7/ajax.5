<?php
include "conexao.php";

$nome_completo = $_POST['nome_completo'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$setor_resp = $_POST['setor_resp'];
$detalhes = $_POST['detalhes'];


$sql = "INSERT INTO tb_protocolos 
        (nome_completo, cpf, email, telefone, setor_resp, detalhes) 
        VALUES 
        ('$nome_completo', '$cpf', '$email', '$telefone', '$setor_resp', '$detalhes')";


$inserir = $pdo->prepare($sql);


try {

    $inserir->execute();
    echo "Cadastro realizado com sucesso!";
} catch (PDOException $erro) {
    echo "Erro ao cadastrar: " . $erro->getMessage();
}
?>
