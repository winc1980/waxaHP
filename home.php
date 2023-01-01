<?php get_header(); ?>

    <main id="main">
        <!-- メインビジュアルここから -->
        <section id="mv">
            <div class="mv_wrapper">
                <img src="" alt="main visual">
            </div>
        </section>
        <!-- メインビジュアルここまで -->

        <!-- 活動内容ここから -->
        <section id="activity">
            <div class="container">
                <div class="row">
                    <div class="contents">
                        <div class="title">
                            <h2 style="margin: 0">Activity</h2>
                            <p>活動内容</p>
                        </div>
                        <div class="message">
                            <p>
                                天文同好会は星空を見るのが好きな人が集まるサークルです。月に数度、長野にある山小屋に星を見に行きます。普段はカメラ班、星座班、望遠鏡班に別れて活動したり全体で遊んだりしてます。天文に詳しい人もたくさんいますがそれ以上に、詳しくないが星を見たい人、仲間とわいわいしたい人もたくさんいるので気軽にsns等に連絡ください。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="activity__figure row">
                    <img src="<?php echo get_theme_file_uri('src/activity.jpg'); ?>" alt="images" />
                </div>
            </div>
        </section>
        <!-- 活動内容ここまで -->

        <!-- 歴史ここから -->
        <section id="history">
            <div class="container">
                <div class="row">
                    <div class="images">
                        <div><img src="<?php echo get_theme_file_uri('src/history-01.png'); ?>" alt="" /></div>
                        <div><img src="<?php echo get_theme_file_uri('src/history-02.png'); ?>" alt="" /></div>
                        <div><img src="<?php echo get_theme_file_uri('src/history-03.png'); ?>" alt="" /></div>
                    </div>
                </div>
                <div class="row">
                    <div class="contents">
                        <div class="title">
                            <h2 style="margin: 0">History</h2>
                            <p>歴史</p>
                        </div>
                        <div class="message">
                            <p>
                                1960年に設立された歴史の長いサークルです。サークルが長野に山小屋を所有、また性能のいい望遠鏡を何本も受け継いできました。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- 歴史ここまで -->

        <!-- 活動風景ここから -->
        <section id="gallery">
            <div class="gallery_container">
                <div class="gallery_title">
                    <h2 style="margin: 0" class="gallery_title_h2">Gallery</h2>
                </div>

                <div class="gallery_text">
                    <p><span>活動風景</span></p>
                </div>
            </div>

            <div class="swiper-parent">
                <!-- Swiper START -->
                <div class="swiper-container">
                    <!-- メイン表示部分 -->
                    <div class="swiper-wrapper">
                        <!-- 各スライド -->
                        <?php
                        $slide_images = array(
                            get_theme_file_uri('src/slider1.png'),
                            get_theme_file_uri('src/slider2.png'),
                            get_theme_file_uri('src/slider3.png'),
                            get_theme_file_uri('src/slider2.png')
                        );
                        foreach ( $slide_images as $path ):
                        ?>
                        <div class="swiper-slide"><img src="<?php echo $path; ?>" alt="スライドショー"></div>
                        <?php endforeach; ?>
                    </div>

                    <div class="swiper-pagination"></div>

                    <div class="swiper-button-prev gallery_button_pc_only"></div>

                    <div class="swiper-button-next gallery_button_pc_only"></div>
                </div>
            </div>

            <!-- Swiper END -->
        </section>

        <!-- 活動風景ここまで -->

        <!-- 活動場所ここから -->
        <section id="place">
            <div class="place__container">
                <div class="place__content">
                    <div class="place__flex">
                        <div class="place_other_map">
                            <div class="place__title">
                                <h2>Place</h2>
                                <h3>活動場所</h3>
                                <div class="place__message">
                                    <p>
                                        主な活動場所は学生会館E1108です。活動の詳細についてはTwitterやInstagramをご覧ください。
                                    </p>
                                </div>
                            </div>
                            <div class="place_fields">
                                <div class="place_boxies">
                                    <div class="place_box place_box1">
                                        <a href="https://www.waseda.jp/inst/student/facility/studentcenter">学生会館について</a>
                                    </div>
                                    <div class="place_box place_box2">
                                        <a href="https://www.waseda.jp/fsci/assets/uploads/2022/03/2022nishiwaseda-shuttle-bus-timetable.pdf">キャンパス間連絡バス</a>
                                    </div>
                                    <div class="place_box place_box3">
                                        <a href="https://waseda.app.box.com/s/lwwbo30xn58b1mjoahvthnmbrad5xqrm">学生会館へのアクセス方法</a>
                                    </div>
                                </div>
                                <p>
                                    ※早稲田大学のHPに
                                    <br class="place__tag--sp">リンクが飛びます。
                                </p>
                            </div>
                        </div>
                        <div class="place_map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25919.536515236803!2d139.7315984135291!3d35.70304328206423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d1dc627dc3b%3A0xb8cb5ac09b074b5d!2z5pep56iy55Sw5aSn5a2mIOaIuOWxseOCreODo-ODs-ODkeOCuQ!5e0!3m2!1sja!2sjp!4v1671290912806!5m2!1sja!2sjp"
                                width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- 活動場所ここまで -->

        <!-- お問い合わせここから -->
        <section id="contact">
            ここにコーディングお願いします。
        </section>
        <!-- お問い合わせここまで -->
    </main>

<?php get_footer(); ?>