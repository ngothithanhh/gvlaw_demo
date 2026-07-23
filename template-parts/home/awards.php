<section class="awards">

    <div class="container">
        <div class="title">
            <h3><span>AWARDS AND RANKINGS</span></h3>
        </div>

        <div class="swiper awardsSwiper">

            <div class="swiper-wrapper">

                <?php
                $images = [
                    'IFLR1000-1536x1536.png',
                    'IP_STARS_Trusted_Talent_2025_watermark_4x-1536x1536.png',
                    'Legal500.png',
                    'Southeast_Asia_2025_Dispute_Resolution.png',
                    'Benchmark.png',
                    'Chambers-Partners.jpg',
                    'ALB-2025-Asia-IP-Rankings.png',
                    'ALB-2025-Fastest-Growing-Firms.png',
                    'ABLJ-Award-Winning-Law-Firm-2025.jpg'
                ];

                foreach ($images as $image) :
                ?>

                    <div class="swiper-slide">
                        <div class="award-card">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/<?= $image; ?>" alt="">
                        </div>
                    </div>

                <?php endforeach; ?>

            </div>

        </div>

    </div>

</section>