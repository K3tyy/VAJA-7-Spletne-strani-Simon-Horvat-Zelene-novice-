<?php ob_start() ?>

<style>
/* lokalni stil za ta jumbotron (lahko preseliš v globalni CSS) */
.hero {
    background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e');
    background-size: cover;
    background-position: center;
    height: 420px;              /* višina jumbotrona: prilagodi po potrebi */
    border-radius: 8px;
    position: relative;
    overflow: hidden;
}

/* centeriran container znotraj heroja (ima padding iz bootstrap containera) */
.hero .hero-inner {
    position: relative;
    z-index: 2;
    padding-top: 40px;          /* navpični offset, da je naslov višje */
}

/* črn prosojen trak za naslov - skoraj cela širina, centriran */
.hero .title-bar {
    display: block;
    background: rgba(0,0,0,0.60);  /* črno z 72% opaciteto */
    color: #fff;
    padding: 18px 24px;
    max-width: calc(100%);  /* pusti levo/desno rob v heroju; prilagodi po potrebi */
    border-radius: 4px;
    margin-bottom: 12px;
}

/* naslov znotraj traku - velik in debel */
.hero .title-bar h1 {
    margin: 0;
    font-size: 3.2rem; /* prilagodi velikost glede na širino okna */
    line-height: 1;
    font-weight: 700;
}

/* podnaslov brez ozadja, bel tekst pod trakom */
.hero .subtitle {
    color: #ffffff;
    font-size: 1.125rem;
    margin-top: 8px;
    text-shadow: 0 1px 2px rgba(0,0,0,0.5);
}

/* gumb spodaj levo */
.hero .hero-cta {
    margin-top: 18px;
}

/* da se trak lepo prilagaja na majhnih ekranih */
@media (max-width: 768px) {
    .hero { height: 360px; }
    .hero .title-bar h1 { font-size: 2rem; }
    .hero .title-bar { max-width: calc(100% - 40px); padding: 12px; }
}
</style>

<div class="hero">
    <div class="container hero-inner">
        <!-- title bar: celoten trak skoraj čez sliko -->
        <div class="title-bar">
            <h1 class="mb-0">Očistimo Slovenijo</h1>
        </div>

        <!-- podnaslov (brez ozadja) -->
        <p class="subtitle">
            Akcija Očistimo Slovenijo bo letos potekala že desetič zapored.
        </p>

        <!-- gumb -->
        <p class="hero-cta">
            <a class="btn btn-primary btn-lg" href="#" role="button">Več</a>
        </p>
    </div>
</div>

<?php $content = ob_get_clean() ?>