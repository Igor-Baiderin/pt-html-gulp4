$(function () {



 $(window).scroll(function(){
if ($(this).scrollTop() > 100) {
$('.scrollup').fadeIn();
} else {
$('.scrollup').fadeOut();
}
});
 
$('.scrollup').click(function(){
$("html, body").animate({ scrollTop: 0 }, 600);
return false;
}); 

//селект городов

  $('#select-style').change(function() {
 value = $(this).find('option:selected').val();
   
 $('div[id^="select-hide"]').hide();
 $('#select-hide'+value).show();
});

  $('#select-style-2').change(function() {
 value = $(this).find('option:selected').val();
   
 $('div[id^="select-hidden"]').hide();
 $('#select-hidden'+value).show();
});

$('#select-style-3').change(function() {
 value = $(this).find('option:selected').val();
   
 $('div[id^="select-hid"]').hide();
 $('#select-hid'+value).show();
});

//Для стилизации чекбоксов и селектов
setTimeout(function() {
	$('.select-style, .main-form__checkbox, .aside-filter__checkbox, .select-visit, .select-country, .select-office, .select-theme, .agency-form__checkbox, .comments-form__attachment, .redaction-form__checkbox, .modal-contract__checkbox, .region-checkbox, .sanatoriums-checkbox').styler();
}, 100)



//Выпадающие списки
  $('.filter__item-drop').on('click', function(){
     $(this).toggleClass('filter__item-drop--active');
     $(this).next().slideToggle(300);
  });

  $('.aside-filter__content-label').on('click', function(){
    $(this).toggleClass('aside-filter__content-label--active');
  });

  $('.region-label').on('click', function(){
    $(this).toggleClass('region-label--active');
  });

  $('.sanatoriums-label').on('click', function(){
    $(this).toggleClass('sanatoriums-label--active');
  });

  $('.redaction-form__label').on('click', function(){
    $(this).toggleClass('redaction-form__label--active');
  });

   $('.catalog__link').on('click', function(e){
    $('.catalog__link').toggleClass('catalog__link--hidden');
    $('.catalog-list').toggleClass('catalog-list--hidden');
    $('.pagination').toggleClass('pagination--hidden');
    $('.catalog-map').toggleClass('catalog-map--hidden');
  });

$('.entry__button').on('click', function(){
    $('.entry-wrapper').toggleClass('entry-wrapper--visible');
    $('.entry__button').toggleClass('entry__button--close');
    $('.header__burger').removeClass('header__burger--close');
    $('.header__bottom').removeClass('header__bottom--visible');
    $('.phone-wrapper').removeClass('phone-wrapper--visible');
    $('.header__phone').removeClass('header__phone--close');
  });

$('.header__phone').on('click', function(){
   $('.phone-wrapper').toggleClass('phone-wrapper--visible');
    $('.header__phone').toggleClass('header__phone--close');
     $('.header__burger').removeClass('header__burger--close');
    $('.header__bottom').removeClass('header__bottom--visible');
    $('.entry__button').removeClass('entry__button--close');
    $('.entry-wrapper').removeClass('entry-wrapper--visible');
});

$('.header__burger').on('click', function(){
    $('.header__bottom').toggleClass('header__bottom--visible');
    $('.header__burger').toggleClass('header__burger--close');
    $('.entry__button').removeClass('entry__button--close');
    $('.entry-wrapper').removeClass('entry-wrapper--visible');
    $('.phone-wrapper').removeClass('phone-wrapper--visible');
    $('.header__phone').removeClass('header__phone--close');
  });


  $('.hero-form__input--region').on('click', function(){
    $('.region-list').toggleClass('region-list--visible');
    $('.sanatoriums-list').removeClass('sanatoriums-list--visible');
  });

   $('.hero-form__input--sanatorium').on('click', function(){
    $('.sanatoriums-list').toggleClass('sanatoriums-list--visible');
    $('.region-list').removeClass('region-list--visible');
  });


  $('.rooms-favorite__button').on('click', function(){
  $(this).toggleClass('rooms-favorite__button--active')
});


  // выбор регионов и санаториев
  if (document.querySelector('.hero-form__input--region') || document.querySelector('.hero-form__input--sanatorium')) {
    function addNewElem(list, index, text) {
      const tagsList = list.querySelector('.tags-list');
      const newElem = document.createElement('li');
      newElem.classList.add('tags-list__item');
      newElem.dataset.index = index;
      newElem.innerHTML = `
      <p class="tags-list__text">${text}</p>
                <img src="images/icons/close-tags.svg" alt="" class="tags-close" />
      `;
      tagsList.append(newElem);
    }

    function removeElem(list, index) {
      const elem = list.querySelector(`.tags-list__item[data-index="${index}"]`);
      if (elem) {
        elem.remove();
      }
    }

    function showOrHideList(list) {
      const tagsList = list.querySelector('.tags-list');
      if (tagsList.children.length === 0) {
        list.classList.remove('active');
      } else {
        list.classList.add('active');
      }
    }

    function calculateCount(wrapper, type) {
      function endText(count) {
        let string = '';
        const n = count % 100;
        switch (true) {
          case n <= 20 && n >= 5:
            string = 'ов';
            break;
          case n % 10 >= 2 && n % 10 <= 4:
            string = 'а';
            break;
          default:
            string = '';
        }
        return string;
      }
      const input = wrapper.querySelector('input[type="text"]');
      const checkboxes = wrapper.querySelectorAll('input[type="checkbox"]:checked');
      if (checkboxes.length !== 0) {
        input.value = `Выбрано ${checkboxes.length} ${type === 'region' ? 'регион' : 'объект'}${endText(
          checkboxes.length
        )}`;
        return;
      }
      input.value = '';
    }

    const wrapperRegion = document.querySelector('.hero-form__input--region');
    const inputRegion = wrapperRegion.querySelector('input[type=text]');
    inputRegion.addEventListener('focus', (event) => {
      event.target.parentElement.classList.add('active');
    });
    const tagsRegion = document.querySelector('.tags-region');

    wrapperRegion.addEventListener('click', (event) => {
      const target = event.target;
      if (target.closest('.region-label')) {
        const targetLabel = target.closest('.region-label');
        const targetText = targetLabel.innerText;
        const targetIndex = targetLabel.dataset.index;
        const checkbox = targetLabel.querySelector('input[type=checkbox]');
        if (checkbox.checked) {
          addNewElem(tagsRegion, targetIndex, targetText);
        } else {
          removeElem(tagsRegion, targetIndex);
        }
        showOrHideList(tagsRegion);
        calculateCount(wrapperRegion, 'region');
      }
    });

    tagsRegion.addEventListener('click', (event) => {
      const target = event.target;
      if (target.closest('.tags-close')) {
        const listItem = target.closest('.tags-list__item');
        const itemIndex = listItem.dataset.index;
        const checkboxLabel = wrapperRegion.querySelector(`label[data-index='${itemIndex}']`);
        const checkboxInput = checkboxLabel.querySelector('input[type=checkbox]');
        const checkboxWrapper = checkboxLabel.children[0];
        checkboxLabel.classList.remove('region-label--active');
        checkboxInput.checked = false;
        checkboxWrapper.classList.remove('checked');
        listItem.remove();
        showOrHideList(tagsRegion);
        calculateCount(wrapperRegion, 'region');
      }
    });

    const wrapperSanatorium = document.querySelector('.hero-form__input--sanatorium');
    const inputSanatorium = wrapperSanatorium.querySelector('input[type=text]');
    inputSanatorium.addEventListener('focus', (event) => {
      event.target.parentElement.classList.add('active');
    });
    const tagsSanatorium = document.querySelector('.tags-sanatoriums');

    wrapperSanatorium.addEventListener('click', (event) => {
      const target = event.target;
      if (target.closest('.sanatoriums-label')) {
        const targetLabel = target.closest('.sanatoriums-label');
        const targetText = targetLabel.innerText;
        const targetIndex = targetLabel.dataset.index;
        const checkbox = targetLabel.querySelector('input[type=checkbox]');
        if (checkbox.checked) {
          addNewElem(tagsSanatorium, targetIndex, targetText);
        } else {
          removeElem(tagsSanatorium, targetIndex);
        }
        showOrHideList(tagsSanatorium);
        calculateCount(wrapperSanatorium, 'sanatorium');
      }
    });

    tagsSanatorium.addEventListener('click', (event) => {
      const target = event.target;
      if (target.closest('.tags-close')) {
        const listItem = target.closest('.tags-list__item');
        const itemIndex = listItem.dataset.index;
        const checkboxLabel = wrapperSanatorium.querySelector(`label[data-index='${itemIndex}']`);
        const checkboxInput = checkboxLabel.querySelector('input[type=checkbox]');
        const checkboxWrapper = checkboxLabel.children[0];
        checkboxLabel.classList.remove('sanatoriums-label--active');
        checkboxInput.checked = false;
        checkboxWrapper.classList.remove('checked');
        listItem.remove();
        showOrHideList(tagsSanatorium);
        calculateCount(wrapperSanatorium, 'sanatorium');
      }
    });

    document.body.addEventListener('click', (event) => {
      const target = event.target;
      if (!target.closest('.hero-form__input--region')) {
        wrapperRegion.classList.remove('active');
      }
      if (!target.closest('.hero-form__input--sanatorium')) {
        wrapperSanatorium.classList.remove('active');
      }
    });
  }

  


  //ОТЗЫВЫ
  document.addEventListener('DOMContentLoaded', () => {
    const allSlides = document.querySelectorAll('.review');
    allSlides.forEach((element) => {
      element.addEventListener('click', function () {
        allSlides.forEach((el) => el.classList.remove('active'));
        this.classList.add('active');
      });
    });
  });

  if (document.querySelector('.reviews') || document.querySelector('.object-reviews')) {
    function openReview(reviewElem) {
      const text = reviewElem.querySelector('.review__text');
      const buttons = reviewElem.querySelector('.review-buttons');
      text.classList.add('review__text--full');
      buttons.classList.add('open');
    }

    function closeAllReviews() {
      const texts = document.querySelectorAll('.review__text.review__text--full');
      const buttons = document.querySelectorAll('.review-buttons.open');
      texts.forEach((item) => item.classList.remove('review__text--full'));
      buttons.forEach((item) => item.classList.remove('open'));
    }

    function handlerReviews(event) {
      const target = event.target;
      if (target.closest('.review-buttons')) {
        const buttons = target.closest('.review-buttons');
        if (!buttons.classList.contains('open')) {
          closeAllReviews();
          openReview(target.closest('.review'));
        } else {
          closeAllReviews();
        }
      }
      if (!target.closest('.review') || target.closest('.slider__arrow')) {
        closeAllReviews();
      }
    }

    document.querySelector('.reviews') && document.querySelector('.reviews').addEventListener('click', handlerReviews);

    document.querySelector('.object-reviews') &&
      document.querySelector('.object-reviews').addEventListener('click', handlerReviews);
  }

  // Тарифы
  if (document.querySelector('.rooms')) {
    function closeAllTariffs() {
      const tariffsElems = document.querySelectorAll('.tariffs');
      tariffsElems.forEach((item) => closeClosestTariffs(item));
    }

    function openClosestTariffs(target) {
      const parentWrapper = target.closest('.rooms__item');
      const tariffsElem = parentWrapper.querySelector('.tariffs.tariffs--hidden');
      const primaryBtn = parentWrapper.querySelector('.rooms__button-primary');
      const secondaryBtn = parentWrapper.querySelector('.rooms__button-secondary');
      tariffsElem.classList.remove('tariffs--hidden');
      primaryBtn.classList.add('rooms__button--hidden');
      secondaryBtn.classList.remove('rooms__button--hidden');
    }

    function closeClosestTariffs(target) {
      const parentWrapper = target.closest('.rooms__item');
      const tariffsElem = parentWrapper.querySelector('.tariffs');
      const primaryBtn = parentWrapper.querySelector('.rooms__button-primary');
      const secondaryBtn = parentWrapper.querySelector('.rooms__button-secondary');
      tariffsElem.classList.add('tariffs--hidden');
      primaryBtn.classList.remove('rooms__button--hidden');
      secondaryBtn.classList.add('rooms__button--hidden');
    }

    document.querySelector('.rooms').addEventListener('click', (event) => {
      const target = event.target;

      if (target.matches('.rooms__button-primary')) {
        closeAllTariffs();
        openClosestTariffs(target);
      }

      if (target.matches('.rooms__button-secondary')) {
        closeClosestTariffs(target);
      }
    });
  }

  // детали
  if (document.querySelector('.tariffs')) {
    function closeAllDetails() {
      const tariffsBottom = document.querySelectorAll('.tariffs-bottom');
      tariffsBottom.forEach((item) => closeClosestDetails(item));
    }

    function openClosestDetails(target) {
      const parentWrapper = target.closest('.tariffs-item');
      const tariffsBottomElem = parentWrapper.querySelector('.tariffs-bottom.tariffs-bottom--hidden');
      const primaryBtn = parentWrapper.querySelector('.tariffs-item__details-primary');
      const secondaryBtn = parentWrapper.querySelector('.tariffs-item__details-secondary');
      tariffsBottomElem.classList.remove('tariffs-bottom--hidden');
      primaryBtn.classList.add('tariffs-item__details--hidden');
      secondaryBtn.classList.remove('tariffs-item__details--hidden');
    }

    function closeClosestDetails(target) {
      const parentWrapper = target.closest('.tariffs-item');
      const tariffsBottomElem = parentWrapper.querySelector('.tariffs-bottom');
      const primaryBtn = parentWrapper.querySelector('.tariffs-item__details-primary');
      const secondaryBtn = parentWrapper.querySelector('.tariffs-item__details-secondary');
      tariffsBottomElem.classList.add('tariffs-bottom--hidden');
      primaryBtn.classList.remove('tariffs-item__details--hidden');
      secondaryBtn.classList.add('tariffs-item__details--hidden');
    }

    const wrapper = document.querySelector('.tariffs').closest('ul');
    wrapper.addEventListener('click', (event) => {
      const target = event.target;

      if (target.matches('.tariffs-item__details-primary')) {
        closeAllDetails();
        openClosestDetails(target);
      }

      if (target.matches('.tariffs-item__details-secondary')) {
        closeClosestDetails(target);
      }

      if (target.matches('.tariffs-bottom__button')) {
        closeClosestDetails(target);
      }
    });
  }

  //МОДАЛЬНЫЕ ОКНА

  $('.contacts-list__button').on('click', function(){
    $('.modal-overlay').addClass('modal-overlay--visible');
    $('.modal-contacts__dialog').addClass('modal-contacts__dialog--visible');
  });

   $('.rooms-info__button').on('click', function(){
    $('.modal-overlay').addClass('modal-overlay--visible');
    $('.modal-description__dialog').addClass('modal-description__dialog--visible');
  });

  $('.object-aside__button').on('click', function(){
    $('.modal-overlay').addClass('modal-overlay--visible');
    $('.modal-profiles__dialog').addClass('modal-profiles__dialog--visible');
  });

  $('.object-reviews__button').on('click', function(){
    $('.modal-overlay').addClass('modal-overlay--visible');
    $('.modal-reviews__dialog').addClass('modal-reviews__dialog--visible');
  });

  $('.object-address__button').on('click', function(){
    $('.modal-overlay').addClass('modal-overlay--visible');
    $('.modal-address__dialog').addClass('modal-address__dialog--visible');
  });

   $('.table-info__button--cancel').on('click', function(){
    $('.modal-overlay').addClass('modal-overlay--visible');
    $('.modal-cancellation__dialog').addClass('modal-cancellation__dialog--visible');
  });

    $('.table-info__contract').on('click', function(){
    $('.modal-overlay').addClass('modal-overlay--visible');
    $('.modal-contract__dialog').addClass('modal-contract__dialog--visible');
  });

     $('.table-bottom__button--reduct').on('click', function(){
    $('.modal-overlay').addClass('modal-overlay--visible');
    $('.modal-changing__dialog').addClass('modal-changing__dialog--visible');
  });

    $('.table-bottom__button--list').on('click', function(){
    $('.modal-overlay').addClass('modal-overlay--visible');
    $('.modal-list__dialog').addClass('modal-list__dialog--visible');
  });

   $('.table-bottom__button--transfer').on('click', function(){
    $('.modal-overlay').addClass('modal-overlay--visible');
    $('.modal-contacts__dialog').addClass('modal-contacts__dialog--visible');
  });

    $('.corporate-advantages__item').on('click', function(){
    $('.modal-overlay').addClass('modal-overlay--visible');
    $('.modal-corporate__dialog').addClass('modal-corporate__dialog--visible');
  });

   $('.tariffs-item__title--underline').on('click', function(){
    $('.modal-overlay').addClass('modal-overlay--visible');
    $('.modal-room__dialog').addClass('modal-room__dialog--visible');
  });

  $('.header__search, .search-noresult__button--search').on('click', function(){
    $('.modal-overlay').addClass('modal-overlay--visible');
    $('.modal-search__dialog').addClass('modal-search__dialog--visible');
     $('.header__burger').removeClass('header__burger--close');
    $('.header__bottom').removeClass('header__bottom--visible');
     $('.entry__button').removeClass('entry__button--close');
    $('.entry-wrapper').removeClass('entry-wrapper--visible');
     $('.phone-wrapper').removeClass('phone-wrapper--visible');
    $('.header__phone').removeClass('header__phone--close');

  });



    $(document).keydown(function(event) {
        if (event.keyCode == 27) {
            event.preventDefault();
            $(".modal-overlay").removeClass("modal-overlay--visible");
            $(".modal__dialog").removeClass("modal-dialog--visible");
            $(".modal-search__dialog").removeClass('modal-search__dialog--visible');
            $(".modal-contacts__dialog").removeClass('modal-contacts__dialog--visible');
            $(".modal-reviews__dialog").removeClass('modal-reviews__dialog--visible');
            $(".modal-booking__dialog").removeClass('modal-booking__dialog--visible');
            $(".modal-profiles__dialog").removeClass('modal-profiles__dialog--visible');
            $(".modal-cancellation__dialog").removeClass('modal-cancellation__dialog--visible');
            $(".modal-contract__dialog").removeClass('modal-contract__dialog--visible');
            $(".modal-changing__dialog").removeClass('modal-changing__dialog--visible');
            $(".modal-list__dialog").removeClass('modal-list__dialog--visible');
            $(".modal-address__dialog").removeClass('modal-address__dialog--visible');
            $(".modal-corporate__dialog").removeClass('modal-corporate__dialog--visible');
            $(".modal-room__dialog").removeClass('modal-room__dialog--visible');
            $(".modal-description__dialog").removeClass('modal-description__dialog--visible');
             
        }
    });





  if (document.querySelector('.catalog-objects')) {
    const catalogObjects = document.querySelector('.catalog-objects');
    catalogObjects.addEventListener('click', (event) => {
      const target = event.target;
      if (target.matches('.catalog-item__button--booking')) {
        const modalOverlay = document.querySelector('.modal-overlay');
        const modlaDialog = document.querySelector('.modal-booking__dialog');
        const modalTitle = document.querySelector('.modal-dialog__name');
        const catalogItemTitle = target.closest('.catalog-item__wrapper').querySelector('.catalog-item__title');
        modalOverlay.classList.add('modal-overlay--visible');
        modlaDialog.classList.add('modal-booking__dialog--visible');
        modalTitle.textContent = catalogItemTitle.textContent;
      }
    })
  }


  $('.modal-close, .modal-overlay').on('click', function(){
    $('.modal-overlay').removeClass('modal-overlay--visible');
    $('.modal-dialog').removeClass('modal-dialog--visible');
     $('.modal-contacts__dialog').removeClass('modal-contacts__dialog--visible');
    $('.modal-profiles__dialog').removeClass('modal-profiles__dialog--visible');
    $('.modal-reviews__dialog').removeClass('modal-reviews__dialog--visible');
    $('.modal-cancellation__dialog').removeClass('modal-cancellation__dialog--visible');
    $('.modal-contract__dialog').removeClass('modal-contract__dialog--visible');
    $('.modal-changing__dialog').removeClass('modal-changing__dialog--visible');
    $('.modal-list__dialog').removeClass('modal-list__dialog--visible');
    $('.modal-search__dialog').removeClass('modal-search__dialog--visible');
    $('.modal-booking__dialog').removeClass('modal-booking__dialog--visible');
    $('.modal-address__dialog').removeClass('modal-address__dialog--visible');
    $('.modal-corporate__dialog').removeClass('modal-corporate__dialog--visible');
    $('.modal-room__dialog').removeClass('modal-room__dialog--visible');
    $('.modal-description__dialog').removeClass('modal-description__dialog--visible');

  });


   $('.aside-filter__button').on('click', function(){
    $('.aside-filter__wrapper').toggleClass('aside-filter__wrapper--visible');
  });

$(".rate-yo").rateYo({
    ratedFill: "#E0292A",
    normalFill: "#F3F3F3",
    spacing: "5px",
    starWidth: "16px"
  });


//СЛАЙДЕРЫ

  $('.banner-sliders').slick({
  dots: true,
  prevArrow: '<button type="button" class="slider__arrow slider__arrow--left"><img src="images/icons/banner-slider-left.svg" alt="left"></button>',
  nextArrow: '<button type="button" class="slider__arrow slider__arrow--right"><img src="images/icons/banner-slider-right.svg" alt="right">',
});

  $('.best-cards').slick({
  slidesToScroll: 1,
  slidesToShow: 3,
  dots: false,
  prevArrow: '<button type="button" class="slider__arrow slider__arrow--left"><img src="images/icons/banner-slider-left.svg" alt="left"></button>',
  nextArrow: '<button type="button" class="slider__arrow slider__arrow--right"><img src="images/icons/banner-slider-right.svg" alt="right">',
  responsive: [
    {
      breakpoint: 993,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
      }
    },
    {
      breakpoint: 431,
      settings: {
        dots: true,
        slidesToShow: 1,

      }
    },
    
  ]
});

 $('.popular-cards').slick({
  prevArrow: '<button type="button" class="slider__arrow slider__arrow--left"><img src="images/icons/banner-slider-left.svg" alt="left"></button>',
  nextArrow: '<button type="button" class="slider__arrow slider__arrow--right"><img src="images/icons/banner-slider-right.svg" alt="right">',
  responsive: [
     {
      breakpoint: 2050,
      settings: "unslick"
      },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 431,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
      }
    },
  ]
});

