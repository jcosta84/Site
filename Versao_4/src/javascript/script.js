$(document).ready(function () {

    // MENU MOBILE
    $('#mobile_btn').on('click', function () {
        $('#mobile_menu').toggleClass('active');
        $('#mobile_btn').find('i').toggleClass('fa-x');
    });

    // SECÇÕES E ITENS DO MENU
    const sections = $('section');
    const navItems = $('#nav_list .nav-item');

    // DETETAR SCROLL
    $(window).on('scroll', function () {

        const header = $('header');
        let activeSectionIndex = 0;

        const scrollPosition = $(window).scrollTop();

        // SOMBRA DO HEADER
        if (scrollPosition <= 0) {
            header.css('box-shadow', 'none');
        } else {
            header.css('box-shadow', '0px 3px 8px rgba(0, 0, 0, 0.1)');
        }

        // DETETAR SECÇÃO ATIVA
        sections.each(function (i) {

            const section = $(this);

            const sectionTop =
                section.offset().top - header.outerHeight() - 20;

            const sectionBottom =
                sectionTop + section.outerHeight();

            if (
                scrollPosition >= sectionTop &&
                scrollPosition < sectionBottom
            ) {
                activeSectionIndex = i;
                return false;
            }
        });

        // REMOVER ACTIVE
        navItems.removeClass('active');

        // ADICIONAR ACTIVE
        $(navItems[activeSectionIndex]).addClass('active');

    });

    // SCROLL REVEAL APENAS EM ECRÃS MAIORES
    if (window.innerWidth > 768) {

        ScrollReveal().reveal('#cta', {
            origin: 'left',
            duration: 2000,
            distance: '20%',
            reset: false
        });

        ScrollReveal().reveal('#produto', {
            origin: 'bottom',
            duration: 2000,
            distance: '20%',
            reset: false
        });

        ScrollReveal().reveal('#contacto', {
            origin: 'right',
            duration: 2000,
            distance: '20%',
            reset: false
        });

    }

});
/* ==========================================
   AQUAPET - MENU MÓVEL
   Abrir e fechar menu de navegação
   ========================================== */

document.addEventListener("DOMContentLoaded", function () {

    const botao = document.getElementById("mobile_btn");
    const menu = document.getElementById("mobile_menu");

    if (!botao || !menu) {
        return;
    }

    const icone = botao.querySelector("i");

    function atualizarMenu(aberto) {

        menu.hidden = !aberto;

        botao.setAttribute(
            "aria-expanded",
            String(aberto)
        );

        botao.setAttribute(
            "aria-label",
            aberto ? "Fechar menu" : "Abrir menu"
        );

        if (icone) {
            icone.classList.toggle("fa-bars", !aberto);
            icone.classList.toggle("fa-xmark", aberto);
        }
    }

    atualizarMenu(false);

    botao.addEventListener("click", function () {
        atualizarMenu(menu.hidden);
    });

    menu.querySelectorAll("a").forEach(function (link) {
        link.addEventListener("click", function () {
            atualizarMenu(false);
        });
    });

    document.addEventListener("keydown", function (evento) {

        if (evento.key === "Escape" && !menu.hidden) {
            atualizarMenu(false);
            botao.focus();
        }

    });

    window.addEventListener("resize", function () {

        if (window.innerWidth > 1170 && !menu.hidden) {
            atualizarMenu(false);
        }

    });

});