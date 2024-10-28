document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('./../views/cadastro&login.php');
    const passwordInput = document.getElementById('senha');
    const confirmPasswordInput = document.getElementById('senha2');
    const usernameInput = document.getElementById('nome');

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        const password = passwordInput.value;
        const confirmPassword = confirmPasswordInput.value;
        const username = usernameInput.value;

        if (password !== confirmPassword) {
            alert('As senhas não coincidem.');
            return;
        }

        fetch('/path/to/your/php/validation_script.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ username: username, password: password })
        })
        .then(response => response.json())
        .then(data => {
            if (data.valid) {
                form.submit();
            } else {
                alert('Senha incorreta.');
            }
        })
        .catch(error => {
            console.error('Erro:', error);
        });
    });
});