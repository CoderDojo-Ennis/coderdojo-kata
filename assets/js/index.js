window.onload = function() {
  addToggleListners();
  hintsBlockInit();
  addButtonListners();
  addDotListners();
}


function addToggleListners() {
  var acc = document.getElementsByClassName("js-project-panel__toggle");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      
      this.nextElementSibling.classList.toggle("u-hidden");

      if (this.classList.contains("c-project-panel__heading")) {
        this.classList.toggle("c-project-panel__heading--has-close-icon");
        let slideWidth = (this.nextElementSibling.children[0].offsetWidth - 48);
        let slideCount = this.nextElementSibling.children[0].children[0].childElementCount;
        var slides = this.nextElementSibling.children[0].children[0].children;
        let wrapperWidth = ((slideWidth + 96)*slideCount);
        this.nextElementSibling.children[0].children[0].style.width = `${wrapperWidth}px`;
        if (this.classList.contains("c-project-panel__heading--has-close-icon")) {
          for (let slide of slides) {
            //slide.style.height = maxHeight;
            slide.style.width = `${slideWidth}px`
          }
        }
      }
      
    });
  }
}

function hintsBlockInit() {
  var acc = document.getElementsByClassName("c-project-panel__swiper-wrapper");
  var i;

  for (i = 0; i < acc.length; i++) {
    var firstSwiper = acc[i].firstElementChild; 
    firstSwiper.classList.add("swiper-slide-active");
  }
}

function addButtonListners() {
  var acc = document.getElementsByClassName("c-project-panel__swiper-button");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      
      //Find out which button was pressed
      var swiperDirection = true;
      if (this.classList.contains("c-project-panel__swiper-button--prev")) {
        swiperDirection = false;
      }
      console.log(swiperDirection);
      
      //Get slider Wrapper
      var swiperWrapper  = this.parentNode.firstElementChild;
      console.log(swiperWrapper);
      //Get total slides
      slideCount = swiperWrapper.childElementCount;
      console.log(slideCount);
      
      //Find current slide
      var activeSlide = 0;
      var slides = swiperWrapper.children;
      console.log(slides); 
      for (i = 0; i < slideCount; i++) {
        if (slides[i].classList.contains("swiper-slide-active")) {
          activeSlide = i;
        } 
      }
      console.log(`Active Slide: ${activeSlide}`);
  
      
      
      var nextSlide;
      if (swiperDirection)
      {
        nextSlide = activeSlide + 1;
        if (nextSlide == (slideCount - 1)) {
          this.classList.add("c-project-panel__swiper-button--disabled");
        }
        this.nextElementSibling.classList.remove("c-project-panel__swiper-button--disabled");
      } else {
        nextSlide = activeSlide - 1;
        if (nextSlide == 0) {
          this.classList.add("c-project-panel__swiper-button--disabled");
        }
        this.previousElementSibling.classList.remove("c-project-panel__swiper-button--disabled");
      }
      var translationValue= nextSlide*(swiperWrapper.offsetWidth/(slideCount * -1));
      swiperWrapper.style.transform = `translate(${translationValue}px, 0)`;
      console.log(`Slide Wrapper Width: ${swiperWrapper.offsetWidth}`);
      console.log(`Slide Count: ${slideCount}`);
      console.log(`Translation Value: ${translationValue}`);
      

      

      console.log(activeSlide);
      slides[activeSlide].classList.remove("swiper-slide-active");
      slides[nextSlide].classList.add("swiper-slide-active");

      var bulletsWrapper  = this.parentNode.children[1];
      console.log(bulletsWrapper);
      var bullets = bulletsWrapper.children;
      console.log(bullets);
      bullets[activeSlide].classList.remove("c-project-panel__swiper-bullet--active");
      bullets[nextSlide].classList.add("c-project-panel__swiper-bullet--active");

      console.log(activeSlide);
    });
  }
}

function addDotListners() {
  var acc = document.getElementsByClassName("c-project-panel__swiper-bullet");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      
      //Find current bullet
      var activeBullet = 0
      var bullets = this.parentNode.children;
      console.log(bullets); 
      for (i = 0; i < bullets.length; i++) {
        if (bullets[i].classList.contains("c-project-panel__swiper-bullet--active")) {
          activeBullet = i;
        } 
      }
      bullets[activeBullet].classList.remove("c-project-panel__swiper-bullet--active");
      this.classList.add("c-project-panel__swiper-bullet--active");
      
      var clickedBullet = 0
      for (i = 0; i < bullets.length; i++) {
        if (bullets[i].classList.contains("c-project-panel__swiper-bullet--active")) {
          clickedBullet = i;
        } 
      }
      
      console.log(`Active Bullet: ${activeBullet}`);
      console.log(`Clicked Bullet: ${clickedBullet}`);
      var translationValue= clickedBullet*(this.parentNode.previousElementSibling.offsetWidth/(bullets.length * -1));
      this.parentNode.previousElementSibling.style.transform = `translate(${translationValue}px, 0)`;
      console.log(`Translation Value: ${translationValue}`);
    });
  }
}















  
