import {addAuthorisation, closeModal, modalBlock} from "./modal";

export const formEntry = document.querySelector('.form__entry')
export const entryBlock = document.querySelector('#entry')

function entry(){
    entryBlock.addEventListener('click', () => {
        modalBlock.style.display = 'flex';
    })
    function entryProcessing(json){
        if(json.hasOwnProperty('error')){
            formEntry.querySelector('.error').textContent = json.error
        }else{
            modalSuccessful(json)
        }
        return json
    }

    formEntry.addEventListener('submit', (e) => {
        e.preventDefault();
        const inputs = formEntry.querySelectorAll('input');
        let values = [];
        inputs.forEach(input => {
            values.push(input.value)
        })
        let [login, password] = values
        fetch('https://iamnikolay.store/zoo/php/entry.php', {
            method: 'POST',
            body: JSON.stringify({login: login, password: password}),
            headers: {
                'Content-type': 'application/json'
            }
        })
            .then(response => response.json())
            .then(json => entryProcessing(json))
            .catch(data => console.log(`Ошибка: ${data}`))
    })

    function modalSuccessful(json){
        closeModal()
        localStorage.setItem('login', json.login);
        localStorage.setItem('email', json.email);
        addAuthorisation();
    }
}
export default entry