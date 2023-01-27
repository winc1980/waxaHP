<?php get_header(); ?>

    <main id="main">
        <!-- メインビジュアルここから -->
        <section id="mv">
            <div class="mv_wrapper">
                <img src="<?php echo get_theme_file_uri('src/main-visual-sp.png'); ?>" class="mv_sp_img" alt="">
                <img src="<?php echo get_theme_file_uri('src/main-visual.png'); ?>" class="mv_pc_img" alt="">
                <div class="mv_contents_wrapper">
                    <h1>そうだ、<br>星を見に行こう。</h1>
                    <a href="#contact">本入会はこちら</a>
                </div>
            </div>
        </section>
        <!-- メインビジュアルここまで -->

        <!-- 活動内容ここから -->
        <section id="activity">
            <div class="container">
                <div class="row">
                    <div class="contents">
                        <div class="title">
                            <h2>Activity</h2>
                            <p>活動内容</p>
                        </div>
                        <div class="message">
                            <p><?php echo get_post_meta( 1, 'activity_text', true ); ?></p>
                        </div>
                    </div>
                </div>
                <div class="activity__figure row">
                    <img src="<?php echo get_theme_file_uri('src/activity.jpg'); ?>" alt="images" />
                </div>
            </div>
        </section>
        <!-- 活動内容ここまで -->

        <!-- Infomationここから -->
        <section id="information">
            <div class="container">
                <div class="row">
                    <div class="images">
                        <div><img src="<?php echo get_theme_file_uri('src/history-01.png'); ?>" alt="" /></div>
                        <div><img src="<?php echo get_theme_file_uri('src/history-02.png'); ?>" alt="" /></div>
                        <div><img src="<?php echo get_theme_file_uri('src/history-03.png'); ?>" alt="" /></div>
                    </div>
                </div>
                <div class="row">
                    <div class="contents fade">
                        <div class="title">
                            <h2 style="margin: 0">Information</h2>
                            <p>サークル情報</p>
                        </div>
                        <div class="message">
                        <table>
                            <tr>
                                <th>人数</th><td>150人以上</td>
                            </tr>
                            <tr>
                                <th>他大学</th><td>参加可能</td>
                            </tr>
                            <tr>
                                <th>設立</th><td>1960年</td>
                            </tr>
                            <tr>
                                <th>年会費</th><td>2,500円</td>
                            </tr>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Infomationここまで -->

        <!-- 活動風景ここから -->
        <section id="gallery">
            <div class="gallery_container">
                <div class="gallery_title">
                    <h2 class="gallery_title_h2">Gallery</h2>
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
                            get_theme_file_uri('src/slider5.png'),
                            get_theme_file_uri('src/slider6.png'),
                            get_theme_file_uri('src/slider1.png'),
                            get_theme_file_uri('src/slider3.png'),
                            get_theme_file_uri('src/slider6.png'),
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
                        <div class="contents">
                            <div class="title">
                                <h2>Place</h2>
                                <p>活動場所</p>
                            </div>
                            <div class="message">
                                <p>主な活動場所は学生会館E1108です。活動の詳細についてはTwitterやInstagramをご覧ください。</p>
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
        <section id="contact" style="background-image:url('<?php echo get_theme_file_uri('src/contact_bg.jpg'); ?>');">
            <div class="container">
                <div class="box">
                    <div class="title">
                        <h2>Contact</h2>
                        <p><span>お問い合わせ</span></p>
                    </div>
                    <div class="message">
                        <p>体験・入会は、WAXAの公式<a href="<?php echo 'https://www.instagram.com/' . get_post_meta( 1, 'instagram_id', true ); ?>">Instagram</a>もしくは公式<a href="<?php echo 'https://twitter.com/' . get_post_meta( 1, 'twitter_id', true ); ?>">Twitter</a>に、「体験したい」「入会したい」という旨のメッセージをDMで送っていただくか、下記フォームよりお問い合わせください。</p>
                    </div>

                    <form name="contact" action="" method="post">
                        <div class="form_control" style="margin-bottom:30px;">
                            <label>お名前</label>
                            <div class="badge"><p>必須</p></div>
                            <input class="input_form" type="text" name="_name" placeholder="お名前を入力してください">
                        </div>
                        <div class="form_control" style="margin-bottom:30px;">
                            <label>メールアドレス</label>
                            <div class="badge"><p>必須</p></div>
                            <input class="input_form" type="email" name="email" placeholder="メールアドレスを入力してください">
                        </div>
                        <div class="form_control" style="margin-bottom:30px;">
                            <label>ご要望</label>
                            <div class="badge"><p>必須</p></div>
                            <div class="form_check">
                                <div class="form_check_radio">
                                    <input type="radio" id="radio1" name="request" value="入会したい">
                                    <label for="radio1">入会したい</label>
                                </div>
                                <div class="form_check_radio">
                                    <input type="radio" id="radio2" name="request" value="体験したい">
                                    <label for="radio2">体験したい</label>
                                </div>
                                <div class="form_check_radio">
                                    <input type="radio" id="radio3" name="request" value="その他">
                                    <label for="radio3">その他</label>
                                </div>
                            </div>
                        </div>
                        <div class="form_control">
                            <label style="flex:6;">質問・その他</label>
                            <textarea class="input_form" name="body" rows="5" placeholder="質問や気になる点がありましたら、お気軽にお問い合わせください。"></textarea>
                        </div>
                        <input type="hidden" name="submit_type" value="contact">
                        <?php wp_nonce_field( 'sDio33kls673df', 'nonce' ); ?>
                    </form>
                </div>
            </div>
            <div class="container">
                <div class="button">
                    <div>送信する</div>
                    <span class="material-symbols-outlined">chevron_right</span>
                </div>
            </div>
            <script>
                document.querySelector("div.button").addEventListener('click', function() {
                    document.contact.submit();
                });
            </script>
        </section>
        <!-- お問い合わせここまで -->
    </main>

<?php get_footer(); ?>