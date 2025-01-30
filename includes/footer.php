<footer class="footer-section">
    <div class="container">
        <div id="main-row" class="row">
            <div id="top-row" class="row">
                <div class="col-sm-4">
                    <p>Innovating web solutions to elevate<br> brands in the digital world.</p>
                </div>
                <div class="col-sm-4">
                    <a href="#"><img src="/assets/images/Feminize-digital.png" alt=""></a>
                </div>
                <div class="col-sm-4">
                    <ul class="socials-menu">
                        <li class="socials-items">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        </li>
                        <li class="socials-items">
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        </li>
                        <li class="socials-items">
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        </li>
                        <li class="socials-items">
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="middle-row" class="row">
                <div class="col-sm-3">
                    <h3>Quick links</h3>
                    <ul class="footer-menu">
                        <li>
                            <a href="/"><i class="fa-solid fa-chevron-right"></i>home</a>
                        </li>
                        <li>
                            <a href="/about-us/"><i class="fa-solid fa-chevron-right"></i>About Us</a>
                        </li>
                        <li>
                            <a href="/portfolio/"><i class="fa-solid fa-chevron-right"></i>Portfolio</a>
                        </li>
                        <li>
                            <a href="/testimonials/"><i class="fa-solid fa-chevron-right"></i>Testimonials</a>
                        </li>
                        <li>
                            <a href="/packages/"><i class="fa-solid fa-chevron-right"></i>Packages</a>
                        </li>
                        <li>
                            <a href="/contact-us/"><i class="fa-solid fa-chevron-right"></i>Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h3>Policies</h3>
                    <ul class="footer-menu">
                        <li>
                            <a href="/privacy-policy/"><i class="fa-solid fa-chevron-right"></i>Privacy Policy</a>
                        </li>
                        <li>
                            <a href="/terms-conditions/"><i class="fa-solid fa-chevron-right"></i>Terms & Conditions</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h3>Services</h3>
                    <ul class="footer-menu">
                        <li>
                            <a href="/content-writing/"><i class="fa-solid fa-chevron-right"></i> Content Writing</a>
                        </li>
                        <li>
                            <a href="/email-marketing/"><i class="fa-solid fa-chevron-right"></i> Email Marketing</a>
                        </li>
                        <li>
                            <a href="/graphics-designing/"><i class="fa-solid fa-chevron-right"></i> Graphics
                                Designing</a>
                        </li>
                        <li>
                            <a href="/search-engine/"><i class="fa-solid fa-chevron-right"></i> Search Engine
                                Optimization</a>
                        </li>
                        <li>
                            <a href="/social-media/"><i class="fa-solid fa-chevron-right"></i> Social Media
                                Marketing</a>
                        </li>
                        <li>
                            <a href="/web-designing/"><i class="fa-solid fa-chevron-right"></i> Web Designing</a>
                        </li>
                        <li>
                            <a href="/web-development/"><i class="fa-solid fa-chevron-right"></i> Web Development</a>
                        </li>
                        <li>
                            <a href="/pay-per-click/"><i class="fa-solid fa-chevron-right"></i>PPC Marketing</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h3>Where to find us!</h3>
                    <ul class="footer-left-menu">
                        <li class="contact-item">
                            <a href="#"><i class="fa-solid fa-location-dot"></i>17504 Carlton Cuevas
                                Rd</a>
                        </li>
                        <li class="contact-item">
                            <a href="#"><i class="fa-solid fa-headset"></i>+ 123 456
                                7890</a>
                        </li>
                        <li class="contact-item">
                            <a href="#"><i class="fa-solid fa-envelope-open-text"></i>info@feminizedigitals.com</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="bottom-row" class="row">
                <div class="copright text-center">
                    <p><i class="fa-regular fa-copyright"></i> Copyrights 2025 <strong>Feminize Digitals </strong> All
                        Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>



