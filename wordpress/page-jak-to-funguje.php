<?php 
/*
    Theme name: Jak to funguje
*/
get_header('secondary'); ?>
   <section class="jak-to-funguje">
        <div class="header">
            <div class="container">
                <h1 class="header__h1">Jak to funguje</h1>
            </div>
        </div>
        <div class="container py-5">
            <div class="row jak-to-funguje__item">
                <div class="col-lg-4 jak-to-funguje__circle jak-to-funguje__line">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/jak-to-funguje_1.png" alt="" class="jak-to-funguje__img">
                </div>
                <div class="col-lg-6 jak-to-funguje__content">
                    <h2 class="jak-to-funguje__h2">Ve dvou vyplnte registracni formular.</h2>
                    <p class="small">Zde zdajte Vase jmeno, rodne cislo, emailovou adresu, cislo mobilniho telefonu a dalsi doplnujici informace</p>
                    <p class="small">Po takto uspnesne registraci v dalsim kroku ptvrdte Vami zwolencu vysl a trvani pujcky</p>
                    <h2 class="jak-to-funguje__h2">Vase zadost bude vyrizena v co nejkratsi mozne dobe.</h2>
                    <p class="small">Vase prihlasovaci udaje pro pristup do uzivatelske zony Vam byly odeslany na Vas email a mobilni telefon</p>
                </div>
            </div>
            <div class="row jak-to-funguje__item">
                <div class="col-lg-4 jak-to-funguje__circle jak-to-funguje__line">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/jak-to-funguje_2.png" alt="" class="jak-to-funguje__img">
                </div>
                <div class="col-lg-6 jak-to-funguje__content">
                    <h2 class="jak-to-funguje__h2">V nastroji pro vyber v uzivatelske zone, vyberte pozadovanou vysi a delku pujcky.</h2>
                    <p class="small">Minimalni castka je 10.000 Kc a maxmalni 100.000 Kc. Minimalni doba je 12 mesicu a maximalni doba je 48 mesicu.</p>
                    <p class="small">Pote kliknete na tiacitko CHCI PUJCKU.</p>
                </div>
            </div>
            <div class="row jak-to-funguje__item">
                <div class="col-lg-4 jak-to-funguje__circle">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/jak-to-funguje_3.png" alt="" class="jak-to-funguje__img">
                </div>
                <div class="col-lg-6 jak-to-funguje__content jak-to-funguje__content--auto">
                    <p class="small">V pripade kladne vyrizeni Vasi zadosti Vas budeme kontaktoval a obdrzite informace nutne k podpisu smlouvy. Smlouva Vam bude dorucena postou nebo nasim kurynem</p>
                    <h2 class="jak-to-funguje__h2">Po podpisu smlouvy Vam budou penize neprodlene prevedeny na Vas bankovni ucet.</h2>
                    <p class="small">Informaci o prevodu penez na Vas ucet obdrzite pomoci SMS zprawy a e-mailu.</p>
                    <p class="small">Uz se jen ujstete, ze jste obdrzeli pozadovanou castku na Vas bankovni ucet.</p>
                </div>
            </div>
        </div>
    </section>
<?php get_footer('secondary'); ?>