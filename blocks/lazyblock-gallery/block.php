<section class="gallery section-white" id="gallery">

    <div class="container">
        <h3 class="section-subtitle">
            Photos
        </h3>
        <h2 class="section-title">
            gallery

        </h2>

        <div class="swiper gallery__swiper">
            <div class="swiper-wrapper gallery__boxes">
            <?php foreach( $attributes['gallery'] as $gallery ): ?>
                <div class="gallery__box swiper-slide">
                    <img src="<?php echo esc_url( $gallery['gallery-image']['url'] ); ?>" alt="<?php echo esc_attr( $gallery['gallery-image']['alt'] ); ?>"
                        class="gallery__img ">
                </div>
                <?php endforeach; ?>

                
            </div>

           

            <div class="swiper-pagination gallery__pagination"></div>
         
            <div class="swiper-button-prev gallery__prev">prev</div>
            <div class="swiper-button-next gallery__next">next</div>
        </div>
  
    </div>
</section>