<div id="planPopup" class="popup">
    <div class="popup-content">
        <div class="popup-header">
            <a href="#" class="popup-logo">
                <img src="logo.png" alt="Popup Logo" />
            </a>
            <button class="popup-close"><i class="fas fa-times"></i></button>
        </div>
        <div class="popup-body">
            <div class="row">
                <!-- Left Column -->
                <div class="col-md-6 popup-left">
                    <h4 id="popup-title"></h4>
                    <ul id="popup-list"></ul>
                </div>
                <!-- Right Column -->
                <div class="col-md-6 popup-right">
                    <img src="placeholder.png" alt="Plan Image" id="popup-image" />
                    <button class="btn btn-primary">Get Service</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>


<script>
// Register GSAP plugin
gsap.registerPlugin(ScrollTrigger);

// GSAP animation for marquee
gsap.to(".marquee-content", {
    xPercent: -100, // Move text from right to left
    ease: "linear",
    scrollTrigger: {
        trigger: "#marquee-text",
        start: "top bottom", // Start when marquee enters the viewport
        end: "bottom top", // End when it leaves the viewport
        scrub: true // Smooth scrolling linked to mouse scroll
    }
});
</script>


<script>
document.addEventListener("DOMContentLoaded", function() {
    const leftSection = document.querySelector(".left-section");
    const rightSection = document.querySelector(".right-section");

    // Ensure the left section remains visible
    leftSection.style.position = "sticky";
    leftSection.style.top = "0";

    // Add a scroll listener to the right section
    rightSection.addEventListener("scroll", function() {
        console.log("Scrolling inside the right section...");
        // You can apply additional effects here (e.g., animations or dynamic changes)
    });
});
</script>



<script>
jQuery(document).ready(function($) {
    $('.count').each(function() {
        var $this = $(this);
        var countTo = $this.attr('data-count'); // Read the data-count attribute

        // Extract `+` sign if it exists
        var isPlus = countTo.includes('+');
        var cleanNumber = parseInt(countTo.replace('+', '')); // Remove `+` for calculation

        $this.text(isPlus ? '+' : ''); // Initialize with `+` if it exists

        $({
            countNum: 0
        }).animate({
            countNum: cleanNumber
        }, {
            duration: 4000,
            easing: 'swing',
            step: function() {
                // Update the text with the animated number and the `+` sign if required
                $this.text((isPlus ? '+' : '') + Math.ceil(this.countNum).toLocaleString());
            },
            complete: function() {
                // On complete, ensure the final number is shown
                $this.text((isPlus ? '+' : '') + cleanNumber.toLocaleString());
            },
        });
    });
});
</script>





<script>
$(document).ready(function() {
    $('.testimonials-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
                breakpoint: 1030,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // Add more breakpoints and settings as needed
        ]
    });
});
</script>

<!-- <script>
    $(document).ready(function() {
        $('.plan-monthly-slider').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // Add more breakpoints and settings as needed
            ]
        });
    });
</script> -->

<script>
$(document).ready(function() {
    $('.service-banner-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // Add more breakpoints and settings as needed
        ]
    });
});
</script>



<script>
$(function() {
    var e = "";

    // Filtering functionality
    $(".fil-cat").click(function() {
        $(".portfolio_list ul li").removeClass("active");
        $(this).addClass("active");

        e = $(this).attr("data-rel");
        $("#portfolio").fadeTo(100, 0.1);

        $("#portfolio .showing").not("." + e).fadeOut().removeClass("scale-anm");

        setTimeout(function() {
            $("." + e).fadeIn().addClass("scale-anm");
            $("#portfolio").fadeTo(800, 1);
        }, 300);
    });

    // Fancybox Initialization
    Fancybox.bind('[data-fancybox="videoanimation"]', {
        Toolbar: true, // Show toolbar (Close Button)
        arrows: true, // Enable navigation arrows
        infinite: true, // Loop through images infinitely
        keyboard: true, // Enable keyboard navigation (left/right arrow keys)
        closeButton: "top", // Position of the close button ("top", "inside", "outside", or false)
        animated: true, // Enable animations for opening/closing
        Image: {
            zoom: true // Enable zoom on images
        },
        Thumbs: {
            autoStart: false // Disable thumbnail bar (optional)
        }
    });
});
</script>
<script>
gsap.registerPlugin(ScrollTrigger);

