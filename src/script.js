let doc = document
swiper = new Swiper(".swiper-banner", {
  autoplay: {
    delay: 3000,
  },
  loop: true,
    pagination: {
    el: ".swiper-pagination",
  },
});
swiper = new Swiper(".swiper-banner-index-2", {
  effect: "fade",
  autoplay: {
    delay: 3000,
  },
  loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
  },
});
let ExitPopUp = doc.querySelector('#exit-pop-up')
let ExitPopUp1 = doc.querySelector('#exit-pop-up1')
let popUp = doc.querySelector('#pop-up')
let searchMobile = doc.querySelector('#search-mobile')
if(searchMobile) {
  searchMobile.addEventListener('click' , function() {
    popUp.classList.toggle('h-0')
    popUp.classList.toggle('h-full')
    doc.body.classList.toggle('no-scroll')
  })
}
if(ExitPopUp) {
  ExitPopUp.addEventListener('click' , function() {
    popUp.classList.toggle('h-full')
    popUp.classList.toggle('h-0')
    doc.body.classList.remove('no-scroll')
  })
}
if(ExitPopUp1) {
  ExitPopUp1.addEventListener('click' , function() {
    popUp.classList.toggle('h-full')
    popUp.classList.toggle('h-0')
    doc.body.classList.remove('no-scroll')
  })
}
let inputSearch = doc.querySelector('#input-search')
let popUpDesktop = doc.querySelector('#pop-up-desktop')
if(inputSearch) {
  inputSearch.addEventListener('click' , function() {
    popUpDesktop.classList.toggle('hidden')
    popUpDesktop.classList.toggle('flex')
  })
}
document.addEventListener('click', function (event) {
  if (
    inputSearch && 
    popUpDesktop && 
    !inputSearch.contains(event.target) && 
    !popUpDesktop.contains(event.target)  
  ) {
    popUpDesktop.classList.add('hidden') 
    popUpDesktop.classList.remove('flex')
  }
})
swiper = new Swiper(".swiper-circle", {
  breakpoints: {
    0: {
      slidesPerView: 2,
    },
    330: {
      slidesPerView: 3,
    },
    500: {
      slidesPerView: 4,
    },
    600: {
      slidesPerView: 4,
    },
    768: {
      slidesPerView: 5,
    },
    1024: {
      slidesPerView: 6,
    },
    1280: {
      slidesPerView: 7,
    }
  }
});
new Swiper(".swiper-card", {
  slidesPerView: 'auto',
  spaceBetween: 10,
  freeMode: true
})
new Swiper(".swiper-banner1", {
    slidesPerView: 'auto',
    loop: false,
    breakpoints: {
    1024: {
      spaceBetween: 0,
    },
    0: {
      spaceBetween: 10, 
    }
  },
})
new Swiper(".swiper-banner2", {
  slidesPerView: 'auto',
  loop: false,
  breakpoints: {
  1024: {
    spaceBetween: 0,
  },
  0: {
    spaceBetween: 10, 
  }
},
})
new Swiper(".swiper-banner-computer", {
  slidesPerView: 'auto',
  loop: false,
  breakpoints: {
  1024: {
    spaceBetween: 0,
  },
  0: {
    spaceBetween: 10, 
  }
},
})
new Swiper(".swiper-card2", {
  slidesPerView: 'auto',
  spaceBetween: 10,
  freeMode: true
})
new Swiper(".swiper-card3", {
  slidesPerView: 'auto',
  spaceBetween: 10,
  freeMode: true
})
new Swiper(".swiper-card-demo", {
  navigation: {
    nextEl: '.custom-next',
    prevEl: '.custom-prev',
  },
  slidesPerView: 'auto',
  spaceBetween: 10,
})
new Swiper(".swiper-title", {
  slidesPerView: "auto",
  loop: true,
  freeMode: true,
  speed: 8000, //
  autoplay: {
      delay: 0, 
      disableOnInteraction: false, 
      reverseDirection: false 
  },
  allowTouchMove: false, 
  loopAdditionalSlides: 1, 
  freeModeMomentum: false 
});
let showAll = doc.querySelector('#show-all');
let textBox = doc.querySelector('#text-box');
let shadow1 = doc.querySelector('#shadow1');
let showSvg = doc.querySelector('#show-svg');

if (showAll && textBox && shadow1 && showSvg) {
    showAll.addEventListener('click', function () {
      
        textBox.classList.toggle('h-[240px]');
        textBox.classList.toggle('pb-[20px]');
        
        
        shadow1.classList.toggle('gradient-active');
        
        const isShowingMore = showAll.textContent.trim() === 'مشاهده بیشتر';
        
        if (isShowingMore) {
            showAll.textContent = 'بستن';
            shadow1.classList.remove('text-[#0085ff]');
            shadow1.classList.add('text-[#e10a0a]');
            showSvg.classList.remove('text-[#0085ff]');
            showSvg.classList.add('-rotate-180');
        } else {
            showAll.textContent = 'مشاهده بیشتر';
            shadow1.classList.remove('text-[#e10a0a]');
            shadow1.classList.add('text-[#0085ff]');
            showSvg.classList.add('text-[#0085ff]');
            showSvg.classList.remove('-rotate-180');
        }
    });
}
const categoryKala = doc.getElementById('category-kala')
const subMenu = doc.getElementById('sub-menu')
const header = doc.getElementById('header')
const shadow = doc.getElementById('shadow')
const categoryModel = doc.querySelectorAll('#category-model')

