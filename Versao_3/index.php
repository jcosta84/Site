<?php
// index.php
// Página Aquapet convertida para PHP

$produtos = [
    [
        "imagem" => "src/Imagem/Mes1.png",
        "titulo" => "Tartaruga de Orelha Vermelha",
        "descricao" => [
            "Vive em água doce",
            "Alimenta-se de plantas e insetos",
            "Muito popular como animal de estimação"
        ]
    ],
    [
        "imagem" => "src/Imagem/Mes2.png",
        "titulo" => "Peixe-dourado telescópio",
        "descricao" => [
            "Vive em aquários e lagos ornamentais",
            "Necessita de água limpa",
            "Peixe calmo e decorativo"
        ]
    ],
    [
        "imagem" => "src/Imagem/Mes3.png",
        "titulo" => "Palhaço Shubunkin",
        "descricao" => [
            "Cores misturadas",
            "Peixe muito ativo",
            "Vive bem em aquários grandes"
        ]
    ],
    [
        "imagem" => "src/Imagem/Mes4.png",
        "titulo" => "Zebra Danio",
        "descricao" => [
            "Peixe pequeno e ativo",
            "Vive melhor em grupo",
            "Ideal para aquários comunitários"
        ]
    ],
    [
        "imagem" => "src/Imagem/Mes5.png",
        "titulo" => "Barbo Cereja",
        "descricao" => [
            "Vive melhor em grupos de pelo menos 5 ou 6 peixes",
            "Alimentação ração para peixes tropicais e de pequenos insetos",
            "Prefere aquários com plantas e esconderijos"
        ]
    ],
    [
        "imagem" => "src/Imagem/Mes6.png",
        "titulo" => "Congo Tetra",
        "descricao" => [
            "Prefere aquários com plantas, espaço para nadar e iluminação moderada",
            "Deve ser mantido em cardumes (6 ou mais)",
            "Aceita alimentação variada"
        ]
    ],
    [
        "imagem" => "src/Imagem/Mes7.png",
        "titulo" => "Corydora Bronze",
        "descricao" => [
            "Vive no fundo do aquário",
            "Deve ser mantido em grupos de pelo menos 5",
            "Alimenta-se de pastilhas de fundo, ração afundante, pequenos vermes e alimentos congelados"
        ]
    ],
    [
        "imagem" => "src/Imagem/Mes8.png",
        "titulo" => "Platy Mickey Mouse",
        "descricao" => [
            "Ideal para aquários comunitários, Muito sociável",
            "Fácil de cuidar, recomendado para iniciantes",
            "Aceita alimentação variada"
        ]
    ],
    [
        "imagem" => "src/Imagem/Mes9.png",
        "titulo" => "Xiphophorus hellerii",
        "descricao" => [
            "Muito resistente e fácil de cuidar",
            "Vive bem em aquários comunitários",
            "Aceita alimentação variada"
        ]
    ],
    [
        "imagem" => "src/Imagem/Mes10.png",
        "titulo" => "Molly Dálmata",
        "descricao" => [
            "Vive bem em aquários comunitários",
            "Fácil de cuidar, ideal para iniciantes",
            "Aceita alimentação variada"
        ]
    ],
    [
        "imagem" => "src/Imagem/Mes11.png",
        "titulo" => "Molly Preto Lyra",
        "descricao" => [
            "Muito ativo e resistente",
            "Ideal para aquários comunitários",
            "Aceita alimentação variada"
        ]
    ]
];
?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
          integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="src/styles/styles.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"></script>

    <script src="https://unpkg.com/scrollreveal"></script>

    <title>Loja Aquapet</title>
</head>

<body>

<header>
    <nav id="navbar">
        <i class="fa-solid fa-house" id="nav_logo">Aquapet</i>

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
                <a href="tel:+2389866418" id="phone_button">
                    <button class="btn-default">
                        <i class="fa-solid fa-phone"></i>
                    </button>
                    (+238) 9866418
                </a>
            </div>

            <div class="social-media-buttons">
                <a href="https://www.facebook.com/aquapet.lda" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-facebook-f"></i>
                </a>

                <a href="https://www.instagram.com/aquapetlda" target="_blank" rel="noopener noreferrer">
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

            <img src="src/Imagem/Mes.png" class="prod-image" alt="Nota Aquapet">

            <h3 class="prod-title">Nota:</h3>

            <span class="prod-description">
                Lembrando que fazemos envio para todo o País, mediante pagamento de uma taxa
            </span>
        </div>

        <div id="produtos">

            <?php foreach ($produtos as $produto): ?>

                <div class="prod">
                    <div class="prod-heart">
                        <i class="fa-solid fa-heart"></i>
                    </div>

                    <img src="<?php echo htmlspecialchars($produto['imagem']); ?>"
                         class="prod-image"
                         alt="<?php echo htmlspecialchars($produto['titulo']); ?>">

                    <h3 class="prod-title">
                        <?php echo htmlspecialchars($produto['titulo']); ?>
                    </h3>

                    <span class="prod-description">
                        Características principais:
                    </span>

                    <?php foreach ($produto['descricao'] as $descricao): ?>
                        <p><?php echo htmlspecialchars($descricao); ?></p>
                    <?php endforeach; ?>
                </div>

            <?php endforeach; ?>

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
                e garantir que sua experiência com a Aquapet
                seja a melhor possível.
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
            &copy; <?php echo date("Y"); ?> Aquapet.
        </span>

        <div class="social-media-buttons">
            <a href="https://www.facebook.com/aquapet.lda" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-facebook-f"></i>
            </a>

            <a href="https://www.instagram.com/aquapetlda" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
    </div>
</footer>

<script src="src/javascript/script.js"></script>

</body>
</html>
