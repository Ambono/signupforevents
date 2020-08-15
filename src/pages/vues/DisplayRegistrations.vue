<template>
   <div class="vue-template">
  <form>
     <div class="form-group">
                <label>Search text</label>
              <input type="text" class="form-control form-control-lg"
               name="searchtext"
                v-model= "searchtext"/>
            </div>
    <button class="btn btn-dark btn-lg btn-block"
             v-on:click="displayUsers()">Submit</button>
    </form>

    <div class="vue-template-reports">
    <h3>Registered users matching your search</h3>
    <table>
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col"> UserFullName</th>
          <th scope="col">UserContact</th>
          <th scope="col">EventRandCode</th>
           <th scope="col">Description</th>
            <th scope="col">UserStatus</th>
             <th scope="col">Donation</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="user in info" v-bind:key="user.Id">
          <th scope="row">{{user.Id}}</th>
          <td>{{user.UserFullName}}</td>
          <td>{{user.UserContact}}</td>
          <td>{{user.EventRandCode}}</td>
          <td>{{user.Description}}</td>
          <td>{{user.UserStatus}}</td>
          <td>{{user.Donation}}</td>
        </tr>
      </tbody>
    </table>
  </div>
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
      const baseurl = 'http://localhost:50/eventsandperfs/bookings/RetrieveBooking.php';

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

</style>
