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
                <th><b>Site</b></th>
                <th><b>Localidade</b></th>
                <th><b>Observações</b></th>
            </tr>';

$query = "SELECT e.id as eid, e.nome as enome, email, telefone, site, l.nome as lnome, observacoes FROM empresas e, localidades l WHERE e.localidade = l.id and e.estado = 1 order by e.id";
$result = mysqli_query($link, $query);
while($row = mysqli_fetch_array($result)) {
$html.=    '<tr>
                <td>' . $row['enome'] . '</td>
                <td>' . $row['email'] . '</td>
                <td>' . $row['telefone'] . '</td>
                <td>' . $row['site'] . '</td>
                <td>' . $row['lnome'] . '</td>
                <td>' . $row['observacoes'] . '</td>
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
    $pdf->Output('empresas.pdf', 'D');
    exit();
}
