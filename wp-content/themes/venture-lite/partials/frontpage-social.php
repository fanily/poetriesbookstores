<?php if (nimbus_get_option('fp-social-toggle') == '1') { ?>
    <section id="<?php if (nimbus_get_option('fp-social-slug')=='') {echo "social";} else {echo nimbus_get_option('fp-social-slug');} ?>" class="frontpage-social">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php if (nimbus_get_option('fp-social-title') != '') { ?>
                        <div class="social-title h1"><?php echo nimbus_get_option('fp-social-title'); ?></div>
                    <?php } ?>
                    <?php if (nimbus_get_option('fp-social-sub-title') != '') { ?>
                        <div class="social-sub-title h4"><?php echo nimbus_get_option('fp-social-sub-title'); ?></div>
                    <?php } ?>
                    <div class="inline-center-wrapper">  
                    <?php if ( is_active_sidebar( 'frontpage-social-media' ) ) { ?>
                    	<?php dynamic_sidebar( 'frontpage-social-media' ); ?>
                    <?php } ?>
                    </div>
                </div> 
            </div>    
        </div>    
    </section> 
<?php } else if (nimbus_get_option('fp-social-toggle') == '3') {
    // Don't do anything
} else { ?>  
    <section id="<?php if (nimbus_get_option('fp-social-slug')=='') {echo "social";} else {echo nimbus_get_option('fp-social-slug');} ?>" class="frontpage-social">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="social-title h1"><?php echo _e('Connect With Us', 'venture-lite' ); ?></div>
                    <div class="social-sub-title h4"><?php echo _e('There are lots of ways to connect with us, and we want you to try them all!', 'venture-lite' ); ?></div>
                    <div class="inline-center-wrapper">  
                        <div data-sr="wait 0.2s, scale up 25%">
                            <a href="#"><i class="fa fa-bitbucket"></i><br><span class="social-item-title h5"><?php echo _e('BitBucket', 'venture-lite' ); ?></span><br><span class="social-item-sub-title h5"><?php echo _e('Follow our code.', 'venture-lite' ); ?></span></a>
                        </div>
                        <div data-sr="wait 0.2s, scale up 25%">
                            <a href="#"><i class="fa fa-twitter"></i><br><span class="social-item-title h5"><?php echo _e('Twitter', 'venture-lite' ); ?></span><br><span class="social-item-sub-title h5"><?php echo _e('Latest tweets.', 'venture-lite' ); ?></span></a>
                        </div>
                        <div data-sr="wait 0.2s, scale up 25%">
                            <a href="#"><i class="fa fa-facebook"></i><br><span class="social-item-title h5"><?php echo _e('Facebook', 'venture-lite' ); ?></span><br><span class="social-item-sub-title h5"><?php echo _e('Be our friend.', 'venture-lite' ); ?></span></a>
                        </div>
                        <div data-sr="wait 0.2s, scale up 25%">
                            <a href="#"><i class="fa fa-instagram"></i><br><span class="social-item-title h5"><?php echo _e('Instagram', 'venture-lite' ); ?></span><br><span class="social-item-sub-title h5"><?php echo _e('See our pics.', 'venture-lite' ); ?></span></a>
                        </div>
                        <div data-sr="wait 0.2s, scale up 25%">
                            <a href="#"><i class="fa fa-linkedin"></i><br><span class="social-item-title h5"><?php echo _e('Linkedin', 'venture-lite' ); ?></span><br><span class="social-item-sub-title h5"><?php echo _e('Let\'s network.', 'venture-lite' ); ?></span></a>
                        </div>
                    </div>
                </div> 
            </div>    
        </div>    
    </section> 
<?php } ?> 

