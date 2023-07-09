import {addAuthorisation, closeModal} from "./modal";

export const formRegistration = document.querySelector('.form__registration')

function registration(){
    function userProcessing(json){
        if(json.hasOwnProperty('error')){
            formRegistration.querySelector('.error').textContent = json.error;
        }else{
            closeModal()
            localStorage.setItem('login', json.login);
            localStorage.setItem('email', json.email);
            addAuthorisation();
        }
        return json
    }

    formRegistration.addEventListener('submit', (e) => {
        e.preventDefault();
        const inputs = formRegistration.querySelectorAll('input');
        let values = [];
        inputs.forEach(input => {
            values.push(input.value);
        })
        let [login, email, password, passwordRepeat] = values
        if(password !== passwordRepeat){
            formRegistration.querySelector('.error').textContent = 'Пароли не совпадают';
        }else{
            fetch('https://iamnikolay.store/zoo/php/registration.php', {
                method: 'POST',
                body: JSON.stringify({login: login, email: email, password: password}),
                headers: {
                    'Content-type': 'application/json'
                }
            })
                .then(response => response.json())
                .then(json => userProcessing(json))
                .catch(data => console.log(`Ошибка: ${data}`))
        }
    })
}
export default registration