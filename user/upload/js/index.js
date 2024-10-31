// Làm hiệu ứng cuộn trang cho thanh header

window.addEventListener('scroll',()=>{
    const header_page=document.querySelector('header')
    header_page.classList.toggle('sticky',window.scrollY>0)
})


// Thư viện jsquery của banner
$(document).ready(function(){
    $('.banner-page__all').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots:true,
        arrows:false
    }
        
    );
  });