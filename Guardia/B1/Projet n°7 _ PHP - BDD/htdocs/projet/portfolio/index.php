<?php
    $bdd = new PDO('mysql:host=localhost;dbname=id19975215_portfolio;charset=utf8;', 'id19975215_admin', '$ZMH}-Aw2beYxdd2');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $retrieveProject = 'SELECT * FROM project';
    $projectList = $bdd->query($retrieveProject)->fetchAll(PDO::FETCH_ASSOC);

    foreach ($projectList as $project) {
        $test = $project['id'];
    }
    $present= $bdd->prepare('SELECT * FROM project WHERE id = ?');
    
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Accueil</title>
    <meta name="description" content="Site portfolio de Leelou Lerouge" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=13def284d3f39b9d2387182800ff791d">
    <link rel="stylesheet" href="assets/css/Lato.css?h=00b9a5cba6adba35cb3b6ec4d1cd1beb">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css?h=5aae26cfc631423a28ee9f3eea8618b0">
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
                    <li class="nav-item"><a class="nav-link active" href="index.php">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="projets.php">Projets</a></li>
                    <li class="nav-item"><a class="nav-link" href="cv.html">CV</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page lanidng-page">
        <section class="portfolio-block block-intro">
            <div class="container">
                <div class="avatar" style="background: url(https://res.cloudinary.com/dudhe24uu/image/upload/v1670409829/IMG-20220610-WA0011_m69ywe.jpg);background-size: cover;"></div>
                <div class="about-me">
                    <p>Bonjour !&nbsp; Je me présente, je suis Leelou Lerouge. Je suis actuellement étudiante en première année à Guardia Cybersecurity School à Paris.&nbsp;</p><a class="btn btn-outline-primary" role="button" href="contact.html">Contactez-moi !</a>
                </div>
            </div>
            <section class="portfolio-block call-to-action border-bottom" style="background: #2f3438;margin-top: 100px;margin-bottom: -73px;"></section>
        </section>
        <section class="portfolio-block photography" style="background: #2f3438;margin-top: -42px;">
            <div class="container">
                <div class="row g-0">
                    <?php $present->execute(array($test)); $page = $present->fetch(); ?>
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="page_projet.php?id=<?php echo $page['id'];?>"><img class="img-fluid image" src=" <?php echo $page['illustration_1'];?>"></a></div>
                    <?php $present->execute(array($test-1)); $page = $present->fetch(); ?>
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="page_projet.php?id=<?php echo $page['id'];?>"><img class="img-fluid image" src="<?php echo $page['illustration_1'];?>"></a></div>
                    <?php $present->execute(array($test-2)); $page = $present->fetch(); ?>
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="page_projet.php?id=<?php echo $page['id'];?>"><img class="img-fluid image" src="<?php echo $page['illustration_1'];?>"></a></div>
                </div>
            </div>
        </section>
        <section class="portfolio-block call-to-action border-bottom" style="background: #2f3438;">
            <div class="container">
                <div class="d-flex justify-content-center align-items-center content">
                    <h3 style="color: rgb(255,255,255);">Vous aimez ce que vous voyez ? Contactez moi !</h3><a href="contact.html" style="overflow: hidden;"><button class="btn btn-outline-primary btn-lg" type="button" style="background: #ffffff;">Contact</button></a>
                </div>
            </div>
        </section>
        <section class="portfolio-block skills">
            <div class="container">
                <!-- Start: portfolio heading -->
                <div class="heading">
                    <h2>Mes compÉtences</h2>
                </div><!-- End: portfolio heading -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card special-skill-item border-0">
                            <div class="card-header bg-transparent border-0"><i class="icon ion-ios-star-outline"></i></div>
                            <div class="card-body">
                                <h3 class="card-title">CTF</h3>
                                <p class="card-text">Passionnée par la résolution d'énigme, j'aime résoudre des CTF principalement sur Tryhackme.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card special-skill-item border-0">
                            <div class="card-header bg-transparent border-0"><i class="icon ion-ios-lightbulb-outline"></i></div>
                            <div class="card-body">
                                <h3 class="card-title">Esprit logique</h3>
                                <p class="card-text">Je sais m'adapter en toute circonstance et j'apprend tout les jours de manière autodidacte.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card special-skill-item border-0">
                            <div class="card-header bg-transparent border-0"><i class="icon ion-ios-gear-outline"></i></div>
                            <div class="card-body">
                                <h3 class="card-title">Programmation</h3>
                                <p class="card-text">Je sais programmer en python des programmes de niveaux intermédiaires.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <section class="portfolio-block website gradient" style="background: linear-gradient(-165deg, #2f3438, #2f3438 100%);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-5 offset-lg-1 text">
                    <h3>Mes projets</h3>
                    <p>Vous pouvez retrouvez juste ici tout les projets que j'ai réalisés.</p>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div class="portfolio-laptop-mockup">
                        <div class="screen"><a href="projets.php">
                                <div class="screen-content" style="background: url(&quot;assets/img/tech/pexels-pixabay-270408.jpg?h=e8e373afb499ab314018d772cba10dbb&quot;);background-size: cover;"></div>
                            </a></div>
                        <div class="keyboard"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="page-footer">
        <div class="container">
            <div class="links"><a href="cv.html">A propos</a><a href="contact.html">Me contacter</a><a href="projets.php">Projets</a></div>
            <div class="social-icons"><a href="#" style="background: url(&quot;https://cdn.bootstrapstudio.io/placeholders/1400x800.png&quot;), #ffffff;"><i class="icon ion-social-linkedin" style="color: var(--bs-blue);"></i></a><a href="#" style="background: url(&quot;https://cdn.bootstrapstudio.io/placeholders/1400x800.png&quot;), rgb(197, 201, 210);"><i class="icon ion-social-instagram-outline" style="color: var(--bs-blue);"></i></a></div>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js?h=981245863c383366a329259d02b8172c"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/Simple-Slider.js?h=84b1d7cbf88bb21b37fb412ca8f94640"></script>
    <script src="assets/js/theme.js?h=aeddb9c3ce5d77b8278c91c07acf30ad"></script>
</body>

</html>