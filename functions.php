<?php

if (is_file(__DIR__.'/vendor/autoload_packages.php')) {
    require_once __DIR__.'/vendor/autoload_packages.php';
}

function tailpress(): TailPress\Framework\Theme
{
    return TailPress\Framework\Theme::instance()
        ->assets(fn($manager) => $manager
            ->withCompiler(new TailPress\Framework\Assets\ViteCompiler, fn($compiler) => $compiler
                ->registerAsset('resources/css/app.css', ['animatek-inter'])
                ->registerAsset('resources/js/app.js')
                ->editorStyleFile('resources/css/editor-style.css')
            )
            ->enqueueAssets()
        )
        ->features(fn($manager) => $manager->add(TailPress\Framework\Features\MenuOptions::class))
        ->menus(fn($manager) => $manager->add('primary', __( 'Primary Menu', 'animatek')))
        ->themeSupport(fn($manager) => $manager->add([
            'title-tag',
            'custom-logo',
            'post-thumbnails',
            'align-wide',
            'wp-block-styles',
            'responsive-embeds',
            'html5' => [
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            ]
        ]));
}

tailpress();


//Tutorlms
/*
add_action( 'wp_enqueue_scripts', function() {
    wp_dequeue_style('tutor'); 
    wp_dequeue_style('tutor-frontend'); 
    wp_dequeue_style('tutor-course'); 
    wp_dequeue_style('tutor-dashboard'); 
    wp_dequeue_style('tutor-woocommerce'); 
}, 20);
*/






function animatek_enqueue_assets(): void
{
    $font_handle = 'animatek-inter';
    $font_url = 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap';

    wp_enqueue_style($font_handle, $font_url, [], null);

    // Evita cargar el JS/CSS dos veces si TailPress ya los encoló.
    $tailpress_handle = 'tailpress-app';
    if (
        wp_script_is($tailpress_handle, 'enqueued')
        || wp_script_is($tailpress_handle, 'to_enqueue')
        || wp_script_is($tailpress_handle, 'registered')
    ) {
        return;
    }

    $manifest_path = get_theme_file_path('dist/.vite/manifest.json');
    if (file_exists($manifest_path)) {
        $manifest = json_decode(file_get_contents($manifest_path), true);

        $css_file = $manifest['resources/css/app.css']['file'] ?? null;
        $js_file  = $manifest['resources/js/app.js']['file'] ?? null;

        if ($css_file && !wp_style_is('tailpress-app', 'enqueued')) {
            wp_enqueue_style('animatek-main', get_theme_file_uri('dist/'.$css_file), [$font_handle], null);
        }

        if ($js_file && !wp_script_is('tailpress-app', 'enqueued')) {
            wp_enqueue_script('animatek-main', get_theme_file_uri('dist/'.$js_file), [], null, true);
        }
    }
}

// Se ejecuta después de TailPress (que usa prioridad 10) para detectar si ya encoló los assets.
add_action('wp_enqueue_scripts', 'animatek_enqueue_assets', 20);

add_action('after_setup_theme', function () {
    load_theme_textdomain('animatek', get_template_directory() . '/languages');
});

// Reemplaza el texto del ítem "Cuenta" por un icono accesible en el menú primario.
add_filter('walker_nav_menu_start_el', function ($item_output, $item, $depth, $args) {
    if (!isset($args->theme_location) || $args->theme_location !== 'primary') {
        return $item_output;
    }

    $title = isset($item->title) ? trim(strtolower($item->title)) : '';
    if ($title !== 'cuenta') {
        return $item_output;
    }

    $icon = '<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">'
        . '<circle cx="12" cy="8" r="4" stroke-linecap="round" stroke-linejoin="round" />'
        . '<path d="M5 20c1-3 4-5 7-5s6 2 7 5" stroke-linecap="round" stroke-linejoin="round" />'
        . '</svg>';

    return preg_replace(
        '/>([^<]*)<\/a>/',
        '>' . $icon . '<span class="sr-only">Cuenta</span></a>',
        $item_output,
        1
    );
}, 10, 4);

