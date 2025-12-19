<?php
/**
 * Single post template file.
 *
 * @package Animatek
 */

get_header();
?>

<main class="min-h-screen bg-slate-50 pt-16 pb-10 md:pt-20 md:pb-16">
    <div class="max-w-6xl mx-auto px-4 md:px-6">
        <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>
           
                <?php get_template_part('template-parts/content', 'single'); ?>
                
            <?php endwhile; ?>
        <?php endif; ?>
        
    </div>


    


</main>

<?php
get_footer();
