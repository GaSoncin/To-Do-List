-- Script para criar o Banco de Dados e tabela de tarefas
CREATE DATABASE IF NOT EXISTS tabula_todolist;

USE tabula_todolist;

CREATE TABLE IF NOT EXISTS tarefas (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    descricao TEXT NULL,
    concluida TINYINT(1) DEFAULT 0,
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO tarefas (titulo, descricao, concluida) 
VALUES 
('Exemplo de Tarefa 1', 'Esta é a descrição da tarefa 1', 0),
('Exemplo de Tarefa 2', 'Esta é a descrição da tarefa 2', 1);