$('.review-wrapper').slick({
  prevArrow: '<button type="button" class="slider__arrow slider__arrow--left"><img src="images/icons/banner-slider-left.svg" alt="left"></button>',
  nextArrow: '<button type="button" class="slider__arrow slider__arrow--right"><img src="images/icons/banner-slider-right.svg" alt="right">',
});


$('.certificates__wrapper').slick({
  prevArrow: '<button type="button" class="slider__arrow slider__arrow--left"><img src="images/icons/banner-slider-left.svg" alt="left"></button>',
  nextArrow: '<button type="button" class="slider__arrow slider__arrow--right"><img src="images/icons/banner-slider-right.svg" alt="right">',
  dots: true,
  slidesToScroll: 1,
  slidesToShow: 5,
});



$('.news-slider').slick({
  prevArrow: '<button type="button" class="slider__arrow slider__arrow--left"><img src="images/icons/banner-slider-left.svg" alt="left"></button>',
  nextArrow: '<button type="button" class="slider__arrow slider__arrow--right"><img src="images/icons/banner-slider-right.svg" alt="right">',
  responsive: [
     {
      breakpoint: 2050,
      settings: "unslick"
      },
    {
      breakpoint: 993,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 577,
      settings: {
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    },
  ]
});


$('.company-certificates').slick({
  prevArrow: '<button type="button" class="slider__arrow slider__arrow--left"><img src="images/icons/banner-slider-left.svg" alt="left"></button>',
  nextArrow: '<button type="button" class="slider__arrow slider__arrow--right"><img src="images/icons/banner-slider-right.svg" alt="right">',
  responsive: [
     {
      breakpoint: 2050,
      settings: "unslick"
      },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 577,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    },
  ]
});

