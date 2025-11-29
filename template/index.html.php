<?php ob_start(); ?>

<style>
.hero {
    background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e');
    background-size: cover;
    background-position: center;
    height: 420px;
    border-radius: 8px;
    position: relative;
    overflow: hidden;
}

.hero .hero-inner {
    position: relative;
    z-index: 2;
    padding-top: 40px;
}

.hero .title-bar {
    display: block;
    background: rgba(0,0,0,0.60);
    color: #fff;
    padding: 18px 24px;
    max-width: 100%;
    border-radius: 4px;
    margin-bottom: 12px;
}

.hero .title-bar h1 {
    margin: 0;
    font-size: 3.2rem;
    font-weight: 700;
}

.hero .subtitle {
    color: #ffffff;
    font-size: 1.125rem;
    margin-top: 8px;
    text-shadow: 0 1px 2px rgba(0,0,0,0.5);
}

.hero .hero-cta {
    margin-top: 18px;
}

@media (max-width: 768px) {
    .hero {
        height: 360px;
    }

    .hero .title-bar h1 {
        font-size: 2rem;
    }

    .hero .title-bar {
        padding: 12px;
        max-width: calc(100% - 40px);
    }
}
</style>

<div class="hero">
    <div class="container hero-inner">

        <div class="title-bar">
            <h1 class="mb-0">Očistimo Slovenijo</h1>
        </div>

        <p class="subtitle">
            Akcija Očistimo Slovenijo bo letos potekala že desetič zapored.
        </p>

        <p class="hero-cta">
            <a class="btn btn-primary btn-lg" href="#" role="button">Več</a>
        </p>

    </div>
</div>

<?php $content = ob_get_clean(); ?>
