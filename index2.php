<!DOCTYPE html>
<html>
<head>
    <title>Upload Imagem</title>
</head>
<body>
    <h1>Upload Imagem</h1>
    <form method="POST" action="upload.php" enctype="multipart/form-data">
        <input type="file" name="image" accept="image/*">
        <button type="submit" name="upload">Upload</button>
    </form>
</body>
</html>