$('.object-slider').slick({
  prevArrow: '<button type="button" class="slider__arrow slider__arrow--left"><img src="images/icons/banner-slider-left.svg" alt="left"></button>',
  nextArrow: '<button type="button" class="slider__arrow slider__arrow--right"><img src="images/icons/banner-slider-right.svg" alt="right">',
  slidesToScroll: 1,
  slidesToShow: 5,
  asNavFor: ".object-sliderbig",
  responsive: [
    {
      breakpoint: 1201,
      settings: {
        slidesToShow: 4,
      }
    },
    {
      breakpoint: 577,
      settings: {
        arrows: false,
        slidesToShow: 3,
      }
    },
    {
      breakpoint: 361,
      settings: {
        arrows: false,
        slidesToShow: 2,
      }
    },
    
  ]
});


$('.object-sliderbig').slick({
  arrows: false,
  slidesToScroll: 1,
  slidesToShow: 1,
  fade: true,
  asNavFor: ".object-slider",
  responsive: [
    {
      breakpoint: 577,
      settings: {
        arrows: true,
        prevArrow: '<button type="button" class="slider__arrow slider__arrow--left"><img src="images/icons/banner-slider-left.svg" alt="left"></button>',
  nextArrow: '<button type="button" class="slider__arrow slider__arrow--right"><img src="images/icons/banner-slider-right.svg" alt="right">',
        
      }
    },
    
  ]

});


