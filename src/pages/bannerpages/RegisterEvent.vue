<template>
 <div class="vue-template">
  <nav>
    <router-link to="/Organiser">Create event</router-link>
  </nav>
   <nav>
    <router-link to="/Participant">Sign up for event</router-link>
  </nav>
   <nav>
    <router-link to="/Invitee">Sign up as invitee</router-link>
  </nav>
  </div>
</template>

<script>
export default {
  name: 'RegisterEvent',
};
</script>
