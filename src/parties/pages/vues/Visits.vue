/*https://vuex.vuejs.org/guide */

// eslint-disable-next-line to ignore the next line.
/* eslint-disable */

<template>
  <div>
    <p>
  The visits count on this site is:
  </p>
  </div>
</template>

<script>
import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

// const store = new Vuex.Store({
//   state: {
//     count: 0,
//   },
//   mutations: {
//     increment(state) {
//       state.count += 1;
//     },
//   },
//   computed: {
//     count() {
//       return store.state.count;
//     },
//   },
// });
// export default {
//   name: 'Visits', // this is the name of the component
// };

// store.commit('increment');

// console.log(store.state.count); // -> 1
</script>
<style>

</style>
