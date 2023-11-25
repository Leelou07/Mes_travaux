<?php
    $bdd = new PDO('mysql:host=localhost;dbname=id19975215_portfolio;charset=utf8;', 'id19975215_admin', '$ZMH}-Aw2beYxdd2');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $current_page = $_GET['id'];
    $retrieveProject= $bdd->prepare('SELECT * FROM project WHERE id = ?');
    $retrieveProject->execute(array($current_page));
    $page = $retrieveProject->fetch();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="Site portfolio de Leelou Lerouge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $page['name'] ?></title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=13def284d3f39b9d2387182800ff791d">
    <link rel="stylesheet" href="assets/css/Lato.css?h=977de181d01e7e4e15fd7c1e2d3dba11">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css?h=5aae26cfc631423a28ee9f3eea8618b0">
    <link rel="stylesheet" href="assets/css/animate.min.css?h=5512c3e92e3931978c9ddcc7dbeed22b">
    <link rel="stylesheet" href="assets/css/Hero-Clean-images.css?h=4f3cfa46e40e236365345fc77963f4b8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Ludens---Custom-Code-Google-Map-just-the-iframe.css?h=fce466b977565bd59f1105bfc344e9fc">
    <link rel="stylesheet" href="assets/css/Simple-Slider-Simple-Slider.css?h=da830b6503e0457b5735b0129f20b163">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient" style="background: linear-gradient(#2f3438 99%, #2f3438 100%);margin-bottom: 0px;">
        <div class="container"><a class="navbar-brand logo" href="index.php">Leelou Lerouge</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navbarNav"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="projets.php">Projets</a></li>
                    <li class="nav-item"><a class="nav-link" href="cv.html">CV</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page projects-page">
        <section class="portfolio-block projects-cards">
            <div class="container">
                <!-- Start: portfolio heading -->
                <div class="heading">
                    <h2 style="margin-bottom: 15px;"><?php echo $page['name']?></h2><!-- Start: Simple Slider -->
                    <div class="simple-slider">
                        <!-- Start: Slideshow -->
                        <div class="swiper-container">
                            <!-- Start: Slide Wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Start: Slide -->
                                <div class="swiper-slide" style="background: url('<?php echo $page['illustration_1']?>') center center / cover no-repeat;"></div><!-- End: Slide -->
                                <!-- Start: Slide -->
                                <div class="swiper-slide" style="background: url('<?php echo $page['illustration_2']?>') center center / cover no-repeat;"></div><!-- End: Slide -->
                            </div><!-- End: Slide Wrapper -->
                            <!-- Start: Pagination -->
                            <div class="swiper-pagination"></div><!-- End: Pagination -->
                            <!-- Start: Previous -->
                            <div class="swiper-button-prev"></div><!-- End: Previous -->
                            <!-- Start: Next -->
                            <div class="swiper-button-next"></div><!-- End: Next -->
                        </div><!-- End: Slideshow -->
                    </div><!-- End: Simple Slider -->
                </div><!-- End: portfolio heading -->
            </div>
        </section>
        <section style="background: #2f3438;">
            <!-- Start: Hero Clean -->
            <div class="container py-4 py-xl-5">
                <div class="row gy-4 gy-md-0">
                    <div class="col-md-6">
                        <div class="p-xl-5 m-xl-5"><img class="rounded img-fluid w-100 fit-cover scale-on-hover" style="width 100%" src="<?php echo $page['img_description']?>"></div>
                    </div>
                    <div class="col-md-6 d-md-flex align-items-md-center">
                        <div style="max-width: 350px;">
                            <h2 class="text-uppercase fw-bold" style="color: rgb(255,255,255);">Description</h2>
                            <p class="my-3" style="color: rgb(255,255,255); text-align: justify"><?php echo $page['description']?></p><a class="btn btn-outline-primary btn-lg" role="button" data-bss-hover-animate="flash" href="<?php echo $page['link']?>" style="background: var(--bs-btn-bg);border-style: none;border-color: rgb(255,255,255);color: rgb(255,255,255); "target="_blank">Lien github</a>
                        </div>
                    </div>
                </div>
            </div><!-- End: Hero Clean -->
        </section>
    </main>
    <footer class="page-footer">
        <div class="container">
            <div class="links"><a href="cv.html">A propos</a><a href="contact.html">Me contacter</a><a href="projets.php">Projets</a></div>
            <div class="social-icons"><a href="#" style="background: url(&quot;https://cdn.bootstrapstudio.io/placeholders/1400x800.png&quot;), #ffffff;"><i class="icon ion-social-linkedin" style="color: var(--bs-blue);"></i></a><a href="#" style="background: url(&quot;https://cdn.bootstrapstudio.io/placeholders/1400x800.png&quot;), rgb(197, 201, 210);"><i class="icon ion-social-instagram-outline" style="color: var(--bs-blue);"></i></a></div>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js?h=981245863c383366a329259d02b8172c"></script>
    <script src="assets/js/bs-init.js?h=ec5d4df3c798a2943b2ecbac76ebfde0"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/Simple-Slider.js?h=84b1d7cbf88bb21b37fb412ca8f94640"></script>
    <script src="assets/js/theme.js?h=aeddb9c3ce5d77b8278c91c07acf30ad"></script>
</body>

</html>