<?php
/**
 * The template for displaying tag pages.
 *
 * @package Animatek
 */

get_header();

$tag = get_queried_object();
$tag_name = single_tag_title('', false);
$tag_description = tag_description();
?>

<main id="primary" class="bg-slate-200 text-slate-900 min-h-screen">
    <!-- Hero Section -->
    <section class="relative overflow-hidden mb-12 px-6 sm:px-10 py-10 sm:py-14 text-slate-50" style="background-image: linear-gradient(135deg, rgba(15,23,42,0.95), rgba(15,23,42,0.8)), url('https://animatek.net/wp-content/uploads/2025/05/Topagenda.webp'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="max-w-7xl mx-auto flex flex-col items-center text-center space-y-8">
            <div class="space-y-4">
                <span class="inline-flex items-center gap-2 px-3 py-1 text-xs font-bold tracking-[0.18em] uppercase border border-white/20 rounded-full bg-white/10">
                    <?php _e('Etiqueta', 'animatek'); ?>
                </span>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight text-white">
                    #<?php echo esc_html($tag_name); ?>
                </h1>
                <?php if ($tag_description): ?>
                    <div class="max-w-2xl mx-auto text-xl text-slate-300 leading-relaxed font-light">
                        <?php echo wp_kses_post($tag_description); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <div class="max-w-7xl mx-auto px-6 pb-24">
        <!-- Posts Grid -->
        <?php if (have_posts()): ?>
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
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                </svg>
                            </div>
                        <?php endif; ?>
                        
                        <div class="p-6 flex flex-col flex-1">
                            <div class="mb-2">
                                <time datetime="<?php echo get_the_date('c'); ?>" class="text-xs font-bold uppercase tracking-wider text-slate-500">
                                    <?php echo get_the_date(); ?>
                                </time>
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
                                    <?php _e('Por', 'animatek'); ?> <span class="text-slate-900"><?php the_author(); ?></span>
                                </span>
                                <a href="<?php the_permalink(); ?>" class="text-primary font-bold text-sm inline-flex items-center group">
                                    <?php _e('Leer más', 'animatek'); ?>
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
            <div class="bg-white rounded-3xl border border-slate-200 p-12 text-center space-y-4">
                <p class="text-slate-500 text-lg"><?php _e('No hay artículos con esta etiqueta todavía.', 'animatek'); ?></p>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php
get_footer();
