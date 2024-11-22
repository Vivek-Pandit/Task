import './bootstrap';
import Vue from 'vue';
import PaginationComponent from './components/PaginationComponent.vue';

Vue.component('pagination-component', PaginationComponent);

new Vue({
  el: '#app',
});
