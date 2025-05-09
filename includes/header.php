<header id="top">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <a class="navbar-brand" href="/"><img src="/assets/images/Feminize-digital.webp" alt="" class="img-fluid"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <img src="/assets/images/Feminize-digital.webp" alt="" class="img-fluid dropdown-logo">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">Home</a>
                        </li>   
                        <li class="nav-item">
                            <a class="nav-link" href="/about-us/">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/services/" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/app-development/">App Development</a></li>
                                <li><a class="dropdown-item" href="/content-writing/">Content Writing</a></li>
                                <li><a class="dropdown-item" href="/email-marketing/">Email Marketing</a></li>
                                <li><a class="dropdown-item" href="/google-business/">Google my business</a></li>
                                <li><a class="dropdown-item" href="/graphic-designing/">Graphic Designing</a></li>
                                <li><a class="dropdown-item" href="/influencer-marketing/">Influencer Marketing</a></li>
                                <li><a class="dropdown-item" href="/orm/">Online reputation management </a></li>
                                <li><a class="dropdown-item" href="/pay-per-click/">PPC Marketing</a></li>
                                <li><a class="dropdown-item" href="/search-engine/">Search engine optimization</a></li>
                                <li><a class="dropdown-item" href="/social-media/">Social Media Marketing</a></li>
                                <li><a class="dropdown-item" href="/video-editing/">Video Editing</a></li>
                                <li><a class="dropdown-item" href="/web-designing/">Web Designing</a></li>
                                <li><a class="dropdown-item" href="/web-development/">Web Development</a></li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/portfolio/">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/testimonials/">Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact-us/">Contact Us</a>
                        </li>
                    </ul>
                    <div class="quote-link">
                        <a href="#" class="bton quote-button"><i class="fa-brands fa-rocketchat"></i> Get a Quote</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<script>
document.addEventListener("DOMContentLoaded", function () {
    // Get current page URL
    let currentUrl = window.location.pathname;

    // Get all nav links
    let navLinks = document.querySelectorAll(".navbar-nav .nav-link");

    // Loop through links and add 'active' class to the matching one
    navLinks.forEach(function (link) {
        if (link.getAttribute("href") === currentUrl) {
            link.classList.add("active");
        } else {
            link.classList.remove("active");
        }
    });
});
</script>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>