// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import '@/assets/css/main.css';
import 'bootstrap/dist/css/bootstrap.min.css';
import Vue from 'vue';
import App from './App';
import router from './router';
import datepicker from 'vue-bootstrap-datetimepicker';
import { Row, Column } from 'vue-grid-responsive';

Vue.use(datepicker);
Vue.component('row', Row);
Vue.component('column', Column);
Vue.config.productionTip = false;

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  components: { App },
  template: '<App/>',
});
