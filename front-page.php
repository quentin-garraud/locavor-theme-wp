<?php get_header(); ?>

<section class="hero-section">
    <h1 class="hero-section__title">Votre producteur local en ligne.</h1>
    <p class="hero-section__paragraph">
        Vous avez toujours révé de commander vos fruits et légumes sur internet
        ? Et bien en 2021 c'est chose faite. Retrouvez votre maraîcher préféré
        en ligne. C'est une première mondiale à découvrir dès maintenant sur la boutique en ligne.
    </p>
    <div class="hero-section__button-wrapper">
        <a href="<?php echo home_url(
          "/"
        ); ?>boutique/" class="button button-light">Découvrir</a>
    </div>
</section>
<section class="about-section">
      <div class="content-side">
        <h2 class="content-side__heading">A propos de nous</h2>
        <p class="content-side__paragraph">
            Créé et lancé en 2021 par un "ageekulteur", un agriculteur geek, Locavor est un petit commerce de ventre en ligne de fruit et légume "click & collect", permettant aux acheteurs d'acheter leurs produits directement depuis le site internet.
        </p>
        <p class="content-side__paragraph">
            Ce projet est fictif, il est réalisé dans le cadre du projet e-commerce avec le cesi de Bordeaux. 
        </p>
        <div class="content-side__key-figure">
          <div class="content-side__key-figure-item">
            <h3 class="content-side__key-figure-item__heading">+50</h3>
            <p class="content-side__key-figure-item__paragraph">
              Client satisfait
            </p>
          </div>
          <div class="content-side__key-figure-item">
            <h3 class="content-side__key-figure-item__heading">+250</h3>
            <p class="content-side__key-figure-item__paragraph">
              KG de fruit et légumes vendu
            </p>
          </div>
          <div class="content-side__key-figure-item">
            <h3 class="content-side__key-figure-item__heading">90</h3>
            <p class="content-side__key-figure-item__paragraph">
              % de produit vendues
            </p>
          </div>
        </div>
      </div>
    <div class="content-side__image">
    <img
        src="<?php echo get_template_directory_uri(); ?>/assets/img/about-image.png"
        alt="Section A Propos - Image Jardin potager"
        title="Section A Propos - Image Jardin potager"
    />
    </div>
</section>
<section class="shop-section">
      <h2 class="shop-section__heading">La boutique</h2>
      <div class="shop-section__items">
        <div class="shop-section__item">
          <img
            class="shop-section__item__image"
            src="./images/pomme-de-terre.png"
            alt="Image de produit - Pomme de terre"
            title="Image de produit - Pomme de terre"
          />
          <h3 class="shop-section__item__product">Pomme de terre</h3>
          <span class="shop-section__item__price">2,30€</span>
        </div>
        <div class="shop-section__item">
          <img
            class="shop-section__item__image"
            src="./images/pomme-de-terre.png"
            alt="Image de produit - Pomme de terre"
            title="Image de produit - Pomme de terre"
          />
          <h3 class="shop-section__item__product">Pomme de terre</h3>
          <span class="shop-section__item__price">2,30€</span>
        </div>
        <div class="shop-section__item">
          <img
            class="shop-section__item__image"
            src="./images/pomme-de-terre.png"
            alt="Image de produit - Pomme de terre"
            title="Image de produit - Pomme de terre"
          />
          <h3 class="shop-section__item__product">Pomme de terre</h3>
          <span class="shop-section__item__price">2,30€</span>
        </div>
        <div class="shop-section__item">
          <img
            class="shop-section__item__image"
            src="./images/pomme-de-terre.png"
            alt="Image de produit - Pomme de terre"
            title="Image de produit - Pomme de terre"
          />
          <h3 class="shop-section__item__product">Pomme de terre</h3>
          <span class="shop-section__item__price">2,30€</span>
        </div>
        <div class="shop-section__item">
          <img
            class="shop-section__item__image"
            src="./images/pomme-de-terre.png"
            alt="Image de produit - Pomme de terre"
            title="Image de produit - Pomme de terre"
          />
          <h3 class="shop-section__item__product">Pomme de terre</h3>
          <span class="shop-section__item__price">2,30€</span>
        </div>
        <div class="shop-section__item">
          <img
            class="shop-section__item__image"
            src="./images/pomme-de-terre.png"
            alt="Image de produit - Pomme de terre"
            title="Image de produit - Pomme de terre"
          />
          <h3 class="shop-section__item__product">Pomme de terre</h3>
          <span class="shop-section__item__price">2,30€</span>
        </div>
        <div class="shop-section__item">
          <img
            class="shop-section__item__image"
            src="./images/pomme-de-terre.png"
            alt="Image de produit - Pomme de terre"
            title="Image de produit - Pomme de terre"
          />
          <h3 class="shop-section__item__product">Pomme de terre</h3>
          <span class="shop-section__item__price">2,30€</span>
        </div>
        <div class="shop-section__item">
          <img
            class="shop-section__item__image"
            src="./images/pomme-de-terre.png"
            alt="Image de produit - Pomme de terre"
            title="Image de produit - Pomme de terre"
          />
          <h3 class="shop-section__item__product">Pomme de terre</h3>
          <span class="shop-section__item__price">2,30€</span>
        </div>
      </div>
      <div class="shop-section__button-wrapper">
        <a href="<?php echo home_url(
          "/"
        ); ?>boutique/" class="button button-dark">Voir tous les produits</a>
      </div>
    </section>
<?php get_footer();
?>
