<template>
   <div class="vue-template" >
  <form style="width:60%; margin-left:20%">
     <div class="form-group">
                <label>Search text</label>
              <input type="text" class="form-control form-control-lg"
               name="searchtext"
                v-model= "searchtext"/>
            </div>
    <button class="btn btn-dark btn-lg btn-block"
             v-on:click="displayUsers()">Submit</button>
    </form>

    <table style="align:center">
      <thead>
        <tr>
          <!-- <th scope="col">Id</th> -->
          <th scope="col">Name</th>
          <th scope="col">Contact</th>
          <th scope="col">Code</th>
           <!-- <th scope="col">Description</th> -->
            <th scope="col">Status</th>
             <th scope="col">Donation</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="user in info" v-bind:key="user.Id">
          <!-- <th scope="row">{{user.Id}}</th> -->
          <td>{{user.UserFullName}}</td>
          <td>{{user.UserContact}}</td>
          <td>{{user.EventRandCode}}</td>
          <!-- <td>{{user.Description}}</td> -->
          <td>{{user.UserStatus}}</td>
          <td>{{user.Donation}}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'DisplayRegistrations',

  data() {
    return {
      info: null,
      searchtext: '',
    };
  },
  computed: {
    axiosParams() {
      const params = new URLSearchParams();
      params.append('searchtext', this.searchtext);

      return params;
    },
  },
  methods: {
    displayUsers() {
      // const baseurl = 'http://localhost:50/eventsandperfs/bookings/RetrieveBooking.php';
      const baseurl = 'http://signupforevents.com/RetrieveBookings.php';

      if (this.searchtext !== '') {
        axios.get(baseurl, {
          params: this.axiosParams,
        }).then((response) => {
          this.info = response.data;
          this.resetForm();
        });
      }
    },
    resetForm() {
      this.searchtext = '';
    },
  },
};
</script>

<style>
 table {
    margin: 0 auto; /* or margin: 0 auto 0 auto */
     margin-top: 10%;
  }
</style>
