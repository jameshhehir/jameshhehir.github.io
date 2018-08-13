<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wazp - eCommerce</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Drag--Drop-Upload-Form.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body>
    <header>
        <nav>
            <div class="main-wrapper">
            <?php
                        if(isset($_SESSION['u_id'])) {
                            echo '
                            <nav class="navbar navbar-light navbar-expand-md">
        <div class="container-fluid"><a class="navbar-brand" href="index.php" style="background-image:url(&quot;assets/img/Wazp%20Logo%20-%20Brand%20Asset.png&quot;);background-size:contain;background-repeat:no-repeat;background-position:center;width:72px;height:46px;"></a><button class="navbar-toggler" data-toggle="collapse"
                data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="library.php">Library</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Track Orders</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="upload.php">Upload</a></li>
                </ul>
            </div>
        </div>
    ';
                        } else {
                            
                        }
                    ?>
                <div class="nav-login">
                    <?php
                        if(isset($_SESSION['u_id'])) {
                            echo '
                            <form action="includes/logout.inc.php" method="POST" >
                            <button type="submit" name="submit" >Logout</button>
                        </form> </nav>';
                        } else {
                            echo ' <div class="container-fluid"><a class="navbar-brand" href="index.php" style="background-image:url(&quot;assets/img/Wazp%20Logo%20-%20Brand%20Asset.png&quot;);background-size:contain;background-repeat:no-repeat;background-position:center;width:72px;height:46px;"></a><button class="navbar-toggler" data-toggle="collapse"
                            data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                            <form action="includes/login.inc.php" method="POST" >
                            <input type="text" name="uid" placeholder="Username/e-mail">
                            <input type="password" name="pwd" placeholder="Password">
                            <button type="submit" name="submit">Login</button>
                        </form>
                        <a href="signup.php">Sign up</a>
                        </nav>' ;
                        }
                    ?>

                    
                </div>
            </div>
        </nav>
    </header>