if(categoryKala){
  categoryKala.addEventListener('mouseenter' , function() {
  subMenu.classList.remove('hidden')
  subMenu.classList.add('block')
  shadow.classList.remove('hidden')
  shadow.classList.add('block')
})
}
if(header){
  header.addEventListener('mouseleave' , function() {
  subMenu.classList.remove('block')
  subMenu.classList.add('hidden')
  shadow.classList.remove('block')
  shadow.classList.add('hidden')
})
}
if(shadow){
  shadow.addEventListener('mouseover' , function() {
  subMenu.classList.remove('block')
  subMenu.classList.add('hidden')
  shadow.classList.remove('block')
  shadow.classList.add('hidden')
})
}
let subChild = document.querySelectorAll('.sub-child');
let menuCategory = document.querySelectorAll('.menu-category');

subChild.forEach(sub => {
  sub.addEventListener('click', function () {
    let targetstate = sub.getAttribute('data-state');  // دریافت data-state از روی sub-child

    // مخفی کردن همه دسته‌ها
    menuCategory.forEach(cat => {
      cat.classList.add('hidden');  // مخفی کردن تمام menu-categoryها
      cat.classList.remove('Active');  // برداشتن کلاس Active از همه
    });

    // برداشتن حالت فعال از همه دکمه‌ها
    subChild.forEach(s => s.classList.remove('Active', '!text-blue-600'));

    // پیدا کردن و نمایش دسته‌بندی مرتبط
    let matchedCategory = document.querySelector(`.menu-category[data-target="${targetstate}"]`);

    if (matchedCategory) {
      matchedCategory.classList.remove('hidden');  // نمایش دسته‌بندی مرتبط
      matchedCategory.classList.add('Active');  // افزودن کلاس Active
    } else {
      console.error('هیچ دسته‌بندی مرتبط با این تب پیدا نشد!');
    }

    // افزودن کلاس‌های فعال به دکمه کلیک‌شده
    sub.classList.add('Active', '!text-blue-600');
  });
});



