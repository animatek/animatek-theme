<?php

get_header();
?>

<main id="primary" class="bg-slate-200 text-slate-900">
    <section class="animatek-hero-section relative overflow-hidden px-6 sm:px-10 py-12 sm:py-14 text-slate-50 mb-6 sm:mb-8" style="background-image: linear-gradient(135deg, rgba(15,23,42,0.88), rgba(15,23,42,0.65)), url('https://animatek.net/wp-content/uploads/2025/05/Bono_hora.webp'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="max-w-5xl mx-auto text-center relative z-10 space-y-5">
            <div class="inline-flex items-center gap-2 px-4 py-2 text-xs font-bold tracking-[0.2em] uppercase border border-white/20 rounded-full bg-white/10 text-white shadow-sm backdrop-blur-sm">
                Blog
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight text-white tracking-tight">
                Artículos, directos y procesos
            </h1>
            <p class="text-lg sm:text-xl text-slate-200 leading-relaxed max-w-3xl mx-auto">
                Bitácora sonora: producción musical en Linux, Bitwig, VCV Rack, directos técnicos y aprendizajes que puedes aplicar ya.
            </p>
        </div>
    </section>

    <section id="articulos" class="max-w-6xl mx-auto px-6 pt-6 lg:pt-8 pb-12 lg:pb-14 mb-10 lg:mb-12">
        <?php
        // Paginación correcta (maneja /blog/page/2, etc.)
        $paged = max(
            1,
            get_query_var('paged') ? get_query_var('paged') : 0,
            get_query_var('page') ? get_query_var('page') : 0
        );

        $libreria_cat = get_category_by_slug('libreria-sonora');
        $exclude_cat  = $libreria_cat ? [$libreria_cat->term_id] : [];

        $query_args = [
            'post_type'      => 'post',
            'posts_per_page' => 3,
            'paged'          => $paged,
        ];

        if ( ! empty( $exclude_cat ) ) {
            $query_args['category__not_in'] = $exclude_cat;
        }

        $blog_query = new WP_Query( $query_args );

        if ($blog_query->have_posts()) : ?>
            <div class="grid gap-6 md:gap-7 lg:gap-8 md:grid-cols-3 mt-4">
                <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                    <article <?php post_class('group flex flex-col rounded-xl border border-slate-200 bg-white overflow-hidden shadow-sm hover:-translate-y-1 hover:shadow-lg transition'); ?>>
                        <div class="relative h-44 md:h-48 overflow-hidden">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>" class="block h-full">
                                    <?php the_post_thumbnail('medium_large', [
                                        'class'   => 'w-full h-full object-cover transition-transform duration-500 group-hover:scale-105',
                                        'loading' => 'lazy',
                                    ]); ?>
                                </a>
                            <?php else : ?>
                                <div class="h-full w-full bg-gradient-to-br from-primary/10 via-slate-100 to-cyan-100 flex items-center justify-between px-5">
                                    <div class="text-left">
                                        <p class="text-xs uppercase tracking-[0.18em] text-primary font-semibold">Sin imagen</p>
                                        <p class="text-sm text-slate-700">Contenido técnico y procesos.</p>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-primary/70" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 7h14M5 12h9m-9 5h14"/>
                                    </svg>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="flex-1 flex flex-col p-5">
                            <div class="mb-3 flex items-center justify-between gap-3 text-[11px] font-semibold uppercase tracking-[0.18em] text-slate-500">
                                <?php
                                $categories = get_the_category();
                                if (!empty($categories)) :
                                    $cat_palette = [
                                        'bg-primary/10 text-primary border-primary/20',
                                        'bg-amber-100 text-amber-800 border-amber-200',
                                        'bg-emerald-100 text-emerald-800 border-emerald-200',
                                        'bg-rose-100 text-rose-700 border-rose-200',
                                        'bg-cyan-100 text-cyan-800 border-cyan-200',
                                    ];
                                    ?>
                                    <div class="flex flex-wrap gap-2">
                                        <?php
                                        $index = 0;
                                        foreach (array_slice($categories, 0, 2) as $category) :
                                            $palette_class = $cat_palette[$index % count($cat_palette)];
                                            $index++;
                                            ?>
                                            <span class="inline-flex items-center gap-1.5 px-3 py-1 text-[10px] font-semibold rounded-full border <?php echo esc_attr($palette_class); ?>">
                                                <span aria-hidden="true">#</span>
                                                <?php echo esc_html($category->name); ?>
                                            </span>
                                        <?php endforeach; ?>
                                    </div>
                                <?php else : ?>
                                    <span>Artículo</span>
                                <?php endif; ?>
                                <time datetime="<?php echo esc_attr(get_the_date('c')); ?>" class="text-[11px] uppercase tracking-[0.18em] text-slate-500">
                                    <?php echo esc_html(get_the_date('d M Y')); ?>
                                </time>
                            </div>

                            <h2 class="mt-2 text-xl font-extrabold text-slate-900">
                                <a href="<?php the_permalink(); ?>" class="line-clamp-2 !no-underline text-slate-900">
                                    <?php the_title(); ?>
                                </a>
                            </h2>

                            <p class="mt-3 text-sm text-slate-600 line-clamp-3">
                                <?php echo wp_kses_post(get_the_excerpt()); ?>
                            </p>

                            <div class="mt-auto pt-4">
                                <a href="<?php the_permalink(); ?>" class="btn-primary text-sm !no-underline">
                                    Leer más
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-7-7 7 7-7 7"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <?php
            $pagination = paginate_links([
                'base'      => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                'format'    => '?paged=%#%',
                'current'   => max(1, $paged),
                'total'     => $blog_query->max_num_pages,
                'prev_text' => '← Anterior',
                'next_text' => 'Siguiente →',
                'type'      => 'array',
            ]);

            if (!empty($pagination)) : ?>
                <nav class="mt-10 mb-8 md:mb-10 flex justify-center">
                    <ul class="flex flex-wrap items-center gap-2">
                        <?php foreach ($pagination as $page_link) :
                            $is_current = strpos($page_link, 'current') !== false;
                            $is_dots    = strpos($page_link, 'dots') !== false;
                            $link_classes = 'inline-flex items-center px-4 py-2 rounded-full text-sm font-semibold border transition';

                            if ($is_current) {
                                $link_classes .= ' bg-primary text-white border-primary';
                            } elseif ($is_dots) {
                                $link_classes .= ' border-transparent text-slate-400';
                            } else {
                                $link_classes .= ' bg-white border-slate-200 text-slate-700 hover:border-primary hover:text-primary';
                            }

                            $styled_link = str_replace('page-numbers', 'page-numbers ' . $link_classes, $page_link);
                            ?>
                            <li><?php echo $styled_link; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            <?php endif; ?>


        <?php else : ?>
            <div class="text-center py-20">
                <p class="text-sm text-slate-600">
                    Aún no hay artículos publicados. En cuanto subas el primero, aparecerá aquí.
                </p>
            </div>
        <?php endif;

        wp_reset_postdata();
        ?>
    </section>
</main>

<?php
get_footer();
