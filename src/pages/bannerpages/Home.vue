// eslint-disable-next-line to ignore the next line.
/* eslint-disable */

<template>
 <div class ="vue-template">
   <div class ="vue-template container mx-auto bg-white border-grey-light border mt-20">
     <button @click.prevent ="mytoggle(0)" class="button"><h3>Why this app</h3></button>
     <div v-show="boxes[0].show">
     <p>This app will help you coordinate events such as meetings, trainings, parties,
  voting or any events where people need to be invited.</p>
       </div>
   </div>

  <div class ="vue-template container mx-auto bg-white border-grey-light border mt-20">
     <button @click.prevent ="mytoggle(1)" class="button"><h2>Creating an event</h2></button>
     <div v-show="boxes[1].show">
       <ol>
        <li>Click on the link 'Account' to create an account as event organiser.</li>
        <li>To register or create your event, you click the 'Register' link. Then
           the 'Create event' link. Fill in as much as you can. For VIPCode it is
            up to you. It is the code you will give to your special guesses.
            Once completed submit.
        </li>
        <li>After creating your event click the link 'Search'. Then click 'Events'.
          It should take you to a page where the event
          you just created is displayed. Please write down the code. You will need to
          give that code to people you wish
          to invite to your event in order for them to sign up for it.
        </li>
        <li>In the future you and your event participants can also search for the
          event by entering the code in the search box in the members page access by
           clicking the 'Members' link in the 'Search page'.
        </li>
       </ol>
       </div>
      </div>

        <div class ="vue-template container mx-auto bg-white border-grey-light border mt-20">
     <button @click.prevent ="mytoggle(2)" class="button"><h2>Signing up for event</h2></button>
     <div v-show="boxes[2].show">
       <ol>
         <li>Click on the 'Register' link. It should take you to a page where you
           can click the link 'Sign up for event'.</li>
         <li>Fill in as much as you can and enter the Code your event organiser gave
           you in the box 'event code'.
           Only then will you be registered for that particular event. If you were not
           given a VIP code just enter 123 in the
           VIP code box. Click submit. You are now registered.
         </li>
         <li>You can check that you are registered by clicking 'Search' then 'Members'
           link and entering the event
           code your organiser gave you. You should now be listed.
           </li>
       </ol>
       </div>
        </div>
   </div>
</template>

<script>

import Vue from 'vue';
import { vueAccordion } from 'vue-accordion';

Vue.component('vue-accordion', vueAccordion);
export default {
  name: 'Home', // this is the name of the component

  data() {
    return {
      boxes: [{ show: false }, { show: true }, { show: false }, { show: true }],
    };
  },
  methods: {
    mytoggle(n) {
      // eslint-disable-next-line no-plusplus
      for (let i = 0; i < 4; i++) {
        this.boxes[i].show = false;
      }
      this.boxes[n].show = true;
    },

  },
};
</script>
<style>
.button{
  background-color: white;
  color: blue;
  border: 2px solid #4CAF50; /* Green */
  border-radius: 12px;
}
</style>
