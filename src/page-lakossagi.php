<?php
/*

Template Name: Lakossági

*/

get_header();

?>

<main class="grid grid--main">
    <div id="bgImages">
        <div class="wrapper">
            <img src="<?php bloginfo('template_url') ?>/assets/img/img1.png" alt="" id="img1">
            <img src="<?php bloginfo('template_url') ?>/assets/img/img2.png" alt="" id="img2">
        </div>
    </div>
    <section id="content">
        <div class="text">
            <p>Ha elakadtál otthon, irodában, üzletben valami javításban, valami <u>elromlott, leromlott, koszos lett, kiömlött,</u> vagy <u>eldugult, leszakadt, szétesett,</u> keress minket, megnézzük, mit tehetünk.</p>
            <p>Nagy valószínűséggel meg tudjuk javítani, fel tudjuk újítani, ki tudjuk tisztítani, tudunk segíteni!</p>
            <p><small><a href="http://newsite.washember.hu/wp-content/uploads/2021/04/WE-web-discl-lak-2.pdf" target="blank">Adatvédelmi tájékoztató</a></small></p>
        </div>
    </section>
    <section id="form">
        <p>Írj, miben segíthetünk</p>
        <div id="thankyou">
            <p>Köszönjük az üzenetet, hamarosan jelentkezünk!</p>
            <div class="button" id="tyButton">Újat írok</div>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="11" title="Üzenet"]'); ?>
        <p><small>A munka felmérése megrendelés létrejötte esetén ingyenes, egyebekben kiszállási díjainkról tájékoztatást telefonos egyeztetés során adunk, melyet a kiszállásról szóló értesítő email-ben rögzítünk.</small></p>
    </section>
    <section id="contact">
        <p>Ha sürgős, <u>hívj</u>, és <u>repülünk</u></p>
        <p><a href="tel:<?php the_field('telefonszam', 'option'); ?>"><?php the_field('telefonszam', 'option'); ?></a></p>
        <div class="copyright">
            <p><small>A weboldal nem tárol cookie-kat.</small></p>
            <p><small>2020 &copy; Golem Holding</small></p>
        </div>
    </section>
</main>

<?php get_footer(); ?>