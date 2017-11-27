<?php /* Template Name: Home Page */
    get_header();
?>

<?php 
    $tel = get_field('tel');
    $image = get_field('image');
?>

<section id="ext_menu-0" class="hidden-sm-down">
    <nav class="navbar navbar-dropdown navbar-fixed-top">
        <div class="container">
            <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                <div class="hamburger-icon"></div>
            </button>
            <?php the_field('menu_left'); ?>
            <ul class="nav-dropdown collapse pull-xs-left text-xs-center nav navbar-nav navbar-toggleable-sm col-sm-2 col-lg-4" id="exCollapsingNavbar1">
                <li class="nav-item"><img src="<?php the_field('logo');?>" alt=""></li>
            </ul>
            <?php $menu_right = str_replace( 'tel', $tel, get_field('menu_right') ); ?>
            <?php echo $menu_right; ?>
            <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                <div class="close-icon"></div>
            </button>
        </div>
    </nav>
</section>

<section id="ext_menu-0" class="hidden-md-up">
<nav class="navbar navbar-dropdown navbar-fixed-top">
    <div class="container">
        <div class="mbr-table">
            <div class="mbr-table-cell">
                <div class="navbar-brand">
                    <span class="navbar-logo"><img src="<?php the_field('logo');?>" alt=""></span>
                    <a href="tel:<?php echo phone_number_format( $tel ); ?>" class="navbar-caption"><?php echo $tel; ?></big></a>
                </div>
            </div>
        </div>
    </div>
</nav>
</section>


<section id="header-presentation">
    <div class="swiper-container">
        <div class="swiper-wrapper">
        <?php 
        $posts = get_posts( array(
            'post_type'      => 'sliders_block',
            'posts_per_page' => -1,
        ) );
        if ( $posts ) {
            foreach ( $posts as $post ) {
                setup_postdata( $post );
                
                $number = str_replace( array( 'slides/template-slide-', '.php' ), '', get_post_meta( $post->ID, '_wp_page_template', 1 ) );
                if ( $number ) {
                    get_template_part('slides/template-slide', $number);
                }
            }        
            wp_reset_postdata();
        }
        ?>
        </div>
    </div>
</section>

<?php 
$posts = get_posts( array(
    'post_type'      => 'section_lp',
    'posts_per_page' => -1,
) );
if ( $posts ) {
    foreach ( $posts as $post ) {
        setup_postdata( $post );
        
        $number = str_replace( array( 'template-parts/section-', '.php' ), '', get_post_meta( $post->ID, '_wp_page_template', 1 ) );
        if ( $number ) {
            get_template_part('template-parts/section', $number);
        }
    }        
    wp_reset_postdata();
}
?>

<?php get_footer(); ?>