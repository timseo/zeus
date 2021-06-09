<!DOCTYPE html>
<!--[if lt IE 10]> <html  lang="en" class="iex"> <![endif]-->
<!--[if (gt IE 10)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Import head file -->
<?php require './components/head.php'; ?>

<body itemscope itemtype="http://schema.org/Restaurant">
    <div id="preloader"></div>
    <div class="footer-parallax-container">

        <!-- Import header file -->
        <?php require './components/header.php'; ?>

        <div class="section-bg-image white" style="background-image:url(images/bg-black.jpg)">
            <div class="container content box-middle-container full-screen-size">
                <div class="row">
                    <div class="col-md-12 text-center box-middle">
                        <iframe width="100%" height="850" id="loopz-card-purchase" src="https://my.loopz.io/card-checkout/0f524d59-19c9-4bb1-b8d0-d5d5d1087a38?primaryColor=#3f51b5&accentColor=#ff8a65" style="border-width: 0px; min-width:300px;"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Import footer file -->
    <?php require './components/footer.php'; ?>
</body>

</html>