
/* AquaPet — navegação e melhorias progressivas */

document.addEventListener('DOMContentLoaded', () => {
    const botao = document.getElementById('mobile_btn');
    const menu = document.getElementById('mobile_menu');
    const cabecalho = document.querySelector('header');

    if (botao && menu) {
        const icone = botao.querySelector('i');
        const mediaDesktop = window.matchMedia('(min-width: 1171px)');

        function definirMenu(aberto) {
            menu.hidden = !aberto;

            botao.setAttribute('aria-expanded', String(aberto));
            botao.setAttribute(
                'aria-label',
                aberto ? 'Fechar menu' : 'Abrir menu'
            );

            if (icone) {
                icone.classList.toggle('fa-bars', !aberto);
                icone.classList.toggle('fa-xmark', aberto);
            } else {
                botao.textContent = aberto ? '✕' : '☰';
            }
        }

        definirMenu(false);

        botao.addEventListener('click', () => {
            definirMenu(menu.hidden);
        });

        menu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => definirMenu(false));
        });

        document.addEventListener('keydown', evento => {
            if (evento.key === 'Escape' && !menu.hidden) {
                definirMenu(false);
                botao.focus();
            }
        });

        mediaDesktop.addEventListener('change', evento => {
            if (evento.matches) definirMenu(false);
        });
    }

    // Sombra no cabeçalho durante a deslocação
    if (cabecalho) {
        function atualizarSombra() {
            cabecalho.classList.toggle(
                'com-sombra',
                window.scrollY > 0
            );
        }

        window.addEventListener(
            'scroll',
            atualizarSombra,
            { passive: true }
        );

        atualizarSombra();
    }

    // Animações opcionais
    if (
        typeof ScrollReveal === 'function' &&
        window.innerWidth > 768 &&
        !window.matchMedia(
            '(prefers-reduced-motion: reduce)'
        ).matches
    ) {
        const animacoes = [
            ['#cta', 'left'],
            ['#produto', 'bottom'],
            ['#contacto', 'right']
        ];

        const revelar = ScrollReveal();

        animacoes.forEach(([seletor, origem]) => {
            if (document.querySelector(seletor)) {
                revelar.reveal(seletor, {
                    origin: origem,
                    duration: 1200,
                    distance: '20px',
                    reset: false
                });
            }
        });
    }
});
