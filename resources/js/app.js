import './bootstrap';
import "./script";

import { createApp } from 'vue'
import Alpine from 'alpinejs';

import Contacto from './Vue/componets/contacto.vue'


createApp(Contacto).mount("#ContactVue");

window.Alpine = Alpine;

Alpine.start();

