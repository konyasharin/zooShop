
export function toggleClassesBtns(selector, classActive){
    selector.forEach(btn => {
        if(btn.classList.contains(classActive)){
            btn.classList.remove(classActive);
        }
    })
}

const navItemsBtns = document.querySelectorAll('.items__nav-btn'),
      continueNav = document.querySelector('.items__nav-continue')
function navMenu(){
    navItemsBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            toggleClassesBtns(navItemsBtns, 'items__nav-btn_active');
            fetch(`https://iamnikolay.store/zoo/php/pageToggle.php?page=${btn.textContent}`)
                .then(response => response.json())
                .then(json => console.log(json))
                .catch(data => console.log(`Ошибка: ${data}`))
            if(btn.textContent !== '1' && btn.textContent < 271 - 2){
                let values = [+btn.textContent - 1, +btn.textContent, +btn.textContent + 1] //чтобы не перезаписывать сразу значение(меняются тогда все последующие вычисления)
                navItemsBtns[0].textContent = values[0];
                navItemsBtns[1].textContent = values[1];
                navItemsBtns[2].textContent = values[2];
                navItemsBtns[1].classList.toggle('items__nav-btn_active');
                continueNav.style.display = 'inline'
            }else if(btn.textContent === '1' && btn.textContent < 271 - 2){
                navItemsBtns[0].textContent = '1';
                navItemsBtns[1].textContent = '2';
                navItemsBtns[2].textContent = '3';
                navItemsBtns[0].classList.toggle('items__nav-btn_active');
                continueNav.style.display = 'inline';
            }else{
                let value = btn.textContent;
                navItemsBtns[0].textContent = '268';
                navItemsBtns[1].textContent = '269';
                navItemsBtns[2].textContent = '270';
                navItemsBtns[3].textContent = '271';
                for(let i = 0; i < 4; i++){
                    if(navItemsBtns[i].textContent === value){
                        navItemsBtns[i].classList.toggle('items__nav-btn_active');
                    }
                }
                continueNav.style.display = 'none';
            }
        })
    })
}
export default navMenu