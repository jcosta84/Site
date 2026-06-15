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