$('.treatment-slider, .food-slider, .ski-slider, .sport-slider').slick({
  prevArrow: '<button type="button" class="slider__arrow slider__arrow--left"><img src="images/icons/banner-slider-left.svg" alt="left"></button>',
  nextArrow: '<button type="button" class="slider__arrow slider__arrow--right"><img src="images/icons/banner-slider-right.svg" alt="right">',
  slidesToScroll: 1,
  slidesToShow: 2,
  responsive: [
    {
      breakpoint: 501,
      settings: {
        slidesToShow: 1,
      }
    },
    
  ]
});

//POPUPS
   $('.company-certificates__item, .catalog-item__img .news-card__wrapper, .popular-card, .best-card__img, .certificates__img, .booking-info__img').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		closeBtnInside: false,
		fixedContentPos: true,
		mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
		image: {
			verticalFit: true
		},
		zoom: {
			enabled: true,
			duration: 300 
		}
	});

$('.rooms__img-wrapper').each(function() { // the containers for all your galleries
    $(this).magnificPopup({
        delegate: 'a', // the selector for gallery item
        type: 'image',
        gallery: {
          enabled:true
        }
    });
});

$('.main-slider').each(function() { // the containers for all your galleries
    $(this).magnificPopup({
        delegate: 'a', // the selector for gallery item
        type: 'image',
        gallery: {
          enabled:true
        }
    });
});




  $('.treatment-slider').magnificPopup({
		delegate: 'a',
		type: 'image',
		closeOnContentClick: false,
		closeBtnInside: false,
		mainClass: 'mfp-with-zoom mfp-img-mobile',
		image: {
			verticalFit: true
		},
		gallery: {
			enabled: true
		},
		zoom: {
			enabled: true,
			duration: 300, // don't foget to change the duration also in CSS
			opener: function(element) {
				return element.find('.treatment-slider__img');
			}
		}
		
	});

  
  $('.food-slider').magnificPopup({
		delegate: 'a',
		type: 'image',
		closeOnContentClick: false,
		closeBtnInside: false,
		mainClass: 'mfp-with-zoom mfp-img-mobile',
		image: {
			verticalFit: true
		},
		gallery: {
			enabled: true
		},
		zoom: {
			enabled: true,
			duration: 300, // don't foget to change the duration also in CSS
			opener: function(element) {
				return element.find('.food-slider__img');
			}
		}
	});

  $('.ski-slider').magnificPopup({
		delegate: 'a',
		type: 'image',
		closeOnContentClick: false,
		closeBtnInside: false,
		mainClass: 'mfp-with-zoom mfp-img-mobile',
		image: {
			verticalFit: true
		},
		gallery: {
			enabled: true
		},
		zoom: {
			enabled: true,
			duration: 300, // don't foget to change the duration also in CSS
			opener: function(element) {
				return element.find('.ski-slider__img');
			}
		}
	});

   $('.sport-slider').magnificPopup({
		delegate: 'a',
		type: 'image',
		closeOnContentClick: false,
		closeBtnInside: false,
		mainClass: 'mfp-with-zoom mfp-img-mobile',
		image: {
			verticalFit: true
		},
		gallery: {
			enabled: true
		},
		zoom: {
			enabled: true,
			duration: 300, // don't foget to change the duration also in CSS
			opener: function(element) {
				return element.find('.sport-slider__img');
			}
		}
	});

   $('.company-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		closeOnContentClick: false,
		closeBtnInside: false,
		mainClass: 'mfp-with-zoom mfp-img-mobile',
		image: {
			verticalFit: true
		},
		gallery: {
			enabled: true
		},
		zoom: {
			enabled: true,
			duration: 300, // don't foget to change the duration also in CSS
			opener: function(element) {
				return element.find('img');
			}
		}
	});


  // Двойной календарь на главной
  // работает в зависимости с daterangepicker.js и moment.js
  $(function () {
    $('#input-double-calendar').daterangepicker({
      autoUpdateInput: true,
      locale: {
        formatStart: 'DD MMMM',
        formatEnd: 'DD MMMM',
        format: 'DD.MM.YY',
        separator: ' — ',
        applyLabel: 'Apply',
        cancelLabel: 'Cancel',
        fromLabel: 'с',
        toLabel: 'по',
        beforeFirstDate: 'с ',
        beforeSecondDate: 'по ',
        customRangeLabel: 'Custom',
        weekLabel: 'W',
        daysOfWeek: ['ВС', 'ПН', 'ВТ', 'СР', 'ЧТ', 'ПТ', 'СБ'],
        monthNames: [
          'Январь',
          'Февраль',
          'Март',
          'Апрель',
          'Май',
          'Июнь',
          'Июль',
          'Август',
          'Сентябрь',
          'Октябрь',
          'Ноябрь',
          'Декабрь',
        ],
        monthRu: [
          'января',
          'февраля',
          'марта',
          'апреля',
          'мая',
          'июня',
          'июля',
          'августа',
          'сентября',
          'октября',
          'ноября',
          'декабря',
        ],
        firstDay: 1,
      },
      linkedCalendars: true,
      showCustomRangeLabel: false,
      minDate: moment().startOf('day'),
      // "maxDate": moment().add(30,'d'), // если нужно ограничение на кол-во дней, например 30
      opens: 'center',
      buttonClasses: 'btn-hidden',
    });
    const doubleCalendar = document.getElementById('input-double-calendar');
    if (doubleCalendar && doubleCalendar.dataset.start) {
      $('#input-double-calendar').data('daterangepicker').setStartDate(doubleCalendar.dataset.start);
    }
    if (doubleCalendar && doubleCalendar.dataset.end) {
      $('#input-double-calendar').data('daterangepicker').setEndDate(doubleCalendar.dataset.end);
    }
    if (doubleCalendar && doubleCalendar.dataset.min) {
      $('#input-double-calendar').data('daterangepicker').minDate = moment(new Date(doubleCalendar.dataset.min));
    }
  });

  // одиночный календарь
  $(function () {
    $('#input-single-calendar').daterangepicker({
      autoUpdateInput: true,
      locale: {
        formatStart: 'DD MMMM',
        formatEnd: 'DD MMMM',
        format: 'DD.MM.YYYY',
        separator: ' — ',
        applyLabel: 'Apply',
        cancelLabel: 'Cancel',
        fromLabel: 'с',
        toLabel: 'по',
        customRangeLabel: 'Custom',
        weekLabel: 'W',
        daysOfWeek: ['ВС', 'ПН', 'ВТ', 'СР', 'ЧТ', 'ПТ', 'СБ'],
        monthNames: [
          'Январь',
          'Февраль',
          'Март',
          'Апрель',
          'Май',
          'Июнь',
          'Июль',
          'Август',
          'Сентябрь',
          'Октябрь',
          'Ноябрь',
          'Декабрь',
        ],
        firstDay: 1,
        beforeFirstDate: 'Заезд ',
      },
      linkedCalendars: true,
      showCustomRangeLabel: false,
      minDate: moment().startOf('hour'),
      opens: 'center',
      buttonClasses: 'btn-hidden',
      singleDatePicker: true,
      autoApply: true,
    });

    const singleCalendar = document.getElementById('input-single-calendar');
    if (singleCalendar && singleCalendar.dataset.start) {
      $('#input-single-calendar').data('daterangepicker').setStartDate(singleCalendar.dataset.start);
      $('#input-single-calendar').data('daterangepicker').setEndDate(singleCalendar.dataset.start);
    }
    if (singleCalendar && singleCalendar.dataset.min) {
      $('#input-single-calendar').data('daterangepicker').minDate = moment(new Date(singleCalendar.dataset.min));
    }

    $('#input-single-calendar-checkout').daterangepicker({
      autoUpdateInput: true,
      locale: {
        formatStart: 'DD MMMM',
        formatEnd: 'DD MMMM',
        format: 'DD.MM.YYYY',
        separator: ' — ',
        applyLabel: 'Apply',
        cancelLabel: 'Cancel',
        fromLabel: 'с',
        toLabel: 'по',
        customRangeLabel: 'Custom',
        weekLabel: 'W',
        daysOfWeek: ['ВС', 'ПН', 'ВТ', 'СР', 'ЧТ', 'ПТ', 'СБ'],
        monthNames: [
          'Январь',
          'Февраль',
          'Март',
          'Апрель',
          'Май',
          'Июнь',
          'Июль',
          'Август',
          'Сентябрь',
          'Октябрь',
          'Ноябрь',
          'Декабрь',
        ],
        firstDay: 1,
        beforeFirstDate: 'Выезд ',
      },
      linkedCalendars: true,
      showCustomRangeLabel: false,
      minDate: moment().startOf('hour'),
      opens: 'center',
      buttonClasses: 'btn-hidden',
      singleDatePicker: true,
      autoApply: true,
    });
    const singleCalendarCheckout = document.getElementById('input-single-calendar-checkout');
    if (singleCalendarCheckout && singleCalendarCheckout.dataset.start) {
      $('#input-single-calendar-checkout').data('daterangepicker').setStartDate(singleCalendarCheckout.dataset.start);
      $('#input-single-calendar-checkout').data('daterangepicker').setEndDate(singleCalendarCheckout.dataset.start);
    }
    if (singleCalendarCheckout && singleCalendarCheckout.dataset.min) {
      $('#input-single-calendar-checkout').data('daterangepicker').minDate = moment(
        new Date(singleCalendarCheckout.dataset.min)
      );
    }
  });

 // выбор количества человек
  $(function () {
    if (document.getElementById('input-people')) {
      // общие функции для счетчиков
      // изменение инпута
      function changeInputCounter(input, action) {
        const minus = input.parentElement.querySelector('.button.minus');
        const plus = input.parentElement.querySelector('.button.plus');
        if (action === 'increment') {
          input.value++;
        } else if (action === 'decrement') {
          input.value--;
        }
        minus.disabled = input.value === input.getAttribute('data-min');
        plus.disabled = input.value === input.getAttribute('data-max');
      }

      // удаление недопустимых значений
      function replaceNoDigit(item) {
        const min = item.getAttribute('data-min');
        const max = item.getAttribute('data-max');
        item.value = item.value.replace(/\D/, '');
        item.value = Number(item.value);
        if (+item.value === '' || +item.value < +min) item.value = +min;
        if (+item.value > +max) item.value = +max;
      }

      // создание элемента с селектом
      function generateSelect(num) {
        const elem = document.createElement('div');
        const wrapper = document.createElement('div');
        wrapper.className = 'people-dropdown__children';
        wrapper.style.zIndex = 30 - num;

        elem.className = 'people-dropdown-select__scroll';
        elem.insertAdjacentHTML(
          'beforeend',
          `
        <label class="people-dropdown-select__label">
          <input name="children[${num}]" value="less-1" type="radio" class="people-dropdown-select__input">
          до 1 года
        </label>
      `
        );
        for (let i = 1; i <= 17; i++) {
          elem.insertAdjacentHTML(
            'beforeend',
            `
          <label class="people-dropdown-select__label">
            <input name="children[${num}]" value="${i}" type="radio" class="people-dropdown-select__input">
            ${i} ${i === 1 ? 'год' : i > 4 ? 'лет' : 'года'}
          </label>
        `
          );
        }

        wrapper.innerHTML = `
        <span>Возраст ${num}&nbsp;ребенка</span>
        <div class="people-dropdown-select">
          <input type="text" class="people-dropdown-select__title" required placeholder="Выберите возраст" readonly>
          <div class="people-dropdown-select__content">
            <div class="people-dropdown-select__scroll">

            </div>
          </div>
        </div>
      `;
        wrapper.querySelector('.people-dropdown-select__scroll').append(elem);
        return wrapper;
      }

      // проверка на кол-во селектов
      function addAndRemoveSelects() {
        const input = document.querySelector('.people-dropdown__input.people-dropdown__input--children');
        const alert = document.querySelector('.people-dropdown__alert');
        const dropdown = document.querySelector('.people-dropdown');
        const peopleDropdownSelects = dropdown.querySelectorAll('.people-dropdown__children');

        if (peopleDropdownSelects.length === 0) {
          alert.style.display = 'none';
        } else {
          alert.style.display = 'block';
        }
        if (input.value === peopleDropdownSelects.length) return;
        if (input.value > peopleDropdownSelects.length) {
          dropdown.insertAdjacentElement('beforeend', generateSelect(peopleDropdownSelects.length + 1));
          addAndRemoveSelects();
        } else if (input.value < peopleDropdownSelects.length) {
          peopleDropdownSelects[peopleDropdownSelects.length - 1].remove();
          addAndRemoveSelects();
        }
      }

      // заполнение главного инпута
      function fillInputPeople() {
        const inputPeople = document.getElementById('input-people');
        const adult = document.querySelector('.people-dropdown__input[name="adult"]');
        const children = document.querySelector('.people-dropdown__input--children');
        inputPeople.value = `${adult.value} ${+children.value !== 0 ? 'взр + ' + children.value + ' реб' : 'взрослых'}`;
      }
      fillInputPeople();

      // основная часть выпадашки
      const inputPeople = document.getElementById('input-people');
      const peopleDropdown = document.querySelector('.people-dropdown');
      const peopleDropdownInputs = peopleDropdown.querySelectorAll('.people-dropdown__input');

      peopleDropdownInputs.forEach((item) => changeInputCounter(item));

      peopleDropdownInputs.forEach((item) =>
        item.addEventListener('input', () => {
          replaceNoDigit(item);
          changeInputCounter(item);
          addAndRemoveSelects();
          fillInputPeople();
        })
      );

      inputPeople.addEventListener('focus', () => {
        peopleDropdown.classList.add('active');
        fillInputPeople();
      });
      inputPeople.addEventListener('input', fillInputPeople);

      inputPeople.parentElement.addEventListener('click', (event) => {
        const target = event.target;

        if (target.matches('.button.plus')) {
          const input = target.parentElement.querySelector('input');
          changeInputCounter(input, 'increment');
          addAndRemoveSelects();
          fillInputPeople();
        }

        if (target.matches('.button.minus')) {
          const input = target.parentElement.querySelector('input');
          changeInputCounter(input, 'decrement');
          addAndRemoveSelects();
          fillInputPeople();
        }

        if (target.matches('.people-dropdown-select__label')) {
          const select = target.closest('.people-dropdown-select');
          select.children[0].value = target.textContent.trim();
          select.parentElement.classList.remove('active');
        }
      });

      document.body.addEventListener('click', (event) => {
        const target = event.target;
        const wrappers = document.querySelectorAll('.people-dropdown__children');
        const closestWrapper = target.closest('.people-dropdown__children');

        if (closestWrapper) {
          closestWrapper.classList.contains('active')
            ? closestWrapper.classList.remove('active')
            : closestWrapper.classList.add('active');
        }
        wrappers.forEach((item) => {
          if (item !== closestWrapper) item.classList.remove('active');
        });

        if (
          !target.closest('.people-dropdown') &&
          peopleDropdown.classList.contains('active') &&
          !target.matches('#input-people')
        ) {
          fillInputPeople();
          peopleDropdown.classList.remove('active');
        }
      });
    }


    // проверка отправляемых данных - нужная для отслеживания отправляемых данных
    // document.querySelector('.hero-form').addEventListener('submit', (event) => {
    //   event.preventDefault();
    //   const formData = new FormData(document.querySelector('.hero-form'));
    //   const data = {};
    //   formData.forEach((value, key) => (data[key] = value));
    //   console.log(data);
    // });
  });

  // выпадашка с количеством ночей
  $(function () {
    if (document.getElementById('input-count-night')) {
      // общие функции для такой выпадашки
      // заполнение главного инпута и описания
      function fillInputCountNight() {
        const inputCount = document.getElementById('input-count-night');
        const inputDate = document.getElementById('input-single-calendar');
        const from = document.querySelector('.count-night-dropdown__input[name="from"]');
        const to = document.querySelector('.count-night-dropdown__input[name="to"]');
        const description = document.querySelector('.count-night-dropdown__description');
        inputCount.value = `Ночей ${from.value} ${to.value}`;
        description.textContent = `Заезды с ${inputDate.value.match(/(\d+.){3}/)[0]}, ${from.value} ${to.value} ночей`;
      }
      fillInputCountNight();

      // удаление невалидных символов
      function reduceInvalidValues(item) {
        const min = item.getAttribute('data-min');
        const max = item.getAttribute('data-max');
        let val = +item.value.match(/\d+/);
        if (val === '' || val < +min) item.value = +min;
        if (val > +max) item.value = +max;
        item.value = (item.name === 'from' ? 'от ' : 'до ') + +item.value.match(/\d+/)[0];
      }

      // изменение кол-ва в инпутах
      function changeInputCounter(input, action) {
        const minus = input.parentElement.querySelector('.button.minus');
        const plus = input.parentElement.querySelector('.button.plus');
        if (action === 'increment') {
          input.value = (input.name === 'from' ? 'от ' : 'до ') + (+input.value.match(/\d+/)[0] + 1);
        } else if (action === 'decrement') {
          input.value = (input.name === 'from' ? 'от ' : 'до ') + (+input.value.match(/\d+/)[0] - 1);
        }
        minus.disabled = +input.value.match(/\d+/)[0] === +input.getAttribute('data-min');
        plus.disabled = +input.value.match(/\d+/)[0] === +input.getAttribute('data-max');
      }

      // согласование инпутов при изменении диапазона
      function alignmentInputs() {
        const from = document.querySelector('.count-night-dropdown__input[name="from"]');
        const to = document.querySelector('.count-night-dropdown__input[name="to"]');
        if (+from.value.match(/\d+/)[0] > +to.value.match(/\d+/)[0]) {
          const max = from.value.match(/\d+/)[0];
          const min = to.value.match(/\d+/)[0];
          from.value = `от ${min}`;
          to.value = `до ${max}`;
          changeInputCounter(from);
          changeInputCounter(to);
        }
      }

      // главная часть выпадашки
      const inputCountNight = document.getElementById('input-count-night');
      const countNightDropdown = document.querySelector('.count-night-dropdown');
      const countNightDropdownInputs = countNightDropdown.querySelectorAll('.count-night-dropdown__input');

      countNightDropdownInputs.forEach((item) =>
        item.addEventListener('input', () => {
          reduceInvalidValues(item);
          changeInputCounter(item);
          alignmentInputs();
          fillInputCountNight();
        })
      );

      inputCountNight.addEventListener('focus', () => {
        countNightDropdown.classList.add('active');
        fillInputCountNight();
      });
      inputCountNight.addEventListener('input', fillInputCountNight);

      inputCountNight.parentElement.addEventListener('click', (event) => {
        const target = event.target;

        if (target.matches('.button.plus')) {
          const input = target.parentElement.querySelector('input');
          changeInputCounter(input, 'increment');
          alignmentInputs();
          fillInputCountNight();
        }

        if (target.matches('.button.minus')) {
          const input = target.parentElement.querySelector('input');
          changeInputCounter(input, 'decrement');
          alignmentInputs();
          fillInputCountNight();
        }
      });

      document.body.addEventListener('click', (event) => {
        const target = event.target;
        if (
          !target.closest('.count-night-dropdown') &&
          countNightDropdown.classList.contains('active') &&
          !target.matches('#input-count-night')
        ) {
          fillInputCountNight();
          countNightDropdown.classList.remove('active');
        }
      });
    }
  });
});

