<?php
/**
 * Template Name: Sobre mí
 */

get_header();
?>

<main id="primary" class="bg-slate-200 text-slate-900">
    <section class="animatek-hero-section relative overflow-hidden mb-[6.25rem] px-6 sm:px-10 py-20 text-slate-50" style="background-image: linear-gradient(135deg, rgba(15,23,42,0.9), rgba(15,23,42,0.65)), url('https://animatek.net/wp-content/uploads/2025/05/Bono_hora.webp'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="max-w-7xl mx-auto grid gap-12">
            <div class="space-y-6">
                <span class="inline-flex items-center gap-2 px-3 py-1 text-xs font-bold tracking-[0.18em] uppercase border border-white/20 rounded-full bg-white/10">
                    Sobre mí
                </span>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight text-white">
                    Javier Melgar <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-cyan-300">(Animatek)</span>
                </h1>
                <p class="text-xl text-slate-200 leading-relaxed">
                    Profesor certificado de Bitwig y mentor de producción musical. 25+ años explorando sonido, síntesis y performance.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="<?php echo esc_url(home_url('/clases-privadas')); ?>" class="btn-primary">
                        Reservar una sesión
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-7-7 7 7-7 7"/>
                        </svg>
                    </a>
                    <a href="<?php echo esc_url(home_url('/academia')); ?>" class="btn-secondary">
                        Ver cursos
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-7-7 7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 mb-[6.25rem]">
        <div class="bg-white rounded-[1.75rem] border border-slate-200 shadow-sm overflow-hidden relative">
            <div class="absolute inset-0 opacity-15 pointer-events-none bg-[radial-gradient(circle_at_20%_20%,rgba(33,112,245,0.15),transparent_35%),radial-gradient(circle_at_80%_30%,rgba(56,189,248,0.12),transparent_30%),radial-gradient(circle_at_50%_80%,rgba(99,102,241,0.12),transparent_30%)]"></div>
            <div class="relative z-10 grid gap-8 lg:gap-12 md:grid-cols-[1.1fr_0.9fr] items-center">
                <div class="p-8 md:p-10 lg:p-12 space-y-4">
                    <div class="inline-flex items-center gap-3 px-3 py-1 rounded-full bg-primary/10 text-primary text-xs font-semibold uppercase tracking-[0.1em] border border-primary/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.5c-1.5 0-2.75 1.25-2.75 2.8 0 1.4.9 2.55 2.11 2.96-.13.63-.44 1.17-.9 1.63-.5.5-.81 1.17-.81 1.9v.21h2.9a.55.55 0 0 0 .55-.55v-.06c0-.63-.27-1.22-.74-1.63a2.64 2.64 0 0 1-.93-2c0-1.5 1.25-2.8 2.75-2.8s2.75 1.3 2.75 2.8c0 1.2-.7 2.23-1.7 2.63.38.5.61 1.13.61 1.8v.06a.55.55 0 0 0 .55.55H18v-.21c0-.73-.31-1.4-.81-1.9-.46-.46-.77-1-.9-1.63 1.21-.41 2.11-1.56 2.11-2.96C18.4 7.75 17.15 6.5 15.65 6.5c-.95 0-1.8.41-2.4 1.06A3.22 3.22 0 0 0 12 6.5Z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 9.5c0-3.2 2.55-5.9 5.75-5.9S17.5 6.3 17.5 9.5m0 5.1c-1.08 0-2.17.34-3.08 1.03-.91.7-1.67 1.74-1.92 3.12"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 15.35V17c0 1.1.9 2 2 2h2.1c.2-1.38 1.01-2.42 1.92-3.12.91-.69 2-1.03 3.08-1.03H6Z"/>
                        </svg>
                        un poco de mi historia
                    </div>
                    <h2 class="text-3xl font-extrabold text-slate-900">Pequeña bio</h2>
                    <p class="text-lg text-slate-700 leading-relaxed">
                        ¡Hola! Soy Javier Melgar. Llevo más de 25 años creando y compartiendo desde el sonido. Empecé en los 90 con una TB-303, una TR-909 y una obsesión: entender cómo funcionaba un sintetizador.
                    </p>
                    <p class="text-lg text-slate-700 leading-relaxed">
                        Desde entonces, he recorrido el camino de la producción musical desde la experimentación pura hasta la docencia formal. He formado parte del netlabel MIGA, cofundado Ruido Vírico y codirigido The Netlab.
                    </p>
                    <p class="text-lg text-slate-700 leading-relaxed">
                        🧑‍🏫 Hoy en día me encanta enseñar Bitwig Studio. Me dedico a enseñar síntesis con modulares, creación sonora y flujo de trabajo digital.
                    </p>
                </div>
                <div class="pr-0 pb-8 md:pb-0 md:pr-10 lg:pr-12">
                    <div class="relative rounded-2xl overflow-hidden border border-slate-200 shadow-sm">
                        <img src="https://animatek.net/wp-content/uploads/2025/04/tekenelestudio.webp" alt="Javier Melgar en el estudio" class="w-full h-64 md:h-80 object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-6 mb-[6.25rem]">
        <div class="flex items-center gap-4 mb-8">
            <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m3 9 9-4 9 4-9 4-9-4Z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 13V9"/>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 12v5c0 .6.6 1.1 1.7 1.5 1.1.4 2.6.6 3.3.6.7 0 2.2-.2 3.3-.6 1.1-.4 1.7-.9 1.7-1.5v-5"/>
                </svg>
            </div>
            <h3 class="text-3xl font-bold text-slate-900">Formación y experiencia docente</h3>
        </div>
        <div class="space-y-4 text-lg text-slate-700 leading-relaxed">
            <p>Soy <a href="https://www.bitwig.com/certified/javier-melgar-39/" target="_blank" rel="noreferrer" class="font-semibold text-primary hover:text-primary/80">profesor certificado de Bitwig Studio</a> y llevo más de una década enseñando producción musical.</p>
            <ul class="space-y-3 list-none pl-0 text-base text-slate-700">
                <li class="flex gap-3 items-start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mt-1 h-5 w-5 text-primary shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span><a href="https://www.juntadeandalucia.es/cultura/aaiicc/formacion-y-residencias/cursos/produccion-sonora-con-ableton-live-con-javier-melgar" target="_blank" rel="noreferrer" class="text-slate-800 hover:text-primary hover:underline">Curso de producción con Ableton Live</a> para la <strong class="text-slate-900">Junta de Andalucía</strong>.</span>
                </li>
                <li class="flex gap-3 items-start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mt-1 h-5 w-5 text-primary shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>Formador del curso de <a href="https://www.juntadeandalucia.es/cultura/aaiicc/formacion-y-residencias/cursos/dj-tecnica-y-oficio-artistico" target="_blank" rel="noreferrer" class="text-slate-800 hover:text-primary hover:underline">DJ Técnica y Oficio artístico</a>.</span>
                </li>
                <li class="flex gap-3 items-start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mt-1 h-5 w-5 text-primary shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>Clases privadas online (VCV Rack, Bitwig, Max for Live).</span>
                </li>
            </ul>
            
            <?php get_template_part('template-parts/block-bitwig'); ?>
            
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-6 py-12 rounded-[1.75rem] border border-slate-200 bg-slate-50 shadow-sm mb-[6.25rem] flex flex-wrap items-center gap-8">
        <div class="flex-1 min-w-[260px] max-w-sm">
            <img src="https://i.discogs.com/mqPJPREK9vAWQ4NSBEq9KML7OElDnht8XIdKudD0K8s/rs:fit/g:sm/q:90/h:341/w:510/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9BLTM2NTY4/Ni0xMjc0MTE2NDQ2/LmpwZWc.jpeg" alt="Discografía" class="w-full rounded-2xl shadow-lg rotate-1 hover:rotate-0 transition-transform duration-500 grayscale hover:grayscale-0">
        </div>
        <div class="flex-[1.4_1_320px] text-center md:text-left space-y-4">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-200 text-slate-700 text-xs font-semibold uppercase tracking-[0.1em]">
                Discografía
            </div>
            <h3 class="text-3xl font-bold text-slate-900">Lanzamientos y colaboraciones</h3>
            <p class="text-slate-600 text-lg leading-relaxed">Consulta mis lanzamientos, remixes y ediciones físicas.</p>
            <a href="https://www.discogs.com/artist/365686-Animatek?superFilter=Appearances" target="_blank" rel="noreferrer" class="btn-secondary">
                Ver mi Discogs
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 13v6a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>
                    <path stroke-linecap="round" stroke-linejoin="round" d="m15 3 6 6m0 0h-6m6 0V3"/>
                </svg>
            </a>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 mb-[6.25rem]">
        <div class="relative overflow-hidden rounded-[1.75rem] border border-slate-200 bg-white shadow-sm">
            <div class="absolute inset-0 opacity-[0.32] pointer-events-none bg-[radial-gradient(circle_at_15%_20%,rgba(33,112,245,0.14),transparent_35%),radial-gradient(circle_at_85%_30%,rgba(56,189,248,0.12),transparent_30%),radial-gradient(circle_at_50%_80%,rgba(99,102,241,0.12),transparent_30%)]"></div>
            <div class="relative z-10 p-8 sm:p-12 space-y-8">
                <div class="flex flex-wrap items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-primary/10 text-primary flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.5c4.69 0 8.5-3.81 8.5-8.5S16.69 3.5 12 3.5 3.5 7.31 3.5 12s3.81 8.5 8.5 8.5Z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 11.25 2.25 2.25 4.25-4.25"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-[0.12em] text-primary">Ahora mismo</p>
                        <h2 class="text-3xl font-extrabold text-slate-900">Qué hago ahora mismo</h2>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6">
                    <div class="group h-full bg-slate-50/80 border border-slate-200 rounded-2xl p-6 flex flex-col gap-5 shadow-sm hover:-translate-y-1 hover:shadow-lg transition-all">
                        <div class="flex items-center gap-3">
                            <div class="p-2 rounded-lg bg-primary/10 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h10M4 18h6"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900">Formación online</h3>
                        </div>
                        <ul class="space-y-3 text-sm sm:text-base text-slate-700">
                            <li class="flex gap-3 items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-5 w-5 text-primary shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>Cursos estructurados de VCV Rack y herramientas digitales. <a href="https://animatek.net/academia/" target="_blank" rel="noreferrer" class="font-semibold text-slate-900 hover:text-primary">Academia</a> · <a href="https://animatek.net/cursos/vcv-rack-desde-cero/" target="_blank" rel="noreferrer" class="font-semibold text-slate-900 hover:text-primary">VCV Rack desde cero</a> · <a href="https://animatek.net/cursos/curso-uzz/" target="_blank" rel="noreferrer" class="font-semibold text-slate-900 hover:text-primary">Curso UZZ</a></span>
                            </li>
                            <li class="flex gap-3 items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-5 w-5 text-primary shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>Recursos descargables: patches, presets y plantillas. <a href="https://animatek.net/vcv-rack-sound-pack-01/" target="_blank" rel="noreferrer" class="font-semibold text-slate-900 hover:text-primary">Sound Pack 01</a> · <a href="https://animatek.net/ebook-vcvrack/" target="_blank" rel="noreferrer" class="font-semibold text-slate-900 hover:text-primary">eBook VCV Rack</a></span>
                            </li>
                            <li class="flex gap-3 items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-5 w-5 text-primary shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>Contenido en abierto en YouTube, directo al grano. <a href="https://www.youtube.com/@animatek/featured" target="_blank" rel="noreferrer" class="font-semibold text-slate-900 hover:text-primary">Canal YouTube</a></span>
                            </li>
                        </ul>
                    </div>

                    <div class="group h-full bg-slate-50/80 border border-slate-200 rounded-2xl p-6 flex flex-col gap-5 shadow-sm hover:-translate-y-1 hover:shadow-lg transition-all">
                        <div class="flex items-center gap-3">
                            <div class="p-2 rounded-lg bg-emerald-50 text-emerald-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 5h7l7 7-7 7H5V5Z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 12h0"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900">Clases privadas 1:1</h3>
                        </div>
                        <ul class="space-y-3 text-sm sm:text-base text-slate-700">
                            <li class="flex gap-3 items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-5 w-5 text-primary shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>Sesiones personalizadas de producción, flujo de trabajo y diseño sonoro.</span>
                            </li>
                            <li class="flex gap-3 items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-5 w-5 text-primary shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>Revisión de proyectos, análisis de patches y resolución de bloqueos.</span>
                            </li>
                            <li class="flex gap-3 items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-5 w-5 text-primary shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>Online, con pantalla compartida y orientadas a que salgas con tareas claras.</span>
                            </li>
                        </ul>
                        <div class="mt-auto pt-1 flex justify-center">
                            <a href="https://animatek.net/clases-privadas/" target="_blank" rel="noreferrer" class="btn-primary inline-flex items-center gap-2">
                                Reservar una sesión
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-7-7 7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="group h-full bg-slate-50/80 border border-slate-200 rounded-2xl p-6 flex flex-col gap-5 shadow-sm hover:-translate-y-1 hover:shadow-lg transition-all">
                        <div class="flex items-center gap-3">
                            <div class="p-2 rounded-lg bg-orange-50 text-orange-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 4h7l7 7-7 7H5V4Z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 12h0"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 4v16"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900">Proyectos, directos y desarrollo</h3>
                        </div>
                        <ul class="space-y-3 text-sm sm:text-base text-slate-700">
                            <li class="flex gap-3 items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-5 w-5 text-primary shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>Desarrollo de herramientas propias como UZZ (secuenciador para Max for Live y VCV Rack). <a href="https://animatek.net/ultimate-ztep-zequencer/" target="_blank" rel="noreferrer" class="font-semibold text-slate-900 hover:text-primary">Ultimate Ztep Zequencer</a></span>
                            </li>
                            <li class="flex gap-3 items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-5 w-5 text-primary shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>Directos con sistemas híbridos (Bitwig + modular + hardware).</span>
                            </li>
                            <li class="flex gap-3 items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-5 w-5 text-primary shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>Podcast y contenidos donde hablamos de procesos con ejemplos prácticos, no solo trucos. <a href="https://www.youtube.com/watch?v=x9dzYCusmk0&list=PLEQa2KGITfTtfE7QGU1v_NB5RAn5yNAhe" target="_blank" rel="noreferrer" class="font-semibold text-slate-900 hover:text-primary">Playlist</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 mb-[6.25rem]">
            <div class="p-4 sm:p-0 space-y-6">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-full bg-primary/10 text-primary flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                    </div>
                    <h2 class="text-3xl font-extrabold text-slate-900">Cómo puedo ayudarte</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6 text-base sm:text-lg text-slate-700">
                    <?php
                    $ayuda_items = [
                        'Si quieres empezar con VCV Rack sin perderte en cientos de módulos.',
                        'Si vienes de Ableton u otro DAW y quieres dar el salto a Bitwig con sentido.',
                        'Si ya estás empezando en Bitwig y quieres profundizar.',
                        'Si te encanta The Grid y quieres aprender cómo crear una idea concreta con su constructor.',
                        'Si ya produces pero notas que tus temas no terminan de tener coherencia sonora.',
                        'Si te interesa el directo con sistemas híbridos (software + hardware + modular).',
                        'Si necesitas un acompañamiento técnico que hable tu idioma.',
                    ];
                    foreach ($ayuda_items as $item): ?>
                        <div class="flex items-start gap-3 bg-white border border-slate-200 rounded-xl p-4 shadow-[0_10px_30px_-20px_rgba(15,23,42,0.35)]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-5 w-5 text-primary shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="leading-relaxed text-slate-800"><?php echo esc_html($item); ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 mb-[6.25rem]">
        <div class="relative overflow-hidden rounded-[1.75rem] border border-slate-200 bg-white shadow-sm">
            <div class="absolute inset-0 opacity-[0.28] pointer-events-none bg-[radial-gradient(circle_at_10%_15%,rgba(33,112,245,0.12),transparent_35%),radial-gradient(circle_at_90%_20%,rgba(56,189,248,0.1),transparent_30%),radial-gradient(circle_at_50%_85%,rgba(99,102,241,0.12),transparent_30%)]"></div>
            <div class="relative z-10 p-8 sm:p-12 space-y-8">
                <div class="flex flex-wrap items-center gap-3">
                    <div class="w-12 h-12 rounded-full bg-primary/10 text-primary flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                        </svg>
                    </div>
                    <h2 class="text-3xl font-extrabold text-slate-900">Formación y servicios</h2>
                    <span class="px-3 py-1 text-xs font-semibold uppercase tracking-[0.12em] text-primary bg-primary/10 border border-primary/20 rounded-full">Mini hub</span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6">
                    <div class="h-full bg-slate-50/80 border border-slate-200 rounded-2xl p-6 flex flex-col gap-4 shadow-sm">
                        <h3 class="text-xl font-bold text-slate-900">Curso “VCV Rack desde cero”</h3>
                        <p class="text-sm sm:text-base text-slate-700 leading-relaxed">Aprende los fundamentos de un sistema modular virtual: voltajes, tipos de señal, osciladores, filtros, VCA, envolventes, modulaciones y secuencias. Orientado a personas que parten casi de cero y quieren entender qué hacen cuando mueven un knob.</p>
                        <div class="mt-auto pt-2">
                            <a href="https://animatek.net/cursos/vcv-rack-desde-cero/" target="_blank" rel="noreferrer" class="btn-primary inline-flex items-center gap-2">
                                Ir al curso Online
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-7-7 7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="h-full bg-slate-50/80 border border-slate-200 rounded-2xl p-6 flex flex-col gap-4 shadow-sm">
                        <h3 class="text-xl font-bold text-slate-900">Clases privadas 1:1</h3>
                        <p class="text-sm sm:text-base text-slate-700 leading-relaxed">Sesiones personalizadas de producción musical, diseño sonoro y flujo de trabajo con Bitwig, VCV Rack y sistemas híbridos.</p>
                        <div class="mt-auto pt-2">
                            <a href="https://animatek.net/clases-privadas/" target="_blank" rel="noreferrer" class="btn-secondary inline-flex items-center gap-2">
                                Más info sobre clases 1:1
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-7-7 7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="h-full bg-slate-50/80 border border-slate-200 rounded-2xl p-6 flex flex-col gap-4 shadow-sm">
                        <h3 class="text-xl font-bold text-slate-900">Herramientas y dispositivos</h3>
                        <p class="text-sm sm:text-base text-slate-700 leading-relaxed">Desarrollo de secuenciadores y herramientas propias para Max for Live y VCV Rack, junto con librerías de patches y presets para experimentar y aprender a través del sonido.</p>
                        <div class="mt-auto pt-2">
                            <a href="https://animatek.net/ultimate-ztep-zequencer-vcvrack/" target="_blank" rel="noreferrer" class="btn-primary inline-flex items-center gap-2">
                                Explora los módulos
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-7-7 7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 mb-[6.25rem]">
            <div class="p-4 sm:p-0 space-y-6">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-full bg-primary/10 text-primary flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 19.25c4 0 7.25-3.25 7.25-7.25S16 4.75 12 4.75 4.75 8 4.75 12 8 19.25 12 19.25Z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="m9.5 9.5 5 5m0-5-5 5"/>
                        </svg>
                    </div>
                    <h2 class="text-3xl font-extrabold text-slate-900">FAQ rápida sobre mí y mi trabajo</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                    <?php
                    $faq_items = [
                        [
                            'question' => '¿En qué estás especializado exactamente?',
                            'answer'   => 'En producción de música electrónica orientada a herramientas digitales como Bitwig y VCV Rack, síntesis, diseño sonoro y flujos híbridos con hardware modular.',
                        ],
                        [
                            'question' => '¿Solo enseñas a gente avanzada?',
                            'answer'   => 'No. Trabajo tanto con personas que empiezan desde cero como con productores que ya tienen nivel y quieren profundizar en modular, directos o diseño sonoro, o aprender nuevas herramientas.',
                        ],
                        [
                            'question' => '¿Haces formación presencial?',
                            'answer'   => 'Puntualmente, en talleres y masterclasses. El núcleo de la formación es online (cursos y sesiones 1:1). Pregúntame si necesitas más info en <a href="https://animatek.net/contacto/" target="_blank" rel="noreferrer" class="text-primary font-semibold hover:text-primary/80">contacto</a>.',
                        ],
                        [
                            'question' => '¿Puedo preguntarte dudas si compro un curso?',
                            'answer'   => 'Sí. Mis cursos están pensados para hacer preguntas y acompañar el proceso, no como vídeos sueltos sin soporte. Además puedes unirte a nuestro <a href="https://discord.com/invite/emUkHRrvtk" target="_blank" rel="noreferrer" class="text-primary font-semibold hover:text-primary/80">Discord</a>.',
                        ],
                        [
                            'question' => '¿Podemos tener una reunión si me interesan las clases privadas?',
                            'answer'   => 'Sí, sin problema. Escríbeme y hablamos en <a href="https://animatek.net/contacto/" target="_blank" rel="noreferrer" class="text-primary font-semibold hover:text-primary/80">contacto</a>.',
                        ],
                        [
                            'question' => '¿Qué tipo de perfiles ayudas ahora mismo?',
                            'answer'   => 'Personas que quieren iniciar VCV Rack sin perderse, quienes migran de Ableton u otros DAW a Bitwig, quienes aman The Grid y quieren construir ideas concretas, y productores que buscan coherencia sonora o directos híbridos.',
                        ],
                    ];
                    $faq_allowed_tags = [
                        'a' => [
                            'href' => [],
                            'target' => [],
                            'rel' => [],
                            'class' => [],
                        ],
                    ];
                    foreach ($faq_items as $faq): ?>
                        <div class="h-full bg-slate-50/80 border border-slate-200 rounded-2xl p-5 shadow-sm flex flex-col gap-2">
                            <p class="text-sm font-semibold tracking-wide uppercase text-primary/90"><?php echo esc_html($faq['question']); ?></p>
                            <p class="text-slate-700 leading-relaxed text-sm sm:text-base"><?php echo wp_kses($faq['answer'], $faq_allowed_tags); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
    </section>

</main>

<?php get_footer(); ?>