categoryModel.forEach(function(categoryTitle) {
  categoryTitle.addEventListener('mouseover' , function() {
    categoryTitle.classList.add('bg-[#FFFAFA]')
    categoryTitle.classList.remove('text-[#505050]')
    categoryTitle.classList.add('text-red-500')
    const menuItem = doc.getElementById('menu-item')
    let contentHTML = '';
    if (categoryTitle.dataset.content === 'mobile') {
      contentHTML = `
        <div class="min-w-[154px] max-w-[270px] pl-3 flex flex-col">
          <p class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">موبایل بر اساس برند</p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              موبایل سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              موبایل سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              موبایل سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              موبایل سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              موبایل سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              موبایل سامسونگ
          </p>
        </div>
        <div class="min-w-[154px] max-w-[270px] pl-3 flex flex-col">
          <p class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">موبایل بر اساس کاربرد</p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              موبایل سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              موبایل سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              موبایل سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              موبایل سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              موبایل سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              موبایل سامسونگ
          </p>
        </div>
        <div class="min-w-[154px] max-w-[270px] pl-3 flex flex-col">
          <p class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">موبایل بر اساس قیمت</p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              موبایل سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              موبایل سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              موبایل سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              موبایل سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              موبایل سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              موبایل سامسونگ
          </p>
        </div>
      `;
      menuItem.innerHTML = contentHTML
    } else if(categoryTitle.dataset.content === 'mobile1') {
      contentHTML = `
        <div class="min-w-[154px] max-w-[270px] pl-3 flex flex-col">
          <p class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">شارژر بر اساس برند</p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              شارژر سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              شارژر سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              شارژر سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              شارژر سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              شارژر سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              شارژر سامسونگ
          </p>
        </div>
        <div class="min-w-[154px] max-w-[270px] pl-3 flex flex-col">
          <p class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">شارژر بر اساس کاربرد</p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              شارژر سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              شارژر سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              شارژر سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              شارژر سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              شارژر سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              شارژر سامسونگ
          </p>
        </div>
        <div class="min-w-[154px] max-w-[270px] pl-3 flex flex-col">
          <p class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">شارژر بر اساس قیمت</p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              شارژر سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              شارژر سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              شارژر سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              شارژر سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              شارژر سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              شارژر سامسونگ
          </p>
        </div>
      `;
      menuItem.innerHTML = contentHTML
    } else if(categoryTitle.dataset.content === 'headphone') {
      contentHTML = `
        <div class="min-w-[154px] max-w-[270px] pl-3 flex flex-col">
          <p class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">شارژر بر اساس برند</p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              هدفون سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              هدفون سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              هدفون سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              هدفون سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              هدفون سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              هدفون سامسونگ
          </p>
        </div>
        <div class="min-w-[154px] max-w-[270px] pl-3 flex flex-col">
          <p class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">هدفون بر اساس کاربرد</p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              هدفون سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              هدفون سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              هدفون سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              هدفون سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              هدفون سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              هدفون سامسونگ
          </p>
        </div>
        <div class="min-w-[154px] max-w-[270px] pl-3 flex flex-col">
          <p class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">هدفون بر اساس قیمت</p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              هدفون سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              هدفون سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              هدفون سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              هدفون سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              هدفون سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              هدفون سامسونگ
          </p>
        </div>
      `;
      menuItem.innerHTML = contentHTML
    } else if(categoryTitle.dataset.content === 'laptop') {
      contentHTML = `
        <div class="min-w-[154px] max-w-[270px] pl-3 flex flex-col">
          <p class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">شارژر بر اساس برند</p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              لپ تاپ سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              لپ تاپ سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              لپ تاپ سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              لپ تاپ سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              لپ تاپ سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              لپ تاپ سامسونگ
          </p>
        </div>
        <div class="min-w-[154px] max-w-[270px] pl-3 flex flex-col">
          <p class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">لپ تاپ بر اساس کاربرد</p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              لپ تاپ سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              لپ تاپ سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              لپ تاپ سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              لپ تاپ سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              لپ تاپ سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              لپ تاپ سامسونگ
          </p>
        </div>
        <div class="min-w-[154px] max-w-[270px] pl-3 flex flex-col">
          <p class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">لپ تاپ بر اساس قیمت</p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              لپ تاپ سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              لپ تاپ سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              لپ تاپ سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              لپ تاپ سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              لپ تاپ سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              لپ تاپ سامسونگ
          </p>
        </div>
      `;
      menuItem.innerHTML = contentHTML
    } else if(categoryTitle.dataset.content === 'computer') {
      contentHTML = `
        <div class="min-w-[154px] max-w-[270px] pl-3 flex flex-col">
          <p class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">شارژر بر اساس برند</p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کامپیوتر سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کامپیوتر سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کامپیوتر سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کامپیوتر سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کامپیوتر سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کامپیوتر سامسونگ
          </p>
        </div>
        <div class="min-w-[154px] max-w-[270px] pl-3 flex flex-col">
          <p class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">کامپیوتر بر اساس کاربرد</p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کامپیوتر سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کامپیوتر سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کامپیوتر سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کامپیوتر سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کامپیوتر سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کامپیوتر سامسونگ
          </p>
        </div>
        <div class="min-w-[154px] max-w-[270px] pl-3 flex flex-col">
          <p class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">کامپیوتر بر اساس قیمت</p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کامپیوتر سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کامپیوتر سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کامپیوتر سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کامپیوتر سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کامپیوتر سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کامپیوتر سامسونگ
          </p>
        </div>
      `;
      menuItem.innerHTML = contentHTML
    } else if(categoryTitle.dataset.content === 'clock') {
      contentHTML = `
        <div class="min-w-[154px] max-w-[270px] pl-3 flex flex-col">
          <p class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">شارژر بر اساس برند</p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              ساعت سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              ساعت سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              ساعت سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              ساعت سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              ساعت سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              ساعت سامسونگ
          </p>
        </div>
        <div class="min-w-[154px] max-w-[270px] pl-3 flex flex-col">
          <p class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">ساعت بر اساس کاربرد</p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              ساعت سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              ساعت سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              ساعت سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              ساعت سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              ساعت سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              ساعت سامسونگ
          </p>
        </div>
        <div class="min-w-[154px] max-w-[270px] pl-3 flex flex-col">
          <p class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">ساعت بر اساس قیمت</p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              ساعت سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              ساعت سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              ساعت سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              ساعت سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              ساعت سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              ساعت سامسونگ
          </p>
        </div>
      `;
      menuItem.innerHTML = contentHTML
    } else if(categoryTitle.dataset.content === 'gaming') {
      contentHTML = `
        <div class="min-w-[154px] max-w-[270px] pl-3 flex flex-col">
          <p class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">شارژر بر اساس برند</p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کنسول سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کنسول سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کنسول سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کنسول سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کنسول سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کنسول سامسونگ
          </p>
        </div>
        <div class="min-w-[154px] max-w-[270px] pl-3 flex flex-col">
          <p class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">کنسول بر اساس کاربرد</p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کنسول سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کنسول سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کنسول سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کنسول سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کنسول سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کنسول سامسونگ
          </p>
        </div>
        <div class="min-w-[154px] max-w-[270px] pl-3 flex flex-col">
          <p class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">کنسول بر اساس قیمت</p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کنسول سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کنسول سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کنسول سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کنسول سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کنسول سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              کنسول سامسونگ
          </p>
        </div>
      `;
      menuItem.innerHTML = contentHTML
    } else if(categoryTitle.dataset.content === 'audio') {
      contentHTML = `
        <div class="min-w-[154px] max-w-[270px] pl-3 flex flex-col">
          <p class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">شارژر بر اساس برند</p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              تلویزیون سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              تلویزیون سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              تلویزیون سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              تلویزیون سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              تلویزیون سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              تلویزیون سامسونگ
          </p>
        </div>
        <div class="min-w-[154px] max-w-[270px] pl-3 flex flex-col">
          <p class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">تلویزیون بر اساس کاربرد</p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              تلویزیون سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              تلویزیون سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              تلویزیون سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              تلویزیون سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              تلویزیون سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              تلویزیون سامسونگ
          </p>
        </div>
        <div class="min-w-[154px] max-w-[270px] pl-3 flex flex-col">
          <p class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">تلویزیون بر اساس قیمت</p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              تلویزیون سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              تلویزیون سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              تلویزیون سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              تلویزیون سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              تلویزیون سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              تلویزیون سامسونگ
          </p>
        </div>
      `;
      menuItem.innerHTML = contentHTML
    } else if(categoryTitle.dataset.content === 'save') {
      contentHTML = `
        <div class="min-w-[154px] max-w-[270px] pl-3 flex flex-col">
          <p class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">شارژر بر اساس برند</p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              فلش سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              فلش سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              فلش سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              فلش سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              فلش سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              فلش سامسونگ
          </p>
        </div>
        <div class="min-w-[154px] max-w-[270px] pl-3 flex flex-col">
          <p class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">فلش بر اساس کاربرد</p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              فلش سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              فلش سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              فلش سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              فلش سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              فلش سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              فلش سامسونگ
          </p>
        </div>
        <div class="min-w-[154px] max-w-[270px] pl-3 flex flex-col">
          <p class="text-[#565656] before:content-[' '] relative left-[5px] mb-4 flex cursor-pointer items-center overflow-hidden text-ellipsis text-nowrap pr-[2px] text-right text-[14px] font-bold text-text-normal before:ml-[3px] before:block before:h-[14px] before:w-[2px] before:min-w-[2px] before:bg-red-600 hover:text-primary-normal">فلش بر اساس قیمت</p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              فلش سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              فلش سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              فلش سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              فلش سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              فلش سامسونگ
          </p>
          <p class="mb-4 cursor-pointer overflow-hidden text-ellipsis text-nowrap text-right text-[12px] text-text-40 hover:text-primary-normal">
              فلش سامسونگ
          </p>
        </div>
      `;
      menuItem.innerHTML = contentHTML
    }
  })
  categoryTitle.addEventListener('mouseleave' , function() {
    categoryTitle.classList.remove('bg-[#FFFAFA]')
    categoryTitle.classList.remove('text-red-500')
    categoryTitle.classList.add('text-[#505050]')                   
  })
})
let sideBar = doc.getElementById('side-bar');
let headerHamburger = doc.getElementById('header_hamburger');
let sideBar2 = doc.getElementById('side-bar2');

