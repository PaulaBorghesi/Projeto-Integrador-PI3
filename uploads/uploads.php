<?php
$servername = "root@localhost:3306"; // ou o endereço do seu servidor de banco de dados
$username = "Root";        // seu nome de usuário do MySQL
$password = "Root";            // sua senha do MySQL
$dbname = "lanchonete";    // nome do banco de dados

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obtendo os dados do formulário
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$nascimento = $_POST['ano'] . '-' . $_POST['mes'] . '-' . $_POST['dia'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'] . $_POST['cpf2'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'] . $_POST['cep2'];
$veiculo = $_POST['veiculo'];
$placa = $_POST['placa'];
$ano_veiculo = $_POST['ano_veiculo'];

// Processando o upload de imagem
if ($_FILES['imagem']['name']) {
    $imagem_nome = $_FILES['imagem']['name'];
    $imagem_tmp = $_FILES['imagem']['tmp_name'];
    $imagem_destino = "uploads/" . $imagem_nome;
    move_uploaded_file($imagem_tmp, $imagem_destino);
} else {
    $imagem_destino = null; // Caso não haja imagem
}

// Inserindo os dados no banco de dados
$sql = "INSERT INTO entregadores (nome, sobrenome, imagem, nascimento, rg, cpf, rua, numero, bairro, estado, cidade, cep, veiculo, placa, ano_veiculo) 
        VALUES ('$nome', '$sobrenome', '$imagem_destino', '$nascimento', '$rg', '$cpf', '$rua', '$numero', '$bairro', '$estado', '$cidade', '$cep', '$veiculo', '$placa', '$ano_veiculo')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}

// Fechando a conexão
$conn->close();
?>
