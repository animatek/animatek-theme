<section class="max-w-7xl mx-auto px-6 mb-[6.25rem]">
    <div class="bg-white border border-slate-200 rounded-[1.75rem] shadow-sm p-8 md:p-10 lg:p-16">
        <div class="text-center mb-16">
            <h2 class="mb-4">Lo que dicen los alumnos</h2>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto">
                Alumnos hablando de claridad, método y progreso real en su música.
            </p>
        </div>
        
        <div class="grid gap-6 mb-12" style="grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));">
            <?php
            $testimonials = [
                [
                    'name'     => 'Valver',
                    'chip'     => 'VCV Rack + Instalaciones',
                    'quote'    => 'Muy buena experiencia formándome en <strong>VCV Rack</strong>. Clases claras, bien estructuradas y muy prácticas. En mi caso, me ha servido directamente para proyectos de <strong>instalaciones y sistemas generativos</strong>.',
                    'result'   => 'Clases claras, estructuradas y aplicadas a instalaciones reales.',
                    'img'      => 'https://animatek.net/wp-content/uploads/2026/03/Valver.webp',
                    'initials' => 'V',
                    'color'    => 'indigo'
                ],
                [
                    'name'     => 'Mónica Solís',
                    'chip'     => 'Formación guiada',
                    'quote'    => 'Animatek me dio el <strong>impulso</strong> para introducirme en la producción electrónica de forma <strong>sencilla y divertida</strong>. Recomendable 100%.',
                    'result'   => 'Le dio impulso para empezar de forma sencilla y agradable.',
                    'img'      => 'https://animatek.net/wp-content/uploads/2025/04/monica_solis.jpg',
                    'initials' => 'MS',
                    'color'    => 'cyan'
                ],
                [
                    'name'     => 'Kenny García',
                    'chip'     => 'Curso presencial',
                    'quote'    => 'Con este curso <strong>dominé Ableton Live</strong>. Javier lo explica muy claro. Recomendable si quieres producir a nivel profesional.',
                    'result'   => 'Claridad en las explicaciones y progreso real en Ableton Live.',
                    'img'      => 'https://animatek.net/wp-content/uploads/2025/04/Kenny_Garcia.jpg',
                    'initials' => 'KG',
                    'color'    => 'purple'
                ],
                [
                    'name'     => 'Luis Castellón',
                    'chip'     => 'Mentoría 1:1',
                    'quote'    => 'Desde la <strong>primera clase</strong> en remoto con Javi he estado <strong>haciendo música</strong>. Su pasión se transmite a los alumnos.',
                    'result'   => 'Resultados prácticos desde la primera sesión y motivación.',
                    'img'      => 'https://animatek.net/wp-content/uploads/2025/04/LuisCastellon.webp',
                    'initials' => 'LC',
                    'color'    => 'emerald'
                ],
                [
                    'name'     => 'Jaime Nieto',
                    'chip'     => 'Bitwig + VCV',
                    'quote'    => 'Explicaciones claras y ejemplos ultra prácticos. VCV Rack y Bitwig ya son herramientas de <strong>uso diario en mi estudio</strong>.',
                    'result'   => 'Ejemplos prácticos y uso diario de Bitwig + VCV.',
                    'img'      => 'https://animatek.net/wp-content/uploads/2025/04/jaime_Nieto.jpg',
                    'initials' => 'JN',
                    'color'    => 'amber'
                ],
            ];
            
            foreach ($testimonials as $item): 
                $color_classes = "bg-{$item['color']}-50 text-{$item['color']}-600 border-{$item['color']}-100";
            ?>
                <div class="group relative bg-white rounded-2xl p-5 border border-slate-200 hover:border-primary/30 hover:shadow-lg transition-all flex flex-col h-full">
                    <!-- Header with Avatar and Name -->
                    <div class="flex items-center gap-4 mb-4">
                        <div class="relative flex-shrink-0">
                            <?php if (!empty($item['img'])): ?>
                                <img src="<?php echo esc_url($item['img']); ?>" 
                                     alt="<?php echo esc_attr($item['name']); ?>" 
                                     class="w-12 h-12 rounded-full object-cover border border-slate-200 shadow-sm"
                                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                                <div class="w-12 h-12 rounded-full bg-slate-100 items-center justify-center text-slate-500 font-bold text-sm hidden border border-slate-200">
                                    <?php echo esc_html($item['initials']); ?>
                                </div>
                            <?php else: ?>
                                <div class="w-12 h-12 rounded-full bg-slate-100 flex items-center justify-center text-slate-500 font-bold text-sm border border-slate-200">
                                    <?php echo esc_html($item['initials']); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-sm"><?php echo esc_html($item['name']); ?></h4>
                            <div class="text-[10px] font-bold px-2 py-0.5 rounded-md inline-block mt-1 border <?php echo $color_classes; ?> uppercase tracking-wider">
                                <?php echo esc_html($item['chip']); ?>
                            </div>
                        </div>
                    </div>

                    <!-- Quote -->
                    <blockquote class="text-slate-700 text-sm leading-relaxed mb-4 flex-grow relative">
                        <span class="text-primary/10 text-5xl absolute -top-6 -left-2 select-none font-serif">“</span>
                        <p class="relative z-10 pl-2">
                             <?php echo $item['quote']; ?>
                        </p>
                    </blockquote>
                    
                </div>
            <?php endforeach; ?>

            <!-- Tarjeta CTA: El siguiente eres tú -->
            <a href="https://animatek.net/consulta-gratuita/"
               class="group relative rounded-2xl p-5 border-2 border-dashed border-primary/30 hover:border-primary/70 hover:shadow-lg transition-all flex flex-col h-full items-center justify-center text-center cursor-pointer no-underline overflow-hidden"
               style="background: linear-gradient(135deg, #f0f4ff 0%, #faf5ff 100%);">
                <!-- Fondo decorativo animado -->
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500"
                     style="background: linear-gradient(135deg, rgba(99,102,241,0.06) 0%, rgba(168,85,247,0.06) 100%);"></div>

                <!-- Icono avatar con "?" -->
                <div class="relative mb-4">
                    <div class="w-14 h-14 rounded-full flex items-center justify-center text-2xl font-black border-2 border-dashed border-primary/40 group-hover:border-primary transition-colors duration-300"
                         style="background: linear-gradient(135deg, #e0e7ff, #f3e8ff); color: #6366f1;">
                        ?
                    </div>
                    <!-- Pulso animado -->
                    <span class="absolute inset-0 rounded-full animate-ping opacity-20" style="background: #6366f1;"></span>
                </div>

                <p class="font-black text-base leading-tight mb-1" style="color: #4f46e5;">
                    ¿El siguiente eres tú?
                </p>
                <p class="text-xs text-slate-500 leading-snug mb-4 max-w-[180px]">
                    Únete a los alumnos que ya están haciendo música de verdad.
                </p>

                <span class="inline-flex items-center gap-1.5 text-xs font-bold px-3 py-1.5 rounded-full text-white transition-transform duration-200 group-hover:scale-105"
                      style="background: linear-gradient(135deg, #6366f1, #a855f7);">
                    Consulta 15 min gratis
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </span>
            </a>

        </div>

    </div>
</section>