// Scroll-triggered horizontal scroll for content
gsap.to(".scroll-content", {
    xPercent: -100 * (document.querySelectorAll(".alphabet-item").length - 1),
    ease: "none",
    scrollTrigger: {
        trigger: ".scroll-container",
        pin: true,
        scrub: 1,
        end: () => "+=" + document.querySelector(".scroll-content").offsetWidth
    }
});

// Sequential Zoom, Centering, and Rotation Animation
document.querySelectorAll(".alphabet-item").forEach((item, index) => {
    ScrollTrigger.create({
        trigger: item,
        start: "top center",
        end: "bottom center",
        onEnter: () => {
            gsap.to(item, {
                scale: 1.3,
                opacity: 1,
                rotation: 360, // Add rotation on scroll
                duration: 1.6
            });
            gsap.to(item.querySelector("img"), {
                scale: 1.1,
                duration: 1.6
            });
        },
        onLeave: () => {
            gsap.to(item, {
                scale: 1.5,
                opacity: 0.5,
                rotation: 0, // Reset rotation on leave
                duration: 1.6
            });
            gsap.to(item.querySelector("img"), {
                scale: 0.9,
                duration: 1.6
            });
        },
        onEnterBack: () => {
            gsap.to(item, {
                scale: 1.3,
                opacity: 1,
                rotation: 360, // Add rotation on scroll back
                duration: 1.6
            });
            gsap.to(item.querySelector("img"), {
                scale: 1.1,
                duration: 1.6
            });
        },
        onLeaveBack: () => {
            gsap.to(item, {
                scale: 0.8,
                opacity: 0.5,
                rotation: 0, // Reset rotation on leave back
                duration: 1.6
            });
            gsap.to(item.querySelector("img"), {
                scale: 0.9,
                duration: 1.6
            });
        }
    });
});

// Scroll-triggered item zoom animation sequentially with rotation
gsap.utils.toArray(".alphabet-item").forEach((item, index) => {
    ScrollTrigger.create({
        trigger: "item",
        start: "top center",
        end: "bottom center",
        scrub: 1,
        onEnter: () => {
            gsap.to(item, {
                scale: 1.8,
                opacity: 1,
                rotation: 360, // Rotation on scroll
                duration: 0.9
            });
        },
        onLeave: () => {
            gsap.to(item, {
                scale: 0.8,
                opacity: 0.6,
                rotation: 0, // Reset rotation on leave
                duration: 0.9
            });
        }
    });
});
</script>



<script>
$(document).ready(function() {
    $('.brand-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // Add more breakpoints and settings as needed
        ]
    });
});
</script>


<script>
/*************************
      Cursor
    *************************/
const cursor = document.querySelector('#cursor');
const cursorCircle = cursor.querySelector('.cursor__circle');

const mouse = {
    x: -100,
    y: -100
}; // mouse pointer's coordinates
const pos = {
    x: 0,
    y: 0
}; // cursor's coordinates
const speed = 0.1; // between 0 and 1

const updateCoordinates = (e) => {
    mouse.x = e.clientX;
    mouse.y = e.clientY;
};

window.addEventListener('mousemove', updateCoordinates);

function getAngle(diffX, diffY) {
    return Math.atan2(diffY, diffX) * 180 / Math.PI;
}

function getSqueeze(diffX, diffY) {
    const distance = Math.sqrt(diffX ** 2 + diffY ** 2);
    const maxSqueeze = 0.15;
    const accelerator = 1500;
    return Math.min(distance / accelerator, maxSqueeze);
}

