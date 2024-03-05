$(document).ready(function () {

    let owl_youtube = $('.owl-carousel.owl-youtube').owlCarousel({
        loop: true,
        margin: 25,
        nav: true,
        dots: false,
        dotsEach: true,
        navText: [`<i class="text-blue bi bi-caret-left-fill"></i>`, `<i class="text-blue bi bi-caret-right-fill"></i>`],
        autoplay: false,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    });

    /*var owlYoutube = $('.owl-youtube');
    owlYoutube.mouseover(function () {
        owlYoutube.trigger('stop.owl.autoplay');
    });

    owlYoutube.mouseleave(function () {
        owlYoutube.trigger('play.owl.autoplay', [5000]);
    });*/


    $('.validar-celular').keyup(function (e) { 
        e.preventDefault();
        
        let valor = $(this).val();

        if (valor.length > 9) {
            let nuevo_valor = valor.substring(0, 9);
            $(this).val(nuevo_valor);
        }
    });

});

window.enviar_formulario = (event) => {
    event.preventDefault();

    let form = document.getElementById('form-contact');

    if (!validar_campos(form)) {
        return false;
    }

    var data = $('#form-contact').serialize()
    $.ajax({
        beforeSend: function () {
            // abrir loader
            openLoader();
        },
        url: "inc/enviar_correo.php", 
        type: "post", 
        data: data,
        success: function(response) {
            closeLoader();

            $('#form-contact')[0].reset();
            window.location = 'https://www.agn.com.pe/glp/gracias.html';
        },
        error: function (e) {
            closeLoader();

            alert('Ocurrió un error, intente más tarde por favor.');
        }
    })
};