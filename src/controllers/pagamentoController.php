<?php

use MercadoPago\Client\Payment\PaymentClient;
use MercadoPago\Client\Common\RequestOptions;
use MercadoPago\MercadoPagoConfig;

class PagamentosController
{
    public function post($paymentRequest)
    {
        try {
            // Configuração do MercadoPago
            MercadoPagoConfig::setAccessToken("TEST-2947339509677471-112018-f5b392bbfb8dafb5d160fa6577380fae-2108002326");

            // Criar a instância das opções de requisição
            $requestOptions = new RequestOptions();

            // Definir cabeçalhos personalizados
            $requestOptions->setCustomHeaders([
                'x-idempotency-key' => uniqid('', true) // Gerando o idempotency key
            ]);

            // Criar o client do pagamento
            $client = new PaymentClient();

            // Enviar a requisição para criar o pagamento
            $payment = $client->create([
                "transaction_amount" => (float) $paymentRequest['transaction_amount'],
                "token" => $paymentRequest['token'],
                "description" => $paymentRequest['description'],
                "installments" => $paymentRequest['installments'],
                "payment_method_id" => $paymentRequest['payment_method_id'],
                "payer" => [
                    "email" => $paymentRequest['payer_email'], // 'payer_email' é a chave correta
                    "identification" => [
                        "type" => $paymentRequest['identification_type'], // 'identification_type' é a chave correta
                        "number" => $paymentRequest['identification_number'] // 'identification_number' é a chave correta
                    ]
                ]
            ], $requestOptions);


            // Retornar uma resposta de sucesso
            return json_encode(["status" => "success", "payment" => $payment]);
        } catch (Exception $ex) {
            // Em caso de erro, retornar a mensagem de erro
            return json_encode(["status" => "error", "message" => $ex->getMessage()]);
        }
    }
}