<?php
    include_once 'header.php';
?>    

    <section class="main-container">
        <div class="main-wrapper">
            <?php
        
                if(isset($_SESSION['u_id'])) {
                    echo '

                    
                    <div class="features-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center"><img style="background-image:url(&quot;assets/img/Wazp%20Logo%20-%20Brand%20Asset.png&quot;);height:90px;width:163px;"></h2>
                <p class="text-center">Welcome to Wazp e-Commerce. We bring 3D printing to you!</p>
            </div>
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-home icon" style="color:#f2b72e;"></i>
                        <h3 class="name">Home</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="index.php" class="learn-more" style="color:#f2b72e;">Learn more »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-list-ul icon" style="color:#f2b72e;"></i>
                        <h3 class="name">Library</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="library.php" class="learn-more" style="color:#f2b72e;">Learn more »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fas fa-plane icon" style="color:#f2b72e;"></i>
                        <h3 class="name">Track Orders</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="#" class="learn-more" style="color:#f2b72e;">Learn more »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-cloud-upload icon" style="color:#f2b72e;"></i>
                        <h3 class="name">Upload &amp; Quote</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="upload.php" class="learn-more" style="color:#f2b72e;">Learn more »</a></div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
                    ';
                } else {

                    echo '
                    <div>
        <div class="header-blue" style="background-image:url(&quot;none&quot;);background-color:#ffffff;height:642px;">
            <div class="container hero">
                <div class="row">
                    <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                        <h1 style="color:#f2b72e;letter-spacing:0px;line-height:50px;font-style:normal;font-weight:normal;">The revolution is here.</h1>
                        <p style="color:#f2b72e;">Mauris egestas tellus non ex condimentum, ac ullamcorper sapien dictum. Nam consequat neque quis sapien viverra convallis. In non tempus lorem. </p></div>
                    <div
                        class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder">
                        <div class="iphone-mockup"><img src="assets/img/iphone.svg" class="device">
                            <div class="pulse animated screen" style="background-image:url(&quot;assets/img/details.png&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;"></div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </div>
                    
                    ';
                 
                }

            ?>
        </div>
    </section>

<?php
    include_once 'footer.php';
?>  

