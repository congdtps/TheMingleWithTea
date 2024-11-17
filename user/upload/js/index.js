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
            autoplay: true,
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

// login_register
// function login(){
//     var username = document.getElementById('login-container_input_username').value; 
//     var password = document.getElementById('login-container_input_password').value; 
//     if(username === '' || password === '' ) {
//         alert('Bạn chưa nhập tên hoặc email');
//     } else {
//         alert('Cảm ơn bạn đã điền thông tin');
//         // document.getElementById('login-container').style.display = 'none';
//     }
// }
// function resgister(){
//     var register_username = document.getElementById('register_username').value;
//     var resgister_password = document.getElementById('resgister_password').value;
//     var enter_password = document.getElementById('enter_password').value;
//     if(register_username === '' || resgister_password === '' || enter_password === ''){
//         alert('Bạn chưa điền đầy đủ thông tin ')
//     }else if(resgister_password != enter_password){
//         alert('Mật khẩu không khớp vui lòng nhập lại.');
//     }else{
//         alert('Bạn đã đăng kí thành công');
//         // document.getElementById('login-container').style.display= 'none'
//     }
// }

// end login_register





// begin info cart
const cart_buy= document.querySelector('.content__box__total-money__buy input')
const content_container= document.getElementById('content-container')
let content_container_all=document.querySelector('.content-container__all')
let content_container_inputs= document.querySelectorAll('.content-container__all__body__info input')
let content_container_close= document.querySelector('.content-container__all__close')
let content_container_pay=document.querySelector('.content-container__all__body__check-pay input')

cart_buy.addEventListener('click',(e)=>{
    e.preventDefault()
    content_container.classList.add('active-container')
})


content_container_close.addEventListener('click',()=>{
    content_container.classList.remove('active-container')

})


content_container.addEventListener('click',()=>{
    content_container.classList.remove('active-container')
})

content_container_all.addEventListener('click',(e)=>{
    e.stopPropagation()
})


content_container_pay.addEventListener('click',(e)=>{
    let inputValue
    content_container_inputs.forEach((input)=>{
        inputValue= input.value.trim()
        if(inputValue===''){
            input.classList.add('active-error-container')
        }else{
            input.classList.remove('active-error-container')

        }
    })




})


let content__box__sale__apply= document.querySelector('.content__box__sale__apply input')
content__box__sale__apply.addEventListener('click',(e)=>{
    e.preventDefault()
})





// end info cart