//Карта

ymaps.ready(() => {
  const mapContaier = document.querySelector('#map');

  if(mapContaier){
    const 
      map = new ymaps.Map(mapContaier, {
        center: [53.402063, 58.971156],
        zoom: 13
      }),
      iconLayout = (isActive) => ymaps.templateLayoutFactory.createClass(`
        <svg x="0px" y="0px" viewBox="0 0 513.597 513.597" class="map-placemark" ${isActive === true ? `fill="#E0292A"` : ``}>
          <path d="M263.278,0.107C158.977-3.408,73.323,80.095,73.323,183.602c0,117.469,112.73,202.72,175.915,325.322
            c3.208,6.225,12.169,6.233,15.388,0.009c57.16-110.317,154.854-184.291,172.959-290.569
            C456.331,108.387,374.776,3.866,263.278,0.107z M256.923,279.773c-53.113,0-96.171-43.059-96.171-96.171
            s43.059-96.171,96.171-96.171c53.113,0,96.172,43.059,96.172,96.171S310.036,279.773,256.923,279.773z"/>
        </svg>
      `),
      iconShape = {type: 'Circle', coordinates: [0, 0], radius: 23},
      locations = document.querySelectorAll('.map-place'),
      locationModal = document.querySelector('.map-modal'),
      locationModalClose = document.querySelector('.map-modal-close'),
      locationModalBody= document.querySelector('.map-modal-body'),
      contactsLocations = document.querySelectorAll('.contacts-list__item');

    if(locationModal){
      locationModalClose.addEventListener('click', ()=>{
        locationModal.classList.remove('active');
      })
    }

    ymaps.option.presetStorage.add('custom#default', {
      iconLayout: iconLayout(false),
      iconShape: iconShape,
    });
    ymaps.option.presetStorage.add('custom#active', {
      iconLayout: iconLayout(true),
      iconShape: iconShape,
    });

    if(locations){
      locations.forEach(location => {
        const
          coords = JSON.parse(location.dataset.coords),
          placemark = new ymaps.Placemark(coords, {
            sanatoriumId: location.dataset.id
          }, {
            preset: 'custom#default'
          });

        placemark.events.add('click', ()=>{
          map.geoObjects.each(object=>object.options.set('preset', 'custom#default'))
          placemark.options.set('preset', 'custom#active');

          const 
            sanatoriumId = placemark.properties.get('sanatoriumId', null);
          
          if(sanatoriumId){
            locationModal.classList.remove('active');
            //тут будет запрос к бэку, сейчас происходит фейковый
            fetch(`https://jsonplaceholder.typicode.com/posts/${sanatoriumId}`)
            .then(response => response.json())
            .then(result => {
              locationModalBody.innerHTML = `
                <div class="map-modal-img">
                  <img src="images/content/popular-4.png">
                </div>
                <div class="map-modal-content">
                  <div class="map-modal-rating rate-yo"></div>
                  <div class="map-modal-title">${result.title}</div>
                  <div class="map-modal-desc">${result.body}</div>
                  <div class="map-modal-price">от 3 034 руб</div>
                  <a href="#" class="map-modal-btn button--red">Подробнее</a>
                </div>
              `;

              $(".map-modal-rating.rate-yo").rateYo({
                rating: 3.6,
                ratedFill: "#E0292A",
                normalFill: "#F3F3F3",
                spacing: "5px",
                starWidth: "16px"
              });
            })
            .then(()=>{
              setTimeout(() => {
                locationModal.classList.add('active')
              }, 300);
            })
           
          }
        })

        map.geoObjects.add(placemark);
      })
    }

    if(contactsLocations){
      contactsLocations.forEach(location => {
        if(location.dataset.coords){

          const 
            coords = JSON.parse(location.dataset.coords),
            placemark = new ymaps.Placemark(coords, {}, {
              preset: 'custom#default'
            });

          location.addEventListener('mouseover', ()=>{
              map.setCenter(coords, 13, {
                checkZoomRange: true,
                duration: 500 // время анимации
              });
          });

          map.geoObjects.add(placemark);
        }
      })
    }
  }
});

