<?php
//TCPDF livraria
require_once('ExportarPDF/tcpdf.php');

include ("DBConnection.php");

// HTML table content
$html = '<table>
            <tr>
                <th><b>Nome</b></th>
                <th><b>Quantidade</b></th>
                <th><b>Cor</b></th>
                <th><b>Preço</b></th>
                <th><b>Fornecedor</b></th>
                <th><b>Categoria</b></th>
            </tr>';

$query = "SELECT codprod, designacao, quantidade, cor, precounitario, nome, nomecat, p.content as content, c.estado as estadocat, f.estado as estadoforn FROM produto p, fornecedores f, categorias c WHERE p.fornecedor = f.idforn and p.categoria = c.id and p.estado = 1 order by codprod";
$result = mysqli_query($link, $query);
while($row = mysqli_fetch_array($result)) {
$html.=    '<tr>
                <td>' . $row['designacao'] . '</td>
                <td>' . $row['quantidade'] . '</td>
                <td>' . $row['cor'] . '</td>
                <td>' . $row['precounitario'] . '</td>
                <td>' . $row['nome'] . '</td>
                <td>' . $row['nomecat'] . '</td>
            </tr>';
};

$html.= '</table>';



// Verificar se o botão de Exportar é pressionado.
if (isset($_POST['export'])) {
    // Criar uma Nova Instância PDF
    $pdf = new TCPDF();

    // Informação e metadata do Ficheiro
    $pdf->SetCreator('Your Application');
    $pdf->SetAuthor('Your Name');
    $pdf->SetTitle('Table Data Export to PDF');
    $pdf->SetSubject('Table Data');
    $pdf->SetKeywords('table, data, pdf');

    // Adicionar Página
    $pdf->AddPage();

    // Exportal a Tabela HTML
    $pdf->writeHTML($html, true, false, true, false, '');

    // Exportar o Ficheiro PDF
    ob_clean();
    $pdf->Output('produtos.pdf', 'D');
    exit();
}
