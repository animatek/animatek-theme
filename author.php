<?php
/**
 * The template for displaying author pages.
 *
 * @package Animatek
 */

get_header();

$author = get_queried_object();
$author_id = $author->ID;
$display_name = $author->display_name;
$first_name = get_the_author_meta('first_name', $author_id);
$last_name = get_the_author_meta('last_name', $author_id);
$description = get_the_author_meta('description', $author_id);
$website = get_the_author_meta('user_url', $author_id);
$avatar = get_avatar_url($author_id, ['size' => 200]);

// Title logic
$title = $display_name;
if ($first_name && $last_name) {
    $title = $first_name . ' ' . $last_name;
}
?>

<main id="primary" class="bg-slate-200 text-slate-900 min-h-screen">
    <!-- Hero Section -->
    <section class="relative overflow-hidden mb-12 px-6 sm:px-10 py-10 sm:py-14 text-slate-50"
        style="background-image: linear-gradient(135deg, rgba(15,23,42,0.95), rgba(15,23,42,0.8)), url('https://animatek.net/wp-content/uploads/2025/05/Topagenda.webp'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="max-w-7xl mx-auto flex flex-col items-center text-center space-y-8">
            <div class="relative">
                <div class="w-32 h-32 sm:w-40 sm:h-40 rounded-full border-4 border-white/20 overflow-hidden shadow-2xl">
                    <img src="<?php echo esc_url($avatar); ?>" alt="<?php echo esc_attr($display_name); ?>"
                        class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-2 -right-2 bg-primary text-white p-2 rounded-full shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>
            </div>

            <div class="space-y-4">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight text-white">
                    <?php echo esc_html($title); ?>
                </h1>
                <?php if ($website): ?>
                <a href="<?php echo esc_url($website); ?>" target="_blank" rel="nofollow"
                    class="text-blue-400 hover:text-blue-300 transition-colors flex items-center justify-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.828a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                    </svg>
                    <?php echo esc_url(str_replace(['http://', 'https://'], '', $website)); ?>
                </a>
                <?php
endif; ?>
            </div>
        </div>
    </section>

    <div class="max-w-7xl mx-auto px-6 pb-24 space-y-16">
        <!-- Biography Section -->
        <?php if ($description): ?>
        <section class="bg-white rounded-[1.75rem] border border-slate-200 shadow-sm overflow-hidden p-8 md:p-12">
            <div class="flex items-center gap-4 mb-8">
                <div class="w-12 h-12 rounded-full bg-primary/10 text-primary flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-slate-900">
                    <?php _e('Sobre', 'animatek'); ?>
                    <?php echo esc_html($first_name ?: $display_name); ?>
                </h2>
            </div>
            <div class="prose prose-slate max-w-none text-lg text-slate-700 leading-relaxed">
                <?php echo wpautop(esc_html($description)); ?>
            </div>
        </section>
        <?php
endif; ?>

        <!-- Courses Section (Tutor LMS) -->
        <?php
if (function_exists('tutor')):
    $course_post_type = tutor()->course_post_type;
    $courses_query = new WP_Query([
        'post_type' => $course_post_type,
        'post_status' => 'publish',
        'author' => $author_id,
        'posts_per_page' => -1
    ]);

    if ($courses_query->have_posts()):
?>
        <section class="space-y-8">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-full bg-primary/10 text-primary flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m3 9 9-4 9 4-9 4-9-4Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 13V9" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M7 12v5c0 .6.6 1.1 1.7 1.5 1.1.4 2.6.6 3.3.6.7 0 2.2-.2 3.3-.6 1.1-.4 1.7-.9 1.7-1.5v-5" />
                    </svg>
                </div>
                <h2 class="text-3xl font-bold text-slate-900">
                    <?php _e('Cursos impartidos', 'animatek'); ?>
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php while ($courses_query->have_posts()):
            $courses_query->the_post(); ?>
                <article
                    class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden flex flex-col hover:-translate-y-1 transition-transform duration-300">
                    <?php if (has_post_thumbnail()): ?>
                    <a href="<?php the_permalink(); ?>" class="block h-48 overflow-hidden">
                        <?php the_post_thumbnail('medium_large', ['class' => 'w-full h-full object-cover transition-transform duration-500 hover:scale-105']); ?>
                    </a>
                    <?php
            else: ?>
                    <div class="h-48 bg-slate-100 flex items-center justify-center text-slate-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <?php
            endif; ?>

                    <div class="p-6 flex flex-col flex-1">
                        <h3 class="text-xl font-bold text-slate-900 mb-3 leading-tight">
                            <a href="<?php the_permalink(); ?>" class="hover:text-primary transition-colors">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <div class="text-slate-600 text-sm mb-6 flex-1 line-clamp-3">
                            <?php echo get_the_excerpt(); ?>
                        </div>
                        <div class="mt-auto flex items-center justify-between">
                            <?php
            if (function_exists('tutor_utils')) {
                $course_id = get_the_ID();
                $price = tutor_utils()->get_course_price();
                if ($price) {
                    echo '<span class="text-primary font-bold">' . $price . '</span>';
                }
                else {
                    echo '<span class="text-emerald-600 font-bold">' . __('Gratis', 'animatek') . '</span>';
                }
            }
?>
                            <a href="<?php the_permalink(); ?>"
                                class="bg-slate-900 text-white px-4 py-2 rounded-xl text-sm font-bold hover:bg-primary transition-colors">
                                <?php _e('Ver curso', 'animatek'); ?>
                            </a>
                        </div>
                    </div>
                </article>
                <?php
        endwhile;
        wp_reset_postdata(); ?>
            </div>
        </section>
        <?php
    endif;
endif;
?>

        <!-- Posts Section -->
        <section class="space-y-8">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-full bg-primary/10 text-primary flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v10a2 2 0 01-2 2z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 2v6h6" />
                    </svg>
                </div>
                <h2 class="text-3xl font-bold text-slate-900">
                    <?php
printf(
    _n('Artículo publicado por %s', 'Artículos publicados por %s', count_user_posts($author_id), 'animatek'),
    esc_html($first_name ?: $display_name)
);
?>
                </h2>
            </div>

            <?php if (have_posts()): ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php while (have_posts()):
        the_post(); ?>
                <article
                    class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden flex flex-col hover:-translate-y-1 transition-transform duration-300">
                    <?php if (has_post_thumbnail()): ?>
                    <a href="<?php the_permalink(); ?>" class="block h-48 overflow-hidden">
                        <?php the_post_thumbnail('medium_large', ['class' => 'w-full h-full object-cover transition-transform duration-500 hover:scale-105']); ?>
                    </a>
                    <?php
        endif; ?>

                    <div class="p-6 flex flex-col flex-1">
                        <div class="mb-2">
                            <time datetime="<?php echo get_the_date('c'); ?>"
                                class="text-xs font-bold uppercase tracking-wider text-slate-500">
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
                        <a href="<?php the_permalink(); ?>"
                            class="text-primary font-bold text-sm inline-flex items-center group">
                            <?php _e('Leer más', 'animatek'); ?>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 ml-1 transition-transform group-hover:translate-x-1" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </article>
                <?php
    endwhile; ?>
            </div>

            <div class="mt-12">
                <?php TailPress\Pagination::render(); ?>
            </div>
            <?php
else: ?>
            <div class="bg-white rounded-3xl border border-slate-200 p-12 text-center space-y-4">
                <p class="text-slate-500 text-lg">
                    <?php _e('Este autor aún no ha publicado artículos.', 'animatek'); ?>
                </p>
            </div>
            <?php
endif; ?>
        </section>
    </div>
</main>

<?php
get_footer();