// Валидация инпутов и маски

const 
  inputs = [...document.querySelectorAll('input'), ...document.querySelectorAll('select'), ...document.querySelectorAll('textarea')];
  handleInput = (input) => {
    const inputWrap = input.closest('.input-wrap');

    switch(input.dataset.type){
      case "tel":
        IMask(input, {
          mask: '+{7} (000) 000-00-00'
        })
      break;
      case "date":
        IMask(input, {
          mask: Date
        })
      break;
    }

    input.addEventListener('blur', ()=>{
      const rules = input.dataset.rules;
      if(rules){
        rules.replace(' ', '').split(',').filter(rule => {
          switch(rule){
            case "tel":
              return !validator.isMobilePhone(input.value.replace(/\D/g,''), 'ru-RU')
            case "email":
              return !validator.isEmail(input.value)
            case "password":
              //просто для того, чтобы если вдруг придется валидировать пароль
              return false;
            case "required":
              
              return validator.isEmpty(input.value)
          }
        }).length > 0 ? inputWrap.classList.add('incorrect') : inputWrap.classList.remove('incorrect')
      }
    })
  }

inputs.forEach(input=>{
  handleInput(input);
})

// Добавление гостей

const 
  addGuestsBtn = document.querySelector('.booking-form__adding'),
  additionalGuestsContainer = document.querySelector('.booking-form__additional-guests');

