const rounds = document.querySelectorAll('.round'),
      mainImg = document.querySelector('.main__img')
function animateBackground(){
    for (let i = 0; i < rounds.length; i++){
        window.addEventListener('mousemove', function(e) {
            let x = e.clientX / window.innerWidth;
            let y = e.clientY / window.innerHeight;
            rounds[i].style.transform = 'translate(-' + x * 50 + 'px, -' + y * 50 + 'px)';
            mainImg.style.transform = 'translate(-' + x * 10 + 'px, -' + y * 10 + 'px)';
        });
    }
}
export default animateBackground