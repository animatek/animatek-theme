<section class="max-w-7xl mx-auto px-6 mb-[6.25rem]">
    <div class="bg-white border border-slate-200 rounded-[1.75rem] shadow-sm p-8 md:p-10 lg:p-16">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-slate-900 mb-4">Lo que dicen los alumnos</h2>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto">
                Alumnos hablando de claridad, método y progreso real en su música.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            <?php
            $testimonials = [
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
                <div class="group relative bg-white rounded-2xl p-6 border border-slate-200 hover:border-primary/30 hover:shadow-lg transition-all flex flex-col h-full">
                    <!-- Header with Avatar and Name -->
                    <div class="flex items-center gap-4 mb-6">
                        <div class="relative flex-shrink-0">
                            <?php if (!empty($item['img'])): ?>
                                <img src="<?php echo esc_url($item['img']); ?>" 
                                     alt="<?php echo esc_attr($item['name']); ?>" 
                                     class="w-12 h-12 rounded-full object-cover border border-slate-200"
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
                            <div class="text-xs font-medium px-2 py-0.5 rounded-md inline-block mt-1 border <?php echo $color_classes; ?>">
                                <?php echo esc_html($item['chip']); ?>
                            </div>
                        </div>
                    </div>

                    <!-- Quote -->
                    <blockquote class="text-slate-700 text-sm leading-relaxed mb-4 flex-grow relative">
                        <span class="text-primary/20 text-4xl absolute -top-4 -left-2 select-none">“</span>
                        <p class="relative z-10 pl-2">
                             <?php echo $item['quote']; ?>
                        </p>
                    </blockquote>
                    
                    <!-- Result Box -->
                    <div class="bg-slate-50 rounded-xl p-4 border border-slate-100 mt-auto">
                        <p class="text-xs font-medium text-slate-700 leading-snug">
                            <strong class="text-slate-900 block mb-1">Lo que destaca:</strong>
                            <?php echo $item['result']; ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>



        <?php get_template_part('template-parts/block-bitwig'); ?>

    </div>
</section>