if(addGuestsBtn){
  const numberTransliterations = ['первого', 'второго', 'третьего'];

  let 
    guestsCount = 0;

  addGuestsBtn.addEventListener('click', ()=>{
    guestsCount++;

    additionalGuestsContainer.innerHTML+= `
      <p class="booking-information__title">Введите данные ${numberTransliterations[guestsCount]} гостя</p>
      <div class="booking-form__inputs">
        <div class="booking-form__input-wrapper">
          <label class="input-wrap booking-form__input"><input type="text" name="name" placeholder="Ваше ФИО*" data-rules="required, tel"/></label>
        </div>
        <div class="booking-form__input-wrapper">
          <label class="input-wrap booking-form__input"><input type="text" name="date" data-type="date" placeholder="Дата рождения*" data-rules="required, email"/></label>
        </div>
      </div>
    `;

    document.querySelectorAll('input').forEach(input=>{handleInput(input)});

    if(guestsCount === 2){
      addGuestsBtn.classList.remove('active');
    }
  })
}

// Переключение описания заказов

const
  roomsItems = document.querySelectorAll('.rooms__item');

if(roomsItems){
  roomsItems.forEach(item=>{
    const 
      controller = item.querySelector('.rooms__details'),
      wrapper = item.querySelector('.rooms-info__description-wrap'),
      content = item.querySelector('.rooms-info__description');

    if(controller && wrapper && content){
      controller.addEventListener('click', ()=>{
        wrapper.offsetHeight === 0 ? wrapper.style.maxHeight = `${content.offsetHeight}px` : wrapper.style.maxHeight = `0px`;
      })
    }
  })
}


