<?php get_template_part( 'partials/subpage','banner'); ?>
<div class="sub-background">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="post-detail">
                <?php if ( have_posts() ) :  ?>	
                	<?php while ( have_posts() ) : 
                        the_post(); ?>
                        <div class="archive-singular-wrap" id="singular-<?php the_ID(); ?>">
                            <?php get_template_part( 'partials/img','750x420'); ?>
                            <div>
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <?php get_template_part( 'partials/meta'); ?>
                                <?php if (nimbus_get_option('full-excerpt')=="2") { ?>
                                    <p class="excerpt"> <?php echo get_the_excerpt() ?></p>
                                    <p class="archive-link-button"><a href="<?php the_permalink(); ?>"><?php echo _e('Read More >>', 'nimbus_venture' ); ?></a></p>                       
                                <?php } else { ?>
                                    <div class="full-detail"><?php the_content(); ?></div> 
                                <?php } ?>
                            </div>
                        </div>
                	<?php endwhile; ?>
                <?php else: ?>
                <p><?php echo _e('No posts found.', 'venture-lite' ); ?></p>
                <?php endif; ?>
                </div>
            </div>
            <div class="col-sm-4 sidebar-primary">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>