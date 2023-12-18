<?php
/**
* Theme Header
* This is the template that displays all of the <head> section and everything up until <div id="content">
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
* @package Best_Shop
* DOCTYPE hook 
* @hooked best_shop_doctype
*/
do_action( 'best_shop_doctype' );
?>
<head itemscope itemtype="https://schema.org/WebSite">
<?php 
    /**
     * Before wp_head
     * 
     * @hooked best_shop_head
    */
    do_action( 'best_shop_before_wp_head' );
	wp_head(); 
    ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">
<?php wp_body_open();
    /**
     * Before Header 
     * @hooked best_shop_page_start 
     */
    do_action( 'best_shop_before_header' );
    
    
    /*
     *
     */
    do_action( 'best_shop_header_content' ); 
    
    
    /*
	 *  @hooked best_shop_primary_page_header - 10
	 */
do_action( 'best_shop_before_posts_content' );