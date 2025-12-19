<?php
/**
 * Theme footer template.
 *
 * @package Animatek
 */
?>
        </main>

        <?php do_action('tailpress_content_end'); ?>
    </div>

    <?php do_action('tailpress_content_after'); ?>

    <footer id="colophon" class="bg-slate-950 text-slate-400 border-t border-slate-900" role="contentinfo">
        <div class="container mx-auto px-4 py-12">
            <?php do_action('tailpress_footer'); ?>
            
            <div class="flex flex-col items-center space-y-8">
                
                <!-- Social Links -->
                <div class="flex flex-wrap justify-center gap-6">
                    <!-- YouTube -->
                    <a href="https://www.youtube.com/@animatek" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors duration-300" aria-label="YouTube">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </a>
                    
                    <!-- Instagram -->
                    <a href="https://www.instagram.com/animatek" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors duration-300" aria-label="Instagram">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 0 1 1.772 1.153 4.902 4.902 0 0 1 1.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 0 1-1.153 1.772 4.902 4.902 0 0 1-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 0 1-1.772-1.153 4.902 4.902 0 0 1-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 0 1 1.153-1.772A4.902 4.902 0 0 1 5.451 4.63c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 0 0-.748-1.15 3.098 3.098 0 0 0-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 1 1 0 10.27 5.135 5.135 0 0 1 0-10.27zm0 1.802a3.333 3.333 0 1 0 0 6.666 3.333 3.333 0 0 0 0-6.666zm5.338-3.205a1.2 1.2 0 1 1 0 2.4 1.2 1.2 0 0 1 0-2.4z" clip-rule="evenodd"/>
                        </svg>
                    </a>

                    <!-- Patreon -->
                    <a href="https://www.patreon.com/c/animatek" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors duration-300" aria-label="Patreon">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M15.386 6.226c-3.196 0-5.577 2.42-5.577 5.59 0 3.16 2.38 5.58 5.577 5.58 3.206 0 5.587-2.42 5.587-5.58 0-3.17-2.38-5.59-5.587-5.59zm-9.33 16.774H9.42V1.5H6.056v21.5z"/>
                        </svg>
                    </a>

                    <!-- Discord -->
                    <a href="https://discord.com/invite/emUkHRrvtk" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors duration-300" aria-label="Discord">
                         <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M20.317 4.37a19.791 19.791 0 0 0-4.885-1.515.074.074 0 0 0-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 0 0-5.487 0 12.64 12.64 0 0 0-.617-1.25.077.077 0 0 0-.079-.037A19.736 19.736 0 0 0 3.677 4.37a.07.07 0 0 0-.032.027C.533 9.046-.32 13.58.099 18.057a.082.082 0 0 0 .031.057 19.9 19.9 0 0 0 5.993 3.03.078.078 0 0 0 .084-.028 14.09 14.09 0 0 0 1.226-1.994.076.076 0 0 0-.041-.106 13.107 13.107 0 0 1-1.872-.892.077.077 0 0 1-.008-.128 10.2 10.2 0 0 0 .372-.292.074.074 0 0 1 .077-.01c3.928 1.793 8.18 1.793 12.062 0a.074.074 0 0 1 .078.01c.12.098.246.198.373.292a.077.077 0 0 1-.006.127 12.299 12.299 0 0 1-1.873.892.077.077 0 0 0-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 0 0 .084.028 19.839 19.839 0 0 0 6.002-3.03.077.077 0 0 0 .032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 0 0-.031-.03zM8.02 15.33c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.956-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.419 0 1.334-.956 2.419-2.157 2.419zm7.975 0c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.955-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.419 0 1.334-.946 2.419-2.157 2.419z"/>
                        </svg>
                    </a>

                    <!-- Bitwig Community (Mastodon) -->
                    <a href="https://social.bitwig.community/@animatek" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors duration-300" aria-label="Bitwig Community">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                             <path d="M23.268 5.313c-.35-2.578-2.617-4.61-5.304-5.004C17.51.242 15.792 0 11.813 0h-.03c-3.98 0-5.698.242-6.151.309C2.945.703.678 2.735.328 5.313.053 7.34 0 10.61 0 12.332c0 3.754.47 7.406 2.514 8.978 2.032 1.563 5.343 1.637 6.662 1.655 2.256.03 4.032-.36 4.032-.36l.025-1.92s-1.554.62-3.36.62c-2.206 0-2.699-1.16-2.802-2.19-.033-.336-.044-.655-.044-.655 4.296.98 9.595.525 11.72-2.854.729-1.16.985-2.49.985-5.274 0-1.722-.053-4.992-.328-7.019zM18.067 13.37h-2.45v-3.78c0-1.108-.42-1.63-1.262-1.63-.95 0-1.475.619-1.475 1.838v2.774h-2.519V9.798c0-1.219-.525-1.838-1.475-1.838-.842 0-1.262.522-1.262 1.63v3.78h-2.45V8.322c0-1.36.322-2.35 1.05-2.95.728-.602 1.71-.9 2.925-.9 1.058 0 1.94.322 2.646.98.706-.658 1.588-.98 2.646-.98 1.215 0 2.197.298 2.925.9.728.6 1.05 1.59 1.05 2.95v5.048z"/>
                        </svg>
                    </a>

                    <!-- GitHub -->
                    <a href="https://github.com/animatek" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors duration-300" aria-label="GitHub">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0 1 12 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0 0 22 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                </div>

                <!-- Legal Links -->
                <div class="flex flex-wrap justify-center gap-6 text-sm font-medium">
                    <a href="/politica-privacidad/" class="hover:text-white transition-colors duration-300">Política de Privacidad</a>
                    <a href="/condiciones-y-contratacion/" class="hover:text-white transition-colors duration-300">Condiciones y Contratación</a>
                    <a href="/reembolso_devoluciones/" class="hover:text-white transition-colors duration-300">Reembolso y Devoluciones</a>
                </div>

                <!-- Copyright -->
                <div class="text-xs text-slate-500 text-center">
                    &copy; <?php echo esc_html(date_i18n('Y')); ?> <?php bloginfo('name'); ?>. Todos los derechos reservados.
                </div>
            </div>
        </div>
    </footer>
</div>

<?php wp_footer(); ?>
</body>
</html>
