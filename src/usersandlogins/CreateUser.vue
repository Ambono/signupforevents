/* eslint-disable no-console */
// eslint-disable-next-line to ignore the next line.
/* eslint-disable */

<template>
  <div class="vue-template">
    <form>
            <h3>Register as organiser</h3>

            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control form-control-lg"  name="fname"
                 v-model= "fname"/>
            </div>


            <div class="form-group">
                <label>SurName</label>
                <input type="text" class="form-control form-control-lg"  name="sname"
                 v-model= "sname"/>
            </div>

            <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control form-control-lg" name="email"
                v-model= "email"/>
            </div>

            <div class="form-group">
                <label>Phone number</label>
                <input type="text" class="form-control form-control-lg" name="phonumber"
                v-model= "phonumber"/>
            </div>

           <div class="form-group">
                <label>Organiser account</label>
                <input type="text"  class="form-control form-control-lg" name="orgaccount"
                v-model= "orgaccount"/>
            </div>

             <div class="form-group">
                <label>Additional description</label>
                <input type="text" class="form-control form-control-lg" name="adddescription"
                v-model= "adddescription"/>
            </div>
        <button class="btn btn-dark btn-lg btn-block" v-on:click="createAccount()">Submit</button>
        </form>
  </div>
</template>

<script>

import axios from 'axios';

export default {
  name: 'CreateUser', // this is the name of the component

  data() {
    return {
      fname: '',
      sname: '',
      email: '',
      phonumber: '',
      orgaccount: '',
      adddescription: '',
    };
  },
  //   mounted: function () {
  //     console.log('Hello from Vue!')
  //     this.getContacts()
  //   },

  methods: {
  //     getContacts: function(){
  //     },
    createAccount() {
      console.log('Create new user');
      console.log('fname:', this.fname);
      console.log('account:', this.orgaccount);
      const baseurl = 'http://localhost:50/eventsandperfs/users/CreateUsers.php';

      axios({
        method: 'post',
        url: baseurl,
        data: {
          fname: this.fname,
          sname: this.sname,
          email: this.email,
          phonumber: this.phonumber,
          orgaccount: this.orgaccount,
          adddescription: this.adddescription,
        },
      })
        .then((response) => {
          console.log('Submit Success: ');
          console.log(response);
          this.resetForm();
        }).catch((response) => {
          console.log('Submit Fail: ');
          console.log(response);
        });
    },
    resetForm() {
      this.fname = '';
      this.email = '';
      this.adddescription = '';
      this.phonumber = '';
      this.sname = '';
      this.orgaccount = '';
    },
  },
};
</script>

<style>
</style>
