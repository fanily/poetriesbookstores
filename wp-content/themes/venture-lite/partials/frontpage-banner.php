<?php if (nimbus_get_option('fp-banner-toggle') == '1') { ?>
    <section class="frontpage-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <?php if (nimbus_get_option('fp-banner-title') != '') { ?>
                        <div class="banner-title"><?php echo nimbus_get_option('fp-banner-title'); ?></div>
                    <?php } ?>
                    <?php if (nimbus_get_option('fp-banner-sub-title') != '') { ?>
                        <div class="banner-sub-title"><?php echo nimbus_get_option('fp-banner-sub-title'); ?></div>
                    <?php } ?>
                    <?php if (nimbus_get_option('fp-banner-button-url') != '') { ?>
                        <div class="banner-link-button"><a href="<?php echo nimbus_get_option('fp-banner-button-url'); ?>"><?php echo nimbus_get_option('fp-banner-button-text'); ?></a></div>
                    <?php } ?>
                </div> 
            </div>    
        </div>    
    </section>  
<?php } else if (nimbus_get_option('fp-banner-toggle') == '3') { ?>
    <section class="frontpage-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                        <div class="banner-title"><?php echo _e('Slideshow', 'venture-lite' ); ?></div>
                    <div class="banner-sub-title"><?php echo _e('This feature is availible to PRO theme users.', 'venture-lite' ); ?></div>
                    <div class="banner-link-button"><a href="http://www.nimbusthemes.com/wordpress-themes/venture/"><?php echo _e('Learn More', 'venture-lite' ); ?></a></div>
                </div> 
            </div>    
        </div>    
    </section> 
<?php } else { ?>     
    <section class="frontpage-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                        <div class="banner-title"><?php echo _e('Venture Theme', 'venture-lite' ); ?></div>
                    <div class="banner-sub-title"><?php echo _e('The ultimate free theme for WordPress!', 'venture-lite' ); ?></div>
                    <div class="banner-link-button"><a href="http://www.nimbusthemes.com/free/venture/"><?php echo _e('Learn More', 'venture-lite' ); ?></a></div>
                </div> 
            </div>    
        </div>    
    </section> 
<?php } ?> 