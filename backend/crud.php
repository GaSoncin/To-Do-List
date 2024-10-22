<?php
include 'conectar.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['titulo'])) {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $sql = "INSERT INTO tarefas (titulo, descricao) VALUES ('$titulo', '$descricao')";
    if ($conn->query($sql) === TRUE) {
        echo "Nova tarefa criada!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $sql = "SELECT * FROM tarefas ORDER BY concluida ASC";
    $result = $conn->query($sql);
    $tarefas = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $tarefas[] = $row;
        }
    }
    echo json_encode($tarefas);
}

if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    parse_str(file_get_contents("php://input"), $_PUT);
    $id = $_PUT['id'];
    $titulo = $_PUT['titulo'];
    $descricao = $_PUT['descricao'];
    $concluida = $_PUT['concluida'];
    
    $sql = "UPDATE tarefas SET titulo='$titulo', descricao='$descricao', concluida='$concluida' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Tarefa atualizada!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    parse_str(file_get_contents("php://input"), $_DELETE);
    $id = $_DELETE['id'];
    $sql = "DELETE FROM tarefas WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Tarefa deletada!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
?>