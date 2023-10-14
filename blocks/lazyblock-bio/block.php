<section id="about" class="bio section-white">
<div class="container">
<div class="bio__boxes">
    <div class="bio__box bio__box-img">
<img src="<?php echo esc_url( $attributes['image']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['image']['alt'] ); ?>" class="bio__img">
    </div>
    
    <div class="bio__box bio__box-infos">
    
        <div class="bio__box-names">
        <h3 class="section-subtitle">About the artist</h3>
        <h2 class="section-title">Odette Hayas</h2>
        </div>
        <div class="bio__box-description">
        <?php foreach( $attributes['text'] as $text ): ?>
            <p class="bio__box-text">
            <?php echo $text['text']; ?>
            </p>
            
            <?php endforeach; ?>
        </div>
        <!-- <div class="bio__box-icons"></div> -->
        <div class="bio__box-socials">
        <h2 class="section-title">Socials</h2>
            <a href="https://soundcloud.com/dj-odette" class="bio__box-social">
                <i class='bx bxl-soundcloud'></i>
            </a>
            <a href="https://open.spotify.com/artist/5gzOmct2PqIVG9MQCyQgNk" class="bio__box-social">
                <i class='bx bxl-spotify'></i>
            </a>
            <a href="https://www.instagram.com/odette.hayas/" class="bio__box-social">
                <i class='bx bxl-instagram'></i>
            </a>
            <a href="https://www.facebook.com/djodette" class="bio__box-social">
                <i class='bx bxl-facebook'></i>
            </a>
        </div>
        
    </div>
    
</div>
</div>

</section>