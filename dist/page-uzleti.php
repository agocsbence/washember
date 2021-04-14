<?php
/*

Template Name: Üzleti

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
            <div class="overflow-scroll" style="max-height: 600px;">
                <p><u>Üzletek, éttermek, irodák, társasházak</u> számára nyugodt, költséghatékony és tervezhető jövőt kínálunk, amennyiben hozzáértő, számlaképes és az elvégzett munkákra garanciát vállaló csapatunkkal dolgoznak együtt.</p>

                <div class="mobile-only" id="viewMoreBtn" onclick="viewMore.classList.toggle('hidden');"><u>...</u></div>
                
                <div id="viewMore" class="hidden">
                    <p>Önök is tapasztalhatják, hogy jelenleg Budapesten szakember hiány van. Egyes területeken heteket, akár hónapokat is várni kell minőségi szolgáltatást nyújtó és megfelelően árazott szakemberre. Kisebb karbantartási munkákra egyre
                    nehezebb gyors segítséget kapni, generál kivitelezési és épület-gépészeti munkáknál akár több hónapos várakozásra is
                    fel kell készülni.</p>
                    <p>Cégünk, a Washember és társa kft. professzionálisan képzett és irányított csapatával megoldást jelent Önöknek akár
                    eseti, prioritást igénylő feladatok elvégzése, akár hosszabb távú, szerződéses keretek között történő együttműködés
                    esetén.</p>
                    <p>Kompetenciáink, kollégáink:</p>
                    <p>Tisztítás-technológiai és takarítási munkák, legyen szó akár lépcsőház takarításról, padlástér veszélyes hulladék
                    kezeléséről, vagy fertőtlenítő takarításról.</p>
                    <p>Karbantartó kollégáink hozzáértéssel és több év tapasztalattal felszerelkezve oldanak meg hétköznapi problémákat,
                    meghibásodásokat.</p>
                    <p>Ipari alpinos kollégáink rövid határidővel elérhetőek ereszcsatorna tisztításra, homlokzati veszélymentesítésre,
                    cserépigazításra, régi antennák leszerelésére, és galamb-mentesítésre is.</p>
                    <p>A takarítási szolgáltatás mellett kertrendezést, kertészeti munkákat is vállalunk.</p>
                    <p>Partnercégeink bevonásával akár épület-gépészeti, villamossági és generál kivitelezési projektekben is
                    segítségükre lehetünk.</p>
                    <p>Hosszabb távú szerződéses keretek között történő együttműködés esetén jelentős árkedvezményt tudunk
                    biztosítani ügyfeleink részére.</p>
                    <p>Hívja a Washembert! Megbízható - Gyors - Precíz! Válassza Ön is a hosszútávú biztonságot!</p>
                </div>
            </div>
            <p class="policy"><small><a href="http://newsite.washember.hu/wp-content/uploads/2021/04/WE-web-discl-B2B-3.pdf" target="blank">Adatvédelmi tájékoztató</a></small></p>
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
        <p><a href="tel:<?php the_field('telefonszam_uzleti', 'option'); ?>"><?php the_field('telefonszam_uzleti', 'option'); ?></a></p>
        <div class="copyright">
            <p><small>A weboldal nem tárol cookie-kat.</small></p>
            <p><small>2021 &copy; Golem Holding</small></p>
        </div>
    </section>
</main>

<?php get_footer(); ?>