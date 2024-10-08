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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style_telainicial2.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Ticketly</title>
</head>

<body>


    <!-- navbar -->
    <header class="header">

        <a href="#" class="logo">
            <img src="../Fotos/ticketlylogo.png" alt="">
        </a>

        <nav class="navbar">
            <a href="#">início</a>
            <a href="teatro2.php">teatro</a>
            <a href="shows2.php">shows</a>
            <a href="standup2.php">stand up</a>
            <a href="workshops2.php">workshops</a>
            <a href="diversos2.php">diversos</a>
        </nav>

        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

        <div class="search-box">
            <input class="search-txt" type="text" name="" placeholder="Pesquise...">
            <div class="suggestions"></div>
            <a class="search-btn" href="#">
                <i class="fas fa-search"></i>
            </a>
        </div>
        <?= '<div class="echos">' . $nome . '</div>'; ?>
        <div class="bx bxs-user botao cadastro" onclick="window.location = 'telausuario.php'"> </div>
        <div class="navbar"><a href="logout.php">Sair</a>

    </header>
    <!-- fim da navbar -->
    <!-- categorias -->
    <section id="tranding">
        <div class="container">
            <div class="swiper tranding-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide tranding-slide" onclick="window.location = 'sunset2.php'">
                        <div class="tranding-slide-img">
                            <img src="../Fotos/umdocencontro.png" alt="">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide tranding-slide" onclick="window.location= 'homemaranha2.php'">
                        <div class="tranding-slide-img">
                            <img src="../Fotos/homemaranha.png" alt="">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide tranding-slide" onclick="window.location = 'paidosgatos2.php'">
                        <div class="tranding-slide-img">
                            <img src="../Fotos/opaidosgatos.png" alt="">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide tranding-slide" onclick="window.location = 'lean2.php'">
                        <div class="tranding-slide-img">
                            <img src="../Fotos/25forumnacional.png" alt="">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide tranding-slide" onclick="window.location = 'seguranca2.php'">
                        <div class="tranding-slide-img">
                            <img src="../Fotos/cyber.png" alt="">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tranding-slider-control">
                    <div class="swiper-button-prev slider-arrow">
                        <ion-icon name="arrow-back-outline"></ion-icon>
                    </div>
                    <div class="swiper-button-next slider-arrow">
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- fim das categorias -->

    <!-- Eventos -->
    <div class="events">
        <h2 class="name_events" id="teatro">Teatro</h2>
        <br>
        <div class="flex-containers">
            <div class="containers" onclick="window.location= 'quandoeuformae2.php'"><img class="foto-eventos" src="../Fotos/quandoeuformae.png" width="300px" height="150px">
                <br>
                <pn class="data">Ter, 27 Set · 19:00</pn><br>
                <pn class="nome">Uma Comédia Cheia de Veneno</pn> <br>
                <pn class="lugar">Teatro Guararapes - Recife, PE</pn>
            </div>
            <div class="containers" onclick="window.location= 'homemaranha2.php'"><img class="foto-eventos" src="../Fotos/homemaranha.png" width="300px" height="150px">
                <br>
                <pn class="data">Dom, 17 Set · 16:00</pn><br>
                <pn class="nome">Homem Aranha no Aranhaverso</pn> <br>
                <pn class="lugar">Teatro Boa Vista - Recife, PE</pn>
            </div>
            <div class="containers" onclick="window.location= 'abelaeafera2.php'"><img class="foto-eventos" src="../Fotos/abelaeafera.png" width="300px" height="150px">
                <br>
                <pn class="data">Dom, 15 Out · 20:00</pn><br>
                <pn class="nome">A bela e a fera</pn> <br>
                <pn class="lugar">Teatro De Santa Isabel - Recife, PE </pn>
            </div>
            <div class="containers" onclick="window.location= 'capiba2.php'"><img class="foto-eventos" src="../Fotos/capiba.png" width="300px" height="150px">
                <br>
                <pn class="data">Qua, 08 Out · 15:00</pn> <br>
                <pn class="nome">Musical Capiba - Pelas ruas eu vou</pn><br>
                <pn class="lugar">Teatro Luiz Mendonça - Recife, PE</pn>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br>

        <h2 class="name_events" id="shows">Shows</h2>
        <br>
        <div class="flex-containers">
            <div class="containers" onclick="window.location= 'sunset2.php'"> <img class="foto-eventos" src="../Fotos/umdocencontro.png" width="300px" height="150px">
                <br>
                <pn class="data">Dom, 21 Set · 14:00</pn><br>
                <pn class="nome">PÉRICLES SUNSET - OS CAMARADAS</pn> <br>
                <pn class="lugar">Arena Pernambuco - Recife, PE</pn>
            </div>
            <div class="containers"><img class="foto-eventos" src="../Fotos/lafolie.png" width="300px" height="150px">
                <br>
                <pn class="data">Sab, 25 Nov · 16:00</pn><br>
                <pn class="nome">LA FOLIE FESTIVAL</pn> <br>
                <pn class="lugar"> Área Externa do Centro de Convenções - Olinda, PE</pn>
            </div>
            <div class="containers" onclick="window.location= 'lounge2.php'"><img class="foto-eventos" src="../Fotos/bebidarosa.png" width="300px" height="150px">
                <br>
                <pn class="data">Sab, 07 Out · 22:00</pn><br>
                <pn class="nome">Bebida Rosa</pn> <br>
                <pn class="lugar">LOUNGE MUSIC - JABOATÃO DOS GUARARAPES, PE </pn>
            </div>
            <div class="containers" onclick="window.location= 'jimi2.php'"><img class="foto-eventos" src="../Fotos/xeletronica.png" width="300px" height="150px">
                <br>
                <pn class="data">Sab, 14 Out · 16:00</pn> <br>
                <pn class="nome">JIMI INDOOR</pn><br>
                <pn class="lugar">Boa Viagem - Recife, PE</pn>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br>

        <h2 class="name_events" id="standup">Stand Up</h2>
        <br>
        <div class="flex-containers">
            <div class="containers" onclick="window.location= 'cordabamba2.php'"><img class="foto-eventos" src="../Fotos/anoitedacordabamba.png" width="300px" height="150px">
                <br>
                <pn class="data">Qui, 26 Out · 20:00</pn><br>
                <pn class="nome">A Noite da Corda Bamba</pn> <br>
                <pn class="lugar">Teatro Guararapes - Recife, PE</pn>
            </div>
            <div class="containers"><img class="foto-eventos" src="../Fotos/hahahappy.png" width="300px" height="150px">
                <br>
                <pn class="data">Qua, 08 Nov · 08:00</pn><br>
                <pn class="nome">HaHaHappy Hour</pn> <br>
                <pn class="lugar">Teatro Barreto Júnior - Recife, PE</pn>
            </div>
            <div class="containers" onclick="window.location= 'paidosgatos2.php'"><img class="foto-eventos" src="../Fotos/opaidosgatos.png" width="300px" height="150px">
                <br>
                <pn class="data">Dom, 15 Out · 08:00</pn><br>
                <pn class="nome">O Pai dos Gatos - André Assunção </pn> <br>
                <pn class="lugar">Teatro de Santa Isabel - Recife, PE </pn>
            </div>
            <div class="containers"><img class="foto-eventos" src="../Fotos/sopiadaboa.png" width="300px" height="150px">
                <br>
                <pn class="data">Sab, 28 Out · 08:00</pn> <br>
                <pn class="nome">Só Piada Boa</pn><br>
                <pn class="lugar">Teatro Guararapes - Recife, PE</pn>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br>

        <h2 class="name_events" id="workshops">Workshops</h2>
        <br>
        <div class="flex-containers">
            <div class="containers" onclick="window.location= 'lean2.php'"><img class="foto-eventos" src="../Fotos/25forumnacional.png" width="300px" height="150px">
                <br>
                <pn class="data">Sab, 30 Nov · 09:00</pn><br>
                <pn class="nome">FÓRUM NEGÓCIOS EXPERIENCE 2023</pn> <br>
                <pn class="lugar">Centro de Convenções - Recife, PE</pn>
            </div>
            <div class="containers"><img class="foto-eventos" src="../Fotos/spotlight.png" width="300px" height="150px">
                <br>
                <pn class="data">Sex, 01 Dez · 08:00</pn><br>
                <pn class="nome">SpotLight</pn> <br>
                <pn class="lugar">Centro de Convenções - Recife, PE</pn>
            </div>
            <div class="containers" onclick="window.location= 'beauty2.php'"><img class="foto-eventos" src="../Fotos/beautyfair.png" width="300px" height="150px">
                <br>
                <pn class="data">Qui, 09 Nov · 16:00</pn><br>
                <pn class="nome">Beauty Fair 2023 l Espaço Miss Lary</pn> <br>
                <pn class="lugar">Shopping RioMar - Recife, PE </pn>
            </div>
            <div class="containers"><img class="foto-eventos" src="../Fotos/palestraslean.png" width="300px" height="150px">
                <br>
                <pn class="data">Qui, 23 Nov · 08:30</pn> <br>
                <pn class="nome">2º Ciclo de Palestras Lean For All</pn><br>
                <pn class="lugar">Park Hotel - Recife, PE</pn>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br>

        <h2 class="name_events" id="diversos">Diversos</h2>
        <br>
        <div class="flex-containers">
            <div class="containers" onclick="window.location= 'seguranca2.php'"><img class="foto-eventos" src="../Fotos/cyber.png" width="300px" height="150px">
                <br>
                <pn class="data">Seg, 04 Dez - 17:00</pn><br>
                <pn class="nome">Cibersegurança Focada na Indústria 4.0</pn> <br>
                <pn class="lugar">INDT(Instituto de Desenvolvimento Tecnológico) - Manaus, AM</pn>
            </div>
            <div class="containers"><img class="foto-eventos" src="../Fotos/paçofrevo.png" width="300px" height="150px">
                <br>
                <pn class="data">Qui, 30 Nov · 08:30</pn><br>
                <pn class="nome">VISITE O PAÇO DO FREVO</pn> <br>
                <pn class="lugar">Paço do Frevo - Recife, PE</pn>
            </div>
            <div class="containers"><img class="foto-eventos" src="../Fotos/luta.png" width="300px" height="150px">
                <br>
                <pn class="data">Sab, 28 Out · 22:00</pn><br>
                <pn class="nome">TWF FIGHT BEST OF THE BEST</pn> <br>
                <pn class="lugar">Geraldão - Recife, PE </pn>
            </div>
            <div class="containers"><img class="foto-eventos" src="../Fotos/telaplana.png" width="300px" height="150px">
                <br>
                <pn class="data">Sex, 20 Out · 22:00</pn> <br>
                <pn class="nome">TELAPLANA</pn><br>
                <pn class="lugar">Clube da Caixa - Recife, PE</pn>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br>
    </div>
    <!-- fim dos Eventos -->

    <!-- rodapé -->
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="inicial_script.js"></script>
</body>

</html>
<style>
    .echos {
        color: black;
        font-size: 18px;
        padding-right: 22px;
    }
</style>