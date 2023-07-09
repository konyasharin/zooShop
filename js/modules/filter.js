import {toggleClassesBtns} from "./navMenu";

const filterBtns = document.querySelectorAll('.filter__btn'),
      reviewsFilterBtns = document.querySelectorAll('.reviews__btn')
function filter(){
    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            toggleClassesBtns(filterBtns, 'filter__btn_active');
            btn.classList.toggle('filter__btn_active');
            fetch(`https://iamnikolay.store/zoo/php/categoryToggle.php?category=${btn.textContent}`)
                .then(response => response.json())
                .then(json => console.log(json))
                .catch(data => console.log(`Ошибка: ${data}`))
        })
    })


    reviewsFilterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            toggleClassesBtns(reviewsFilterBtns, 'reviews__btn_active');
            btn.classList.toggle('reviews__btn_active');
            let data = typeof btn.dataset.count != 'undefined' ? btn.dataset.count : btn.textContent
            fetch(`https://iamnikolay.store/zoo/php/categoryReviewsToggle.php?category=${data}`)
                .then(response => response.json())
                .then(json => console.log(json))
                .catch(data => console.log(`Ошибка: ${data}`))
        })
    })
}
export default filter