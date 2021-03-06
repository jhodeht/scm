/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import VueSweetalert2 from 'vue-sweetalert2';
import HighchartsVue from 'highcharts-vue';

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
Vue.use(VueSweetalert2);
Vue.use(HighchartsVue);

Vue.component('eliminar-usuario', require('./components/EliminarUsuario.vue').default);
Vue.component('eliminar-especialidad', require('./components/EliminarEspecialidad.vue').default);
Vue.component('especialidades-inactivos', require('./components/EspecialidadInactivo.vue').default);
Vue.component('crear-cita', require('./components/CrearCita.vue').default);
Vue.component('editar-cita', require('./components/EditarCita.vue').default);
Vue.component('fecha-component', require('./components/FechaComponent.vue').default);
Vue.component('cita-paciente', require('./components/CitaPaciente.vue').default);
Vue.component('cancelar-cita', require('./components/CancelarCita.vue').default);
Vue.component('pacientes-registrados', require('./components/PacientesRegistrados.vue').default);
Vue.component('estado-citas', require('./components/EstadoCitas.vue').default);
Vue.component('especialidad-citas', require('./components/EspecialidadCitas.vue').default);
Vue.component('citas-medico', require('./components/CitasMedico.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