if (headerHamburger && sideBar && sideBar2) {
    headerHamburger.addEventListener('click', function () {
        sideBar.classList.add('false');
        sideBar.classList.remove('translate-x-full');
        sideBar2.classList.add('duration-300', 'delay-200', 'opacity-70', 'bg-[#000000]', 'w-[80%]');
        sideBar2.classList.remove('opacity-10', 'bg-transparent', 'w-0');
        document.body.classList.add('no-scroll');
    });

    sideBar2.addEventListener('click', function () {
        sideBar.classList.remove('false');
        sideBar.classList.add('translate-x-full');
        sideBar2.classList.remove('duration-300', 'delay-200', 'opacity-70', 'bg-[#000000]', 'w-[80%]');
        sideBar2.classList.add('opacity-10', 'bg-transparent', 'w-0');
        document.body.classList.remove('no-scroll');
    });
}
const banner = doc.getElementById('banner')
    let lastScrollTop = 0;
    const scrollThreshold = 500;
    window.addEventListener("scroll", function () {
        let scrollTop = window.scrollY || document.documentElement.scrollTop;

        if(banner){
          if (scrollTop > scrollThreshold) {
            banner.classList.add('!h-0')
        } else {
            banner.classList.remove('!h-0')
        }
        }
        

        lastScrollTop = scrollTop;
    });
    let hamburger = doc.querySelector('#hamburger')

if (hamburger && menu) {
  hamburger.addEventListener('click', function (e) {
    e.stopPropagation(); // جلوگیری از کلیک بیرونی
    toggleMenu();
  });

  // کلیک روی خود منو → بستن
  menu.addEventListener('click', function () {
    toggleMenu();
  });

  // کلیک در بیرون منو و همبرگر → بستن
  document.addEventListener('click', function (e) {
    if (!menu.contains(e.target) && !hamburger.contains(e.target)) {
      closeMenu();
    }
  });
}

