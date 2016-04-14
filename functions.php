<?php


function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 'child_theme_enqueue_scripts' );
// function child_theme_enqueue_scripts() {
//     wp_enqueue_script( 'extra js', get_stylesheet_directory() . '/js/extra.js' );
// // 	wp_enqueue_script('extra js');
// }


/***********************************
 * Create custom checkout button
 * 
 * ********************************/
// [button link="/shopping-cart/checkout" color="pink"] [icon name="icon_cursor_alt"]Checkout[/button]
function add_shopping_cart_button(){
?>
<button class="shopping-cart-button">
    <a href="/shopping-cart/checkout">
    
    Checkout
    
    </a>
</button>


<?php
}

add_shortcode ('cart-cta', 'add_shopping_cart_button' );

    



/***********************************
 * FOR DEVELOPMENT ONLY
 * 
 * ********************************/



function myscript() {
?>

<script type='text/javascript' id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:8082/browser-sync/browser-sync-client.2.11.1.js'><\/script>".replace("HOST", location.hostname));
//]]></script>

<?php
}
add_action('wp_footer', 'myscript');



/***********************************
 * FOR DEVELOPMENT ONLY
 * 
 * ********************************/

?>