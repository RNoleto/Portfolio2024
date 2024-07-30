<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>

<?php endwhile; else: ?>

    <p><?php _e('Desculpe, nenhum post encontrado.'); ?></p>

<?php endif; ?>