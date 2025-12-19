<?php

get_header();
?>

<main id="primary" class="bg-slate-200 text-slate-900">
    <section class="relative pt-8 pb-10 lg:pt-12 lg:pb-16 overflow-hidden bg-slate-900 text-slate-50 mb-0">
        <!-- Background Image & Overlay -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://animatek.net/wp-content/uploads/2025/05/Bono_hora.webp');"></div>
            <div class="absolute inset-0 bg-gradient-to-br from-slate-950/90 via-slate-900/85 to-slate-800/80"></div>
            <!-- Decorative Blurs -->
            <div class="absolute top-0 right-0 -mr-32 -mt-32 w-[500px] h-[500px] bg-primary/20 rounded-full blur-[100px] mix-blend-overlay"></div>
            <div class="absolute bottom-0 left-0 -ml-32 -mb-32 w-[500px] h-[500px] bg-indigo-500/10 rounded-full blur-[100px] mix-blend-overlay"></div>
        </div>

        <div class="relative z-10 container mx-auto px-6 text-center max-w-5xl">
            <h1 class="text-3xl md:text-5xl lg:text-6xl font-extrabold tracking-tight mb-6 text-white leading-tight">
                Producción electrónica <span class="text-primary">sin atajos.</span>
            </h1>
            
            <div class="text-lg md:text-xl text-slate-300 mb-8 max-w-3xl mx-auto leading-relaxed font-light space-y-3">
                <p>
                    Aprende Bitwig y VCV Rack desde la comprensión de la señal, la estructura y el control, no desde recetas frágiles que se rompen en cuanto algo se tuerce.
                </p>
                <p class="text-white font-semibold">
                    Para quien prefiere avanzar despacio antes que engañarse rápido.
                </p>
            </div>
            
            <div class="flex flex-col items-center gap-6">
                <div class="inline-flex items-center gap-3 px-5 py-2.5 rounded-2xl bg-slate-800/50 border border-slate-700 backdrop-blur-sm">
                    <span class="flex-shrink-0 w-6 h-6 rounded-full bg-primary/20 flex items-center justify-center text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </span>
                    <span class="text-slate-200 font-medium text-sm md:text-base">Formación práctica y acompañamiento real para productores que buscan criterio técnico aplicado a proyectos reales.</span>
                </div>

                <a href="#recorrido" class="group relative inline-flex items-center gap-2 px-7 py-3.5 bg-primary text-white text-base md:text-lg font-bold rounded-full hover:bg-blue-600 transition-all shadow-lg hover:shadow-primary/30 transform hover:-translate-y-1">
                    Elegir mi camino
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition-transform group-hover:translate-y-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Bloque 2: Elige tu camino -->
    <section id="recorrido" class="max-w-7xl mx-auto px-6 pt-12 pb-16 lg:pt-16 lg:pb-24">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">Elige tu camino (sin perderte)</h2>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto">
                Tres formas de empezar según tu punto actual. Un método: comprender → practicar → feedback.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Opción A -->
            <div class="bg-white rounded-2xl p-8 border border-slate-200 shadow-sm hover:shadow-xl transition-all hover:border-primary/30 group relative overflow-hidden flex flex-col h-full">
                <div class="absolute top-0 right-0 w-32 h-32 bg-slate-100 rounded-full -mr-16 -mt-16 transition-colors group-hover:bg-primary/5"></div>
                
                <div class="relative z-10 flex flex-col h-full">
                    <div class="mb-5">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-primary/10 text-primary border border-primary/20">
                            Curso
                        </span>
                    </div>
                   
                   <h3 class="text-xl font-bold text-slate-900 mb-3">VCV Rack desde cero</h3>
                   <p class="text-slate-600 mb-6 leading-relaxed">
                       Señal, modulación y patching paso a paso.
                   </p>
                   
                   <ul class="mt-auto space-y-3 mb-6 text-sm text-slate-600">
                        <li class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-emerald-500 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <span><strong>Resultado:</strong> Montas tu primer sinte completo y entiendes audio/CV sin perderte.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-primary flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                            </svg>
                            <span><strong>Nivel:</strong> Empiezas o te lías con lo básico.</span>
                        </li>
                   </ul>

                   <div class="text-xs text-slate-400 font-medium mb-4 text-center">
                       Curso grabado · acceso inmediato
                   </div>

                   <a href="https://animatek.net/curso-vcvrack/" class="btn-secondary w-full justify-center group-hover:border-primary/50 group-hover:text-primary">
                       Ir al curso VCV Rack (base)
                   </a>
                </div>
            </div>

            <!-- Opción B (Dark) -->
            <div class="bg-slate-900 rounded-2xl p-8 border border-slate-800 shadow-xl hover:shadow-2xl transition-all relative overflow-hidden group transform hover:-translate-y-1 flex flex-col h-full">
                <div class="absolute inset-0 bg-gradient-to-br from-slate-800/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                
                <div class="relative z-10 flex flex-col h-full text-white">
                    <div class="mb-5">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-primary text-white shadow-md shadow-primary/20 border border-primary/50">
                            Mentoría 1:1
                        </span>
                    </div>
                   
                   <h3 class="text-xl font-bold mb-3 text-white">Mentoría 1:1 sobre tu proyecto</h3>
                   <p class="text-slate-100 mb-6 font-medium leading-relaxed">
                       Revisión + ejercicios accionables + feedback directo (Bitwig/VCV).
                   </p>
                   
                   <ul class="mt-auto space-y-3 mb-6 text-sm text-slate-300">
                        <li class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-emerald-400 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <span><strong>Resultado:</strong> Detectas el cuello de botella y sales con un plan de siguientes pasos.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-cyan-400 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                            </svg>
                            <span><strong>Nivel:</strong> Ya produces, pero te bloqueas.</span>
                        </li>
                   </ul>

                   <div class="text-xs text-slate-400 font-medium mb-4 text-center">
                       Sesión 1:1 · foco en tu proyecto
                   </div>

                   <a href="<?php echo esc_url(home_url('/clases-privadas')); ?>" class="btn-primary w-full justify-center shadow-lg shadow-primary/20">
                       Ver mentoría 1:1
                   </a>
                </div>
            </div>

             <!-- Opción C -->
            <div class="bg-white rounded-2xl p-8 border border-slate-200 shadow-sm hover:shadow-xl transition-all hover:border-cyan-400/30 group relative overflow-hidden flex flex-col h-full">
                <div class="absolute top-0 right-0 w-32 h-32 bg-cyan-50 rounded-full -mr-16 -mt-16 transition-colors group-hover:bg-cyan-100/50"></div>
                
                <div class="relative z-10 flex flex-col h-full">
                    <div class="mb-5">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-cyan-100 text-cyan-700 border border-cyan-200">
                            Gratis
                        </span>
                    </div>
                   
                   <h3 class="text-xl font-bold text-slate-900 mb-3">Curso UZZ (gratis)</h3>
                   <p class="text-slate-600 mb-6 leading-relaxed">
                       Secuenciación y modulación para patrones con variación y control.
                   </p>
                   
                   <ul class="mt-auto space-y-3 mb-6 text-sm text-slate-600">
                        <li class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-emerald-500 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <span><strong>Resultado:</strong> Un flujo práctico para generar ideas con intención (sin depender del azar).</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-primary flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                            </svg>
                            <span><strong>Nivel:</strong> Tienes base y quieres herramientas/flujo.</span>
                        </li>
                   </ul>

                   <div class="text-xs text-slate-400 font-medium mb-4 text-center">
                       Mini-lecciones · acceso inmediato
                   </div>

                   <a href="https://animatek.net/cursos/curso-uzz/" class="inline-flex items-center justify-center px-5 py-2.5 text-sm font-bold text-slate-700 bg-white border border-slate-300 rounded-lg hover:border-cyan-500 hover:text-cyan-600 transition-colors w-full">
                       Acceder al curso UZZ (gratis)
                   </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Bloque 3: Cómo trabajo -->
    <section class="max-w-7xl mx-auto px-6 mb-24 lg:mb-32">
        <div class="text-center">
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-6">Cómo trabajo (para que avances de verdad)</h2>
            <p class="text-lg md:text-xl text-slate-600 max-w-4xl mx-auto mb-12 leading-relaxed">
                Trabajo sobre tus proyectos, no sobre ejemplos perfectos.
                Primero detectamos qué falla (señal, estructura, control o decisiones de mezcla/arreglo).
                Después lo corregimos con ejercicios aplicables. Y lo consolidamos con feedback para que no vuelvas al mismo bloqueo.
            </p>

            <div class="grid md:grid-cols-3 gap-8 mb-12 text-left">
                <!-- Diagnóstico -->
                <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm relative overflow-hidden">
                     <div class="absolute top-0 right-0 w-24 h-24 bg-rose-50 rounded-full -mr-12 -mt-12"></div>
                     <div class="relative z-10">
                        <div class="w-10 h-10 rounded-lg bg-rose-100 text-rose-600 flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Diagnóstico</h3>
                        <p class="text-slate-600 leading-relaxed text-sm">Localizamos el cuello de botella: señal, ruteo, modulación, arreglo o mezcla.</p>
                     </div>
                </div>

                <!-- Acción -->
                <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm relative overflow-hidden">
                     <div class="absolute top-0 right-0 w-24 h-24 bg-amber-50 rounded-full -mr-12 -mt-12"></div>
                     <div class="relative z-10">
                        <div class="w-10 h-10 rounded-lg bg-amber-100 text-amber-600 flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Acción</h3>
                        <p class="text-slate-600 leading-relaxed text-sm">Ejercicios concretos para corregirlo en tu proyecto (sin “recetas”, con criterio).</p>
                     </div>
                </div>

                <!-- Sistema -->
                <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm relative overflow-hidden">
                     <div class="absolute top-0 right-0 w-24 h-24 bg-primary/10 rounded-full -mr-12 -mt-12"></div>
                     <div class="relative z-10">
                        <div class="w-10 h-10 rounded-lg bg-primary/20 text-primary flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1v-2zM16 13a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 01-1 1h-2a1 1 0 01-1-1v-2zM4 21a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1v-2z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Sistema</h3>
                        <p class="text-slate-600 leading-relaxed text-sm">Te llevas un método repetible: plantillas mentales + pasos para decidir con criterio.</p>
                     </div>
                </div>
            </div>

            <p class="text-slate-400 font-medium text-sm md:text-base mb-8 italic">
                Bitwig + VCV Rack + diseño sonoro, aplicados a proyectos reales.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="<?php echo esc_url(home_url('/clases-privadas')); ?>" class="btn-primary">
                    Ver mentoría 1:1
                </a>
                <a href="<?php echo esc_url(home_url('/sobre-mi')); ?>" class="text-slate-500 hover:text-primary font-bold text-sm underline decoration-slate-300 hover:decoration-primary underline-offset-4 transition-all">
                    Mi enfoque y experiencia
                </a>
            </div>
        </div>
    </section>



  




    <?php get_template_part('template-parts/block-testimonios'); ?>

    <?php get_template_part('template-parts/block-faq'); ?>

    <!-- Bloque Cierre: ¿Listo para avanzar? -->
    <section class="max-w-4xl mx-auto px-6 mb-24 lg:mb-32 text-center">
        <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-6">¿Listo para avanzar?</h2>
        <p class="text-lg text-slate-600 mb-10 leading-relaxed">
            Si quieres claridad y progreso real, elige una puerta y empieza hoy.<br>
            Base para entenderlo todo, o acompañamiento para desbloquear tu proyecto.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-8">
            <a href="<?php echo esc_url(home_url('/clases-privadas')); ?>" class="w-full sm:w-auto btn-primary justify-center px-8 py-4 text-base">
                Ver mentoría 1:1
            </a>
            <a href="https://animatek.net/curso-vcvrack/" class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 text-base font-bold text-slate-700 bg-white border border-slate-300 rounded-lg hover:border-slate-400 hover:text-slate-900 transition-colors">
                Empezar por VCV Rack desde cero
            </a>
        </div>

        <a href="https://animatek.net/cursos/curso-uzz/" class="text-slate-500 hover:text-cyan-600 font-medium text-sm underline decoration-slate-300 hover:decoration-cyan-600 underline-offset-4 transition-all block mb-12">
            Acceder al curso UZZ (gratis)
        </a>

        <div class="border-t border-slate-200 pt-10 mt-10 max-w-lg mx-auto">
             <p class="text-slate-900 font-bold mb-2">¿Aún tienes dudas antes de elegir?</p>
             <p class="text-slate-600 mb-2">Escríbeme desde el formulario de contacto:</p>
             <a href="https://animatek.net/contacto/" class="text-primary font-bold hover:underline">
                Ir a contacto &rarr;
             </a>
        </div>
    </section>
<?php
get_footer();
