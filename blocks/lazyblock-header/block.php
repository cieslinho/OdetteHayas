<header class="header">
  <div class="swiper header__slider">
    <div class="swiper-wrapper header__wrapper">
      <?php foreach( $attributes['slide'] as $slide ): ?>
      <div class="swiper-slide header__slide">
        <div class="header__boxes">
          <div class="header__texts">
            <h1 class="header__texts-title">
              <?php echo $slide['title']; ?>
            </h1>
            <h2 class="header__texts-description"><?php echo $slide['subtitle']; ?></h2>
            <a href="<?php echo $slide['btn']; ?>" class="header__texts-btn">read more</a>
          </div>
          <img src="<?php echo esc_url( $slide['image']['url'] ); ?>"
            alt="<?php echo esc_attr( $slide['image']['alt'] ); ?>" class="header__slide">
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="swiper-button-prev header__prev">Prev</div>
    <div class="swiper-button-next header__next">Next</div>
    <div class="swiper-scrollbar header__scrollbar"></div>
  </div>
  <div class="header__spotify">
    <iframe style="border-radius:12px"
      src="https://open.spotify.com/embed/artist/5gzOmct2PqIVG9MQCyQgNk?utm_source=generator&theme=0" width="100%"
      height="152" frameBorder="0" allowfullscreen=""
      allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
  </div>
</header>