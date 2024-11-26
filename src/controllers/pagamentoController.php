<?php
//require_once __DIR__ . '/../configuration/MercadoPago.php';
namespace MeuProjeto\Controllers;
use MeuProjeto\configuration\MercadoPago;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    $payment = new MercadoPago\Payment();
    $payment->transaction_amount = $data['transaction_amount']; // Valor enviado do frontend
    $payment->token = $data['token']; // Token do cartão enviado pelo React
    $payment->description = $data['description']; // Descrição
    $payment->installments = $data['installments']; // Número de parcelas
    $payment->payment_method_id = $data['payment_method_id']; // Método de pagamento
    $payment->payer = array(
        "email" => $data['payer']['email']
    );

    $payment->save();

    if ($payment->status == "approved") {
        echo json_encode([
            "message" => "Pagamento aprovado!",
            "payment_id" => $payment->id
        ]);
    } else {
        echo json_encode([
            "message" => "Pagamento falhou!",
            "error" => $payment->status_detail
        ]);
    }
}
