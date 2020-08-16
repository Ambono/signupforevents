// eslint-disable-next-line to ignore the next line.
/* eslint-disable */

<template>
  <div class="vue-template" style="width:60%; margin-left:20%">
        <form>
            <h3>Register as organiser</h3>

            <div class="form-group">
                <label>Code(Phone number or email)</label>
              <input type="text" class="form-control form-control-lg"
               name="code"
                v-model= "code"/>
            </div>

           <div class="form-group">
                <label>Organiser account</label>
                <input type="text"  class="form-control form-control-lg"
                name="orgaccount"
                v-model= "orgaccount"/>
            </div>
            <div class="form-group">
                <label>Event description</label>
                <input type="text" class="form-control form-control-lg"
                 name="description"
                v-model= "description"/>
            </div>

            <div class="form-group">
                <label>Location</label>
                 <input type="text" class="form-control form-control-lg"
                 name="location"
                v-model= "location"/>
            </div>

            <div class="form-group">
                <label>Venue</label>
                 <input type="text" class="form-control form-control-lg"
                 name="venue"
                v-model= "venue"/>
            </div>

             <div class="form-group">
                <label>Additional description</label>
                <input type="text" class="form-control form-control-lg"
                name="adddescription"
                v-model= "adddescription"/>
            </div>

              <div class="form-group">
                <label>VIP code</label>
                <input type="text" class="form-control form-control-lg"
                name="vipcode"
                v-model= "vipcode"/>
            </div>

              <div class="form-group">
                <label>Planned date(e.g 02 jan 2022)</label>
                <input type="text" class="form-control form-control-lg"
                name="planneddate"
                v-model= "planneddate"/>
            </div>
             <button class="btn btn-dark btn-lg btn-block"
             v-on:click="createEvent()">Submit</button>
        </form>
    </div>
</template>

<script>

import axios from 'axios';

export default {
  name: 'Organiser', // this is the name of the component

  data() {
    return {
      code: '',
      orgaccount: '',
      description: '',
      venue: '',
      location: '',
      adddescription: '',
      vipcode: '',
      planneddate: '',
    };
  },

  methods: {

    createEvent() {
      // const baseurl = 'http://localhost:50/eventsandperfs/events/registerEvents.php';
      const baseurl = 'http://signupforevents.com/OrganiserRegisterEvent.php';

      axios({
        method: 'post',
        url: baseurl,
        data: {
          code: this.code,
          orgaccount: this.orgaccount,
          description: this.description,
          venue: this.venue,
          location: this.location,
          adddescription: this.adddescription,
          vipcode: this.vipcode,
          planneddate: this.planneddate,
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
      this.code = '';
      this.adddescription = '';
      this.orgaccount = '';
      this.description = '';
      this.venue = '';
      this.location = '';
      this.vipcode = '';
      this.planneddate = '';
    },
  },
};
</script>
<style>

</style>
