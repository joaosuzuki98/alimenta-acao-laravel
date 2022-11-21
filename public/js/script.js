// Gráfico chart js
const graficoFome = document.getElementById('grafico-fome')

new Chart(
    graficoFome, {
    type: "pie",
    data: {
        labels: ["Pessoas em situação de fome", "População brasileira"],
        datasets: [{
            backgroundColor: ["#F2E3D5", "#3CA6A6"],
            data: [15.5, 84.5]
        }]
    },
    // Plugin para ativar a animação no scroll
    plugins: [ChartDeferred],
    options: {
        plugins: {
            deferred: {
                delay: 600,
                yOffset: 100,
            }
        }
    }
}
)

// Para a fonte se adequar ao tamanho da tela quando a página for carregada
if (window.outerWidth >= 1200) {
    Chart.defaults.font.size = 30
}

if (window.outerWidth < 1200 && window.outerWidth >= 640) {
    Chart.defaults.font.size = 24
}

if (window.outerWidth < 640) {
    Chart.defaults.font.size = 18
}

// Para a fonte se adequar quando o usuário diminuir ou aumentar a tela, sem atualizar a página
function responsiveFonts() {
    if (window.outerWidth >= 1200) {
        Chart.defaults.font.size = 30
    }

    if (window.outerWidth < 1200 && window.outerWidth >= 640) {
        Chart.defaults.font.size = 24
    }

    if (window.outerWidth < 640) {
        Chart.defaults.font.size = 18
    }
}

// Slider swiper.js
const swiper = new Swiper('.swiper', {
    direction: 'horizontal',
    loop: true,

    pagination: {
        el: '.swiper-pagination',
    },

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

////////////////////////// FUNÇÕES //////////////////////////////////////



//////////////////////////// EVENTOS ///////////////////////////////////
