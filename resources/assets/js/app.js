
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./jquery.crop.js');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('crear-club-modal', require('./components/CrearClubModal.vue'));
Vue.component('editar-usuario-modal', require('./components/EditarUsuarioModal.vue'));
Vue.component('crear-publicacion-modal', require('./components/CrearPublicacionModal.vue'));
Vue.component('aprobar-publicacion', require('./components/AprobarPublicacion.vue'));
Vue.component('publicacion-scroller', require('./components/PublicacionScroller.vue'));
Vue.component('comentario-scroller', require('./components/ComentarioScroller.vue'));
Vue.component('boton-megusta', require('./components/BotonMeGusta.vue'));
Vue.component('boton-subscripcion', require('./components/BotonSubscripcion.vue'));

const app = new Vue({
    el: '#app'
});
