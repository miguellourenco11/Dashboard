<?php
//TCPDF livraria
require_once('ExportarPDF/tcpdf.php');

include ("DBConnection.php");

// HTML table content
$html = '<table>
            <tr>
                <th><b>Nome</b></th>
                <th><b>Password</b></th>
                <th><b>Tipo de utilizador</b></th>
            </tr>';

$query = "SELECT user, pass, t.tipo as tipo FROM utilizadores as u, tipo_user as t where u.estado = '1' and u.idtipo = t.idtipo order by id";
$result = mysqli_query($link, $query);
while($row = mysqli_fetch_array($result)) {
$html.=    '<tr>
                <td>' . $row['user'] . '</td>
                <td>' . $row['pass'] . '</td>
                <td>' . $row['tipo'] . '</td>
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
    $pdf->Output('utilizadores.pdf', 'D');
    exit();
}
