alert("Welcome to Seventeen Store!");

const hamburgerBtn = document.getElementById("hamburger-button");
const navbarMenu = document.getElementById("navbar");

hamburgerBtn.addEventListener("click", function() {
  navbarMenu.classList.toggle("active");
})

const home = document.getElementById("home");

const imageUrls = [
  './header.jpeg',
  './bg-2.jpg',
];

let currentImageIndex = 0;

function changeBackgroundImage() {
  home.style.backgroundImage = `url('${imageUrls[currentImageIndex]}')`;
  currentImageIndex = (currentImageIndex + 1) % imageUrls.length;
}

setInterval(changeBackgroundImage, 3000);

$(document).ready(function() {
  const aboutSection = $("#about");
  const elementsToFadeIn = aboutSection.find('.about-title, .about-svt, .about1, .misi');
  
  elementsToFadeIn.css('opacity', 0);

  function fadeInContent() {
    elementsToFadeIn.animate({ opacity: 1 }, 1000, 'swing');
  }

  $(window).scroll(function() {
    const scrollTop = $(this).scrollTop();
    const sectionTop = aboutSection.offset().top - 200;
    const sectionBottom = sectionTop + aboutSection.height();

    if (scrollTop >= sectionTop && scrollTop <= sectionBottom) {
      fadeInContent();
    }
  });
});

$(document).ready(function() {
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $("#scroll-to-top").fadeIn();
    } else {
      $("#scroll-to-top").fadeOut();
    }
  });

  $("#scroll-to-top").click(function() {
    $("html, body").animate({ scrollTop: 0 }, { duration: 800, easing: "swing", behavior: "smooth" });
  });
});

