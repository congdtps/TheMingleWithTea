// Làm hiệu ứng cuộn trang cho thanh header

// window.addEventListener('scroll',()=>{
//     const header_page=document.querySelector('header')
//     header_page.classList.toggle('sticky',window.scrollY>0)
// })


// Thư viện jsquery của banner
$(document).ready(function(){
    $('.banner-page__all').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        dots:true,
        arrows:false
    }
        
    );
  });


// mobile ẩn hiện menu
const js_menu_mb= document.querySelector("#js_menu_mb")
let js_mb_header= document.querySelector("#mb__header-page")
let js_mb_close=document.querySelector('.js-mb-close')
let js_mb_header_all = document.querySelector('.js-mb-header-all')
let js_mb_search= document.querySelector('#header-page .header-page__search span')
let js_mb_search_active= document.querySelector('#header-page .header-page__search input')


js_menu_mb.addEventListener('click',()=>{
    js_mb_header.classList.add("active_mb")
})


js_mb_close.addEventListener('click',()=>{
    js_mb_header.classList.remove("active_mb")

})


js_mb_close.addEventListener('click',()=>{
    js_mb_search_active.classList.remove("active_in")

})

js_mb_header.addEventListener("click",()=>{
    js_mb_header.classList.remove("active_mb")

}
)

js_mb_header_all.addEventListener('click',(e)=>{
    e.stopPropagation()
})

js_mb_search.addEventListener('click',()=>{
    js_mb_search_active.classList.add('active_in')
})



js_mb_header.addEventListener("click",()=>{
    js_mb_search_active.classList.remove("active_in")

}
)