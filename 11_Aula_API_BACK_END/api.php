 <?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json; charset=UTF-8");

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') 
{
    exit(0);
}

// Conexão com o banco
$conexao = mysqli_connect('localhost',
    'root',
    '',
    'comidinhas'
);

if (!$conexao) 
{


    echo json_encode([
        "erro" => "Erro ao conectar com o banco de dados!"
    ]);

    exit();
}

mysqli_set_charset($conexao, "utf8");

$metodo = $_SERVER['REQUEST_METHOD'];

// GET - Listar comidinhas

if ($metodo == 'GET') {

    $sql = "SELECT * FROM comidinhas";

    $resultado = mysqli_query($conexao, $sql);

    $comidinhas = [];

    while ($linha = mysqli_fetch_assoc($resultado)) {

        $comidinhas[] = $linha;
    }

    echo json_encode($comidinhas);

    exit();
}


// POST - Inserir comidinha

if ($metodo == 'POST') {

    // Pega os dados enviados no corpo da requisição
    $dadosRequest = file_get_contents("php://input");

    // Converte o JSON para array
    $dados = json_decode($dadosRequest, true);

    // Verifica se os dados foram enviados
    if (!isset($dados['nome']) || !isset($dados['descricao'])) 
    {

        echo json_encode([
            "erro" => "Informe nome e descricao!"
        ]);

        exit();
    }

    $nome = $dados['nome'];
    $descricao = $dados['descricao'];

    $sql = "INSERT INTO comidinhas(nome, descricao)
            VALUES ('$nome', '$descricao')";

    mysqli_query($conexao, $sql);

    echo json_encode([
        "mensagem" => "Dados inseridos com sucesso!!! BB!"
    ]);

    exit();
}


// DELETE - Deletar comidinha

if ($metodo == 'DELETE') {

    if (isset($_GET['id'])) {

        $id = $_GET['id'];

        $sql = "DELETE FROM comidinhas
                WHERE id = $id";

        mysqli_query($conexao, $sql);

        echo json_encode([
            "mensagem" => "Item deletado com sucesso, meu consagrado!!!"
        ]);

    } else {

        echo json_encode([
            "erro" => "ID não encontrado!!!"
        ]);
    }

    exit();
}


// Método errado pelo user

echo json_encode([
    "erro" => "Método não permitido!"
]);


mysqli_close($conexao);

?>