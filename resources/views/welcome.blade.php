<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SeedLab</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.css">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
<header class="bg-white-100 dark:bg-gray-900 py-4">
    <div class="max-w-screen-xl mx-auto px-4">
        <div class="flex justify-between items-center">
            <div>
                <img src="https://via.placeholder.com/150" alt="Logo">
            </div>
            <div>
                <div>
                    @if (Route::has('login'))
                        <nav> 
                            @auth
                                <a href="{{ url('/dashboard') }}">Dashboard</a>
                            @else
                                <div class="flex">
                                    @if (Route::has('register'))
                                        <button>
                                            <a href="{{ route('register') }}" class="text-white bg-blue-500 hover:bg-blue-600 py-2 px-4 rounded mr-2">Regístrate</a>
                                        </button>
                                    @endif
                                    <button>
                                        <a href="{{ route('login') }}" class="text-white bg-blue-500 py-2 px-4 rounded">Iniciar Sesión</a>
                                    </button>
                                </div>
                            @endauth
                        </nav>
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>
<div class="text-center">
  <h1 class="font-bold text-5xl font-poppins">Aliados</h1>
</div>
<div style="margin-top: 30px;">
  <section class="customer-logos slider">
    <div class="slide"><img src="../images/logo.jpg"></div>
    <div class="slide"><img src="../images/logo.jpg"></div>
    <div class="slide"><img src="../images/logo.jpg"></div>
    <div class="slide"><img src="../images/logo.jpg"></div>
    <div class="slide"><img src="../images/logo.jpg"></div>
    <div class="slide"><img src="../images/logo.jpg"></div>
    <div class="slide"><img src="../images/logo.jpg"></div>
    <div class="slide"><img src="../images/logo.jpg"></div>
    <div class="slide"><img src="../images/logo.jpg"></div>
    <div class="slide"><img src="../images/logo.jpg"></div>
    <div class="slide"><img src="../images/logo.jpg"></div>
    <div class="slide"><img src="../images/logo.jpg"></div>
    <div class="slide"><img src="../images/logo.jpg"></div>
    <div class="slide"><img src="../images/logo.jpg"></div>
    <div class="slide"><img src="../images/logo.jpg"></div>
    <div class="slide"><img src="../images/logo.jpg"></div>
  </section>
</div>

<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  var slickSettings = {
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 4
      }
    }, {
      breakpoint: 520,
      settings: {
        slidesToShow: 3
      }
    }]
  };
  var slickInstance = $('.customer-logos').slick(slickSettings);
  $('.customer-logos').on('afterChange', function() {
    slickInstance.slick('slickPlay');
  });
});
</script>
<div class="md:w-1/3 mb-8 md:mb-0 mx-auto"> <!-- Agregué la clase 'mx-auto' para centrar horizontalmente -->
  <img src="../images/redtecnoparque.png" alt="Edificio Red Tecnoparque" class="max-w-xs mx-auto md:mx-0"> <!-- Agregué la clase 'mx-auto' para centrar horizontalmente -->
</div>
<div class="mt-8 flex flex-col md:flex-row md:items-start"> <!-- Agregué la clase 'mx-auto' para centrar horizontalmente -->
  <div class="md:w-2/3 md:flex">
    <div class="md:flex-1">
      <p class="text-justify text-left">
        Programa de innovación tecnológica del Servicio Nacional de Aprendizaje que actúa como acelerador para el desarrollo de proyectos. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos. Qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem. Ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos.
      </p>
    </div>
    <div class="md:w-auto " style= "magin-left: 1 0px">
      <img src="../images/sinovva.png" alt="Edificio Red Tecnoparque" class="max-w-xxl">
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>


