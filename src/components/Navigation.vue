<template >
   <div class="navbar-light">
    <h2 style="color:gold">Events and Performances catalog</h2>
    <nav>
      <router-link v-for="routes in links"
      v-bind:key="routes.id"
      :to="`${routes.page}`" class="spacing">{{routes.text}}</router-link>
    </nav>
  </div>
</template>


<script>
export default {
  name: 'Navigation',
  data() {
    return {
      links: [
        {
          id: 0,
          text: 'Home',
          page: '/Home',
        },
        {
          id: 1,
          text: 'Register',
          page: '/RegisterEvent',
        },
        {
          id: 2,
          text: 'Search',
          page: '/Displays',
        },
        {
          id: 3,
          text: 'About',
          page: '/About',
        },
        {
          id: 4,
          text: 'Contact',
          page: '/Contact',
        },
        {
          id: 5,
          text: 'Account',
          page: '/CreateAccount',
        },
      ],
    };
  },
};
</script>

<style>
  .spacing {
    Margin-right: 10px;
  }
</style>
