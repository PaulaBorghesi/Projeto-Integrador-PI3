-- Criação do banco de dados
CREATE DATABASE IF NOT EXISTS cadastros;

-- Selecionando o banco de dados
USE cadastros;

-- Criação da tabela para armazenar os dados do formulário
CREATE TABLE IF NOT EXISTS entregadores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    sobrenome VARCHAR(100) NOT NULL,
    imagem VARCHAR(255),
    dia INT NOT NULL,
    mes INT NOT NULL,
    ano INT NOT NULL,
    rg VARCHAR(20) NOT NULL,
    cpf VARCHAR(14) NOT NULL,
    rua VARCHAR(255) NOT NULL,
    numero VARCHAR(10) NOT NULL,
    bairro VARCHAR(100) NOT NULL,
    estado VARCHAR(2) NOT NULL,  
    cidade VARCHAR(100) NOT NULL,
    cep VARCHAR(10) NOT NULL,  
    veiculo VARCHAR(100),
    placa VARCHAR(10),
    ano_veiculo INT DEFAULT 2000
);

-- Indices para otimizar as consultas em algumas colunas
CREATE INDEX idx_nome ON entregadores(nome);
CREATE INDEX idx_rg ON entregadores(rg);
CREATE INDEX idx_cpf ON entregadores(cpf);
CREATE INDEX idx_cep ON entregadores(cep);
CREATE INDEX idx_placa ON entregadores(placa);
