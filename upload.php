<?php
// Ligação Base de Dados
$host = "localhost";
$dbname = "11tgpsi";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Falha na Ligação: " . $e->getMessage());
}

// Verificar Se Foi Feito o Post do Formulário
if (isset($_POST['upload'])) {
    // Verificar Se Está Selecionado um Ficheiro
    if ($_FILES['image']['name']) {
        $file_name = $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_size = $_FILES['image']['size'];

        // Fazer a Leitura do Ficheiro
        $fp = fopen($file_tmp, 'r');
        $content = fread($fp, filesize($file_tmp));
        $content = addslashes($content);
        fclose($fp);

        // Insert o ficheiro na tabela imagens
        $query = "INSERT INTO imagens (name, type, size, content) VALUES ('$file_name', '$file_type', '$file_size', '$content')";
        $conn->exec($query);

        echo "Ficheiro Carregado com Sucesso.";
    } else {
        echo "É necessário Selecionar um Ficheiro.";
    }
}
?>