// تابع toggle
function toggleMenu() {
  menu.classList.toggle('translate-y-0');
  menu.classList.toggle('opacity-100');
  menu.classList.toggle('pointer-events-auto');

  menu.classList.toggle('-translate-y-[30vh]');
  menu.classList.toggle('opacity-0');
  menu.classList.toggle('pointer-events-none');
}

// تابع بستن منو (فقط در صورتی که بازه)
function closeMenu() {
  if (menu.classList.contains('translate-y-0')) {
    toggleMenu();
  }
}

    
    

    let onlineSignOn = doc.querySelector("#online-sign-on");
    let oflineSignOn = doc.querySelector("#ofline-sign-on");
    let online = doc.querySelector('#online')
    let ofline = doc.querySelector('#ofline')

    if (oflineSignOn && onlineSignOn) {
      oflineSignOn.addEventListener('click', function () {
        
        oflineSignOn.classList.add('bg-[#e10a0a]', 'text-white');
        oflineSignOn.classList.remove('text-[#e10a0a]');
        online.classList.remove('flex')
        online.classList.add('hidden')
        ofline.classList.remove('hidden')
        ofline.classList.add('flex')
        
        onlineSignOn.classList.remove('bg-[#e10a0a]', 'text-white');
        onlineSignOn.classList.add('text-[#e10a0a]');
      });
    
      onlineSignOn.addEventListener('click', function () {
        onlineSignOn.classList.add('bg-[#e10a0a]', 'text-white');
        onlineSignOn.classList.remove('text-[#e10a0a]');
        online.classList.remove('hidden')
        online.classList.add('flex')
        ofline.classList.remove('flex')
        ofline.classList.add('hidden')
        oflineSignOn.classList.remove('bg-[#e10a0a]', 'text-white');
        oflineSignOn.classList.add('text-[#e10a0a]');
      });
    }
 
    
    const faqItems = document.querySelectorAll('.faq');

    faqItems.forEach(item => {
      const arrow = item.querySelector('svg');
    
      item.addEventListener('click', () => {
        const isOpen = item.classList.contains('open');
    
        faqItems.forEach(i => {
          i.classList.remove('open');
          i.style.maxHeight = '92px';
          const svg = i.querySelector('svg');
          svg.classList.remove('rotate-180');
        });
    
        if (!isOpen) {
          
          item.classList.add('open');
          item.style.maxHeight = item.scrollHeight + 'px';
          arrow.classList.add('rotate-180');
        }
      });
    });
    doc.querySelectorAll('.filter').forEach(filter => {
      const mode = filter.querySelector('.mode');
      const isOpen = filter.classList.contains('h-[228px]');
    
      if (mode) {
        if (isOpen) {
          mode.classList.remove('overflow-y-hidden');
          mode.classList.add('overflow-y-auto');
        } else {
          mode.classList.remove('overflow-y-auto');
          mode.classList.add('overflow-y-hidden');
        }
      }
    });
    
    let filter1 = document.querySelectorAll('.filter1')

    filter1.forEach(i => {
      const filter = i.closest('.filter');
      const mode = filter.querySelector('.mode');
      const svgFilter = i.querySelector('.svg-filter'); // فقط svg-filter داخل هر آیتم
    
      i.addEventListener('click', function () {
        const isOpen = filter.classList.contains('h-[228px]');
    
        if (isOpen) {
          // بستن کشو
          if (mode) {
            mode.scrollTop = 0;
            mode.classList.remove('overflow-y-auto');
            mode.classList.add('overflow-y-hidden');
          }
          if (svgFilter) svgFilter.classList.remove('rotate-180');
    
          filter.classList.remove('h-[228px]');
          filter.classList.add('h-[35px]');
        } else {
          
          filter.classList.remove('h-[35px]');
          filter.classList.add('h-[228px]');
    
          if (mode) {
            mode.classList.remove('overflow-y-hidden');
            mode.classList.add('overflow-y-auto');
          }
          if (svgFilter) svgFilter.classList.add('rotate-180');
        }
      });
    });
    

    

    
let box2 = doc.querySelector('#box-2')
let box3 = doc.querySelector('#box-3')

if(box2){
  box2.addEventListener('click' , function() {
  box3.classList.toggle('bg-white')
  box3.classList.toggle('bg-[#e10a0a]')
  })
}

let mode1 = doc.querySelectorAll('mode1')
mode1.forEach(item => {
  const checkbox = item.querySelector('.checkbox');
  checkbox.classList.remove('bg-white');
  checkbox.classList.add('bg-[#e10a0a]');
})
const checkBoxes = document.querySelectorAll('.check-box');

