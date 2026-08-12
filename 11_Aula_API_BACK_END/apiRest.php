<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json; charset=UTF-8");

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    exit(0);
}

$conexao = mysqli_connect('localhost', 'root', '', 'comidinhas');

if (!$conexao) {
    echo json_encode(["erro" => "Erro ao conectar com o DB!"]);
    exit();
}

$metodo = $_SERVER['REQUEST_METHOD'];

if ($metodo == 'GET') {

    $sql = "SELECT * FROM comidinhas";
    $resultado = mysqli_query($conexao, $sql);

    $comidinhas = [];

    while ($linha = mysqli_fetch_assoc($resultado)) {
        $comidinhas[] = $linha;
    }

    echo json_encode($comidinhas);
}

if ($metodo == 'POST') {

    $dadosRequest = file_get_contents("php://input");

    $dados = json_decode($dadosRequest, true);

    $nome = $dados['nome'];
    $descricao = $dados['descricao'];

    $sql = "INSERT INTO comidinhas(nome, descricao)
            VALUES ('$nome', '$descricao')";

    mysqli_query($conexao, $sql);

    echo json_encode([
        "mensagem" => "Dados inseridos com sucesso!!! BB!"
    ]);
}

if ($metodo == 'DELETE') {

    if (isset($_GET['id'])) {

        $id = $_GET['id'];

        $sql = "DELETE FROM comidinhas WHERE id = $id";

        mysqli_query($conexao, $sql);

        echo json_encode([
            "mensagem" => "Item deletado com sucesso, meu consagrado!!!"
        ]);

    } else {

        echo json_encode([
            "mensagem" => "Erro!!! ID não encontrado!!! seu otário!!!"
        ]);
    }
}

mysqli_close($conexao);

?>
