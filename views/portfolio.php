<?php 
$pageTitle = "Portfolio | Feminize Digitals"; // 
include_once("includes/head.php"); 
?>
<?php include_once("includes/header.php") ?>

<body>
    <div id="cursor">
        <div class="cursor__circle"></div>
    </div>


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



    <!-- <section id="rgt-img">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-wrapper">
                        <h2>Creative Website <br><ruby>Design</ruby></h2>
                        <p>Our web design services focus on crafting visually stunning and user-centric layouts that captivate your audience. From intuitive navigation to striking visuals, we ensure your website leaves a lasting impression. Whether you’re looking to refresh your current site or build a new one, our designs are tailored to reflect your brand's unique identity and values.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-bg">
                        <img src="/assets/images/contact-us-img.webp" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section id="lft-img">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-bg">
                        <img src="/assets/images/desinger-work.webp" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-wrapper">
                        <h2>Performance-Driven <br><ruby>Design</ruby></h2>
                        <p>Our web designs are crafted not just to look good but to perform exceptionally. We focus on speed, responsiveness, and usability, ensuring every design element contributes to your business goals. Transform your website into a powerful tool for growth and engagement.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section id="portfolio-herobanner">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="text-wrapper">
                        <h2>Elevating Brands with Expert Web Solutions</ruby></h2>
                        <p>We craft innovative web solutions, combining stunning design and seamless functionality to help brands thrive in the digital landscape.</p>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="img-bg">
                        <img src="/assets/images/web-hero-ban.webp" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

    </section> -->


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