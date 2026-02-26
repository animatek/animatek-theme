<?php
/**
 * Template Name: Librería Sonora
 *
 * Página que muestra la colección de patches y presets descargables de la Librería Sonora.
 *
 * Requiere:
 * - Categoría con slug: libreria-sonora
 * - Metacampos por post:
 *   - download_vcv
 *   - download_bitwig
 *   - download_grid
 *   - (opcional) tag_sonoro
 *
 * @package Animatek
 */

get_header();
?>

<main id="primary" class="bg-slate-950 text-slate-50">
    <section class="animatek-hero-section relative overflow-hidden px-6 sm:px-10 py-16 md:py-20" style="background-image: linear-gradient(135deg, rgba(15,23,42,0.95), rgba(8,47,73,0.78)), url('https://animatek.net/wp-content/uploads/2025/04/tekenelestudio.webp'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="absolute inset-0 opacity-35 pointer-events-none bg-[radial-gradient(circle_at_20%_30%,rgba(56,189,248,0.22),transparent_35%),radial-gradient(circle_at_80%_20%,rgba(14,165,233,0.18),transparent_30%),radial-gradient(circle_at_50%_80%,rgba(99,102,241,0.18),transparent_28%)]"></div>
        <div class="relative z-10 max-w-5xl mx-auto grid gap-8">
            <div class="space-y-6">
                <span class="inline-flex items-center gap-2 px-3 py-1 text-[11px] font-bold tracking-[0.18em] uppercase border border-white/20 rounded-full bg-white/10 backdrop-blur">
                    Librería sonora
                </span>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight text-white">
                    Patches & presets listos para disparar
                </h1>
                <p class="text-lg text-slate-200 leading-relaxed max-w-2xl">
                    Sonidos curados para VCV Rack, Bitwig Studio y The Grid. Descarga al instante y llévalos a tus sesiones, livesets y clases.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-slate-100 text-slate-900">
        <div class="max-w-6xl mx-auto px-6 py-12">
            <div class="flex flex-wrap items-center justify-center gap-2 mb-4">
                <button
                    type="button"
                    class="filter-btn is-active inline-flex items-center gap-2 rounded-full px-4 py-2 text-[11px] font-semibold uppercase tracking-[0.08em] border border-slate-300 transition-all duration-200 bg-white text-slate-900 shadow-lg"
                    data-filter="all"
                >
                    Todos
                </button>
                <button
                    type="button"
                    class="filter-btn inline-flex items-center gap-2 rounded-full px-4 py-2 text-[11px] font-semibold uppercase tracking-[0.08em] border transition-all duration-200 bg-white/70 text-slate-800 border-slate-200 hover:border-slate-300 hover:bg-white"
                    data-filter="vcv"
                >
                    VCV Rack
                </button>
                <button
                    type="button"
                    class="filter-btn inline-flex items-center gap-2 rounded-full px-4 py-2 text-[11px] font-semibold uppercase tracking-[0.08em] border transition-all duration-200 bg-white/70 text-slate-800 border-slate-200 hover:border-slate-300 hover:bg-white"
                    data-filter="bitwig"
                >
                    Bitwig
                </button>
                <button
                    type="button"
                    class="filter-btn inline-flex items-center gap-2 rounded-full px-4 py-2 text-[11px] font-semibold uppercase tracking-[0.08em] border transition-all duration-200 bg-white/70 text-slate-800 border-slate-200 hover:border-slate-300 hover:bg-white"
                    data-filter="grid"
                >
                    The Grid
                </button>
            </div>
            <div class="h-px w-full bg-gradient-to-r from-transparent via-slate-300 to-transparent mb-8"></div>

        <?php
        $libreria_query = new WP_Query(
            array(
                'post_type'      => 'post',
                'posts_per_page' => -1,
                'category_name'  => 'libreria-sonora',
                'orderby'        => 'date',
                'order'          => 'DESC',
            )
        );
        ?>

        <?php if ( $libreria_query->have_posts() ) : ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">

                <?php
                while ( $libreria_query->have_posts() ) :
                    $libreria_query->the_post();

                    $vcv        = get_post_meta( get_the_ID(), 'download_vcv', true );
                $bitwig     = get_post_meta( get_the_ID(), 'download_bitwig', true );
                $grid       = get_post_meta( get_the_ID(), 'download_grid', true );
                $tag_sonoro = get_post_meta( get_the_ID(), 'tag_sonoro', true );
                $like_count = function_exists( 'animatek_get_int_meta' ) ? animatek_get_int_meta( get_the_ID(), 'like_count' ) : (int) get_post_meta( get_the_ID(), 'like_count', true );
                $download_count = function_exists( 'animatek_get_int_meta' ) ? animatek_get_int_meta( get_the_ID(), 'download_count' ) : (int) get_post_meta( get_the_ID(), 'download_count', true );

                $types = array();
                if ( ! empty( $vcv ) ) {
                    $types[] = 'vcv';
                }
                    if ( ! empty( $bitwig ) ) {
                        $types[] = 'bitwig';
                    }
                    if ( ! empty( $grid ) ) {
                    $types[] = 'grid';
                }

                $data_types = implode( ' ', $types );
                $primary_format = '';
                $primary_download = '';

                if ( ! empty( $vcv ) ) {
                    $primary_format   = 'vcv';
                    $primary_download = $vcv;
                } elseif ( ! empty( $bitwig ) ) {
                    $primary_format   = 'bitwig';
                    $primary_download = $bitwig;
                } elseif ( ! empty( $grid ) ) {
                    $primary_format   = 'grid';
                    $primary_download = $grid;
                }

                $download_action = '';
                if ( ! empty( $primary_download ) ) {
                    $download_action = add_query_arg(
                        array(
                            'action'  => 'animatek_download',
                            'post_id' => get_the_ID(),
                            'format'  => $primary_format,
                        ),
                        admin_url( 'admin-post.php' )
                    );
                    if ( ! is_user_logged_in() ) {
                        $download_action = add_query_arg(
                            'redirect_to',
                            rawurlencode( $download_action ),
                            home_url( '/escritorio/' )
                        );
                    }
                }
                ?>

                <article
                    class="group relative flex flex-col h-full rounded-2xl border border-slate-200 bg-white p-4 shadow-sm hover:-translate-y-1 hover:shadow-lg hover:border-slate-300 transition-all duration-200"
                    data-types="<?php echo esc_attr( $data_types ); ?>"
                >
                    <?php
                    $bitwig_logo_url = 'https://animatek.net/wp-content/uploads/2025/11/pngwing.com_.png';
                    $logo_src        = '';
                    if ( ! empty( $bitwig ) ) {
                        $logo_src = $bitwig_logo_url;
                    } elseif ( has_post_thumbnail() ) {
                        $logo_src = get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' );
                    }
                    ?>

                    <div class="flex items-center gap-3">
                        <div class="flex-shrink-0 h-12 w-12 rounded-xl border border-slate-200 bg-slate-100 overflow-hidden flex items-center justify-center">
                            <?php if ( ! empty( $logo_src ) ) : ?>
                                <img src="<?php echo esc_url( $logo_src ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" class="h-full w-full object-contain">
                            <?php else : ?>
                                <div class="flex h-full w-full items-center justify-center text-slate-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12 18.5a6.5 6.5 0 1 0 0-13 6.5 6.5 0 0 0 0 13Z"/>
                                        <path d="M12 5.5v13"/>
                                        <path d="M5.5 12h13"/>
                                    </svg>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="flex-1 min-w-0">
                            <h2 class="text-sm font-semibold leading-snug text-slate-900 truncate group-hover:text-primary transition-colors">
                                <a href="<?php the_permalink(); ?>" class="block">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <p class="text-xs text-slate-500 mt-0.5 truncate">
                                <?php echo esc_html( get_the_date( 'd M Y' ) ); ?> · <?php echo esc_html( get_the_author() ); ?>
                            </p>
                            <p class="text-sm text-slate-600 mt-1 leading-relaxed" style="display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;">
                                <?php echo esc_html( wp_trim_words( get_the_excerpt(), 24 ) ); ?>
                            </p>
                        </div>
                    </div>

                    <div class="mt-auto flex items-center justify-between gap-3 pt-2">
                        <div class="flex flex-wrap items-center gap-2">
                            <?php if ( ! empty( $tag_sonoro ) ) : ?>
                                <span class="inline-flex items-center gap-1.5 px-2 py-1 rounded-full bg-slate-100 text-[10px] font-semibold uppercase tracking-[0.12em] text-slate-600 border border-slate-200">
                                    <?php echo esc_html( $tag_sonoro ); ?>
                                </span>
                            <?php endif; ?>
                            <?php if ( ! empty( $vcv ) ) : ?>
                                <span class="inline-flex items-center gap-1.5 px-2 py-1 rounded-full bg-cyan-50 border border-cyan-200 text-[10px] font-semibold uppercase tracking-[0.12em] text-cyan-700">
                                    VCV
                                </span>
                            <?php endif; ?>
                            <?php if ( ! empty( $bitwig ) ) : ?>
                                <span class="inline-flex items-center gap-1.5 px-2 py-1 rounded-full bg-orange-50 border border-orange-200 text-[10px] font-semibold uppercase tracking-[0.12em] text-orange-700">
                                    Bitwig
                                </span>
                            <?php endif; ?>
                            <?php if ( ! empty( $grid ) ) : ?>
                                <span class="inline-flex items-center gap-1.5 px-2 py-1 rounded-full bg-amber-50 border border-amber-200 text-[10px] font-semibold uppercase tracking-[0.12em] text-amber-700">
                                    Grid
                                </span>
                            <?php endif; ?>
                        </div>

                        <a
                            href="<?php echo esc_url( $download_action ?: '#' ); ?>"
                            class="inline-flex items-center justify-center gap-2 rounded-xl bg-primary text-white text-sm font-semibold px-3 py-2 shadow-sm hover:bg-primary/90 transition-colors shrink-0 <?php echo empty( $download_action ) ? 'opacity-50 cursor-not-allowed' : ''; ?>"
                            <?php echo ! empty( $primary_download ) ? 'data-download="1"' : 'aria-disabled="true"'; ?>
                        >
                            Descargar
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                        </a>
                    </div>

                    <div class="mt-4 flex items-center justify-between text-slate-500 text-sm">
                        <button
                            type="button"
                            class="animatek-like-btn inline-flex items-center gap-1.5 hover:text-primary transition-colors"
                            data-post-id="<?php echo esc_attr( get_the_ID() ); ?>"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.6l-1-1a5.5 5.5 0 0 0-7.8 7.8l1 1L12 21l7.8-7.6 1-1a5.5 5.5 0 0 0 0-7.8Z"/></svg>
                            <span class="like-count text-xs font-semibold"><?php echo esc_html( $like_count ); ?></span>
                        </button>
                        <div class="flex items-center gap-3 text-xs">
                            <span class="inline-flex items-center gap-1.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                                <span class="download-count font-semibold"><?php echo esc_html( $download_count ); ?></span>
                            </span>
                        </div>
                    </div>
                </article>

                <?php endwhile; ?>

            </div>
        <?php else : ?>

            <div class="flex flex-col items-center justify-center py-20 text-center">
                <p class="text-sm text-slate-500">No hay sonidos disponibles.</p>
            </div>

        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
        </div>
    </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.filter-btn');
    const items = document.querySelectorAll('[data-types]');
    const activeClasses = ['bg-white', 'text-slate-900', 'shadow-lg', 'border-slate-300'];
    const inactiveClasses = ['bg-white/70', 'text-slate-800', 'border-slate-200', 'hover:border-slate-300', 'hover:bg-white'];
    const likeButtons = document.querySelectorAll('.animatek-like-btn');
    const likeConfig = {
        ajaxUrl: '<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>',
        nonce: '<?php echo wp_create_nonce( 'animatek_like_nonce' ); ?>',
        loggedIn: <?php echo is_user_logged_in() ? 'true' : 'false'; ?>,
        loginUrl: '<?php echo esc_url( add_query_arg( 'redirect_to', rawurlencode( get_permalink() ), home_url( '/escritorio/' ) ) ); ?>'
    };

    if (buttons.length && items.length) {
        buttons.forEach(function (btn) {
            btn.addEventListener('click', function () {
                const filter = btn.getAttribute('data-filter');

                buttons.forEach(function (b) {
                    b.classList.remove('is-active', ...activeClasses);
                    b.classList.add(...inactiveClasses);
                });

                btn.classList.add('is-active', ...activeClasses);
                btn.classList.remove(...inactiveClasses);

                items.forEach(function (item) {
                    const typesAttr = item.getAttribute('data-types') || '';
                    const types = typesAttr.split(' ').filter(Boolean);

                    if (filter === 'all' || types.includes(filter)) {
                        item.classList.remove('hidden');
                        item.classList.add('flex');
                    } else {
                        item.classList.add('hidden');
                        item.classList.remove('flex');
                    }
                });
            });
        });
    }

    likeButtons.forEach(function (btn) {
        btn.addEventListener('click', function (event) {
            event.preventDefault();
            if (!likeConfig.loggedIn) {
                window.location.href = likeConfig.loginUrl;
                return;
            }

            if (btn.dataset.loading === '1') {
                return;
            }

            const postId = btn.getAttribute('data-post-id');
            if (!postId) return;

            btn.dataset.loading = '1';

            const body = new URLSearchParams({
                action: 'animatek_like',
                nonce: likeConfig.nonce,
                post_id: postId
            });

            fetch(likeConfig.ajaxUrl, {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body
            })
                .then(response => response.json())
                .then(data => {
                    if (data?.success && data.data?.count !== undefined) {
                        const countEl = btn.querySelector('.like-count');
                        if (countEl) {
                            countEl.textContent = data.data.count;
                        }
                        btn.classList.add('text-primary');
                    } else if (data?.data?.message) {
                        alert(data.data.message);
                    }
                })
                .catch(() => {
                    alert('No se pudo registrar el like. Inténtalo de nuevo.');
                })
                .finally(() => {
                    btn.dataset.loading = '0';
                });
        });
    });
});
</script>

<?php
get_footer();
