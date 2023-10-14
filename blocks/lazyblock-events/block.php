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
                    <div id="past" class="events__calendar-box ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/poster-1.jpg" alt=""
                            class="events__calendar-img">
                        <div class="events__calendar-texts">
                            <p class="events__calendar-title">Grandprix weekend - Bahrein</p>
                            <p class="events__calendar-date">
                                April 5<sup>th</sup> 2016
                            </p>
                        </div>
                    </div>
                    <div id="past" class="events__calendar-box ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/poster-2.jpg" alt=""
                            class="events__calendar-img">
                        <div class="events__calendar-texts">
                            <p class="events__calendar-title">Luminosity After Party</p>
                            <p class="events__calendar-date">
                                June 26<sup>th</sup> 2022
                            </p>
                        </div>
                    </div>
                    <div id="upcoming" class="events__calendar-box ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/poster-2.jpg" alt=""
                            class="events__calendar-img">
                        <div class="events__calendar-texts">
                            <p class="events__calendar-title">Luminosity After Party</p>
                            <p class="events__calendar-date">
                                June 26<sup>th</sup> 2022
                            </p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>