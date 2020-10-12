<?php
/*

Template Name: Main Page

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
            <p>Velünk jobb lesz!</p>
            <p>Ha elakadtál otthon, irodában, üzletben valami javításban, valami <u>elromlott, leromlott, koszos lett, kiömlött,</u> vagy <u>eldugult, leszakadt, szétesett,</u> keress minket, megnézzük, mit tehetünk.</p>
            <p>Nagy valószínűséggel meg tudjuk javítani, fel tudjuk újítani, ki tudjuk tisztítani, tudunk segíteni!</p>
        </div>
    </section>
    <section id="form">
        <p>Írj, miben segíthetünk</p>
        <form action="">
            <input type="text" placeholder="Név">
            <input type="email" placeholder="Email cím">
            <textarea name="message" id="message" cols="15" rows="10" placeholder="Üzenet"></textarea>
            <input type="submit" value="Küldés">
        </form>
    </section>
    <section id="contact">
        <p>Ha sürgős, <u>hívj</u>, és <u>repülünk</u></p>
        <p><a href="tel:+36201234567">+36 20 999 6686</a></p>
        <div class="copyright">
            <p><small>Oldalunk óriási fejlesztés előtt áll.</small></p>
            <p><small>2020 &copy; Golem Holding</small></p>
        </div>
    </section>
</main>