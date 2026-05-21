<?php
include 'conexao.php';

$sql = "SELECT * FROM produtos ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

    <link rel="stylesheet" href="src/styles/styles.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <title>Loja Aquapet</title>
</head>

<body>

<header>
    <nav id="navbar">
        <i class="fa-solid fa-house" id="nav_logo"> Aquapet</i>

        <ul id="nav_list">
            <li class="nav-item active">
                <a href="#home">Início</a>
            </li>
            <li class="nav-item">
                <a href="#produto">Lista de Produtos</a>
            </li>
            <li class="nav-item">
                <a href="#contacto">Entrar em Contato</a>
            </li>
        </ul>

        <button class="btn-default">Peça aqui</button>

        <button id="mobile_btn">
            <i class="fa-solid fa-bars"></i>
        </button>
    </nav>

    <div id="mobile_menu">
        <ul id="mobile_nav_list">
            <li class="nav-item">
                <a href="#home">Início</a>
            </li>
            <li class="nav-item">
                <a href="#produto">Lista de Produtos</a>
            </li>
            <li class="nav-item">
                <a href="#contacto">Entrar em Contato</a>
            </li>
        </ul>

        <button class="btn-default">Peça aqui</button>
    </div>
</header>

<main id="content">

    <section id="home">
        <div class="shape"></div>

        <div id="cta">
            <h1 class="title">
                Bem-vindo à Aquapet, a loja especializada na venda de animais e produtos para os seus animais de estimação
                <span>volte sempre!</span>
            </h1>

            <p class="description">
                Na Aquapet, oferecemos uma ampla variedade de produtos para cuidar do seu animal de estimação.
            </p>

            <div id="cta_buttons">
                <a href="#produto" class="btn-default">Veja nossos produtos</a>

                <a href="tel:+2389866418" id="phone_button">
                    <button class="btn-default">
                        <i class="fa-solid fa-phone"></i>
                    </button>
                    (+238) 9866418
                </a>
            </div>

            <div class="social-media-buttons">
                <a href="https://www.facebook.com/aquapet.lda" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>

                <a href="https://www.instagram.com/aquapetlda" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>

        <div id="banner">
            <img src="src/Imagem/Aqua.png" alt="Banner da Loja Aquapet">
        </div>
    </section>

    <section id="produto">
        <h2 class="section-title">Nossos Produtos</h2>
        <h3>Descubra nossa ampla seleção de peixes para o corrente mês</h3>

        <div class="nota-prod">
            <div class="prod-heart">
                <i class="fa-solid fa-heart"></i>
            </div>

            <img src="src/Imagem/Mes.png" class="prod-image" alt="Lista de produtos do mês">

            <h3 class="prod-title">Nota:</h3>

            <span class="prod-description">
                Lembrando que fazemos envio para todo o País, mediante pagamento de uma taxa
            </span>
        </div>

        <div id="produtos">

            <?php if ($result && $result->num_rows > 0): ?>

                <?php while ($row = $result->fetch_assoc()): ?>

                    <div class="prod">
                        <div class="prod-heart">
                            <i class="fa-solid fa-heart"></i>
                        </div>

                        <img src="<?php echo htmlspecialchars($row['imagem']); ?>"
                             class="prod-image"
                             alt="<?php echo htmlspecialchars($row['nome']); ?>">

                        <h3 class="prod-title">
                            <?php echo htmlspecialchars($row['nome']); ?>
                        </h3>

                        <span class="prod-description">
                            <?php echo htmlspecialchars($row['descricao']); ?>
                        </span>

                        <div class="caracteristicas">
                            <?php
                            $caracteristicas = explode("\n", $row['caracteristicas']);

                            foreach ($caracteristicas as $item) {
                                if (trim($item) != "") {
                                    echo "<p>" . htmlspecialchars($item) . "</p>";
                                }
                            }
                            ?>
                        </div>
                    </div>

                <?php endwhile; ?>

            <?php else: ?>

                <p>Nenhum produto cadastrado.</p>

            <?php endif; ?>

        </div>
    </section>

    <section id="contacto">
        <img src="src/Imagem/Contacto.png" id="aqua_cont" alt="Contacto Aquapet">

        <div id="entrar_em_contacto">
            <h2 class="section-title">Entre em Contato</h2>

            <p>
                Estamos aqui para ajudar! Se você tiver alguma dúvida,
                sugestão ou precisar de assistência,<br>
                não hesite em entrar em contato conosco.
                Nossa equipe está pronta para atender suas necessidades
                e garantir que sua experiência com a Aquapet seja a melhor possível.
            </p>

            <div id="contact_info">
                <div class="contact_item">
                    <i class="fa-solid fa-phone"></i>
                    <span>(+238) 9866418</span>
                </div>

                <div class="contact_item">
                    <i class="fa-solid fa-envelope"></i>
                    <span>aquapet@gmail.com</span>
                </div>
            </div>
        </div>
    </section>

</main>

<footer>
    <div id="footer_items">
        <span id="copyright">
            &copy; 2026 Aquapet.
        </span>

        <div class="social-media-buttons">
            <a href="https://www.facebook.com/aquapet.lda" target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>

            <a href="https://www.instagram.com/aquapetlda" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
    </div>
</footer>

<script src="src/javascript/script.js"></script>

</body>
</html>