// скидки

const
  discountItems = document.querySelectorAll('.discount-wrapper');

if(discountItems){
  discountItems.forEach(item=>{
    const 
      controller = item.querySelector('.discount-item__link'),
      wrapper = item.querySelector('.tariffs-bottom'),
      button = item.querySelector('.tariffs-bottom__button');

      controller.addEventListener('click', ()=>{
       wrapper.classList.toggle('tariffs-bottom--hidden');
      })

      button.addEventListener('click', ()=>{
        wrapper.classList.add('tariffs-bottom--hidden');
      })
  })
}

//cброс фильтров
 $('.aside-filter__reset').on('click', function(){
    $('.aside-filter__checkbox').removeClass('checked');
    $('.aside-filter__content-label').removeClass('aside-filter__content-label--active');

  });



// Меню в хедере

const
  headerDropdowns = document.querySelectorAll('.header-dropdown');

if(headerDropdowns){
  headerDropdowns.forEach(item=>{
    const 
      controller = item.querySelector('.header-dropdown-controller'),
      dropdown = item.querySelector('.header-drop');
    
    controller.addEventListener('click', ()=>{
      dropdown.classList.toggle('active');
    })
  })
}

// Форма, следующая за скроллом

const 
  tourForm = document.querySelector('.tour-form'),
  object = document.querySelector('.object');
  windowWidth = $('body').innerWidth();

if(tourForm){
  // let 
  //   stickyEl = new Sticky('.tour-form');
  
  window.addEventListener('scroll', ()=>{
    if(window.scrollY > 450){
      tourForm.classList.add('sticky');
    }
    if(windowWidth < 1201 || window.scrollY < 450){
      tourForm.classList.remove('sticky');
    }
  })
}