checkBoxes.forEach(box => {
  box.addEventListener('click', function (e) {
    e.stopPropagation();
    box.classList.toggle('bg-white');
    box.classList.toggle('bg-red-500');
  });
});
document.addEventListener("DOMContentLoaded", function () {
  const toggleButton = document.querySelector('[role="switch"]');

  if (toggleButton) {
    const toggleThumb = toggleButton.querySelector("span");

    toggleButton.addEventListener("click", function () {
      const isChecked = toggleButton.getAttribute("data-state") === "checked";
      toggleButton.setAttribute("data-state", isChecked ? "unchecked" : "checked");
      toggleButton.setAttribute("aria-checked", isChecked ? "false" : "true");
      toggleThumb.setAttribute("data-state", isChecked ? "unchecked" : "checked");
    });
  }
});

let filterMob = document.querySelectorAll('.filter-mob')
let filMob = document.querySelectorAll('.fil-mob')
let showProduct = document.querySelector('#show-product')
let hideFilter = document.querySelector('#hide-filter')
let fil1 = document.querySelector('#fil-1')
let fil2 = document.querySelector('#fil-2')
let fill = doc.querySelector('#fill')
let filterMobile = document.querySelector('#filter-mobile')
let categoryMobile = doc.querySelector('#category-mobile')
if(categoryMobile){
  categoryMobile.addEventListener('click', function() {
  filterMobile.classList.toggle('flex')
  filterMobile.classList.toggle('hidden')
})
}


filterMob.forEach(filter => {
  filter.addEventListener('click', function () {
    let targetMode = this.dataset.mode

    // بستن همه‌ی باکس‌های فیلتر
    filMob.forEach(box => {
      box.classList.add('hidden')
      box.classList.add('translate-x-full')
    })

    // پیدا کردن باکس مطابق با data-mode
    let targetBox = document.querySelector(`.fil-mob[data-mode="${targetMode}"]`)
    if (targetBox) {
      targetBox.classList.remove('hidden')
      targetBox.classList.remove('translate-x-full')
      fil1.classList.remove('flex')
      fil1.classList.add('hidden')
      fil2.classList.remove('flex')
      fil2.classList.add('hidden')
    }

    if (showProduct) showProduct.innerHTML = 'اعمال فیلتر'
  })
})

if (hideFilter) {
  hideFilter.addEventListener('click', function () {
    let isAnyVisible = Array.from(filMob).some(box => !box.classList.contains('hidden'))

    if (isAnyVisible) {
      filMob.forEach(box => {
        box.classList.add('hidden')
        box.classList.add('translate-x-full')
      })

      fil1.classList.remove('hidden')
      fil1.classList.add('flex')
      fil2.classList.remove('hidden')
      fil2.classList.add('flex')
    } else {

      if (filterMobile) {
        filterMobile.classList.add('hidden')
      }
    }

    if (showProduct) showProduct.innerHTML = 'مشاهده محصولات'
  })
}


let parentsvg = doc.querySelectorAll('.parent-svg')
parentsvg.forEach(i => {
  let svg = i.querySelector('.svg')
  svg.addEventListener('click' , function() {
    svg.classList.toggle('bg-white')
    svg.classList.toggle('bg-red-600')
  })
})

document.addEventListener('DOMContentLoaded', function () {
  // Thumbnail slider
  var swiper_thumbs = new Swiper(".nav-for-slider", {
    loop: false,
    spaceBetween: 5,
    slidesPerView: 3,
    breakpoints: {
      1280: {
        slidesPerView: 4,
      },
    },
    freeMode: true,
    watchSlidesProgress: true,
  });
  

  // Main slider
  var swiper = new Swiper(".main-slide-carousel", {
    loop: false, // ✅ باید false باشه
    slidesPerView: 1,
    effect: "fade",
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    thumbs: {
      swiper: swiper_thumbs,
    },
  });
});
let position = document.querySelector('#position')
let showAll1 = document.querySelector('#show-all-1')
let svgShow = document.querySelector('#svg-show')

if (showAll1 && position && svgShow) {
  showAll1.addEventListener('click', function () {
    let isHidden = position.classList.contains('hidden')

    position.classList.toggle('block', isHidden)
    position.classList.toggle('hidden', !isHidden)

    svgShow.classList.toggle('rotate-180', isHidden)
    svgShow.classList.toggle('rotate-90', !isHidden)

    showAll1.textContent = isHidden ? 'مشاهده کمتر' : 'مشاهده بیشتر'
  })
}
let showAll2 = document.querySelector('#show-all-2')
let airpod2 = document.querySelector('#airpod2')
let imgAirpod = document.querySelector('#img-airpod')
let textElement = showAll2?.querySelector('p') || showAll2 
let svgShow2 = doc.querySelector('#svg-show-2')

