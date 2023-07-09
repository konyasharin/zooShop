import entry from "./modules/entry";
import registration from "./modules/registration";
import modal from "./modules/modal";
import {addAuthorisation} from "./modules/modal";
import navMenu from "./modules/navMenu";
import filter from "./modules/filter";
import animateBackground from "./modules/animateBackground";
document.addEventListener('DOMContentLoaded', () => {
    entry()
    registration()
    modal()
    addAuthorisation()
    navMenu()
    filter()
    animateBackground()
})