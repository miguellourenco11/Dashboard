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

// Check if the image ID is provided
if (isset($_GET['id'])) {
    // Fetch the image from the database
    $query = "SELECT content, type FROM imagens WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();
    $image = $stmt->fetch(PDO::FETCH_ASSOC);

    // Output the image
    header("Content-type: " . $image['type']);
    echo $image['content'];
    exit;
}

// Fetch the images from the database
$query = "SELECT * FROM imagens";
$stmt = $conn->query($query);
$images = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Galeria Imagens</title>
    <style>
        .thumbnail {
            display: inline-block;
            margin: 10px;
        }
        .thumbnail img {
            width: 200px;
            height: auto;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Galeria Imagens</h1>

    <?php foreach ($images as $image): ?>
        <div class="thumbnail">
            <a href="?id=<?php echo $image['id']; ?>">
                <img src="?id=<?php echo $image['id']; ?>" alt="<?php echo $image['name']; ?>">
            </a>
        </div>
    <?php endforeach; ?>
</body>
</html>