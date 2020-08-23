// eslint-disable-next-line to ignore the next line.
/* eslint-disable */

<template>
  <div class="vue-template" style="width:60%; margin-left:20%">
        <form>
            <h3>Send us a message</h3>

            <div class="form-group">
                <label>full name</label>
              <input type="text" class="form-control form-control-lg"
               name="fname"
                v-model= "fname"/>
            </div>

           <div class="form-group">
                <label>Email</label>
                <input type="email"  class="form-control form-control-lg"
                name="email"
                v-model= "email"/>
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control form-control-lg"
                 name="phone"
                v-model= "phone"/>
            </div>

            <div class="form-group">
                <label>Message</label>
                 <input type="text" class="form-control form-control-lg"
                 name="reason"
                v-model= "reason"/>
            </div>
             <button class="btn btn-dark btn-lg btn-block"
             v-on:click="createMessage()">Submit</button>
        </form>
    </div>
</template>

<script>

import axios from 'axios';

export default {
  name: 'Contact', // this is the name of the component

  data() {
    return {
      fname: '',
      email: '',
      phone: '',
      reason: '',
    };
  },

  methods: {
  //     getContacts: function(){
  //     },
    createMessage() {
      // const baseurl = 'http://localhost:50/eventsandperfs/Acknowledgements/ContactUsMessages.php';
      const baseurl = 'https://signupforevents.com/ContactUs.php';

      axios({
        method: 'post',
        url: baseurl,
        data: {
          fname: this.fname,
          email: this.email,
          phone: this.phone,
          reason: this.reason,
        },
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
        },
      })
        .then((response) => {
          console.log('Submit Success: ');
          console.log(response);
          // this.resetForm();
        }).catch((response) => {
          console.log('Submit Fail: ');
          console.log(response);
        });
    },
    resetForm() {
      this.fname = '';
      this.email = '';
      this.phone = '';
      this.reason = '';
    },
  },
};
</script>
<style>

</style>
