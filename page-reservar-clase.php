
<?php

get_header();
?>


<main id="primary" class="bg-slate-50 text-slate-900">
    <section class="relative overflow-hidden py-16 sm:py-20">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -left-24 -top-10 h-72 w-72 bg-primary/10 blur-3xl rounded-full"></div>
            <div class="absolute right-0 top-10 h-64 w-64 bg-cyan-200/25 blur-3xl rounded-full"></div>
            <div class="absolute -right-24 bottom-4 h-80 w-80 bg-indigo-200/25 blur-[100px] rounded-full"></div>
        </div>

        <div class="relative max-w-4xl mx-auto text-center px-6 space-y-5">
            <div class="inline-flex items-center gap-2 px-4 py-2 text-xs font-bold tracking-[0.2em] uppercase border border-primary/20 rounded-full bg-primary/10 text-primary">
                Reserva confirmada
            </div>
            <div class="flex justify-center">
                <span class="h-12 w-12 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center text-2xl font-bold">✓</span>
            </div>
            <h1 class="text-4xl sm:text-5xl font-extrabold leading-tight text-slate-900">
                ¡Gracias por tu compra!
            </h1>
            <p class="text-lg sm:text-xl text-slate-700 leading-relaxed">
                Has reservado una clase privada con Animatek. Estás un paso más cerca de dominar la producción musical con Bitwig, VCV Rack o cualquier otro caos controlado que tengas entre manos. 🌀
            </p>
        </div>
    </section>

    <section class="max-w-5xl mx-auto px-6 pb-12">
        <div class="bg-white border border-slate-200 rounded-2xl shadow-sm p-6 sm:p-8 space-y-6">
            <div class="flex items-center gap-3">
                <span class="h-10 w-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center font-bold text-lg">🎯</span>
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.12em] text-primary">¿Qué tienes que hacer ahora?</p>
                    <h2 class="text-2xl font-extrabold text-slate-900">Sigue estos pasos rápidos</h2>
                </div>
            </div>

            <div class="grid gap-4">
                <div class="flex items-start gap-3 bg-slate-50 border border-slate-200 rounded-xl p-4">
                    <span class="h-8 w-8 rounded-full bg-primary text-white flex items-center justify-center font-bold">1</span>
                    <p class="text-slate-700"><strong>Reserva el día y la hora</strong> que mejor te venga usando el calendario que verás más abajo.</p>
                </div>
                <div class="flex items-start gap-3 bg-slate-50 border border-slate-200 rounded-xl p-4">
                    <span class="h-8 w-8 rounded-full bg-primary text-white flex items-center justify-center font-bold">2</span>
                    <div class="space-y-1 text-slate-700">
                        <p><strong>Conéctate a Discord el día de la clase.</strong> Usa este enlace si aún no estás en el servidor:</p>
                        <a class="inline-flex items-center gap-2 text-primary font-semibold hover:underline" href="https://discord.com/invite/emUkHRrvtk" target="_blank" rel="noopener noreferrer">
                            Unirte a Discord
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-7-7 7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="flex items-start gap-3 bg-slate-50 border border-slate-200 rounded-xl p-4">
                    <span class="h-8 w-8 rounded-full bg-primary text-white flex items-center justify-center font-bold">3</span>
                    <p class="text-slate-700"><strong>Prepara tus proyectos o preguntas.</strong> Compartiremos pantalla para trabajar directamente sobre tus ideas.</p>
                </div>
                <div class="flex items-start gap-3 bg-slate-50 border border-slate-200 rounded-xl p-4">
                    <span class="h-8 w-8 rounded-full bg-primary text-white flex items-center justify-center font-bold">4</span>
                    <p class="text-slate-700"><strong>Tu clase será grabada.</strong> Podrás verla tantas veces como quieras para repasar.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="calendario" class="max-w-6xl mx-auto px-6 pb-16 sm:pb-20">
        <div class="max-w-3xl text-center mx-auto space-y-3 mb-10">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-xs font-semibold uppercase tracking-[0.12em]">
                📅 Agenda tu clase ahora
            </div>
            <h3 class="text-3xl font-extrabold text-slate-900">Selecciona fecha y hora</h3>
            <p class="text-base text-slate-600">Selecciona la fecha y hora que prefieras. Recibirás una confirmación por email.</p>
        </div>

        <div class="bg-white border border-slate-200 rounded-2xl shadow-lg shadow-primary/10 p-6 sm:p-8">
            <div class="bg-slate-50 border border-slate-200 rounded-xl p-4 sm:p-5">
                <?php echo do_shortcode('[ssa_booking type=animatek-clases-privadas]'); ?>
            </div>
            <p class="text-sm text-slate-600 mt-4">Calendario en horario CEST. Si necesitas otro hueco, escríbeme y lo ajustamos.</p>
        </div>
    </section>

    <section class="max-w-4xl mx-auto px-6 pb-16">
        <div class="bg-white border border-slate-200 rounded-2xl shadow-sm p-6 sm:p-7 space-y-3">
            <p class="text-xs font-semibold uppercase tracking-[0.12em] text-primary">ℹ️ ¿Tienes dudas o algún problema?</p>
            <p class="text-slate-700">Escríbeme directamente por Discord o usa el email <a class="text-primary font-semibold hover:underline" href="mailto:animatek909@gmail.com">animatek909@gmail.com</a> y te responderé lo antes posible.</p>
            <p class="text-slate-800 font-semibold">Nos vemos muy pronto. ¡Vamos a darle fuerte a los sintes! 🔥</p>
        </div>
    </section>
</main>

<?php
get_footer();