if (showAll2 && airpod2 && imgAirpod) {
  showAll2.addEventListener('click', function () {
    let isCollapsed = airpod2.classList.contains('h-[315px]')

    airpod2.classList.toggle('h-[315px]', !isCollapsed)
    airpod2.classList.toggle('h-auto', isCollapsed)

    showAll2.classList.toggle('text-[#0e8bff]', isCollapsed)
    showAll2.classList.toggle('text-[#6d6d6d]', !isCollapsed)

    svgShow2.classList.toggle('rotate-90', isCollapsed)
    svgShow2.classList.toggle('rotate-0', !isCollapsed)

    imgAirpod.classList.toggle('h-[200px]', !isCollapsed)
    imgAirpod.classList.toggle('h-auto', isCollapsed)

    textElement.textContent = isCollapsed ? 'مشاهده کمتر' : 'مشاهده بیشتر'
  })
}
  let mobileModel = doc.querySelectorAll('.mobile-model')
  let mobileModel1 = doc.querySelectorAll('.mobile-model-1')
  mobileModel.forEach(model => {
    model.addEventListener('click', function() {
      let arrow1 = model.querySelector('.arrow-1')
      arrow1.classList.toggle('rotate-180')
      let datatargetmodel = model.dataset.model
      model.classList.toggle('text-[#e10a0a]')
      mobileModel1.forEach(model1 => {
        if (model1.dataset.model === datatargetmodel) {
          model1.classList.toggle('h-0')
          model1.classList.toggle('h-[1000px]')
        }
      })



    })
  })

  let mobileuse = doc.querySelectorAll('.mobile-use')
  let mobileuse1 = doc.querySelectorAll('.mobile-use-1')
  mobileuse.forEach(use => {
    use.addEventListener('click', function() {
      let arrow2 = use.querySelector('.arrow-2')
      arrow2.classList.toggle('rotate-180')
      let datatargetuse = use.dataset.model
      use.classList.toggle('text-[#e10a0a]')
      mobileuse1.forEach(use1 => {
        if (use1.dataset.model === datatargetuse) {
          use1.classList.toggle('h-0')
          use1.classList.toggle('h-[300px]')
        }
      })



    })
  })

  let mobileprice = doc.querySelectorAll('.mobile-price')
  let mobileprice1 = doc.querySelectorAll('.mobile-price-1')
  mobileprice.forEach(price => {
    price.addEventListener('click', function() {
      let arrow3 = price.querySelector('.arrow-3')
      arrow3.classList.toggle('rotate-180')
      let datatargetprice = price.dataset.model
      price.classList.toggle('text-[#e10a0a]')
      mobileprice1.forEach(price1 => {
        if (price1.dataset.model === datatargetprice) {
          price1.classList.toggle('h-0')
          price1.classList.toggle('h-[450px]')
        }
      })



    })
  })
 
  document.querySelectorAll('[data-dialog-target]').forEach(trigger => {
    trigger.addEventListener('click', () => {
      const modalName = trigger.getAttribute('data-dialog-target');
      const backdrop = document.querySelector(`[data-dialog-backdrop="${modalName}"]`);
      const modal = backdrop?.querySelector('[data-dialog]');
  
      if (backdrop && modal) {
        backdrop.classList.remove('opacity-0', 'pointer-events-none');
        backdrop.classList.add('opacity-100', 'pointer-events-auto');
        modal.classList.remove('opacity-0', 'scale-95');
        modal.classList.add('opacity-100', 'scale-100');
      }
    });
  });
  
  document.querySelectorAll('[data-dialog-backdrop]').forEach(backdrop => {
    backdrop.addEventListener('click', event => {
      if (event.target === backdrop) {
        const modal = backdrop.querySelector('[data-dialog]');
        backdrop.classList.add('opacity-0', 'pointer-events-none');
        backdrop.classList.remove('opacity-100', 'pointer-events-auto');
        modal.classList.add('opacity-0', 'scale-95');
        modal.classList.remove('opacity-100', 'scale-100');
      }
    });
  });
  
  document.querySelectorAll('[data-dialog-close]').forEach(closeBtn => {
    closeBtn.addEventListener('click', () => {
      const backdrop = closeBtn.closest('[data-dialog-backdrop]');
      const modal = backdrop?.querySelector('[data-dialog]');
      if (backdrop && modal) {
        backdrop.classList.add('opacity-0', 'pointer-events-none');
        backdrop.classList.remove('opacity-100', 'pointer-events-auto');
        modal.classList.add('opacity-0', 'scale-95');
        modal.classList.remove('opacity-100', 'scale-100');
      }
    });
  });
  
  document.body.addEventListener('click', (event) => {
    
    if (!event.target.closest('[data-dialog]') && !event.target.closest('[data-dialog-target]')) {
      document.querySelectorAll('[data-dialog-backdrop]').forEach(backdrop => {
        const modal = backdrop.querySelector('[data-dialog]');
        if (backdrop && modal) {
          backdrop.classList.add('opacity-0', 'pointer-events-none');
          backdrop.classList.remove('opacity-100', 'pointer-events-auto');
          modal.classList.add('opacity-0', 'scale-95');
          modal.classList.remove('opacity-100', 'scale-100');
        }
      });
    }
  });
  
