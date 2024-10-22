<?php
//TCPDF livraria
require_once('ExportarPDF/tcpdf.php');

include ("DBConnection.php");

// HTML table content
$html = '<table>
            <tr>
                <th><b>Nome</b></th>
                <th><b>Email</b></th>
                <th><b>Telefone</b></th>
                <th><b>Localidade</b></th>
            </tr>';

$query = "SELECT idforn, f.nome as nomeforn, email, telefone, l.nome as lnome, l.estado as estadolocal FROM localidades l, fornecedores f WHERE f.estado = 1 and l.id = f.localidade order by idforn";
$result = mysqli_query($link, $query);
while($row = mysqli_fetch_array($result)) {
$html.=    '<tr>
                <td>' . $row['nomeforn'] . '</td>
                <td>' . $row['email'] . '</td>
                <td>' . $row['telefone'] . '</td>
                <td>' . $row['lnome'] . '</td>
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
    $pdf->Output('fornecedores.pdf', 'D');
    exit();
}
