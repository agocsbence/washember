<?php
/*

Template Name: Main Page

*/

get_header();

?>

<main class="" id="home-page-content">
    <div onclick="location.href = '<?php echo get_permalink(11); ?>';" id="lakossagi" class="circle">
        <p><strong>lakossági</strong></p>
        <p><strong><a href="tel:<?php the_field('telefonszam_lakossagi', 'option'); ?>"><?php the_field('telefonszam_lakossagi', 'option'); ?></a></strong></p>
    </div>
    <div onclick="location.href = '<?php echo get_permalink(9); ?>';" id="uzleti" class="circle">
        <p><strong>üzleti</strong></p>
        <p><strong><a href="tel:<?php the_field('telefonszam_uzleti', 'option'); ?>"><?php the_field('telefonszam_uzleti', 'option'); ?></a></strong></p>
    </div>
</main>

<?php get_footer(); ?>