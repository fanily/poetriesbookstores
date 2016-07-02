<?php get_header(); ?>
<?php if (is_paged()) {
    get_template_part( 'partials/loop');
} else { ?>
    <?php get_template_part( 'partials/frontpage','banner'); ?>
    <?php get_template_part( 'partials/frontpage','featured'); ?>
    <?php get_template_part( 'partials/frontpage','action1'); ?>
    <?php get_template_part( 'partials/frontpage','about'); ?>
    <?php get_template_part( 'partials/frontpage','action2'); ?>
    <?php get_template_part( 'partials/frontpage','team'); ?>
    <?php get_template_part( 'partials/frontpage','social'); ?>
    <?php get_template_part( 'partials/frontpage','test'); ?>
    <?php get_template_part( 'partials/frontpage','news'); ?>
<?php } ?>
<?php get_footer(); ?>