const updateCursor = () => {
    const diffX = Math.round(mouse.x - pos.x);
    const diffY = Math.round(mouse.y - pos.y);

    pos.x += diffX * speed;
    pos.y += diffY * speed;

    const angle = getAngle(diffX, diffY);
    const squeeze = getSqueeze(diffX, diffY);

    const scale = `scale(${1 + squeeze}, ${1 - squeeze})`;
    const rotate = `rotate(${angle}deg)`;
    const translate = `translate3d(${pos.x}px, ${pos.y}px, 0)`;

    const shadowX = diffX / 10; // Shadow position relative to movement
    const shadowY = diffY / 10;

    // Apply transforms and shadow with the updated color
    cursor.style.transform = translate;
    cursorCircle.style.transform = rotate + scale;
    cursorCircle.style.boxShadow =
    `${shadowX}px ${shadowY}px 20px rgba(111, 115, 238, 0.8)`; // Updated shadow color
};

function loop() {
    updateCursor();
    requestAnimationFrame(loop);
}

requestAnimationFrame(loop);

// Cursor modifiers (e.g., custom text or styles)
const cursorModifiers = document.querySelectorAll('[data-cursor-type]');
const cursorLinks = document.querySelectorAll('a:not(.cursor-style)');

cursorModifiers.forEach((cursorModifier) => {
    cursorModifier.addEventListener('mouseenter', function() {
        const className = this.getAttribute('data-cursor-type');
        cursor.classList.add(className);
        const cursorText = this.getAttribute('data-custom-text');
        if (cursorText !== null) {
            cursor.setAttribute('data-cursor-text', cursorText);
        } else {
            cursor.setAttribute('data-cursor-text', 'Drag');
        }
    });

    cursorModifier.addEventListener('mouseleave', function() {
        const className = this.getAttribute('data-cursor-type');
        cursor.classList.remove(className);
        cursor.removeAttribute('data-cursor-text');
    });
});

cursorLinks.forEach((cursorLink) => {
    cursorLink.addEventListener('mouseenter', function() {
        cursor.classList.add('cursor-link');
    });

    cursorLink.addEventListener('mouseleave', function() {
        cursor.classList.remove('cursor-link');
    });
});
</script>


<script>
document.addEventListener("DOMContentLoaded", () => {
    const navbar = document.querySelector(".navbar");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled"); // Add class when scrolling down
        } else {
            navbar.classList.remove("scrolled"); // Remove class when scrolling back up
        }
    });
});
</script>


<script>
const images = document.querySelectorAll('img.img-fluid.abs');

document.addEventListener('mousemove', (event) => {
    const {
        clientX,
        clientY
    } = event; // Get mouse coordinates
    const centerX = window.innerWidth / 2; // Center of the screen (horizontally)
    const centerY = window.innerHeight / 2; // Center of the screen (vertically)

    images.forEach((image, index) => {
        const intensity = (index + 1) * 10; // Adjust movement intensity per image
        const offsetX = ((clientX - centerX) / centerX) * intensity;
        const offsetY = ((clientY - centerY) / centerY) * intensity;

        // Apply translation to each image
        image.style.transform = `translate(${offsetX}px, ${offsetY}px)`;
    });
});
document.addEventListener('mouseleave', () => {
    images.forEach((image) => {
        image.style.transform = 'translate(0, 0)';
    });
});
</script>







