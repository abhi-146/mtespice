
document.addEventListener("DOMContentLoaded", function() {
  'use strict';



  /**
   * PRELOAD
   * 
   * loading will be end after document is loaded
   */
  
  const preloader = document.querySelector("[data-preaload]");
  
  window.addEventListener("load", function () {
    preloader.classList.add("loaded");
    document.body.classList.add("loaded");
  });
  
  
  
  /**
   * add event listener on multiple elements
   */
  
  const addEventOnElements = function (elements, eventType, callback) {
    for (let i = 0, len = elements.length; i < len; i++) {
      elements[i].addEventListener(eventType, callback);
    }
  }
  
  
  
  /**
   * NAVBAR
   */
  
  const navbar = document.querySelector("[data-navbar]");
  const navTogglers = document.querySelectorAll("[data-nav-toggler]");
  const overlay = document.querySelector("[data-overlay]");
  
  const toggleNavbar = function () {
    navbar.classList.toggle("active");
    overlay.classList.toggle("active");
    document.body.classList.toggle("nav-active");
  }
  
  addEventOnElements(navTogglers, "click", toggleNavbar);
  
  
  
  /**
   * HEADER & BACK TOP BTN
   */
  
  const header = document.querySelector("[data-header]");
  const backTopBtn = document.querySelector("[data-back-top-btn]");
  
  let lastScrollPos = 0;
  
  const hideHeader = function () {
    const isScrollBottom = lastScrollPos < window.scrollY;
    if (isScrollBottom) {
      header.classList.add("hide");
    } else {
      header.classList.remove("hide");
    }
  
    lastScrollPos = window.scrollY;
  }
  
  window.addEventListener("scroll", function () {
    if (window.scrollY >= 50) {
      header.classList.add("active");
      backTopBtn.classList.add("active");
      hideHeader();
    } else {
      header.classList.remove("active");
      backTopBtn.classList.remove("active");
    }
  });
  
  
  
  /**
   * HERO SLIDER
   */
  
  const heroSlider = document.querySelector("[data-hero-slider]");
  const heroSliderItems = document.querySelectorAll("[data-hero-slider-item]");
  const heroSliderPrevBtn = document.querySelector("[data-prev-btn]");
  const heroSliderNextBtn = document.querySelector("[data-next-btn]");
  
  if (heroSlider && heroSliderItems.length > 0 && heroSliderPrevBtn && heroSliderNextBtn) {
    let currentSlidePos = 0;
    let lastActiveSliderItem = heroSliderItems[0];
    let autoSlideInterval;
  
    const updateSliderPos = function () {
      if (lastActiveSliderItem) {
        lastActiveSliderItem.classList.remove("active");
      }
      heroSliderItems[currentSlidePos].classList.add("active");
      lastActiveSliderItem = heroSliderItems[currentSlidePos];
    }
  
    const slideNext = function () {
      if (currentSlidePos >= heroSliderItems.length - 1) {
        currentSlidePos = 0;
      } else {
        currentSlidePos++;
      }
  
      updateSliderPos();
    }
  
    const slidePrev = function () {
      if (currentSlidePos <= 0) {
        currentSlidePos = heroSliderItems.length - 1;
      } else {
        currentSlidePos--;
      }
  
      updateSliderPos();
    }
  
    heroSliderNextBtn.addEventListener("click", slideNext);
    heroSliderPrevBtn.addEventListener("click", slidePrev);
  
    const autoSlide = function () {
      autoSlideInterval = setInterval(slideNext, 10000);
    }
  
    const addEventOnElements = function(elements, event, handler) {
      elements.forEach(element => {
        if (element) {
          element.addEventListener(event, handler);
        }
      });
    }
  
    addEventOnElements([heroSliderNextBtn, heroSliderPrevBtn], "mouseover", function () {
      clearInterval(autoSlideInterval);
    });
  
    addEventOnElements([heroSliderNextBtn, heroSliderPrevBtn], "mouseout", autoSlide);
  
    window.addEventListener("load", autoSlide);
  
    // Initial call to set the first slide as active
    updateSliderPos();
  } 
  
  
  /**
   * PARALLAX EFFECT
   */
  
  const parallaxItems = document.querySelectorAll("[data-parallax-item]");
  
  let x, y;
  
  window.addEventListener("mousemove", function (event) {
  
    x = (event.clientX / window.innerWidth * 10) - 5;
    y = (event.clientY / window.innerHeight * 10) - 5;
  
    // reverse the number eg. 20 -> -20, -5 -> 5
    x = x - (x * 2);
    y = y - (y * 2);
  
    for (let i = 0, len = parallaxItems.length; i < len; i++) {
      x = x * Number(parallaxItems[i].dataset.parallaxSpeed);
      y = y * Number(parallaxItems[i].dataset.parallaxSpeed);
      parallaxItems[i].style.transform = `translate3d(${x}px, ${y}px, 0px)`;
    }
  
  });
  
  // Testimonial Slider & AutoSlider
  

    let currentSlide = 0;
    const slides = document.querySelectorAll('.testimonial .slide');
  
    const totalSlides = slides.length;
    console.log(totalSlides)
    const nextButton = document.querySelector('.navigation .next');
    const prevButton = document.querySelector('.navigation .prev');
    let autoSlideIntervalT;
  
    function nextSlide() {
      currentSlide = (currentSlide + 1) % totalSlides;
      updateSlides();
    }
  
    function prevSlide() {
      currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
      updateSlides();
    }
  
    function updateSlides() {
      const offset = -currentSlide * 100;
      slides.forEach(slide => {
        slide.style.transform = `translateX(${offset}%)`;
      });
    }
  
    function startAutoSlide() {
      autoSlideIntervalT = setInterval(nextSlide, 3000); // Change slide every 3 seconds
    }
  
    function stopAutoSlide() {
      clearInterval(autoSlideIntervalT);
    }
  
    // Event listeners for navigation buttons
    if (nextButton && prevButton) {
      nextButton.addEventListener('click', () => {
        stopAutoSlide();
        nextSlide();
        startAutoSlide();
      });
  
      prevButton.addEventListener('click', () => {
        stopAutoSlide();
        prevSlide();
        startAutoSlide();
      });
    }
  
    // Initialize
    updateSlides();
    startAutoSlide();
  
    // Restart auto sliding when resizing to mobile view
    window.addEventListener('resize', () => {
      if (window.innerWidth <= 768) {
        stopAutoSlide();
        startAutoSlide();
      }
    });
  
    // Auto slide for mobile view
    if (window.innerWidth <= 768) {
      startAutoSlide();
    }



    // Handle navbar active class
    var links = document.querySelectorAll('.navbar-link');
    var currentURL = window.location.href;
    var activeFound = false;

    links.forEach(function(link) {
      if (link.href === currentURL) {
        link.classList.add('active');
        activeFound = true;
      } else {
        link.classList.remove('active');
      }
    });

    if (!activeFound) {
      var defaultLink = document.querySelector('a[href="http://localhost/mtetemp/products/"]');
      if (defaultLink) {
        defaultLink.classList.add('active');
      }
    }

});


function showPopup() {
  document.getElementById("popup").style.display = "flex";
}

function hidePopup() {
  document.getElementById("popup").style.display = "none";
}