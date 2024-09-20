<?php
    session_start();
    if((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['nome']);
        unset($_SESSION['senha']);
        header('Location: ../../cadastro.php');
    }
    $nome = $_SESSION['nome'];

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forma de Pagamento</title>
    <link rel="stylesheet" href="style_telapagamento.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

    <!-- navbar -->
    <header class="header">

        <a href="telainicial2.php" class="logo">
            <img src="../Fotos/ticketlylogo.png" alt="">
        </a>

        <nav class="navbar">
            <a href="telainicial2.php">início</a>
            <a href="teatro2.php">teatro</a>
            <a href="shows2.php">shows</a>
            <a href="standup2.php">stand up</a>
            <a href="workshops2.php">workshops</a>
            <a href="diversos2.php">diversos</a>
        </nav>

        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>
        <?= '<div class="echos">' . $nome . '</div>'; ?>
        <div class="bx bxs-user botao cadastro" onclick="window.location = 'telausuario.php'"></div>
        <div class="navbar"><a href="logout.php">Sair</a>

    </header>
    <!-- fim da navbar -->

    <div class="wrapper">
        <h2>Pagamento</h2>
        <form action="" method="post" id="paymentForm">

            <h4>Conta</h4>

            <div class="input_group">
                <div class="input_box">
                    <input type="text" pattern="[A-Za-zÀ-ÖØ-öø-ÿ\s']+" maxlength="50" placeholder="Nome Completo"
                        required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
            </div>

            <div class="input_group">
                <div class="input_box">
                    <input type="email" maxlength="45" placeholder="Email" required class="name">
                    <i class="fa fa-envelope icon"></i>
                </div>
            </div>

            <div class="input_group">
                <div class="input_box">
                    <input type="number" inputmode="numeric" minlength="10" maxlength="12" placeholder="Telefone"
                        required class="name">
                    <i class="fa fa-phone-square icon" aria-hidden="true"></i>
                </div>
            </div>

            <div class="input_group">
                <div class="input_box">
                    <h4>Data de Nascimento</h4>
                    <input type="date" min="1960-01-01" max="2005-12-31" placeholder="AAAA" required class="dob">
                </div>
            </div>

            <div class="input_group">
                <div class="input_box">
                    <h4>Gênero</h4>
                    <input type="radio" name="gender" class="radio" id="b1" checked>
                    <label for="b1">Masculino</label>
                    <input type="radio" name="gender" class="radio" id="b2">
                    <label for="b2">Feminino</label>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <h4>Formas de Pagamento</h4>
                    <select id="paymentMethod" name="paymentMethod" onchange="showPaymentOption()">
                        <option value="" selected disabled>Selecione uma opção</option>
                        <option value="Pix">Pix</option>
                        <option value="creditcard">Cartão de Crédito</option>
                    </select>
                </div>
            </div>

            <div class="input_box" id="creditCardDetails" style="display: none;">
                <input type="text" pattern="[A-Za-zÀ-ÖØ-öø-ÿ\s']+" maxlength="40" id="creditCardName"
                    name="creditCardName" placeholder="Nome do Títular" required>
                <input type="number" inputmode="numeric" maxlength="16" id="creditCardNumber" name="creditCardNumber"
                    placeholder="Número no Cartão" required>
                <input type="month" min="2023-08" max="2033-12" id="creditCardExpiry" name="creditCardExpiry"
                    placeholder="Validade" required>
                <input type="number" maxlength="3" id="creditCardCvc" name="creditCardCvc" placeholder="Cvc" required>
                <div id="creditCardWarning" class="warning">Por favor, preencha todos os campos.</div>
                <button type="button" onclick="processCreditCardPayment()">Pagar</button>
                <button type="button" onclick="clearForm()">Limpar</button>
            </div>

            <div class="input_group" id="pixDetails" style="display: none;">
                <div class="input_box pix_box">
                    <h4>Dados para PIX</h4>
                    <input type="text" pattern="[A-Za-zÀ-ÖØ-öø-ÿ\s']+" maxlength="50" id="pixName" name="pixName"
                        placeholder="Seu Nome Completo" required>
                    <input type="tel" inputmode="numeric" minlength="11" maxlength="11" id="pixCpf" name="pixCpf"
                        placeholder="Seu CPF" required>
                    <div class="pixCodeContainer" id="pixCodeContainer" style="display: none;">
                        <div class="generatedPixBox" id="generatedPixBox">
                            <p>Código PIX:</p>
                            <span id="generatedPixCode"></span>
                            <button type="button" onclick="copyPixCode()">Copiar</button>
                        </div>
                    </div>
                    <button type="button" onclick="generatePixCode()">Gerar Código PIX</button>
                    <button type="button" onclick="clearPixForm()">Limpar</button>
                    <div class="container">
                        <button type="submit" class="btn" onclick="openpopup()">Concluir Compra</button>
                        <div class="popup" id="popup">
                            <img src="../Fotos/check.png">
                            <h2>Agradecemos Pela Compra!</h2>
                            <p>Verifique seu email. Obrigado!</p>
                            <button type="button" onclick="window.location= 'telainicial2.php'">OK</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <footer>
        <div id="footer_content">
            <div id="footer_contacts">
                <h1>Ticketly</h1>
                <p>Onde mais nos encontrar.</p>

                <div id="footer_social_media">
                    <a href="#" class="footer-link" id="instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="#" class="footer-link" id="twitter">
                        <i class="fa-brands fa-twitter"></i>
                    </a>

                    <a href="#" class="footer-link" id="whatsapp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>

            <ul class="footer-list">
                <li>
                    <h3>Eventos</h3>
                </li>
                <li>
                    <a href="shows2.php" class="footer-link">Shows</a>
                </li>
                <li>
                    <a href="teatro2.php" class="footer-link">Teatro</a>
                </li>
                <li>
                    <a href="workshops2.php" class="footer-link">Workshops</a>
                </li>
                <li>
                    <a href="standup2.php" class="footer-link">Stand up</a>
                </li>
                <li>
                    <a href="diversos2.php" class="footer-link">Diversos</a>
                </li>
            </ul>

            <ul class="footer-list">
                <li>
                    <h3>Ajuda</h3>
                </li>
                <li>
                    <a href="#" class="footer-link">Compradores & Participantes</a>
                </li>
            </ul>

            <div id="footer_subscribe">
                <h3>Inscreva-se</h3>

                <p>
                    Coloque seu email para saber quando novos eventos
                    chegarem.
                </p>

                <div id="input_group">
                    <input type="email" id="email">
                    <button>
                        <i class="fa-regular fa-envelope"></i>
                    </button>
                </div>
            </div>
        </div>

        <div id="footer_copyright">
            Ticketly &#169
            Copyright 2023
        </div>
    </footer>
    <!-- fim do rodapé -->
    <script>
        function showPaymentOption() {
            var paymentMethod = document.getElementById("paymentMethod").value;
            var creditCardDetails = document.getElementById("creditCardDetails");
            var pixDetails = document.getElementById("pixDetails");

            if (paymentMethod === "creditcard") {
                creditCardDetails.style.display = "block";
                pixDetails.style.display = "none";
            } else if (paymentMethod === "Pix") {
                creditCardDetails.style.display = "none";
                pixDetails.style.display = "block";
            }
        }

        function clearForm() {
            document.getElementById('pixName').value = '';
            document.getElementById('pixCpf').value = '';
            document.getElementById('pixCodeDisplay').style.display = 'none';

            document.getElementById('creditCardName').value = '';
            document.getElementById('creditCardNumber').value = '';
            document.getElementById('creditCardExpiry').value = '';
            document.getElementById('creditCardCvc').value = '';
            document.getElementById('creditCardWarning').style.display = 'none';
        }

        function clearPixForm() {
            document.getElementById('pixName').value = '';
            document.getElementById('pixCpf').value = '';
            document.getElementById('pixCodeDisplay').style.display = 'none';
        }

        function generatePixCode() {
            var pixName = document.getElementById('pixName').value;
            var pixCpf = document.getElementById('pixCpf').value;

            if (!pixName || !pixCpf) {
                alert('Por favor, preencha todos os campos.');
                return;
            }

            var generatedPixDigits = "5069af42-1529-4dc3-ab3e-1941352bcdf6"; // Substituir por seu código PIX

            var generatedPixCode = document.getElementById('generatedPixCode');
            generatedPixCode.textContent = generatedPixDigits;

            var pixCodeContainer = document.getElementById('pixCodeContainer');
            pixCodeContainer.style.display = 'block';
        }
        function processCreditCardPayment() {
            var creditCardName = document.getElementById('creditCardName').value;
            var creditCardNumber = document.getElementById('creditCardNumber').value;
            var creditCardExpiry = document.getElementById('creditCardExpiry').value;
            var creditCardCvc = document.getElementById('creditCardCvc').value;

            if (!creditCardName || !creditCardNumber || !creditCardExpiry || !creditCardCvc) {
                document.getElementById('creditCardWarning').style.display = 'block';
                return;
            }

            alert('Pagamento com cartão processado!');
            document.getElementById('creditCardWarning').style.display = 'none';
        }
        function copyPixCode() {
            var pixCode = document.getElementById('generatedPixCode');
            var codeText = pixCode.textContent || pixCode.innerText;

            navigator.clipboard.writeText(codeText)
                .then(function () {
                    alert('Código PIX copiado com sucesso!');
                })
                .catch(function () {
                    alert('Falha ao copiar o código PIX.');
                });
        }

        let popup = document.getElementById("popup");

        function openpopup() {
            popup.classList.add("open-popup");

        }
        function closepopup() {
            popup.classList.remove("open-popup");

        }
    </script>

</body>

</html>
<style>
    .echos {
        color: black;
        font-size: 18px;
        padding-left: 35rem;
    }
</style>