<!-- <script>
    OTENZA.goToTop = function () {
  var progressPath = document.querySelector('.back-to-top path');
  var pathLength = progressPath.getTotalLength();
  
  // Set up initial stroke for path (progress circle)
  progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
  progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
  progressPath.style.strokeDashoffset = pathLength;

  // Recalculate path length for initial render
  progressPath.getBoundingClientRect();
  progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';

  // Update progress based on scroll
  var updateProgress = function () {
    var scroll = $(window).scrollTop(2);
    var height = $(document).height() - $(window).height();
    var progress = pathLength - (scroll * pathLength / height);
    progressPath.style.strokeDashoffset = progress;

    // Show button when scrolled down more than 300px
    if (scroll > 300) {
      if (!$('.back-to-top').hasClass('active-progress')) {
        $('.back-to-top').addClass('active-progress');
        console.log('active-progress class added');
      }
    } else {
      if ($('.back-to-top').hasClass('active-progress')) {
        $('.back-to-top').removeClass('active-progress');
        console.log('active-progress class removed');
      }
    }
  };

  updateProgress();
  $(window).scroll(updateProgress);

  var offset = 300;  // When to show the button
  var duration = 600; // Duration for scroll-to-top

  // Handle the scroll-to-top behavior
  $('.back-to-top').on('click', function (event) {
    event.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, duration);
    return false;
  });
};

OTENZA.goToTop();


</script> -->


<script>
$(document).ready(function() {
    $('.portfolio-slider').slick({
        slidesToShow: 4, // Show 3 slides on desktop
        slidesToScroll: 1,
        dots: false,
        infinite: true, // Enable infinite loop
        autoplay: true,
        autoplaySpeed: 0,
        speed: 4000, // Duration of smoothness for sliding (ms)
        cssEase: 'linear', // Ensure smooth continuous movement
        centerMode: true, // Center the active slide
        centerPadding: '0', // No padding around the active slide
        arrows: false,
        prevArrow: '<button type="button" class="slick-prev">❮</button>',
        nextArrow: '<button type="button" class="slick-next">❯</button>',
        responsive: [{
                breakpoint: 1025, // Tablet size and above
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    centerMode: false, // Disable center mode for tablets
                }
            },
            {
                breakpoint: 768, // Mobile size
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: false, // Disable center mode for mobile
                }
            },
            {
                breakpoint: 480, // Extra small mobile devices
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    centerMode: false, // Disable center mode for small screens
                }
            }
        ]
    });
});
</script>



<script>
$(document).ready(function() {
    $('.portfolio-slider-reverse').slick({
        slidesToShow: 4, // Show 3 slides on desktop
        slidesToScroll: 1,
        dots: false,
        infinite: true, // Enable infinite loop
        autoplay: true,
        autoplaySpeed: 0,
        speed: 4000, // Duration of smoothness for sliding (ms)
        cssEase: 'linear', // Ensure smooth continuous movement
        centerMode: true, // Center the active slide
        centerPadding: '0', // No padding around the active slide
        arrows: false,
        prevArrow: '<button type="button" class="slick-prev">❮</button>',
        nextArrow: '<button type="button" class="slick-next">❯</button>',
        responsive: [{
                breakpoint: 1025, // Tablet size and above
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    centerMode: false, // Disable center mode for tablets
                }
            },
            {
                breakpoint: 768, // Mobile size
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: false, // Disable center mode for mobile
                }
            },
            {
                breakpoint: 480, // Extra small mobile devices
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    centerMode: false, // Disable center mode for small screens
                }
            }
        ]
    });
});
</script>





<script>
$(document).ready(function() {
    $('.trusted-slider').slick({
        slidesToShow: 6, // Show 3 slides on desktop
        slidesToScroll: 1,
        dots: false,
        infinite: true, // Enable infinite loop
        autoplay: true,
        autoplaySpeed: 0,
        speed: 5000, // Duration of smoothness for sliding (ms)
        cssEase: 'linear', // Ensure smooth continuous movement
        centerMode: true, // Center the active slide
        centerPadding: '0', // No padding around the active slide
        arrows: false,
        prevArrow: '<button type="button" class="slick-prev">❮</button>',
        nextArrow: '<button type="button" class="slick-next">❯</button>',
        responsive: [{
                breakpoint: 1025, // Tablet size and above
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    centerMode: false, // Disable center mode for tablets
                }
            },
            {
                breakpoint: 768, // Mobile size
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: false, // Disable center mode for mobile
                }
            },
            {
                breakpoint: 480, // Extra small mobile devices
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    centerMode: false, // Disable center mode for small screens
                }
            }
        ]
    });
});
</script>


