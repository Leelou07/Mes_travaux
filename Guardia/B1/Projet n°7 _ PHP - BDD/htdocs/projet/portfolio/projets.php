<?php
    $bdd = new PDO('mysql:host=localhost;dbname=id19975215_portfolio;charset=utf8;', 'id19975215_admin', '$ZMH}-Aw2beYxdd2');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $retrieveProject = 'SELECT * FROM project';
    $projectList = $bdd->query($retrieveProject)->fetchAll(PDO::FETCH_ASSOC);

    

?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Projets</title>
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
                <div class="heading">
                    <h2>Mes projets</h2>
                </div>
                <div class="row">
                    <?php foreach ($projectList as $project) { ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="card border-0"><a href="page_projet.php?id=<?php echo $project['id'];?>"><img class="card-img-top scale-on-hover" src="<?php echo $project['illustration_1']?>" alt="Card Image"></a>
                                <div class="card-body">
                                    <h6><a href="page_projet.php?id=<?php echo $project['id'];?>"><?php echo $project['name']?></a></h6>
                                    <p class="text-muted card-text"><?php echo $project['resume']?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </main>
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