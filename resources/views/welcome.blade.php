<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Para mi niña ❤️</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
          theme: {
            extend: {
              fontFamily: { love: ['Dancing Script', 'cursive'], sans: ['Inter', 'sans-serif'] }
            }
          }
        }
    </script>
</head>
<body class="bg-gradient-to-tr from-rose-100 via-red-50 to-pink-100 min-h-screen font-sans text-gray-900">

    <header class="h-screen flex flex-col justify-center items-center text-center p-4">
        <h1 class="font-love text-7xl md:text-9xl text-red-600 drop-shadow-xl animate-pulse">100 Razones</h1>
        <p class="text-gray-500 text-xl italic mt-4">Para la niña que cambió mi mundo</p>
    </header>

    <section class="max-w-6xl mx-auto px-6 mb-12">
        <div class="flex flex-wrap justify-center gap-6">
            <div class="bg-white p-2 rounded-lg shadow-lg rotate-3 hover:rotate-0 transition-transform w-40 md:w-64">
                <img src="/img/foto1.jpg" class="w-full h-48 md:h-64 object-cover rounded shadow-inner" alt="Recuerdo 1">
            </div>
            <div class="bg-white p-2 rounded-lg shadow-lg -rotate-3 hover:rotate-0 transition-transform w-40 md:w-64 mt-4">
                <img src="/img/foto2.jpg" class="w-full h-48 md:h-64 object-cover rounded shadow-inner" alt="Recuerdo 2">
            </div>
            <div class="bg-white p-2 rounded-lg shadow-lg rotate-2 hover:rotate-0 transition-transform w-40 md:w-64">
                <img src="/img/foto3.jpg" class="w-full h-48 md:h-64 object-cover rounded shadow-inner" alt="Recuerdo 3">
            </div>
            <div class="bg-white p-2 rounded-lg shadow-lg -rotate-2 hover:rotate-0 transition-transform w-40 md:w-64 mt-4">
                <img src="/img/foto4.jpg" class="w-full h-48 md:h-64 object-cover rounded shadow-inner" alt="Recuerdo 4">
            </div>
        </div>
    </section>

    <section class="max-w-4xl mx-auto px-6 mb-16">
        <div class="bg-black/5 backdrop-blur-md p-2 rounded-3xl shadow-xl border border-white/50">
            <iframe 
                width="100%" 
                height="180" 
                src="https://www.youtube.com/embed/videoseries?list=PLhYynapOSwzgMK0QHcS2mhs_X8_vRpKoI" 
                title="Nuestra Playlist" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                allowfullscreen 
                class="rounded-2xl">
            </iframe>
        </div>
    </section>

    <main class="max-w-7xl mx-auto px-6 pb-24">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $todasLasRazones = [
                    "Porque contigo hasta los días normales se sienten especiales.", "Porque tu sonrisa me cambia el ánimo al instante.",
                    "Porque siempre encuentras la forma de hacerme reír.", "Porque contigo puedo ser yo mismo.",
                    "Porque me haces sentir en paz.", "Porque tus abrazos se sienten como hogar.",
                    "Porque me apoyas incluso en mis peores momentos.", "Porque escuchas mis problemas aunque sean repetitivos.",
                    "Porque tus ojos tienen algo que me atrapa.", "Porque me haces querer ser mejor persona.",
                    "Porque cada conversación contigo vale la pena.", "Porque contigo el tiempo pasa demasiado rápido.",
                    "Porque extraño tu presencia aunque hayan pasado minutos.", "Porque tienes una forma hermosa de ver la vida.",
                    "Porque me entiendes sin necesidad de hablar.", "Porque siempre estás cuando te necesito.",
                    "Porque haces que las cosas simples se vuelvan recuerdos inolvidables.", "Porque amo tu voz.",
                    "Porque tu risa es mi sonido favorito.", "Porque me motivas a seguir adelante.",
                    "Porque contigo aprendí lo que es amar de verdad.", "Porque cada detalle tuyo me encanta.",
                    "Porque incluso tus imperfecciones me parecen perfectas.", "Porque contigo siento confianza.",
                    "Porque me haces sentir amado.", "Porque nunca me dejas sentir solo.",
                    "Porque eres mi lugar seguro.", "Porque contigo puedo hablar de cualquier cosa.",
                    "Porque me haces feliz con solo existir.", "Porque me das tranquilidad.",
                    "Porque tus mensajes alegran mi día.", "Porque amo cómo pronuncias mi nombre.",
                    "Porque haces que mi corazón lata más rápido.", "Porque contigo descubrí nuevas emociones.",
                    "Porque siempre encuentras la forma de sorprenderme.", "Porque me inspiras.",
                    "Porque me haces sentir importante.", "Porque cada momento contigo tiene magia.",
                    "Porque amo cuando me miras.", "Porque me haces sentir comprendido.",
                    "Porque siempre tienes paciencia conmigo.", "Porque amo compartir mis días contigo.",
                    "Porque me haces olvidar los problemas.", "Porque contigo todo parece más bonito.",
                    "Porque amo tu manera de cuidar a los demás.", "Porque tienes un corazón increíble.",
                    "Porque tu cariño es sincero.", "Porque me haces sentir afortunado.",
                    "Porque contigo aprendí el significado de ‘nosotros’.", "Porque eres mi persona favorita.",
                    "Porque contigo puedo soñar despierto.", "Porque tus pequeños detalles significan mucho para mí.",
                    "Porque me haces sentir especial sin intentarlo.", "Porque amo nuestras conversaciones largas.",
                    "Porque contigo nunca me aburro.", "Porque me haces sonreír aun en días malos.",
                    "Porque siempre encuentras palabras que me tranquilizan.", "Porque amo cómo te emocionas por cosas pequeñas.",
                    "Porque contigo siento conexión real.", "Porque haces que quiera compartir mi futuro contigo.",
                    "Porque tus besos son adictivos.", "Porque me haces sentir vivo.",
                    "Porque amo cada recuerdo que hemos creado.", "Porque me aceptas tal y como soy.",
                    "Porque contigo puedo hablar de mis miedos.", "Porque haces que el amor se sienta fácil.",
                    "Porque siempre intentas entenderme.", "Porque tu presencia mejora mis días.",
                    "Porque contigo aprendí a valorar más la vida.", "Porque eres hermosa por dentro y por fuera.",
                    "Porque amo cuando te ríes de mis tonterías.", "Porque contigo cualquier lugar se siente mejor.",
                    "Porque haces que me emocione el futuro.", "Porque me das confianza en mí mismo.",
                    "Porque amo cuando me abrazas fuerte.", "Porque haces que quiera cuidar de ti siempre.",
                    "Porque me haces sentir único.", "Porque contigo las noches son más tranquilas.",
                    "Porque amo compartir música contigo.", "Porque siempre logras sacarme una sonrisa.",
                    "Porque contigo puedo hablar durante horas.", "Porque amo cada parte de tu personalidad.",
                    "Porque haces que me enamore más cada día.", "Porque eres mi pensamiento favorito.",
                    "Porque contigo aprendí a ser más feliz.", "Porque amo cómo me miras cuando estoy distraído.",
                    "Porque me haces sentir que pertenezco a algún lugar.", "Porque contigo los silencios también son cómodos.",
                    "Porque amo tus ocurrencias.", "Porque haces que mi mundo tenga más color.",
                    "Porque contigo todo vale más la pena.", "Porque amo la forma en la que me cuidas.",
                    "Porque haces que mi corazón se sienta tranquilo.", "Porque eres la mejor parte de mis días.",
                    "Porque contigo siento amor de verdad.", "Porque me haces creer en cosas bonitas.",
                    "Porque amo cada instante a tu lado.", "Porque eres la casualidad más bonita de mi vida.",
                    "Porque simplemente no imagino mi vida sin ti.", "Porque te amo más de lo que las palabras pueden explicar."
                ];

                shuffle($todasLasRazones);
                $razonesVisibles = array_slice($todasLasRazones, 0, 10);
            @endphp

            @foreach($razonesVisibles as $razon)
                <div class="bg-white/60 backdrop-blur-sm p-6 rounded-2xl shadow-sm border border-white hover:shadow-md transition-all">
                    <p class="text-gray-800 font-medium italic">"{{ $razon }}"</p>
                    <div class="mt-2 text-red-400 text-sm">❤️</div>
                </div>
            @endforeach
        </div>
        
        <div class="text-center mt-12">
            <button onclick="window.location.reload()" class="bg-red-500 hover:bg-red-600 text-white font-bold py-3 px-8 rounded-full shadow-lg transition-transform hover:scale-105">
                Ver otras razones ✨
            </button>
        </div>
    </main>

    <footer class="py-12 text-center">
        <p class="font-love text-5xl text-red-500">Te amo infinito</p>
    </footer>

</body>
</html>