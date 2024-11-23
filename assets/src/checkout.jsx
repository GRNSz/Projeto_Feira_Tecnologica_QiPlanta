import React from 'react';
import { initMercadoPago, CardPayment } from '@mercadopago/sdk-react';

// Inicializando o Mercado Pago SDK
initMercadoPago('TEST-f7adf0d0-09ed-4fff-b581-1ef88659cc5e');

const PaymentPage = () => {
  const initialization = {
    amount: 100, // valor total a ser pago
  };

  const onSubmit = async (formData) => {
    return new Promise((resolve, reject) => {
      fetch("/process_payment", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify(formData),
      })
        .then((response) => response.json())
        .then(() => resolve())
        .catch((error) => reject(error));
    });
  };

  const onError = (error) => {
    console.log(error);
  };

  const onReady = () => {
    // Callback chamado quando o Brick estiver pronto
  };

  return (
    <div>
      <CardPayment
        initialization={initialization}
        onSubmit={onSubmit}
        onReady={onReady}
        onError={onError}
      />
    </div>
  );
};

export default PaymentPage;
