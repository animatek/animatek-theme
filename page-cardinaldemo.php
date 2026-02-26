<?php

get_header();
?>

<main id="primary" class="bg-slate-950 text-slate-50">



<section class="w-full py-10 bg-gray-900">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="mb-6 text-center">
      <h2 class="text-white mb-2">Prueba VCV Rack Ahora Mismo</h2>
      <p class="text-gray-400">No necesitas instalar nada. Conecta cables directamente aquí abajo 👇</p>
    </div>

      <div class="relative w-full h-[600px] bg-black rounded-xl border-2 border-purple-600 shadow-[0_0_30px_rgba(124,58,237,0.3)] overflow-hidden">
      
        <div class="absolute inset-0 flex items-center justify-center -z-10">
          <span class="text-purple-500 animate-pulse">Cargando módulos...</span>
        </div>

        <iframe 
          id="cardinal-frame"
          src="/synth/CardinalMini.html?v=<?php echo time(); ?>&file=leccion-03.vcv"   
          class="w-full h-full"
          frameborder="0"
          allow="autoplay; midi; microphone"
          title="Sintetizador Modular Interactivo">
        </iframe>

      </div>
      
      <script>
        // Debug: Log the final URL being requested
        console.log('Cardinal Iframe Source:', document.getElementById('cardinal-frame').getAttribute('src'));
      </script>

    <div class="mt-4 flex justify-between text-sm text-gray-500">
      <span>💡 Tip: Usa la rueda del ratón para hacer zoom.</span>
      <span>Powered by Cardinal & VCV Rack</span>
    </div>

  </div>
</section>

</main>

<?php
get_footer();
