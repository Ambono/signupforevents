import Vue from 'vue';
import Router from 'vue-router';
import HelloWorld from '@/components/HelloWorld';
import Home from '@/pages/bannerpages/Home'; // this is the import line to add
import Customer from '@/pages/bannerpages/Customer';
import OwnerReport from '@/pages/bannerpages/OwnerReport';
import RegisterEvent from '@/pages/bannerpages/RegisterEvent';
import About from '@/pages/footer/About';
import Contact from '@/pages/footer/Contact';
import Invitee from '@/pages/evententities/Invitee';
import Participant from '@/pages/evententities/Participant';
import Organiser from '@/pages/evententities/Organiser';
import Performance from '@/pages/performances/Performance';
import Displays from '@/pages/vues/Displays';
import Visits from '@/pages/vues/Visits';
import DisplayEvents from '@/pages/vues/DisplayEvents';
import DisplayTodayEvents from '@/pages/vues/DisplayTodayEvents';
import DisplayRegistrations from '@/pages/vues/DisplayRegistrations';
import Footer from '@/pages/footer/Footer';
import CreateAccount from '@/usersandlogins/CreateUser';
// eslint-disable-next-line to ignore the next line
/* eslint-disable */
import Vuex from 'vuex';

// Import Vue and vue2-collapse
import VueCollapse from 'vue2-collapse'

// Loading the plugin into the Vue.
Vue.use(VueCollapse)

Vue.use(Router);

Vue.use(Vuex);
export default new Router({
  routes: [
    {
      path: '/',
      name: 'HelloWorld',
      component: HelloWorld,
    },    
    {
      path: '/home',
      name: 'Home',
      component: Home,
    },  
    {
      path: '/createaccount',
      name: 'CreateAccount',
      component: CreateAccount,
    },    
    {
      path: '/customer',
      name: 'Customer',
      component: Customer
    },   
    {
      path: '/ownerreport',
      name: 'OwnerReport',
      component: OwnerReport
    },
    {
      path: '/registerevent',
      name: 'RegisterEvent',
      component: RegisterEvent
    },     
    {
      path: '/about',
      name: 'About',
      component: About
    },
    {
      path: '/contact',
      name: 'Contact',
      component: Contact
    },
    {
      path: '/participant',
      name: 'Participant',
      component: Participant
    },
    {
      path: '/invitee',
      name: 'Invitee',
      component: Invitee
    },
    {
      path: '/organiser',
      name: 'Organiser',
      component: Organiser
    },
    {
      path: '/performance',
      name: 'Performance',
      component: Performance
    },
    {
      path: '/displayevents',
      name: 'DisplayEvents',
      component: DisplayEvents
    },
    {
      path: '/displaytodayevents',
      name: 'DisplayTodayEvents',
      component: DisplayTodayEvents
    },
    {
      path: '/displayregistrations',
      name: 'DisplayRegistrations',
      component: DisplayRegistrations
    },
    {
      path: '/displays',
      name: 'Displays',
      component: Displays
    },
    {
      path: '/visits',
      name: 'Visits',
      component: Visits
    },
    {
      path: '/footer',
      name: 'Footer',
      component: Footer
    }
  ],
});
