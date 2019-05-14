<?php 
/*
    Theme name: Strona główna
*/
get_header();?>
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <form class="hero__form mt-3 mt-lg-0">
                        <div class="form-group">
                            <p class="hero__p">
                                Vyberte castku uveru 
                                <span class="big">
                                    <span id="r1-value">2000</span>
                                    sk
                                </span>
                            </p>
                            <input id="r1" type="range" class="hero__range" min="0" max="4000" value="2000" step="100">
                            <div class="row small">
                                <div class="col">0</div>
                                <div class="col text-center">2000</div>
                                <div class="col text-right">4000</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <p class="hero__p">
                                Zvolte cas splaceni 
                                <span class="big">
                                    <span id="r2-value">16</span>
                                    m-cy
                                </span>
                            </p>
                            <input id="r2" type="range" class="hero__range" min="0" max="32" step="1" value="16">
                            <div class="row small">
                                <div class="col">0</div>
                                <div class="col text-center">16</div>
                                <div class="col text-right">32</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn-submit" value="ODESLÁNÍ APLIKACE">
                        </div>
                        <p class="very-small">Curabitur rutrum nibh felis, at condimentum purus luctus id. Vestibulum eu euismod neque. Suspendisse ultricies sed libero id venenatis. Donec aliquam lobortis eleifend. Vestibulum at interdum enim. Fusce volutpat commodo urna. Nulla egestas laoreet pharetra. Integer ac dictum dui. Quisque varius lectus quis metus dictum accumsan.</p>
                    </form>
                </div>
                <div class="col-lg-7 order-first order-lg-last">
                    <div class="row">
                        <div class="col-lg-6">
                            <h1 class="tt-none mb-0">Najlepsi transparentni rychla</h1>
                            <h2 class="tt-none">pujcka online</h2> 
                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipiscing elit Cras consectetur. Donec et ex et augue.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="row">
                <div class="services__item col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <img class="services__photo" src="<?php echo get_template_directory_uri(); ?>/assets/images/service_1.png" alt="">
                    <h2 class="services__h2">půjčka do 100.000 kč<br>na cokoliv</h2>
                    <p class="services__p small">Quis nostrud exercitation ullam Exceptuipisci velit, sed quia non numquambore et dolore</p>
                </div>
                <div class="services__item col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <img class="services__photo" src="<?php echo get_template_directory_uri(); ?>/assets/images/service_2.png" alt="">
                    <h2 class="services__h2">rychlé schválení<br>žádosti</h2>
                    <p class="services__p small">Quis nostrud exercitation ullam Exceptuipisci velit, sed quia non numquambore et dolore</p>
                </div>
                <div class="services__item col-lg-3 col-md-6 mb-4 mb-md-0">
                    <img class="services__photo" src="<?php echo get_template_directory_uri(); ?>/assets/images/service_3.png" alt="">
                    <h2 class="services__h2">možnost předčasného<br>splacení</h2>
                    <p class="services__p small">Quis nostrud exercitation ullam Exceptuipisci velit, sed quia non numquambore et dolore</p>
                </div>
                <div class="services__item col-lg-3 col-md-6">
                    <img class="services__photo" src="<?php echo get_template_directory_uri(); ?>/assets/images/service_4.png" alt="">
                    <h2 class="services__h2">nezávazna žádost<br>z pohodlí domova</h2>
                    <p class="services__p small">Quis nostrud exercitation ullam Exceptuipisci velit, sed quia non numquambore et dolore</p>
                </div>
            </div>
        </div>
    </section>

    <section class="reference">
        <div class="container">
            <h2 class="reference__h2">Reference</h2>
            <div id="reference-carousel" class="reference__slider carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="reference__photo col-lg-6 px-0">
                                <a class="reference__arrow reference__arrow--prev" href="#reference-carousel" role="button"  data-slide="prev">
                                    <span class="reference__icon carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="reference__arrow reference__arrow--next" href="#reference-carousel" role="button"  data-slide="next">
                                    <span class="reference__icon carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <div class="reference__content col-lg-6">
                                <p class="reference__p small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis quam tincidunt, pulvinar nisi accumsan, faucibus ante. Curabitur tempus accumsan mi sed viverra. Integer dignissim fermentum lectus, at imperdiet turpis varius vitae. Suspendisse potenti.</p>
                                <h3 class="reference__h3">Rychlacek Sincopki</h3>
                                <span class="reference__span">ucitel z prahy</span>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="reference__photo col-lg-6 px-0">
                                <a class="reference__arrow reference__arrow--prev" href="#reference-carousel" role="button"  data-slide="prev">
                                    <span class="reference__icon carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="reference__arrow reference__arrow--next" href="#reference-carousel" role="button"  data-slide="next">
                                    <span class="reference__icon carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <div class="reference__content col-lg-6">
                                <p class="reference__p small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis quam tincidunt, pulvinar nisi accumsan, faucibus ante. Curabitur tempus accumsan mi sed viverra. Integer dignissim fermentum lectus, at imperdiet turpis varius vitae. Suspendisse potenti.</p>
                                <h3 class="reference__h3">Rychlacek Sincopki</h3>
                                <span class="reference__span">ucitel z prahy</span>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="reference__photo col-lg-6 px-0">
                                <a class="reference__arrow reference__arrow--prev" href="#reference-carousel" role="button"  data-slide="prev">
                                    <span class="reference__icon carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="reference__arrow reference__arrow--next" href="#reference-carousel" role="button"  data-slide="next">
                                    <span class="reference__icon carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <div class="reference__content col-lg-6">
                                <p class="reference__p small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis quam tincidunt, pulvinar nisi accumsan, faucibus ante. Curabitur tempus accumsan mi sed viverra. Integer dignissim fermentum lectus, at imperdiet turpis varius vitae. Suspendisse potenti.</p>
                                <h3 class="reference__h3">Rychlacek Sincopki</h3>
                                <span class="reference__span">ucitel z prahy</span>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="reference__arrow reference__arrow--global-prev" href="#reference-carousel" role="button"  data-slide="prev">
                    <span class="reference__icon carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="reference__arrow reference__arrow--global-next" href="#reference-carousel" role="button"  data-slide="next">
                    <span class="reference__icon carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
<?php get_footer(); ?>