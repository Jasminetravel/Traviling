// let videoBtn = document.querySelectorAll('.vid-btn');

// videoBtn.forEach(btn =>{
//     btn.addEventListener('click', ()=>{
//         document.querySelector('.controls .active').classList.remove('active');
//         btn.classList.add('active');
//         let src = btn.getAttribute('data-src');
//         document.querySelector('#video-slider').src = src;
//     });
// });
let land = document.querySelector(".home");
let vid = ["FullSizeRender.jpg" ,"tt.jpg","A-day-to-remember-@-Hurghada.jpg"];


setInterval(() => {
    let rand = Math.floor(Math.random()*vid.length);
    land.style.background =  ' url("' +vid[rand] +'")';
    land.style.backgroundSize = 'cover';
    land.style.backgroundPosition = 'center'
}, 4000);