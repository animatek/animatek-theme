<?php
/**
 * Template Name: Test de Colores
 *
 * @package Animatek
 */

get_header();
?>

<main class="min-h-screen bg-slate-50 pt-16 pb-10 md:pt-20 md:pb-16 text-slate-800 font-sans">
    <div class="max-w-6xl mx-auto px-4 md:px-6 space-y-12">
        
        <!-- Intro Section -->
        <section class="bg-white rounded-3xl shadow-lg border border-slate-200/80 p-8 md:p-12 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-[#0F172A] mb-4">Prueba de Paleta de Colores</h1>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto">
                Esta página es un entorno de pruebas para verificar cómo combinan los colores complementarios y análogos con el azul base <span class="font-mono bg-slate-100 text-[#2B68F0] px-2 py-1 rounded">#2B68F0</span> de tus H2.
            </p>
        </section>

        <!-- Main Content Area with sidebar structure -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- Left Content (Main) -->
            <div class="lg:col-span-2 space-y-8">
                
                <!-- Section 1: Focus on the H2 -->
                <article class="bg-white rounded-3xl shadow-lg border border-slate-200/80 p-8 space-y-6">
                    <h2 class="text-[1.875rem] font-bold leading-[1.2em] tracking-[-0.03em] text-[#2B68F0]">
                        Sección Principal con H2 Azul
                    </h2>
                    <p class="text-slate-700 leading-relaxed">
                        Este es un párrafo de texto normal que utiliza el color principal de texto de la paleta. El texto oscuro (slate-700 o slate-900) contrasta perfectamente con los fondos claros (slate-50) mejorando la legibilidad, mientras deja que el azul del <strong class="text-[#0F172A]">H2</strong> sea el protagonista visual.
                    </p>
                    <div class="mt-8 space-y-6">
                        <h3 class="text-lg font-bold text-slate-800 border-b border-slate-100 pb-2">Alternativas para Botones / Acento</h3>
                        
                        <!-- Option 1: Teal / Green (Tech, Success, Fresh) -->
                        <div class="flex flex-col sm:flex-row sm:items-center gap-4">
                            <a href="#" class="inline-flex items-center justify-center px-6 py-3 rounded-full bg-[#10B981] text-white font-semibold hover:bg-[#059669] transition-colors shadow-md shadow-[#10B981]/30 whitespace-nowrap">
                                Opción: Verde Esmeralda
                            </a>
                            <p class="text-sm text-slate-600">Da una sensación de avance, aprobación y frescura tecnológica. Contrasta bien con el azul.</p>
                        </div>

                        <!-- Option 2: Coral / Pink (Vibrant, Creative, Bold) -->
                        <div class="flex flex-col sm:flex-row sm:items-center gap-4">
                            <a href="#" class="inline-flex items-center justify-center px-6 py-3 rounded-full bg-[#F02B6A] text-white font-semibold hover:bg-[#d91e5c] transition-colors shadow-md shadow-[#F02B6A]/30 whitespace-nowrap">
                                Opción: Rosa Coral
                            </a>
                            <p class="text-sm text-slate-600">Muy moderno y creativo. Es un color vibrante que capta mucho la atención sin ser el típico rojo o naranja.</p>
                        </div>

                        <!-- Option 3: Deep Indigo (Elegant, Monochromatic-adjacent) -->
                        <div class="flex flex-col sm:flex-row sm:items-center gap-4">
                            <a href="#" class="inline-flex items-center justify-center px-6 py-3 rounded-full bg-[#4F46E5] text-white font-semibold hover:bg-[#4338CA] transition-colors shadow-md shadow-[#4F46E5]/30 whitespace-nowrap">
                                Opción: Índigo / Morado
                            </a>
                            <p class="text-sm text-slate-600">Una opción más seria y elegante, muy cercana al azul base pero con suficiente diferencia para notarse.</p>
                        </div>

                        <!-- Option 4: Dark Slate (Minimalist, Serious) -->
                        <div class="flex flex-col sm:flex-row sm:items-center gap-4">
                            <a href="#" class="inline-flex items-center justify-center px-6 py-3 rounded-full bg-[#0F172A] text-white font-semibold hover:bg-[#1e293b] transition-colors shadow-md shadow-[#0F172A]/30 whitespace-nowrap">
                                Opción: Oscuro Minimalista
                            </a>
                            <p class="text-sm text-slate-600">Para un look super elegante y sobrio, dejando que el azul sea el único color brillante de la web.</p>
                        </div>

                        <!-- Option 5: Amber/Gold (True Complementary) -->
                        <div class="flex flex-col sm:flex-row sm:items-center gap-4">
                            <a href="#" class="inline-flex items-center justify-center px-6 py-3 rounded-full bg-[#F0AB2B] text-slate-900 font-semibold hover:bg-[#D99A1F] transition-colors shadow-md shadow-[#F0AB2B]/30 whitespace-nowrap">
                                Opción: Ámbar Dorado
                            </a>
                            <p class="text-sm text-slate-600"><strong>Complementario real</strong> (180° opuesto al azul). Máximo contraste cromático. Ideal para CTAs que necesiten destacar sobre el azul.</p>
                        </div>

                        <!-- Option 6: Warm Orange (Split-complementary) -->
                        <div class="flex flex-col sm:flex-row sm:items-center gap-4">
                            <a href="#" class="inline-flex items-center justify-center px-6 py-3 rounded-full bg-[#F0612B] text-white font-semibold hover:bg-[#D9521E] transition-colors shadow-md shadow-[#F0612B]/30 whitespace-nowrap">
                                Opción: Naranja Cálido
                            </a>
                            <p class="text-sm text-slate-600"><strong>Split-complementario.</strong> Más energético que el ámbar, transmite urgencia y acción. Bueno para CTAs de conversión.</p>
                        </div>
                    </div>
                </article>

                <!-- Section 2: Analogous Colors in Action -->
                <article class="bg-[#F8FAFC] rounded-3xl shadow-inner border border-slate-200/80 p-8 space-y-6">
                    <h2 class="text-[1.875rem] font-bold leading-[1.2em] tracking-[-0.03em] text-[#2B68F0]">
                        Colores Secundarios para Fondos o Etiquetas
                    </h2>
                    <p class="text-slate-700 leading-relaxed">
                        Aquí tienes un par de bloques usando colores más suaves (Cian y Violeta claro) ideales para aportar variedad sin robar el protagonismo al color de acento principal.
                    </p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                        <!-- Analogous Card 1: Indigo / Violet -->
                        <div class="bg-white border-l-4 border-[#8B5CF6] rounded-r-xl shadow p-6">
                            <h3 class="text-xl font-bold text-[#8B5CF6] mb-2">Toque Violeta</h3>
                            <p class="text-sm text-slate-600">Ideal para destacar módulos creativos o detalles de nivel intermedio.</p>
                        </div>
                        
                        <!-- Analogous Card 2: Cyan -->
                        <div class="bg-white border-l-4 border-[#06B6D4] rounded-r-xl shadow p-6">
                            <h3 class="text-xl font-bold text-[#06B6D4] mb-2">Fresco Cian</h3>
                            <p class="text-sm text-slate-600">Perfecto para notas informativas, herramientas tecnológicas o tutoriales rápidos.</p>
                        </div>
                    </div>
                </article>

            </div>

            <!-- Right Sidebar -->
            <aside class="space-y-8">
                
                <!-- Status & Alerts (Success/Error) -->
                <div class="bg-white rounded-3xl shadow-lg border border-slate-200/80 p-6">
                    <h3 class="text-lg font-bold text-slate-900 mb-4 border-b border-slate-100 pb-3">Notificaciones</h3>
                    
                    <div class="space-y-4">
                        <div class="flex items-start p-3 bg-emerald-50 rounded-lg border border-emerald-100/50">
                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-emerald-100 text-[#10B981] flex justify-center items-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-semibold text-[#10B981]">Éxito</p>
                                <p class="text-xs text-slate-600 mt-0.5">La clase se ha reservado correctamente.</p>
                            </div>
                        </div>

                        <div class="flex items-start p-3 bg-red-50 rounded-lg border border-red-100/50">
                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-red-100 text-[#EF4444] flex justify-center items-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-semibold text-[#EF4444]">Atención</p>
                                <p class="text-xs text-slate-600 mt-0.5">Debes iniciar sesión para ver este contenido.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Color Palette Summary -->
                <div class="bg-slate-900 rounded-3xl shadow-lg p-6 text-white text-sm">
                    <h3 class="text-lg font-bold text-white mb-4">Posibles Tokens</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center"><span class="w-4 h-4 rounded bg-[#2B68F0] mr-3"></span> Primario (H2)<br> <small class="text-slate-400 ml-7">#2B68F0</small></li>
                        <hr class="border-slate-800">
                        <li class="flex items-center"><span class="w-4 h-4 rounded bg-[#10B981] mr-3"></span> Acento Verde<br> <small class="text-slate-400 ml-7">#10B981</small></li>
                        <li class="flex items-center"><span class="w-4 h-4 rounded bg-[#F02B6A] mr-3"></span> Acento Coral<br> <small class="text-slate-400 ml-7">#F02B6A</small></li>
                        <li class="flex items-center"><span class="w-4 h-4 rounded bg-[#4F46E5] mr-3"></span> Acento Índigo<br> <small class="text-slate-400 ml-7">#4F46E5</small></li>
                        <li class="flex items-center"><span class="w-4 h-4 rounded bg-[#F0AB2B] mr-3"></span> Ámbar (Compl.)<br> <small class="text-slate-400 ml-7">#F0AB2B</small></li>
                        <li class="flex items-center"><span class="w-4 h-4 rounded bg-[#F0612B] mr-3"></span> Naranja (Split)<br> <small class="text-slate-400 ml-7">#F0612B</small></li>
                        <hr class="border-slate-800">
                        <li class="flex items-center"><span class="w-4 h-4 rounded bg-[#0F172A] mr-3"></span> Texto / Botón Oscuro<br> <small class="text-slate-400 ml-7">#0F172A</small></li>
                        <li class="flex items-center"><span class="w-4 h-4 rounded border border-slate-600 bg-[#F8FAFC] mr-3"></span> Fondo General<br> <small class="text-slate-400 ml-7">#F8FAFC</small></li>
                    </ul>
                </div>

            </aside>
        </div>

        <!-- Full Palette Comparison -->
        <section class="bg-white rounded-3xl shadow-lg border border-slate-200/80 p-8 md:p-12 space-y-8">
            <h2 class="text-[1.875rem] font-bold leading-[1.2em] tracking-[-0.03em] text-[#2B68F0]">
                Paleta Completa: Roles por Elemento
            </h2>
            <p class="text-slate-700 leading-relaxed max-w-3xl">
                Propuesta de asignación de cada color a un rol específico en la interfaz, partiendo del azul base <code class="bg-slate-100 text-[#2B68F0] px-1.5 py-0.5 rounded text-sm">#2B68F0</code>.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">

                <!-- Role: Headings -->
                <div class="rounded-2xl border border-slate-200 overflow-hidden">
                    <div class="bg-[#2B68F0] px-5 py-3">
                        <span class="text-white text-xs font-semibold uppercase tracking-wider">H2 / Títulos principales</span>
                    </div>
                    <div class="p-5">
                        <h2 class="text-[1.875rem] font-bold leading-[1.2em] tracking-[-0.03em] text-[#2B68F0] mb-2">Producción Musical</h2>
                        <p class="text-sm text-slate-600">Color primario. Identidad de marca. HSL(221°, 87%, 55%)</p>
                        <code class="text-xs text-slate-500 mt-2 block">#2B68F0</code>
                    </div>
                </div>

                <!-- Role: CTA Primary (Amber) -->
                <div class="rounded-2xl border border-slate-200 overflow-hidden">
                    <div class="bg-[#F0AB2B] px-5 py-3">
                        <span class="text-slate-900 text-xs font-semibold uppercase tracking-wider">CTA Principal</span>
                    </div>
                    <div class="p-5">
                        <a href="#" class="inline-flex items-center justify-center px-6 py-3 rounded-full bg-[#F0AB2B] text-slate-900 font-semibold hover:bg-[#D99A1F] transition-colors shadow-md shadow-[#F0AB2B]/30 text-sm">
                            Reservar Clase Gratis
                        </a>
                        <p class="text-sm text-slate-600 mt-3">Complementario directo del azul. Máxima atención.</p>
                        <code class="text-xs text-slate-500 mt-2 block">#F0AB2B — Complementario (41°)</code>
                    </div>
                </div>

                <!-- Role: CTA Secondary (Coral) -->
                <div class="rounded-2xl border border-slate-200 overflow-hidden">
                    <div class="bg-[#F02B6A] px-5 py-3">
                        <span class="text-white text-xs font-semibold uppercase tracking-wider">CTA Secundario / Oferta</span>
                    </div>
                    <div class="p-5">
                        <a href="#" class="inline-flex items-center justify-center px-6 py-3 rounded-full bg-[#F02B6A] text-white font-semibold hover:bg-[#d91e5c] transition-colors shadow-md shadow-[#F02B6A]/30 text-sm">
                            Oferta Limitada
                        </a>
                        <p class="text-sm text-slate-600 mt-3">Triádico. Vibrante y creativo, para ofertas o acciones secundarias.</p>
                        <code class="text-xs text-slate-500 mt-2 block">#F02B6A — Triádico (341°)</code>
                    </div>
                </div>

                <!-- Role: Success / Confirmations -->
                <div class="rounded-2xl border border-slate-200 overflow-hidden">
                    <div class="bg-[#10B981] px-5 py-3">
                        <span class="text-white text-xs font-semibold uppercase tracking-wider">Éxito / Confirmación</span>
                    </div>
                    <div class="p-5">
                        <div class="flex items-center gap-2 text-[#10B981] font-semibold mb-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Reserva confirmada
                        </div>
                        <p class="text-sm text-slate-600">Funcional. Éxito, progreso, estados positivos.</p>
                        <code class="text-xs text-slate-500 mt-2 block">#10B981 — Verde Esmeralda</code>
                    </div>
                </div>

                <!-- Role: Info / Tags -->
                <div class="rounded-2xl border border-slate-200 overflow-hidden">
                    <div class="bg-[#06B6D4] px-5 py-3">
                        <span class="text-white text-xs font-semibold uppercase tracking-wider">Info / Etiquetas</span>
                    </div>
                    <div class="p-5">
                        <div class="flex gap-2 mb-3">
                            <span class="text-xs bg-[#06B6D4]/10 text-[#06B6D4] font-semibold px-3 py-1 rounded-full">VCV Rack</span>
                            <span class="text-xs bg-[#06B6D4]/10 text-[#06B6D4] font-semibold px-3 py-1 rounded-full">Síntesis</span>
                        </div>
                        <p class="text-sm text-slate-600">Análogo frío. Para etiquetas, badges, información secundaria.</p>
                        <code class="text-xs text-slate-500 mt-2 block">#06B6D4 — Cian (191°)</code>
                    </div>
                </div>

                <!-- Role: Premium / Creative -->
                <div class="rounded-2xl border border-slate-200 overflow-hidden">
                    <div class="bg-[#8B5CF6] px-5 py-3">
                        <span class="text-white text-xs font-semibold uppercase tracking-wider">Premium / Creativo</span>
                    </div>
                    <div class="p-5">
                        <div class="flex gap-2 mb-3">
                            <span class="text-xs bg-[#8B5CF6]/10 text-[#8B5CF6] font-semibold px-3 py-1 rounded-full border border-[#8B5CF6]/20">Pro</span>
                            <span class="text-xs bg-[#8B5CF6]/10 text-[#8B5CF6] font-semibold px-3 py-1 rounded-full border border-[#8B5CF6]/20">Avanzado</span>
                        </div>
                        <p class="text-sm text-slate-600">Análogo cálido. Para contenido premium, niveles avanzados.</p>
                        <code class="text-xs text-slate-500 mt-2 block">#8B5CF6 — Violeta (251°)</code>
                    </div>
                </div>

            </div>

            <!-- Harmony Visualization -->
            <div class="mt-8 pt-8 border-t border-slate-200">
                <h3 class="text-lg font-bold text-slate-800 mb-4">Armonía cromática en contexto</h3>
                <div class="bg-slate-50 rounded-2xl p-6 md:p-8 space-y-6">

                    <div class="max-w-2xl">
                        <h2 class="text-[1.875rem] font-bold leading-[1.2em] tracking-[-0.03em] text-[#2B68F0] mb-3">Aprende Producción Musical Desde Cero</h2>
                        <p class="text-slate-700 leading-relaxed mb-4">
                            Clases personalizadas de <span class="text-[#06B6D4] font-semibold">síntesis modular</span>,
                            <span class="text-[#8B5CF6] font-semibold">diseño sonoro avanzado</span> y producción con
                            <span class="text-[#2B68F0] font-semibold">Bitwig Studio</span>.
                            Más de <span class="text-[#10B981] font-semibold">200 alumnos</span> ya han transformado su sonido.
                        </p>
                        <div class="flex flex-wrap gap-3">
                            <a href="#" class="inline-flex items-center justify-center px-6 py-3 rounded-full bg-[#F0AB2B] text-slate-900 font-semibold hover:bg-[#D99A1F] transition-colors shadow-md shadow-[#F0AB2B]/30 text-sm">
                                Reservar Clase Gratis
                            </a>
                            <a href="#" class="inline-flex items-center justify-center px-6 py-3 rounded-full bg-[#0F172A] text-white font-semibold hover:bg-[#1e293b] transition-colors text-sm">
                                Ver Cursos
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>
</main>

<?php
get_footer();
