// eslint-disable-next-line to ignore the next line.
/* eslint-disable */
/*SELECT `Id`, `DateBooked`, `VIPCode`, `OrganiserAccountCode`,
`Venue`, `Donation`, `Sponsorship`, `Fees`, `UserID`,
`DateBookingsOpen`, `
 FROM `bookings` WHERE 1*/
<template>
  <div class="vue-template" style="width:60%; margin-left:20%">
        <form>
            <h3>Register as organiser</h3>

            <div class="form-group">
                <label>Full Name</label>
              <input type="text" class="form-control form-control-lg"
               name="fullname"
                v-model= "fullname"/>
            </div>

           <div class="form-group">
                <label>Contact</label>
                <input type="text"  class="form-control form-control-lg"
                name="contact"
                v-model= "contact"/>
            </div>
            <div class="form-group">
                <label>Event code</label>
                <input type="text" class="form-control form-control-lg"
                 name="randcode"
                v-model= "randcode"/>
            </div>

               <div class="form-group">
                <label>Event description</label>
                <input type="text" class="form-control form-control-lg"
                name="description"
                v-model= "description"/>
            </div>

            <div class="form-group">
                <label>Your status</label>
                 <select class="form-control form-control-lg" v-model="status"  name="status">
    <option v-for="item in items" :value="item.val" :key="item.id">
     {{ item.val }}
    </option>
  </select>
            </div>

            <div class="form-group">
                <label>Gift or pay</label>
                 <input type="text" class="form-control form-control-lg"
                 name="amount"
                v-model= "amount"/>
            </div>

              <div class="form-group">
                <label>VIP code</label>
                <input type="text" class="form-control form-control-lg"
                name="vipcode"
                v-model= "vipcode"/>
            </div>

             <button class="btn btn-dark btn-lg btn-block"
             v-on:click="confirmRegistration()">Submit</button>
        </form>
    </div>
</template>

<script>

import axios from 'axios';

export default {
  name: 'Participant', // this is the name of the component

  data() {
    return {
      fullname: '',
      contact: '',
      randcode: '',
      description: '',
      amount: '',
      vipcode: '',
      status: 'Particiapnt',
      input: '',
      items: {
        1: { id: 1, val: 'Participant' },
        2: { id: 2, val: 'Guest' },
        3: { id: 3, val: 'Sponsor' },
      },
    };
  },

  methods: {

    confirmRegistration() {
      // const baseurl = 'http://localhost:50/eventsandperfs/bookings/MakeBooking.php';
      const baseurl = 'http://signupforevents.com/UserMakeBooking.php';

      axios({
        method: 'post',
        url: baseurl,
        data: {
          fullname: this.fullname,
          contact: this.contact,
          randcode: this.randcode,
          description: this.description,
          amount: this.amount,
          vipcode: this.vipcode,
          status: this.status,
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
      this.fullname = '';
      this.contact = '';
      this.randcode = '';
      this.description = '';
      this.amount = '';
      this.vipcode = '';
      this.status = '';
    },
  },
};
</script>
<style>

</style>
