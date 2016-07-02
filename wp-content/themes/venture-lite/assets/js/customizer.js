jQuery(document).ready(function() {
    jQuery('.wp-full-overlay-sidebar-content').prepend('<a href="https://docs.google.com/document/d/1tEeN3BO20Pm6e10ALkUKaolEnJfVGGHxloTdRrg5uPA/" class="customizer-header-button button button-venture-lite-secondary" target="_blank">View User Guide</a>');
	jQuery('.wp-full-overlay-sidebar-content').prepend('<a href="http://www.nimbusthemes.com/wordpress-themes/venture/" class="customizer-header-button button button-primary button-nimbus" target="_blank">Get Venture Pro</a>');
    jQuery( ".customize-panel-back,.customize-section-back" ).click(function() {
        jQuery( ".customizer-header-button" ).removeClass( "venture-lite-hide" );
        jQuery(".wp-full-overlay-sidebar-content").css("padding-top","0px");
    });
    jQuery( ".accordion-section-title,.control-panel .customize-section-back" ).click(function() {
        jQuery( ".customizer-header-button" ).addClass( "venture-lite-hide" );
        jQuery(".wp-full-overlay-sidebar-content").css("padding-top","100px");
    });
});
