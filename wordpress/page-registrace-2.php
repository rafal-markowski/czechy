<?php
/*
Template name: Registrace 2
*/ 
get_header(); ?>
    <section class="registrace">
        <div class="header">
            <div class="container">
                <h1 class="header__h1 tt-none">Registrace</h1>
            </div>
        </div>
        <div class="container py-5">
            <div class="text-center">
                <h2 class="mb-2 tt-none">Krok 2</h2>
            </div>
            <form class="my-5">
                <div class="form-group form-row">
                    <label class="col-lg-3 col-form-label" for="bank-number">Cislo uctu:</label>
                    <div class="col-lg-6">
                        <div class="form-row">
                            <div class="col-2">
                                <input type="text" class="form-control" name="bank-number" id="bank-number" required placeholder="0000">
                            </div>
                            -
                            <div class="col">
                                <input type="text" class="form-control" name="bank-number-2" id="bank-number-2" required placeholder="000000">
                            </div>
                            /
                            <div class="col-2">
                                <input type="text" class="form-control" name="bank-number" id="bank-number" required placeholder="0000">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-lg-3 col-form-label" for="surname">Jmeno majitele uctu:</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" name="surname-2" id="surname-2" required>
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-lg-3 col-form-label" for="evidence-number">Cislo obcanskeho prukazu:</label>
                    <div class="col-lg-6">
                        <input type="type" class="form-control" name="evidence-number" id="evidence-number" required>
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-lg-3 col-form-label" for="family">Rodzinny stav:</label>
                    <div class="col-lg-6">
                        <select type="text" class="form-control" name="family" id="family" required>
                            <option value="1">Vyberte...</option>
                        </select>
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-lg-3 col-form-label" for="main-adress">
                        Zadejte prosim adresu aktualniho mista trvaleho bydliste: 
                    </label>
                    <div class="col-lg-6">
                        <input type="type" class="form-control" name="main-adress" id="main-adress" required placeholder="ulice, cislo budowy / bytu">
                    </div>
                </div>
                <div class="form-group form-row">
                    <div class="col-lg-6 offset-lg-3">
                        <input type="type" class="form-control" name="main-adress-2" id="main-adress-2" required placeholder="kod, mesta">
                    </div>
                </div>
                <div class="form-group form-row">
                    <div class="col-lg-6 offset-lg-3">
                        <p class="ml-4">Dalsi postovni adresa</p>
                    </div>
                </div>
                <div class="form-group form-row">
                    <div class="col-lg-6 offset-lg-3">
                        <input type="type" class="form-control" name="other-adress" id="other-adress" required placeholder="ulice, cislo budowy / bytu">
                    </div>
                </div>
                <div class="form-group form-row">
                    <div class="col-lg-6 offset-lg-3">
                        <input type="type" class="form-control" name="other-adress-2" id="other-adress-2" required placeholder="kod, mesta">
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-lg-3 col-form-label" for="money">Prijem (Kc):</label>
                    <div class="col-lg-6">
                        <input type="type" class="form-control" name="money" id="money" required>
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-lg-3 col-form-label" for="code">Smerovaci cislo <span class="small">(PSC)</span>:</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" name="code" id="code" required>
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-lg-3 col-form-label" for="date-1">Obvykle datum Vaseho prijmu:</label>
                    <div class="col-lg-6">
                        <select type="text" class="form-control" name="date-1" id="date-1" required>
                            <option value="1">Vyberte...</option>
                        </select>
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-lg-3 col-form-label" for="work">Typ zamestnani:</label>
                    <div class="col-lg-6">
                        <select type="text" class="form-control" name="work" id="work" required>
                            <option value="1">Vyberte...</option>
                        </select>
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-lg-3 col-form-label" for="employers-name">Jmeno zamestnavatele:</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" name="employers-name" id="employers-name" required>
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-lg-3 col-form-label" for="finanse">Jine financni zavazky:</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" name="finanse" id="finanse" required>
                    </div>
                </div>
            </form>
        </div>
    </section>
<?php get_footer(); ?>