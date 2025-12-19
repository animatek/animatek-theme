<?php
/**
 * Template Name: Clases Privadas
 */

get_header();
?>

<main id="primary" class="bg-slate-200 text-slate-900">
    <section class="relative overflow-hidden mb-[6.25rem] px-6 sm:px-10 py-20 text-slate-50" style="background-image: linear-gradient(135deg, rgba(15,23,42,0.9), rgba(15,23,42,0.65)), url('https://animatek.net/wp-content/uploads/2025/05/Bono_hora.webp'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="max-w-7xl mx-auto grid gap-12 lg:grid-cols-[1.1fr_0.9fr] items-center">
            <div class="space-y-6">
                <span class="inline-flex items-center gap-2 px-3 py-1 text-xs font-bold tracking-[0.18em] uppercase border border-white/20 rounded-full bg-white/10">
                    Clases privadas 1:1
                </span>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight text-white">
                    Clases Privadas con Animatek
                </h1>
                <p class="text-xl text-slate-200 leading-relaxed">
                    Producción musical con Bitwig, VCV Rack y síntesis modular. Sesiones online personalizadas, profundas y a tu ritmo.
                </p>
                <p class="text-lg text-slate-200/90 leading-relaxed">
                    Aprende con un Certified Trainer de Bitwig. Feedback directo, seguimiento y un plan adaptado a tus objetivos creativos.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#planes" class="btn-primary">
                        Ver planes y precios
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-7-7 7 7-7 7"/>
                        </svg>
                    </a>
                    <a href="#como-funciona" class="btn-secondary">
                        Cómo funciona
                    </a>
                </div>
            </div>
            <div class="relative">
                <div class="absolute inset-0 rounded-3xl bg-white/5 blur-3xl"></div>
                <div class="relative rounded-3xl overflow-hidden border border-white/10 shadow-2xl">
                    <img src="https://animatek.net/wp-content/uploads/2025/04/Clasesonline.webp" alt="Clases online Animatek" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-6 py-14 bg-slate-100 rounded-[2rem] border border-slate-200 shadow-sm mb-[6.25rem]" id="planes">
        <div class="text-center max-w-3xl mx-auto space-y-4 mb-12">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-xs font-semibold uppercase tracking-[0.12em]">
                Elige tu ritmo
            </div>
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900">Planes flexibles para avanzar</h2>
            <p class="text-lg text-slate-700 leading-relaxed">
                Clase suelta para dudas concretas o bonos para continuidad. Incluye opción de videollamada gratuita de 15 minutos para ajustar tu hoja de ruta.
            </p>
            <a href="<?php echo esc_url(home_url('/contacto')); ?>" class="btn-secondary">
                Agendar llamada gratuita de 15 min
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-10 max-w-6xl mx-auto">
            <div class="bg-white border border-slate-200 rounded-2xl p-8 flex flex-col hover:border-primary transition-all duration-300 hover:-translate-y-2 shadow-sm hover:shadow-lg">
                <div class="mb-6">
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Sesión puntual 1:1</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Para desbloquear un problema concreto en tu proyecto.</p>
                </div>
                <div class="mb-6">
                    <span class="text-4xl font-bold text-slate-900">40 €/hora</span>
                </div>
                <ul class="mb-8 space-y-3 text-slate-700 text-sm flex-1">
                    <?php
                    $clase_suelta = [
                        'Resolución de problemas en VCV Rack, Bitwig o Reaktor.',
                        'Revisión de patches, proyectos o flujo de trabajo.',
                        'Ajustes de configuración (audio, routing, directo híbrido).',
                        'Ideal para probar las clases 1:1 antes de un programa más largo.',
                    ];
                    foreach ($clase_suelta as $item): ?>
                        <li class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mt-0.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span><?php echo esc_html($item); ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <a href="https://animatek.net/pago/?line_items%5B0%5D%5Bprice_id%5D=c5b923cb-2139-4cde-a7b5-e96370391c0e&line_items%5B0%5D%5Bquantity%5D=1" target="_blank" class="w-full block text-center bg-slate-100 border border-slate-200 hover:bg-primary hover:text-white hover:border-primary text-slate-700 font-semibold py-3 px-4 rounded-xl transition-all">
                    Reservar sesión
                </a>
            </div>

            <div class="bg-white border-2 border-primary rounded-2xl p-8 flex flex-col shadow-lg shadow-primary/15 hover:-translate-y-2 transition-all duration-300 relative overflow-hidden">
                <div class="absolute top-0 inset-x-0 h-1 bg-gradient-to-r from-primary to-cyan-400"></div>
                <div class="absolute top-6 inset-x-0 flex justify-center">
                    <span class="bg-primary text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider shadow-sm">Promo 2026 – plazas limitadas</span>
                </div>
                <div class="mb-6 mt-8">
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Programa 5 horas – Arranca tu sistema modular</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">En 4–5 sesiones dejamos listo tu entorno para crear música sin perderte.</p>
                </div>
                <div class="mb-6">
                    <span class="text-4xl font-bold text-slate-900">150 €</span>
                    <span class="text-green-700 text-xs font-bold ml-2 bg-green-100 px-2 py-1 rounded">Ahorras 50 €</span>
                </div>
                <ul class="mb-8 space-y-3 text-slate-700 text-sm flex-1">
                    <?php
                    $bono5 = [
                        'Diseñamos tu sistema base en VCV Rack o Bitwig adaptado a tu estilo.',
                        'Te llevas un patch o plantilla de trabajo listo para reutilizar en tus proyectos.',
                        'Plan de trabajo entre sesiones (no solo hablar, sino avanzar).',
                        'Horarios flexibles y soporte por email/Discord entre sesiones.',
                    ];
                    foreach ($bono5 as $item): ?>
                        <li class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mt-0.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span><?php echo esc_html($item); ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <a href="https://animatek.net/pago/?line_items%5B0%5D%5Bprice_id%5D=ed8ca26e-f74a-4c96-9311-f587634d5fb8&line_items%5B0%5D%5Bquantity%5D=1" target="_blank" class="w-full block text-center bg-primary hover:bg-primary/90 text-white font-bold py-4 px-4 rounded-xl shadow-lg shadow-primary/30 transition-all">
                    Empezar programa 5h
                </a>
            </div>

            <div class="bg-white border border-slate-200 rounded-2xl p-8 flex flex-col hover:border-primary transition-all duration-300 hover:-translate-y-2 shadow-sm hover:shadow-lg">
                <div class="mb-6">
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Mentoría 10h – VCV Rack + Bitwig completo</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Domina VCV Rack desde cero, intégralo con Bitwig y construye un flujo de trabajo sólido en 10 sesiones 1:1.</p>
                </div>
                <div class="mb-6">
                    <span class="text-4xl font-bold text-slate-900">295 €</span>
                    <span class="text-green-700 text-xs font-bold ml-2 bg-green-100 px-2 py-1 rounded">Ahorras 105 €</span>
                </div>
                <ul class="mb-8 space-y-3 text-slate-700 text-sm flex-1">
                    <?php
                    $bono10 = [
                        'Fundamentos claros de VCV Rack y trabajo por módulos.',
                        'Integración real con Bitwig: routing, grabación y mezcla.',
                        'Proyecto final: tema o mini set terminado y listo para publicar.',
                        'Base de trabajo replicable para futuros proyectos, sin pasarte meses saltando entre vídeos.',
                    ];
                    foreach ($bono10 as $item): ?>
                        <li class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mt-0.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span><?php echo esc_html($item); ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <a href="https://animatek.net/pago/?line_items%5B0%5D%5Bprice_id%5D=94b501cc-4ed9-4526-bbb8-b1389173fd90&line_items%5B0%5D%5Bquantity%5D=1" target="_blank" class="w-full block text-center bg-slate-100 border border-slate-200 hover:bg-primary hover:text-white hover:border-primary text-slate-700 font-semibold py-3 px-4 rounded-xl transition-all">
                    Unirme al programa 10h
                </a>
                <p class="text-xs text-slate-500 text-center mt-3">Ideal para productores con DAW que quieren integrar un sistema modular, usuarios de VCV Rack que necesitan afianzar conceptos avanzados, y principiantes serios que buscan una base sólida con acompañamiento paso a paso.</p>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 mb-[6.25rem]">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 mb-8">
            <div>
                <p class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-xs font-semibold uppercase tracking-[0.1em] border border-primary/20">
                    ¿Qué puedes aprender?
                </p>
                <h2 class="text-3xl font-extrabold text-slate-900 mt-3">Dominio técnico y creatividad sin límites.</h2>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
            <div class="group bg-white border border-slate-200 rounded-2xl p-6 shadow-sm hover:shadow-md hover:-translate-y-1 transition">
                <div class="flex items-center gap-3 mb-4">
                    <span class="h-10 w-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="4" y="4" width="6" height="6" rx="1.5"/>
                            <rect x="14" y="4" width="6" height="6" rx="1.5"/>
                            <rect x="4" y="14" width="6" height="6" rx="1.5"/>
                            <rect x="14" y="14" width="6" height="6" rx="1.5"/>
                        </svg>
                    </span>
                    <h3 class="text-lg font-bold text-slate-900">Bitwig Studio</h3>
                </div>
                <p class="text-sm leading-relaxed text-slate-600">
                    Automatización, The Grid, composición avanzada y workflows híbridos.
                </p>
            </div>

            <div class="group bg-white border border-slate-200 rounded-2xl p-6 shadow-sm hover:shadow-md hover:-translate-y-1 transition">
                <div class="flex items-center gap-3 mb-4">
                    <span class="h-10 w-10 rounded-xl bg-cyan-50 text-cyan-600 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12c2-4 4-4 6 0s4 4 6 0 4-4 6 0"/>
                        </svg>
                    </span>
                    <h3 class="text-lg font-bold text-slate-900">VCV Rack</h3>
                </div>
                <p class="text-sm leading-relaxed text-slate-600">
                    Secuenciación generativa, síntesis modular e integración con DAW.
                </p>
            </div>

            <div class="group bg-white border border-slate-200 rounded-2xl p-6 shadow-sm hover:shadow-md hover:-translate-y-1 transition">
                <div class="flex items-center gap-3 mb-4">
                    <span class="h-10 w-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h2v12H4zM10 10h2v8h-2zM16 8h2v10h-2z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 18h18"/>
                        </svg>
                    </span>
                    <h3 class="text-lg font-bold text-slate-900">Producción</h3>
                </div>
                <p class="text-sm leading-relaxed text-slate-600">
                    Workflow creativo, mezcla, diseño sonoro y estructura de tracks.
                </p>
            </div>

            <div class="group bg-white border border-slate-200 rounded-2xl p-6 shadow-sm hover:shadow-md hover:-translate-y-1 transition">
                <div class="flex items-center gap-3 mb-4">
                    <span class="h-10 w-10 rounded-xl bg-slate-900/10 text-slate-900 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="4" y="5" width="16" height="14" rx="2" ry="2"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 9h8m-8 4h5"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 5V3m12 2V3"/>
                        </svg>
                    </span>
                    <h3 class="text-lg font-bold text-slate-900">Hardware</h3>
                </div>
                <p class="text-sm leading-relaxed text-slate-600">
                    Digitakt, Octatrack, Eurorack, controladores MIDI y setup live.
                </p>
            </div>
        </div>
    </section>

    <section id="como-funciona" class="max-w-7xl mx-auto px-6 mb-[6.25rem] grid grid-cols-1 lg:grid-cols-[1fr_1.1fr] gap-8">
        <div class="space-y-5 bg-slate-50 rounded-[1.75rem] border border-slate-200 p-8 shadow-sm">
            <div class="inline-flex items-center gap-3 px-3 py-1 rounded-full bg-primary/10 text-primary font-semibold text-xs uppercase tracking-[0.1em]">
                Paso a paso
            </div>
            <h3 class="text-2xl font-bold text-slate-900">Cómo funcionan las clases</h3>
            <p class="text-slate-700 text-lg leading-relaxed">Proceso simple y enfocado en resultados desde el primer día.</p>
            <div class="space-y-5">
                <?php
                $steps = [
                    'Primera toma de contacto' => 'Gratuita o incluida en la primera sesión para conocernos.',
                    'Análisis personalizado' => 'Reviso tu nivel, herramientas y objetivos a corto/largo plazo.',
                    'Diseño del plan' => 'Plan de clases a medida centrado en lo que necesitas.',
                    'Seguimiento y soporte' => 'Ajustes sobre la marcha y resolución de dudas entre sesiones.',
                ];
                $i = 1;
                foreach ($steps as $title => $desc): ?>
                    <div class="flex items-start gap-4">
                        <div class="h-9 w-9 rounded-full bg-primary text-white flex items-center justify-center font-bold text-sm"><?php echo esc_html($i); ?></div>
                        <div>
                            <h4 class="text-lg font-semibold text-slate-900"><?php echo esc_html($title); ?></h4>
                            <p class="text-slate-600"><?php echo esc_html($desc); ?></p>
                        </div>
                    </div>
                <?php
                $i++;
                endforeach; ?>
            </div>
        </div>

        <div class="bg-white text-slate-900 p-8 rounded-[1.75rem] border border-slate-200 shadow-sm relative overflow-hidden flex flex-col justify-between">
            <div class="absolute inset-0 opacity-30 pointer-events-none bg-[radial-gradient(circle_at_20%_20%,rgba(33,112,245,0.15),transparent_35%),radial-gradient(circle_at_80%_30%,rgba(56,189,248,0.12),transparent_30%),radial-gradient(circle_at_50%_80%,rgba(99,102,241,0.12),transparent_30%)]"></div>
            <div class="relative z-10 space-y-4">
                <div class="inline-flex items-center gap-3 px-3 py-1 rounded-full bg-slate-200 text-slate-700 text-xs font-semibold uppercase tracking-[0.1em]">
                    🎯 Clases adaptadas a ti
                </div>
                <h3 class="text-2xl font-bold text-slate-900">No doy una clase igual dos veces</h3>
                <p class="text-lg leading-relaxed text-slate-600">
                    Tras una primera sesión o consulta gratuita, analizo tu nivel, tus objetivos y tu forma de aprender para diseñar un plan personalizado.
                </p>
                <p class="text-lg leading-relaxed text-slate-600">
                    Ya sea que estés empezando en Bitwig, bloqueado en VCV Rack o quieras preparar tu live set, trazamos juntos el camino para que aprendas lo que de verdad necesitas, a tu ritmo y con seguimiento. No hay plantillas ni clases estándar. Todo se adapta a ti y tu proceso.
                </p>
            </div>
        </div>
    </section>


    <?php get_template_part('template-parts/block-testimonios'); ?>



    <section class="max-w-5xl mx-auto px-6 pb-[2.25rem]">
        <div class="text-center mb-10">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-xs font-semibold uppercase tracking-[0.1em] border border-primary/20">
                Preguntas frecuentes
            </div>
            <h2 class="text-3xl font-extrabold text-slate-900 mt-4">Resuelve tus dudas antes de empezar</h2>
        </div>

        <div class="space-y-4">
            <?php
            $faqs = [
                [
                    'q' => '¿Puedo grabar las clases?',
                    'a' => 'Sí, puedes grabarlas tú o pedir la grabación al terminar la sesión para repasar cuando quieras.',
                ],
                [
                    'q' => '¿Qué necesito para empezar?',
                    'a' => 'Ordenador con buena conexión, Discord y micrófono. Tarjeta de sonido o controlador MIDI son recomendables, no obligatorios.',
                ],
                [
                    'q' => '¿Qué pasa si no puedo asistir a una clase?',
                    'a' => 'Avisando con 24h reagendamos sin coste. Así mantienes el ritmo sin perder la sesión.',
                ],
            ];
            foreach ($faqs as $faq): ?>
                <details class="group bg-white border border-slate-200 rounded-2xl open:border-primary transition-all duration-300 shadow-sm">
                    <summary class="flex justify-between items-center p-6 cursor-pointer font-semibold text-lg text-slate-800 select-none">
                        <?php echo esc_html($faq['q']); ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="chevron w-5 h-5 text-slate-400 group-open:text-primary transition-transform duration-300 group-open:rotate-180" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m6 9 6 6 6-6"/>
                        </svg>
                    </summary>
                    <div class="px-6 pb-6 pt-0 text-slate-600 leading-relaxed">
                        <?php echo esc_html($faq['a']); ?>
                    </div>
                </details>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
