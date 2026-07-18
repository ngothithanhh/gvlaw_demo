<?php
/**
 * Footer
 */
?>

<footer class="site-footer">

    <div class="site-container">

        <div class="footer-wrapper">

            <!-- Thông tin công ty -->
            <div class="footer-info">

                <div class="footer-banner">
                    <div class="banner">
                        
                    </div>

                    <div class="content">
                        <h3>LET US PUT OUR KNOWLEDGE & EXPERIENCE
                            <br>
                            
                            TO WORK FOR YOU
                        </h3>
                        <div class="contact">
                            <a href="">contact us</a>
                        </div>
                    </div>
                    
                </div>
                
                <div class="footer-content">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="col-inner">
                                <h3>HCMC – Head Office</h3>
                                <ul class="footer-contact">

                                    <li>
                                        <i class="bi bi-geo-alt-fill"></i>
                                        Adress: 8th Floor, Centec Tower, 72-74 Nguyen Thi Minh Khai Street, Xuan Hoa Ward, HCMC, Vietnam
                                    </li>

                                    <li>
                                        <i class="bi bi-telephone-fill"></i>
                                        <a href="tel:02412345678">
                                            (024) 1234 5678
                                        </a>
                                    </li>

                                    <li>
                                        <i class="bi bi-envelope-fill"></i>
                                        <a href="mailto:info@gvlawyers.vn">
                                            info@gvlawyers.vn
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-inner">
                                <h3>HANOI – Head Office</h3>
                                <div class="footer-social">
                                    <ul class="footer-contact">
                                        <li>
                                            <i class="bi bi-geo-alt-fill" style="padding:0"></i>
                                            Adress: 8th Floor, Centec Tower, 72-74 Nguyen Thi Minh Khai Street, Xuan Hoa Ward, HCMC, Vietnam
                                        </li>

                                        <li>
                                            <i class="bi bi-telephone-fill" style="padding:0"></i>
                                            <a href="tel:02412345678">
                                                (024) 1234 5678
                                            </a>
                                        </li>

                                        <li>
                                            <i class="bi bi-envelope-fill" style="padding:0"></i>
                                            <a href="mailto:info@gvlawyers.vn">
                                                info@gvlawyers.vn
                                            </a>
                                        </li>

                                    </ul>

                                    <a href="#"><i class="bi bi-facebook"></i></a>

                                    <a href="#"><i class="bi bi-linkedin"></i></a>

                                    <a href="#"><i class="bi bi-youtube"></i></a>

                                </div>

                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="col-inner">
                               <h3>CONTACT US</h3>
                                <?php echo do_shortcode('[contact-form-7 id="4f91059" title="Contact form 1"]'); ?>
                            </div>


                        </div>
                    </div>
                </div>

            </div>

            <!-- Form liên hệ -->
            <!-- <div class="footer-form">

                <h3>Liên hệ với chúng tôi</h3>

                <form action="" method="post">

                    <input
                        type="text"
                        name="name"
                        placeholder="Họ và tên"
                        required
                    >

                    <input
                        type="email"
                        name="email"
                        placeholder="Email"
                        required
                    >

                    <input
                        type="tel"
                        name="phone"
                        placeholder="Số điện thoại"
                    >

                    <textarea
                        name="message"
                        rows="5"
                        placeholder="Nội dung"
                        required
                    ></textarea>

                    <button type="submit">
                        Gửi liên hệ
                    </button>

                </form>

            </div> -->

        </div>

        <div class="footer-bottom">

            <p>
                © <?php echo date('Y'); ?>
                <?php bloginfo('name'); ?>.
                All Rights Reserved.
            </p>

        </div>

    </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>