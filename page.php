<?php
/**
 * Default page template.
 *
 * @package Animatek
 */

get_header();
?>

<main class="min-h-screen bg-slate-50 pt-16 pb-10 md:pt-20 md:pb-16">
    <div class="max-w-6xl mx-auto px-4 md:px-6">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class('relative space-y-6'); ?>>
                    <div class="bg-white rounded-3xl shadow-lg border border-slate-200/80 p-6 md:p-7 lg:p-8 space-y-3">
                        <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold leading-tight text-slate-900">
                            <?php the_title(); ?>
                        </h1>
                        <?php if (has_excerpt()) : ?>
                            <p class="text-base text-slate-600 leading-relaxed">
                                <?php echo wp_kses_post(get_the_excerpt()); ?>
                            </p>
                        <?php endif; ?>
                    </div>

                    <div class="bg-white rounded-3xl shadow-lg border border-slate-200/80 p-6 md:p-7 lg:p-8">
                        <div class="page-content text-[15px] md:text-base text-slate-800 leading-relaxed space-y-6">
                            <?php
                            the_content();

                            wp_link_pages([
                                'before' => '<div class="mt-6 text-sm text-slate-500">Páginas: ',
                                'after'  => '</div>',
                            ]);
                            ?>
                        </div>
                    </div>
                </article>

            <?php endwhile; ?>
        <?php endif; ?>
    </div>

   

</main>

<?php
get_footer();