let colorProduct = document.querySelectorAll('.color-product');

colorProduct.forEach(item => {
    item.addEventListener('click', () => {
        
        colorProduct.forEach(i => {
            i.classList.add('color-unActive');
        });


        item.classList.remove('color-unActive');
    });
});
let Warranty = document.querySelectorAll('.Warranty');

Warranty.forEach(item => {
  item.addEventListener('click', function () {
    Warranty.forEach(i => {
      
      i.classList.remove('border-red-500', 'hover:border-red-700');
      i.classList.add('border-gray-300', 'hover:border-red-500');
      
      
      let circle = i.querySelector('div > div');
      circle.style.backgroundColor = 'white';
      i.querySelector('div').style.backgroundColor = 'white';
    });

    
    item.classList.remove('border-gray-300', 'hover:border-red-500');
    item.classList.add('border-red-500', 'hover:border-red-700');

    let circle = item.querySelector('div > div');
    circle.style.backgroundColor = 'white';
    item.querySelector('div').style.backgroundColor = '#ef4444'; // همون bg-red-500
  });
});

document.querySelectorAll('.counter-box').forEach(counter => {
  const increaseBtn = counter.querySelector('.counter-increase');
  const decreaseBtn = counter.querySelector('.counter-decrease');
  const numberEl = counter.querySelector('.counter-number');

  if (!increaseBtn || !decreaseBtn || !numberEl) return;

  const trashIcon = `
    <svg class="trash-icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
      xmlns="http://www.w3.org/2000/svg">
      <path d="M13.6667 11.1V16.5M10.3333 11.1V16.5M4.5 6.6H15.3333M15.3333 6.6H19.5M15.3333 6.6V4.8C15.3333 4.32261 15.1577 3.86477 14.8452 3.52721C14.5326 3.18964 14.1087 3 13.6667 3H10.3333C9.89131 3 9.46738 3.18964 9.15482 3.52721C9.05093 3.63942 8.96216 3.76491 8.88995 3.9M17.8333 9.3V19.2C17.8333 19.6774 17.6577 20.1352 17.3452 20.4728C17.0326 20.8104 16.6087 21 16.1667 21H7.83333C7.39131 21 6.96738 20.8104 6.65482 20.4728C6.34226 20.1352 6.16667 19.6774 6.16667 19.2V9.3"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
    </svg>`;

  const minusIcon = `
    <svg width="12" height="2" viewBox="0 0 12 2" fill="none"
      xmlns="http://www.w3.org/2000/svg">
      <line x1="0" y1="1" x2="12" y2="1" stroke="currentColor" stroke-width="2" />
    </svg>`;

  function updateIcon(value) {
    if (value === 1) {
      decreaseBtn.innerHTML = trashIcon;
    } else {
      decreaseBtn.innerHTML = minusIcon;
    }
  }

  increaseBtn.addEventListener('click', () => {
    let value = parseInt(numberEl.textContent, 10);
    value++;
    numberEl.textContent = value;
    updateIcon(value);
  });

  decreaseBtn.addEventListener('click', () => {
    let value = parseInt(numberEl.textContent, 10);
    if (value > 1) {
      value--;
      numberEl.textContent = value;
      updateIcon(value);
    }
  });
});

const valueBox = document.getElementById('value-box');
const plusBtn = document.getElementById('btn-plus');
const minusBtn = document.getElementById('btn-minus');

if (valueBox && plusBtn && minusBtn) {
  let count = parseInt(valueBox.textContent, 10);

  plusBtn.addEventListener('click', () => {
    count++;
    valueBox.textContent = count;
  });

  minusBtn.addEventListener('click', () => {
    if (count > 1) {
      count--;
      valueBox.textContent = count;
    }
  });
}

swiper = new Swiper(".swiper-mag", {
  autoplay: {
    delay: 3000,
  },
  loop: true,
    pagination: {
    el: ".swiper-pagination-1",
    clickable: true,
  },
});
let banner10 = doc.querySelector('#banner-10')
let bgOrange = doc.querySelector('#bg-orange')
if(banner10){
  banner10.addEventListener('mouseenter', function() {
  bgOrange.classList.remove('scale-y-100')
  bgOrange.classList.add('scale-y-0')


  banner10.addEventListener('mouseleave', function() {
  bgOrange.classList.remove('scale-y-0')
  bgOrange.classList.add('scale-y-100')
})
})
}



let sideBarMag = doc.querySelector('#side-bar-mag')
let headHamburger = doc.querySelector('#head-hamburger')
if(headHamburger){
  headHamburger.addEventListener('click' , function () {
  sideBarMag.classList.toggle('hidden')
  sideBarMag.classList.toggle('flex')
  doc.body.classList.toggle('no-scroll')
})
}
swiper = new Swiper(".swiper-product-mag", {
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true,
  breakpoints: {
    1024: {
      slidesPerView: 3,
      spaceBetween: 30,
    }
  }
});