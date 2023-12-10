<template >
   <div class="navbar-light">
    <div class="row justify-content-md-center">
    <div class="col col-lg-5"> 
     <h2><p class="n1">Events and Performances catalog</p></h2>
    </div>
   </div>
    <div class="row justify-content-md-center" >
    <nav class="col col-lg-5">
      <router-link v-for="routes in links"
      v-bind:key="routes.id"
      :to="`${routes.page}`" class="spacing">{{routes.text}}</router-link>
    </nav>  
    </div>  
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
    margin-right: 10px;
  }

    .n1 {
    color:darkgoldenrod
  }
</style>
