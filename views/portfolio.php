<?php 
$pageTitle = "Portfolio | Feminize Digitals"; // 
include_once("includes/head.php"); 
?>
<?php include_once("includes/header.php") ?>

<body>
     


    <section id="hero-banner-about">
        <video autoplay loop muted playsinline id="services-video">
            <source src="/assets/images/about-banner-video-gb.mp4" type="video/mp4">
        </video>
        <div class="container-fluid">
            <div id="main-row" class="row">
                <div id="inner-row" class="row">
                    <div class="col-md-7">
                        <div class="text-wrapper">

                            <!-- <h1>Empowering Business <br>Through <ruby><a href="" class="typewrite" data-period="2000"
                                        data-type='[ "Website.", "Graphic..", "Insights..." ]'><span
                                            class="wrap"></span></a></ruby></h1> -->
                                            <h1>Our Portfolio</h1>
                            <p>we bring ideas to life with stunning visuals and innovative designs. From branding and web design to marketing materials, our portfolio showcases a diverse range of projects that reflect our passion for creativity and excellence. </p>
                        </div>
                        <div class="quote-links light">
                             <a href="#" class="bton quote-button"><i class="fa-brands fa-rocketchat"></i> Get a Quote</a>
                             <a href="/portfolio/" class="bton "><i class="fa-solid fa-address-card"></i>view Portfolio</a>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="img-bg">
                            <img src="/assets/images/portfoliomascot.webp" alt="" class="img-fluid">
                            <!-- <img id="analytics1" src="/assets/images/rb_136.png" alt="" class="img-fluid let"> -->
                            <!-- <img id="analytics2" src="/assets/images/hero-analytics1.png" alt="" class="img-fluid let"> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once("views/portfolio-section.php"); ?>

    <?php include_once("includes/footer.php") ?>

     
     
    <div class="back-to-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>

</body>