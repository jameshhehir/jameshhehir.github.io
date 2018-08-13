<?php
    include_once 'header.php';
?>    

   

    <section class="library-links">
        <div class="wrapper">
            <?php
            if(isset($_SESSION['u_id'])) {

            echo '
    <div class="photo-gallery">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Your Gallery</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
            <div class="row photos">
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/img/desk.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/desk.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/img/building.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/building.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/img/loft.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/loft.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/img/building.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/building.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/img/loft.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/loft.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/img/desk.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/desk.jpg"></a></div>
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
