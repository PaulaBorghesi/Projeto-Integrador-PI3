<?php
// Dados de conexão com o banco de dados
$servername = "127.0.0.1"; 
$username = "root"; 
$password = "Root"; 
$banco = "entregas"; 

// Criando a conexão
$conn = new mysqli($host, $usuario, $senha, $banco);

// Verificando a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Verificando se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Pegando os dados do formulário
    $nome_cliente = $_POST['email'];
    $numero_pedido = $_POST['sobrenome'];
    $data_entrega = $_POST['dia'] . '-' . $_POST['mes'] . '-' . $_POST['ano'];
    $hora = $_POST['rg'];
    $valor = $_POST['valor'];
    $entregador = $_POST['entregador'];
    $veiculo = $_POST['email'];
    $placa = $_POST['login'];
    $ano_veiculo = $_POST['Modelo'];
    $modelo_veiculo = $_POST['Modelo'];

    // Preparando a consulta SQL para inserção
    $sql = "INSERT INTO entregas (nome_cliente, numero_pedido, data_entrega, hora, valor, entregador, veiculo, placa, ano_veiculo, modelo_veiculo)
            VALUES ('$nome_cliente', '$numero_pedido', '$data_entrega', '$hora', '$valor', '$entregador', '$veiculo', '$placa', '$ano_veiculo', '$modelo_veiculo')";

    // Executando a consulta
    if ($conn->query($sql) === TRUE) {
        echo "Novo registro criado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

// Fechando a conexão
$conn->close();
?>
