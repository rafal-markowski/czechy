<?php 
/*
Template Name: Registrace
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
                <h2 class="mb-2">registrace k nezavazne zadosti o uver</h2>
                <p>(Pokud jste jiz zaregistrovali drive, prihlaste se v pravem hornim roku stranky)</p>
            </div>
            <form class="my-5">
                <div class="form-group form-row">
                    <label class="col-lg-3 col-form-label" for="name">Jmeno:</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-lg-3 col-form-label" for="surname">Prijmeni:</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" name="surname" id="surname" required>
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-lg-3 col-form-label" for="birthday">Rodne cislo <span class="small">(bez lomitka)</span>:</label>
                    <div class="col-lg-6">
                        <input type="type" class="form-control" name="birthday" id="birthday" required>
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-lg-3 col-form-label" for="name">Email:</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-lg-3 col-form-label" for="number">
                        Cislo mobilniho telefonu: 
                    </label>
                    <div class="col-lg-6">
                        <div class="form-row">
                            <div class="col-3">
                                <input type="text" class="form-control" name="number" id="number" required>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control" name="number-2" id="number-2" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-lg-3 col-form-label" for="city">Mesto/obec:</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" name="city" id="city" required>
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-lg-3 col-form-label" for="category">Prijmova kategorie:</label>
                    <div class="col-lg-6">
                        <select type="text" class="form-control" name="category" id="category" required>
                            <option value="1">Vyberte...</option>
                        </select>
                    </div>
                </div>
                <div class="form-group form-row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="custom-control custom-checkbox mr-sm-2">
                            <input type="checkbox" class="custom-control-input" id="reg" name="reg">
                            <label class="purple-checkbox small" for="reg">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label>
                        </div>
                    </div>
                </div>
                <div class="form-group form-row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="custom-control custom-checkbox mr-sm-2">
                            <input type="checkbox" class="custom-control-input" id="reg2" name="reg2">
                            <label class="purple-checkbox small" for="reg2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label>
                        </div>
                    </div>
                </div>
                <div class="form-group form-row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="custom-control custom-checkbox mr-sm-2">
                            <input type="checkbox" class="custom-control-input" id="reg3" name="reg3">
                            <label class="purple-checkbox small" for="reg3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label>
                        </div>
                    </div>
                </div>
                <div class="form-group form-row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="custom-control custom-checkbox mr-sm-2">
                            <input type="checkbox" class="custom-control-input" id="reg4" name="reg4">
                            <label class="purple-checkbox small" for="reg4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-3 px-0">
                    <input type="submit" class="btn-submit" value="POKRACOVAT">
                </div>
            </form>
        </div>
    </section>
<?php get_footer(); ?>