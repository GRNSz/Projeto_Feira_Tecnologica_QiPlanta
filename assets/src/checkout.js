import React, { useEffect } from 'react';

const checkout = () => {
  useEffect(() => {
    const mp = new MercadoPago('TEST-f7adf0d0-09ed-4fff-b581-1ef88659cc5e');
    const bricksBuilder = mp.bricks();

    const renderCardPaymentBrick = async () => {
      const settings = {
        initialization: {
          amount: 100, // valor total a ser pago
        },
        callbacks: {
          onReady: () => {
            // callback quando o Brick estiver pronto
          },
          onSubmit: (formData) => {
            return new Promise((resolve, reject) => {
              fetch('/process_payment', {
                method: 'POST',
                headers: {
                  'Content-Type': 'application/json',
                },
                body: JSON.stringify(formData),
              })
                .then((response) => response.json())
                .then(() => {
                  resolve();
                })
                .catch(() => {
                  reject();
                });
            });
          },
          onError: (error) => {
            console.error(error);
          },
        },
      };
      await bricksBuilder.create('cardPayment', 'cardPaymentBrick_container', settings);
    };

    renderCardPaymentBrick();
  }, []);

  return (
    <div>
      <div id="cardPaymentBrick_container"></div>
    </div>
  );
};

export default checkout;
