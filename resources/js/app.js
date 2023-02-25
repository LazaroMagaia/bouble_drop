import './bootstrap';
import "./script";

import { createApp } from 'vue'
import Alpine from 'alpinejs';

import Contacto from './Vue/componets/contacto.vue'
import Instagram from "./Vue/componets/Instagram.vue"

createApp(Contacto).mount("#ContactVue");
createApp(Instagram).mount("#Inst");

window.Alpine = Alpine;

Alpine.start();

