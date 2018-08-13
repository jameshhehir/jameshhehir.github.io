<?php
    include_once 'header.php';
?>    

<body>

    <section class="main-container">
        <div class="main-wrapper">
            <?php
        
                if(isset($_SESSION['u_id'])) {
                    echo '

                    
                    <div class="dashed_upload"><div class="wrapper">
  <div class="drop">
    <div class="cont">
      <i class="fa fa-cloud-upload"></i>
      <div class="tit">
        Drag & Drop
      </div>
      <div class="desc">
        or 
      </div>
      <div class="browse">
        click here to browse
      </div>
    </div>
    <output id="list"></output><input id="files" multiple name="files[]" type="file" />
  </div>
</div>

                    ';
                } else {

                 
                }

            ?>
        </div>
    </section>
            </body>

<?php
    include_once 'footer.php';
?>  
