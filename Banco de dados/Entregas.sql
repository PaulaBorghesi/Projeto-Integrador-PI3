-- Criação do banco de dados
CREATE DATABASE IF NOT EXISTS cadastros;

-- Selecionando o banco de dados
USE cadastros;

-- Criação da tabela para armazenar os dados do formulário
CREATE TABLE IF NOT EXISTS entregas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_cliente VARCHAR(100) NOT NULL,
    numero_pedido VARCHAR(50) NOT NULL,
    data_entrega DATE NOT NULL,
    hora TIME NOT NULL,
    valor DECIMAL(10, 2) NOT NULL,
    entregador VARCHAR(100) NOT NULL,
    veiculo VARCHAR(100) NOT NULL,
    placa VARCHAR(10) NOT NULL,
    modelo_veiculo VARCHAR(50) NOT NULL,
    ano_veiculo INT NOT NULL
);

-- Indices para otimizar as consultas em algumas colunas 
CREATE INDEX idx_numero_pedido ON entregas(numero_pedido);
CREATE INDEX idx_nome_cliente ON entregas(nome_cliente);
CREATE INDEX idx_data_entrega ON entregas(data_entrega);
CREATE INDEX idx_placa ON entregas(placa);
