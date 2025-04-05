<?php 
$pageTitle = "Testimonials | Feminize Digitals"; // 
include_once("includes/head.php"); 
?>
<?php include_once("includes/header.php") ?>


<body id="testimonials">

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
                                            <h1>Client Reviews</h1>
                            <p>Building impactful brands, designing engaging websites, and creating powerful<br>
                                marketing campaigns that drive growth, visibility, and success.</p>
                        </div>
                        <div class="quote-links light">
                             <a href="#" class="bton quote-button"><i class="fa-brands fa-rocketchat"></i> Get a Quote</a>
                             <a href="/portfolio/" class="bton "><i class="fa-solid fa-address-card"></i>view Portfolio</a>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="img-bg">
                            <img src="/assets/images/testimonialmascot.webp" alt="" class="img-fluid">
                            <!-- <img id="analytics1" src="/assets/images/rb_136.png" alt="" class="img-fluid let"> -->
                            <!-- <img id="analytics2" src="/assets/images/hero-analytics1.png" alt="" class="img-fluid let"> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="about-points">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <div class="key-points-parent">
                        <img src="/assets/images/jigsaw.webp" alt="Image 1" class="img-fluid aks">
                        <h3>Creative <ruby>Solutions</ruby></h3>
                        <p>We deliver innovative and tailored strategies that bring your digital vision to life, ensuring your brand stands out online.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="key-points-parent">
                        <img src="/assets/images/gear.webp" alt="Image 2" class="img-fluid aks">
                        <h3>Expert <ruby>Execution</ruby></h3>
                        <p>Our team combines industry expertise with cutting-edge tools to provide seamless and impactful results.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="key-points-parent">
                        <img src="/assets/images/target.webp" alt="Image 3" class="img-fluid aks"/>
                        <h3>Client <ruby>Focused</ruby></h3>
                        <p>Your goals are our priority. We work closely with you to create solutions that align with your unique needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include_once("views/testimonials-section.php"); ?>





    <?php include_once("includes/footer.php") ?>
</body>