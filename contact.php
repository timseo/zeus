<!DOCTYPE html>
<!--[if lt IE 10]> <html  lang="en" class="iex"> <![endif]-->
<!--[if (gt IE 10)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Import head file -->
<?php require './components/head.php'; ?>

<body class="contacts" itemscope itemtype="http://schema.org/Restaurant">
    <div id="preloader"></div>
    <div class="footer-parallax-container">
        
         <!-- Import header file -->
         <?php require './components/header.php'; ?>
         
        <div class="section-map box-middle-container full-screen-size" data-sub-height="58">
            <div class="google-map" data-coords="33.901850, -84.454400" data-skin="gray" data-zoom="16" data-marker-pos="col-md-6-right" data-marker-top="50" data-marker="http://templates.framework-y.com/gourmet/images/marker-map.png"></div>
            <div class="overlaybox overlaybox-side">
                <div class="container content">
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6 overlaybox-inner box-middle">
                            <div class="title-base text-left">
                                <hr />
                                <h2 class="menu-gold">Contact Us</h2>

                            </div>
                            <p>
                                Please let us know if there is anything we can help you with by messaging us through the form below. Thanks!
                            </p>
                            <hr class="space s" />
                            <div class="row">
                                <div class="col-md-10">
                                    <ul class="fa-ul">
                                        <li><i class="fa-li im-home-3"></i>2022 Powers Ferry Rd Atlanta GA 30339</li>
                                        <li><i class="fa-li im-headset"></i> <a href="callto:6787417181">(678) 741 7181</a></li>
                                        <li><i class="fa-li im-mail-3"></i> zeusgreekstreet@gmail.com</li>
                                    </ul>
                                </div>

                            </div>
                            <hr class="space s" />
                            <form action="scripts/php/contact-form.php" class="form-box form-ajax" method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input id="name" name="name" placeholder="name" type="text" class="form-control form-value" required>
                                    </div>
                                    <div class="col-md-4">
                                        <input id="email" name="email" placeholder="email" type="email" class="form-control form-value" required>
                                    </div>
                                    <!-- <div class="col-md-4">
                                        <input id="phone" name="phone" placeholder="phone" type="text" class="form-control form-value">
                                    </div> -->
                                </div>
                                <hr class="space xs" />
                                <div class="row">
                                    <div class="col-md-12">
                                        <textarea id="messagge" name="messagge" placeholder="message" class="form-control form-value" required></textarea>
                                        <hr class="space s" />
                                        <button class="anima-button btn-xs btn" type="submit"><i class="im-mailbox-empty"></i>Send</button>
                                    </div>
                                </div>
                                <div class="success-box">
                                    <div class="alert alert-success">Congratulations. Your message has been sent successfully</div>
                                </div>
                                <div class="error-box">
                                    <div class="alert alert-warning">Error, please retry. Your message has not been sent</div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Import footer file -->
    <?php require './components/footer.php'; ?>
</body>

</html>