<section id="events" class="events">
    <div class="container">
        <div class="events__boxes">
            <div class="events__box events__box-feed">
                <div class="events__texts">
                    <h3 class="section-subtitle">
                        Feed
                    </h3>
                    <h2 class="section-title">
                        Instagram
                    </h2>
                </div>
                <div class="events__feed">
                <?php foreach( $attributes['instagram-box'] as $instagram ): ?>
                    <a href="<?php echo $instagram['link']; ?>" class="events__feed-box">
                        <i class='bx bxl-instagram'></i>
                        <img class="events__feed-img"
                            src="<?php echo esc_url( $instagram['image']['url'] ); ?>" alt="<?php echo esc_attr( $instagram['image']['alt'] ); ?>">
                    </a>
                   
                    <?php endforeach; ?>
                </div>

            </div>
            <div class="events__box events__box-calendar">
                <div class="events__texts events__texts-right">
                    <h3 class="section-subtitle">
                        Past & Upcoming
                    </h3>
                    <h2 class="section-title">
                        events
                    </h2>
                </div>
                <div class="events__calendar">
                    <div class="events__btns">
                        <button class="events__btns-btn events__btns-past active past">past</button>
                        <button class="events__btns-btn events__btns-upcoming upcoming">upcoming</button>
                    </div>
                    <?php foreach( $attributes['event-box'] as $event ): ?>
                    <div id="<?php echo $event['id']; ?>" class="events__calendar-box">
                        <img src="<?php echo esc_url( $event['image']['url'] ); ?>" alt="<?php echo esc_attr( $event['image']['alt'] ); ?>" class="events__calendar-img">
                        <div class="events__calendar-texts">
                            <p class="events__calendar-title"><?php echo $event['title']; ?></p>
                            <p class="events__calendar-date">
                            <?php echo $event['date']; ?>
                            </p>
                        </div>
                    </div>
                    
                    

                    <?php endforeach; ?>
                    <p class="events__calendar-error active">
                        
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>