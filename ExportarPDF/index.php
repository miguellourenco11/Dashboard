<!DOCTYPE html>
<html>
<head>
    <title>Exportar para PDF</title>
</head>
<body>
    <h1>Export para PDF</h1>
<?php include ('DBConnection.php')  ?>
    <form method="POST" action="exportar.php">
        <table>
            <tr>
                <th><b>Nome</b></th>
                <th><b>Quantidade</b></th>
                <th><b>Cor</b></th>
                <th><b>Preço Unitário</b></th>
                <th><b>Fornecedor</b></th>
                <th><b>Categoria</b></th>
            </tr>
            <?php $query = "SELECT codprod, designacao, quantidade, cor, precounitario, nome, nomecat, p.content as content, c.estado as estadocat, f.estado as estadoforn FROM produto p, fornecedores f, categorias c WHERE p.fornecedor = f.idforn and p.categoria = c.id and p.estado = 1 order by codprod";
            $result = mysqli_query($link, $query);
            while($row = mysqli_fetch_array($result)) {?>
            <tr>
                <td><?php echo $row['designacao'] ?></td>
                <td><?php echo $row['quantidade'] ?></td>
                <td><?php echo $row['cor'] ?></td>
                <td><?php echo $row['precounitario'] ?></td>
                <td><?php echo $row['nome'] ?></td>
                <td><?php echo $row['nomecat'] ?></td>
            </tr>
            <?php } ?>
        </table>

        <button type="submit" name="export">Exportar</button>
    </form>
</body>
</html>