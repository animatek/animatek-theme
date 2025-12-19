<?php
/**
 * Template part for displaying single posts (two-column hero).
 *
 * @package Animatek
 */

// Lectura estimada
$content      = get_post_field('post_content', get_the_ID());
$word_count   = str_word_count(wp_strip_all_tags($content));
$reading_time = max(1, ceil($word_count / 220)); // 220 palabras/min aprox

// Categorías (máx 2)
$categories = get_the_category();
$cat_palette = [
    'bg-primary/15 text-primary border-primary/30',
    'bg-amber-100 text-amber-900 border-amber-200',
    'bg-emerald-100 text-emerald-900 border-emerald-200',
    'bg-rose-100 text-rose-800 border-rose-200',
    'bg-cyan-100 text-cyan-900 border-cyan-200',
];
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('relative'); ?>>
    <div class="grid gap-6 lg:gap-8 lg:grid-cols-2 items-start">
        <div class="relative overflow-hidden rounded-3xl border border-slate-200/70 shadow-2xl bg-slate-900 h-[420px] md:h-[500px]">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large', [
                    'class'   => 'w-full h-full object-cover object-center block',
                    'loading' => 'eager',
                ]); ?>
            <?php else : ?>
                <div class="w-full h-full bg-gradient-to-br from-slate-800 via-slate-900 to-slate-800"></div>
            <?php endif; ?>
            <div class="absolute inset-0 bg-gradient-to-b from-black/25 via-black/45 to-black/70 pointer-events-none"></div>
        </div>

        <div class="bg-white rounded-3xl shadow-lg border border-slate-200/80 p-6 md:p-7 lg:p-8 space-y-4 h-full">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold leading-tight text-slate-900">
                <?php the_title(); ?>
            </h1>

            <?php if (!empty($categories)) : ?>
                <div class="flex flex-wrap gap-2">
                    <?php
                    $index = 0;
                    foreach (array_slice($categories, 0, 2) as $category) :
                        $palette_class = $cat_palette[$index % count($cat_palette)];
                        $index++;
                        ?>
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 text-xs font-semibold rounded-full border <?php echo esc_attr($palette_class); ?>">
                            <span aria-hidden="true">#</span><?php echo esc_html($category->name); ?>
                        </span>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <div class="flex flex-wrap items-center gap-3 text-sm text-slate-700">
                <div class="inline-flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="9"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7v5l3 2"/>
                    </svg>
                    <span><?php echo esc_html(get_the_date('d M Y')); ?></span>
                </div>
                <div class="inline-flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 7h8m-8 5h6m-6 5h4"/>
                        <circle cx="5" cy="7" r="1"/>
                    </svg>
                    <span><?php the_author(); ?></span>
                </div>
                <div class="inline-flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l3.5 2"/>
                        <circle cx="12" cy="12" r="9"/>
                    </svg>
                    <span><?php echo esc_html($reading_time); ?> min de lectura</span>
                </div>
            </div>

            <?php
            $tags = get_the_tags();
            if ($tags) :
                ?>
                <div class="pt-3 border-t border-slate-100 flex flex-wrap gap-2 text-xs">
                    <?php
                    $tag_palette = [
                        'bg-primary/10 text-primary border-primary/20',
                        'bg-amber-100 text-amber-800 border-amber-200',
                        'bg-emerald-100 text-emerald-800 border-emerald-200',
                        'bg-rose-100 text-rose-700 border-rose-200',
                        'bg-cyan-100 text-cyan-800 border-cyan-200',
                    ];
                    $index = 0;
                    foreach ($tags as $tag) :
                        $palette_class = $tag_palette[$index % count($tag_palette)];
                        $index++;
                        ?>
                        <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>"
                           class="inline-flex items-center gap-1 px-3 py-1 rounded-full border <?php echo esc_attr($palette_class); ?> font-semibold text-[11px] uppercase tracking-[0.16em] hover:opacity-90 transition">
                            #<?php echo esc_html($tag->name); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="mt-8">
        <div class="bg-white rounded-3xl shadow-lg border border-slate-200/80 p-6 md:p-8">
            <div class="post-content text-[15px] md:text-base text-slate-800 leading-relaxed space-y-6">
                <?php
                the_content();

                wp_link_pages([
                    'before' => '<div class="mt-6 text-sm text-slate-500">Páginas: ',
                    'after'  => '</div>',
                ]);
                ?>
            </div>
            <?php get_template_part('template-parts/block-explora'); ?>
        </div>

        
    </div>

    <nav class="mt-10 pb-6">
        <div class="grid gap-4 md:grid-cols-2">
            <div class="bg-white border border-slate-200 rounded-2xl shadow-sm p-4 hover:-translate-y-0.5 transition">
                <?php previous_post_link(
                    '<span class="block text-[11px] font-semibold uppercase tracking-[0.2em] text-slate-500 mb-1">Anterior</span><span class="block text-slate-800 hover:text-primary">%link</span>',
                    '%title'
                ); ?>
            </div>
            <div class="bg-white border border-slate-200 rounded-2xl shadow-sm p-4 hover:-translate-y-0.5 transition text-left md:text-right">
                <?php next_post_link(
                    '<span class="block text-[11px] font-semibold uppercase tracking-[0.2em] text-slate-500 mb-1">Siguiente</span><span class="block text-slate-800 hover:text-primary">%link</span>',
                    '%title'
                ); ?>
            </div>
        </div>
    </nav>
</article>
