import {formRegistration} from "./registration";
import {entryBlock, formEntry} from "./entry";


export const formChoose = document.querySelector('.form__choose')
export const modalBlock = document.querySelector('.modal')

export function addAuthorisation(){
    if(localStorage.getItem('login') && localStorage.getItem('email')){
        entryBlock.style.display = 'none';
        headerWrapper.style.display = 'flex'
    }
}
export function closeModal(){
    modalBlock.style.display = 'none';
    formChoose.style.display = 'flex';
    formEntry.style.display = 'none';
    formRegistration.style.display = 'none';
}


const entryChoose = document.querySelector('#entryChoose'),
      registrationChoose = document.querySelector('#registrationChoose'),
      headerWrapper = document.querySelector('.header__wrapper')


function modal(){
    modalBlock.addEventListener('click', (e) => {
        if(e.target === modalBlock){
            closeModal()
        }else if(e.target === entryChoose){
            formChoose.style.display = 'none';
            formEntry.style.display = 'flex';
        }else if(e.target === registrationChoose){
            formChoose.style.display = 'none';
            formRegistration.style.display = 'flex';
        }
    })
}
export default modal