<script>
function openCity(evt, cityName) {
    // Hide all tab content
    const tabcontent = document.getElementsByClassName("tabcontent");
    for (let i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Remove "active" class from all tab links
    const tablinks = document.getElementsByClassName("tablinks");
    for (let i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the selected tab content and add "active" class to the clicked tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Set the default active tab on page load
document.addEventListener("DOMContentLoaded", function() {
    document.querySelector(".tablinks.active").click();
});
</script>

<script>
$(document).ready(function() {
    $('.service-feature-slider.left').slick({
        slidesToShow: 3, // Show 4 slides on desktop
        slidesToScroll: 1,
        dots: false,
        autoplay: true,
        autoplaySpeed: 0,
        speed: 4000, // Duration of smoothness for sliding (ms)
        cssEase: 'linear', // Smooth scrolling effect
        vertical: true, // Enable vertical scrolling
        verticalSwiping: true, // Enable vertical swipe
        centerMode: true, // Centering the slides
        centerPadding: '0', // No padding for centering
        arrows: false,
        draggable: true, // Enable dragging
        swipe: true, // Enable swipe functionality
        touchMove: true, // Allow touch movement
        responsive: [{
                breakpoint: 1025, // Tablet size
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    centerMode: false, // Disable centering for tablets
                }
            },
            {
                breakpoint: 768, // Mobile size
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: false, // Disable centering for mobile
                }
            },
            {
                breakpoint: 480, // Extra small mobile devices
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    centerMode: false, // Disable centering for small screens
                }
            }
        ]
    });
});
</script>



<script>
$(document).ready(function() {
    // Bottom to top scrolling for service-feature-slider-right
    $('.service-feature-slider.right').slick({
        slidesToShow: 3, // Show 4 slides on desktop
        slidesToScroll: 1,
        dots: false,
        autoplay: true,
        autoplaySpeed: 0,
        speed: 4000, // Duration of smoothness for sliding (ms)
        cssEase: 'linear', // Smooth scrolling effect
        vertical: true, // Enable vertical scrolling
        verticalSwiping: true, // Enable vertical swipe
        centerMode: true, // Centering the slides
        centerPadding: '0', // No padding for centering
        arrows: false,
        draggable: true, // Enable dragging
        swipe: true, // Enable swipe functionality
        touchMove: true, // Allow touch movement
        responsive: [{
                breakpoint: 1025, // Tablet size
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    centerMode: false, // Disable centering for tablets
                }
            },
            {
                breakpoint: 768, // Mobile size
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: false, // Disable centering for mobile
                }
            },
            {
                breakpoint: 480, // Extra small mobile devices
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    centerMode: false, // Disable centering for small screens
                }
            }
        ]
    });

});
</script>








<script>
var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) {
        delta /= 2;
    }

    if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
    }

    setTimeout(function() {
        that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i = 0; i < elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
            new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
};
</script>


<script>
window.addEventListener('scroll', function() {
    const video = document.querySelector('.video-background video');
    const section = document.querySelector('.parallax-section');
    const scrollPosition = window.pageYOffset;

    // Adjust the speed of the background video based on scroll position
    const scrollSpeed = 0.5; // Adjust this value for slower or faster parallax
    video.style.transform = `translateY(${scrollPosition * scrollSpeed}px)`;
});
</script>



<script>
function openCity(evt, cityName) {
    // Remove active class from all tab buttons
    const tablinks = document.querySelectorAll(".tablinks");
    tablinks.forEach((tab) => tab.classList.remove("active"));

    // Remove active class from all tab contents
    const tabcontents = document.querySelectorAll(".tabcontent");
    tabcontents.forEach((content) => content.classList.remove("active"));

    // Add active class to the clicked tab button
    evt.currentTarget.classList.add("active");

    // Add active class to the corresponding tab content
    document.getElementById(cityName).classList.add("active");
}
</script>