// Fallback mínimo para asegurar el toggle del menú móvil incluso si los assets no cargan.
add_action('wp_footer', function () {
    ?>
    <script>
        (function () {
            if (window.animatekMenuInit) {
                return;
            }

            window.animatekMenuInit = function () {
                var nav = document.getElementById('primary-navigation');
                var toggle = document.getElementById('primary-menu-toggle');

                if (!nav || !toggle) {
                    return;
                }

                // Clone the button to remove any existing event listeners (from app.js or others)
                // This ensures we have a clean slate and prevents double-toggling or conflicts.
                var newToggle = toggle.cloneNode(true);
                toggle.parentNode.replaceChild(newToggle, toggle);
                toggle = newToggle;

                toggle.dataset.menuBound = 'true';

                var mq = window.matchMedia('(min-width: 782px)');

                var applyState = function (isOpen) {
                    if (isOpen) {
                        nav.classList.remove('hidden');
                        nav.style.display = 'flex';
                        nav.style.flexDirection = 'column';
                        toggle.setAttribute('aria-expanded', 'true');
                    } else {
                        nav.classList.add('hidden');
                        nav.style.display = 'none';
                        toggle.setAttribute('aria-expanded', 'false');
                    }
                };

                var sync = function () {
                    if (mq.matches) {
                        nav.classList.remove('hidden');
                        nav.style.display = '';
                        nav.style.flexDirection = '';
                        toggle.setAttribute('aria-expanded', 'true');
                        return;
                    }

                    applyState(!nav.classList.contains('hidden'));
                };

                var onClick = function (event) {
                    event.preventDefault();
                    var isHidden = nav.classList.contains('hidden');
                    applyState(isHidden);
                };

                toggle.setAttribute('aria-controls', 'primary-navigation');
                
                toggle.addEventListener('click', onClick);
                mq.addEventListener('change', sync);
                sync();
            };

            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', window.animatekMenuInit, { once: true });
            } else {
                window.animatekMenuInit();
            }
        })();
    </script>
    <?php
}, 30);

/**
 * Helpers for likes/descargas en Librería Sonora.
 */
function animatek_get_int_meta($post_id, $key): int
{
    $value = get_post_meta($post_id, $key, true);
    return $value !== '' ? (int) $value : 0;
}

/**
 * AJAX like (solo usuarios logueados).
 */
function animatek_handle_like(): void
{
    if (!is_user_logged_in()) {
        wp_send_json_error(['message' => __('Debes iniciar sesión para dar like.', 'animatek')], 401);
    }

    check_ajax_referer('animatek_like_nonce', 'nonce');

    $post_id = isset($_POST['post_id']) ? absint($_POST['post_id']) : 0;
    if (!$post_id || get_post_type($post_id) !== 'post') {
        wp_send_json_error(['message' => __('Publicación no válida.', 'animatek')], 400);
    }

    $user_id      = get_current_user_id();
    $liked_posts  = get_user_meta($user_id, 'animatek_liked_posts', true);
    $liked_posts  = is_array($liked_posts) ? $liked_posts : [];

    if (in_array($post_id, $liked_posts, true)) {
        $count = animatek_get_int_meta($post_id, 'like_count');
        wp_send_json_success(['count' => $count, 'message' => __('Ya te gusta este post.', 'animatek')]);
    }

    $liked_posts[] = $post_id;
    update_user_meta($user_id, 'animatek_liked_posts', $liked_posts);

    $count = animatek_get_int_meta($post_id, 'like_count') + 1;
    update_post_meta($post_id, 'like_count', $count);

    wp_send_json_success(['count' => $count]);
}
add_action('wp_ajax_animatek_like', 'animatek_handle_like');

/**
 * Descarga protegida: requiere login, suma contador y redirige al recurso.
 */
function animatek_handle_download(): void
{
    $post_id = isset($_GET['post_id']) ? absint($_GET['post_id']) : 0;
    $format_param = isset($_GET['format']) ? sanitize_text_field(wp_unslash($_GET['format'])) : '';
    $self_link = add_query_arg(
        [
            'action'  => 'animatek_download',
            'post_id' => $post_id,
            'format'  => $format_param,
        ],
        admin_url('admin-post.php')
    );

    if (!$post_id || get_post_type($post_id) !== 'post') {
        wp_safe_redirect(home_url());
        exit;
    }

    $vcv          = get_post_meta($post_id, 'download_vcv', true);
    $bitwig       = get_post_meta($post_id, 'download_bitwig', true);
    $grid         = get_post_meta($post_id, 'download_grid', true);

    $download_url = '';
    if ($format_param === 'vcv' && !empty($vcv)) {
        $download_url = $vcv;
    } elseif ($format_param === 'bitwig' && !empty($bitwig)) {
        $download_url = $bitwig;
    } elseif ($format_param === 'grid' && !empty($grid)) {
        $download_url = $grid;
    } elseif (!empty($vcv)) {
        $download_url = $vcv;
    } elseif (!empty($bitwig)) {
        $download_url = $bitwig;
    } elseif (!empty($grid)) {
        $download_url = $grid;
    }

    if (!is_user_logged_in()) {
        $login_url = add_query_arg(
            'redirect_to',
            rawurlencode($self_link),
            home_url('/escritorio/')
        );
        wp_safe_redirect($login_url);
        exit;
    }

    if (empty($download_url)) {
        wp_safe_redirect(get_permalink($post_id));
        exit;
    }

    $download_count = animatek_get_int_meta($post_id, 'download_count') + 1;
    update_post_meta($post_id, 'download_count', $download_count);

    // Permit redirecciones a hosts externos (p.ej. Google Drive/S3) para entregar el archivo.
    wp_redirect($download_url);
    exit;
}
add_action('admin_post_animatek_download', 'animatek_handle_download');
add_action('admin_post_nopriv_animatek_download', 'animatek_handle_download');
