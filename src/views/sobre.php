<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre nós</title>
    <link rel="icon" href="./images/icons8-pinheiro-162.png" type="image/png">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        main {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h1 {
            color: #2d5938;
            border-bottom: 2px solid #397348;
            padding-bottom: 10px;
            margin-top: 30px;
            font-size: 2em;
        }

        p {
            line-height: 1.8;
            color: #333;
            margin: 20px 0;
            text-align: justify;
            padding: 0 20px;
        }

        main {
            animation: fadeIn 1s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            main {
                margin: 20px;
            }
            
            h1 {
                font-size: 1.5em;
            }
            
            p {
                padding: 0 10px;
            }
        }
    </style>
</head>

<body>
    <header>
        <?php include("header.php"); ?>
    </header>
    <main>
        <h1>Quem somos?</h1>
        <p>
        Somos um grupo que visa espalhar e consicientizar outros indivíduos sobre a importância que a fauna possui para a população mundial. <br />
        Em um mundo onde há a crescente da poluição atmosférica, poluição marinha e o aumento do aquecimento global, surge a necessidade da conscientização <br />
        sobre os perigos que recursos poluentes trazem para a saúde humana e para o meio ambiente.
        </p>
        <h1>Qual o nosso objetivo?</h1>
        <p>
            Nosso objetivo é espalhar o conhecimento acerca de plantas e conscientizar o povo a respeito da plantação de árvores no meio-ambiente. <br />
            Aqui, vendemos plantas e explicamos suas características acerca do mesmo, além de citar curiosidades interessantes sobre algumas plantas <br />
            que talvez algumas pessoas não saibam. Além disso, postamos blogs sobre o prejuízo que está sendo afetado no meio-ambiente e detalhamos sobre.
        </p>
        <h1>Nosso trajeto</h1>
        <p>
            Começamos apenas como uma simples tela de login feito em PHP, mas nosso projeto evoluiu-se para um projeto para a feira tecnológica da Etec. <br />
            Ao longo do caminho, enfretamos desafios e dificuldades no desenvolvimento do projeto, superando obstáculos com o trabalho em equipe e com a <br />
            colaboração da nossa equipe de desenvolvedores.
        </p>
    </main>
    <footer>
        <?php include("./footer.php") ?>
    </footer>
</body>
</html>