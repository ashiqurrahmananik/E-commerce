<?php
// Inclua a biblioteca TCPDF
require_once 'pdf/tcpdf.php';
include_once 'lib/connection.php';

if(isset($_POST['comprovante'])){
    $id = $_POST['id'];
    $sql = "SELECT 
                o.id AS order_id,
                o.created_at AS order_date,
                u.f_name AS user_first_name,
                u.l_name AS user_last_name,
                u.email AS user_email,
                o.phone AS user_phone,
                o.address AS user_address,
                o.totalproduct AS selected_products,
                o.totalprice AS total_price,
                o.status AS order_status
            FROM 
                orders o
            JOIN 
                users u ON o.userid = u.id
            WHERE
                o.id = $id";
    $busca = mysqli_query($conn, $sql);
    
    // Verifique se a consulta foi bem-sucedida
    if ($busca) {
        // Obtenha os dados do pedido
        $pedido = mysqli_fetch_assoc($busca);
        
        // Crie uma nova instância TCPDF
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // Defina informações do documento
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Seu Nome');
        $pdf->SetTitle('Comprovante de Pedido');
        $pdf->SetSubject('Comprovante de Pedido');
        $pdf->SetKeywords('Pedido, Comprovante');

        // Defina o cabeçalho e rodapé
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        // Adicione uma página
        $pdf->AddPage();

        // Defina o estilo do texto
        $pdf->SetFont('helvetica', '', 12);

        // Adicione os dados do pedido ao PDF
        $pdf->Cell(0, 10, 'ID do Pedido: ' . $pedido['order_id'], 0, true);
        $pdf->Cell(0, 10, 'Data do Pedido: ' . $pedido['order_date'], 0, true);
        $pdf->Cell(0, 10, 'Nome do Cliente: ' . $pedido['user_first_name'] . ' ' . $pedido['user_last_name'], 0, true);
        $pdf->Cell(0, 10, 'Email do Cliente: ' . $pedido['user_email'], 0, true);
        $pdf->Cell(0, 10, 'Telefone do Cliente: ' . $pedido['user_phone'], 0, true);
        $pdf->Cell(0, 10, 'Endereço do Cliente: ' . $pedido['user_address'], 0, true);
        $pdf->Cell(0, 10, 'Produtos Selecionados: ' . $pedido['selected_products'], 0, true);
        $pdf->Cell(0, 10, 'Total de Preço: ' . $pedido['total_price'], 0, true);
        $pdf->Cell(0, 10, 'Status do Pedido: ' . $pedido['order_status'], 0, true);

        // Saída do PDF
        $pdf->Output('comprovante_pedido.pdf', 'D');
    } else {
        echo "Erro ao buscar dados do pedido.";
    }
}
?>
