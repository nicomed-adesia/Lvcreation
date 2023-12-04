var owl = $('.owl-carousel');
owl.owlCarousel({
    items:4,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:2500,
    autoplayHoverPause:true,
    center:true,
    responsive:{
                1200:{
                    items:4
                },
                1100:{
                    items:3
                },
                900:{
                    items:3
                },
                800:{
                    items:3
                },
                700:{
                    items:2
                },
                 600:{
                    items:2
                },
                500:{
                    items:2
                },
                400:{
                    items:2
                },
                300:{
                    items:1
                },
                200:{
                    items:1
                }
    }
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[2500])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})
// $('.loop').owlCarousel({
//     center: true,
//     items:2,
//     loop:true,
//     margin:10,
//     responsive:{
//         600:{
//             items:4
//         }
//     }
// });
// $('.nonloop').owlCarousel({
//     center: true,
//     items:2,
//     loop:false,
//     margin:10,
//     responsive:{
//         600:{
//             items:4
//         }
//     }
// });

let panier = document.querySelector('.btn-connexion');
let search = document.querySelector('.searches');
search.addEventListener('click',()=>{
    panier.classList.toggle('misaka');
    search.classList.toggle('mitombo');
});