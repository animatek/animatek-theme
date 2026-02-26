<?php
/**
 * The template for displaying search results pages.
 *
 * @package Animatek
 */

get_header();

$search_query = get_search_query();
?>

<main id="primary" class="bg-slate-200 text-slate-900 min-h-screen">
    <!-- Hero Section -->
    <section class="relative overflow-hidden mb-12 px-6 sm:px-10 py-10 sm:py-14 text-slate-50" style="background-image: linear-gradient(135deg, rgba(15,23,42,0.95), rgba(15,23,42,0.8)), url('https://animatek.net/wp-content/uploads/2025/05/Topagenda.webp'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="max-w-7xl mx-auto flex flex-col items-center text-center space-y-8">
            <div class="space-y-4">
                <span class="inline-flex items-center gap-2 px-3 py-1 text-xs font-bold tracking-[0.18em] uppercase border border-white/20 rounded-full bg-white/10">
                    <?php _e('Resultados de búsqueda', 'animatek'); ?>
                </span>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight text-white">
                    <?php printf(esc_html__('Buscando: %s', 'animatek'), '<span>' . esc_html($search_query) . '</span>'); ?>
                </h1>
                <div class="max-w-md mx-auto mt-8">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </section>

    <div class="max-w-7xl mx-auto px-6 pb-24">
        <?php if (have_posts()): ?>
            <div class="flex items-center gap-4 mb-12">
                <div class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-slate-800">
                    <?php 
                    global $wp_query;
                    printf( 
                        _n( 'Hemos encontrado %d resultado', 'Hemos encontrado %d resultados', $wp_query->found_posts, 'animatek' ), 
                        $wp_query->found_posts 
                    ); 
                    ?>
                </h2>
            </div>

            <!-- Posts Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php while (have_posts()): the_post(); ?>
                    <article class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden flex flex-col hover:-translate-y-1 transition-transform duration-300">
                        <?php if (has_post_thumbnail()): ?>
                            <a href="<?php the_permalink(); ?>" class="block h-48 overflow-hidden">
                                <?php the_post_thumbnail('medium_large', ['class' => 'w-full h-full object-cover transition-transform duration-500 hover:scale-105']); ?>
                            </a>
                        <?php else: ?>
                            <div class="h-48 bg-slate-100 flex items-center justify-center text-slate-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                        <?php endif; ?>
                        
                        <div class="p-6 flex flex-col flex-1">
                            <div class="mb-2">
                                <span class="text-xs font-bold uppercase tracking-wider text-primary">
                                    <?php 
                                    $post_type = get_post_type_object(get_post_type());
                                    echo esc_html($post_type->labels->singular_name);
                                    ?>
                                </span>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3 leading-tight">
                                <a href="<?php the_permalink(); ?>" class="hover:text-primary transition-colors">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <div class="text-slate-600 text-sm mb-6 flex-1 line-clamp-3">
                                <?php echo get_the_excerpt(); ?>
                            </div>
                            <div class="mt-auto pt-4 border-t border-slate-50 flex items-center justify-between">
                                <span class="text-xs font-medium text-slate-500">
                                    <?php echo get_the_date(); ?>
                                </span>
                                <a href="<?php the_permalink(); ?>" class="text-primary font-bold text-sm inline-flex items-center group">
                                    <?php _e('Ver más', 'animatek'); ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            
            <div class="mt-12">
                <?php TailPress\Pagination::render(); ?>
            </div>
        <?php else: ?>
            <div class="bg-white rounded-3xl border border-slate-200 p-16 text-center space-y-8 max-w-2xl mx-auto">
                <div class="w-24 h-24 bg-slate-50 rounded-full flex items-center justify-center mx-auto text-slate-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <div class="space-y-2">
                    <h2 class="text-2xl font-bold text-slate-900"><?php _e('No hemos encontrado nada', 'animatek'); ?></h2>
                    <p class="text-slate-500 text-lg"><?php _e('Intenta buscar con otras palabras o revisa las categorías de la web.', 'animatek'); ?></p>
                </div>
                <div class="max-w-md mx-auto pt-4">
                    <?php get_search_form(); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php
get_footer();
