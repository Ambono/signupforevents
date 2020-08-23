<template>
   <div class="vue-template">
    <div>
    <table>
      <thead>
        <tr>
          <!-- <th scope="col">Id</th> -->
           <th scope="col"> Description</th>
           <th scope="col">Code</th>
           <th scope="col">Venue</th>
           <th scope="col">Date</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="event in info" v-bind:key="event.Id">
          <!-- <th scope="row">{{event.Id}}</th> -->
          <td>{{event.Description}}</td>
           <td>{{event.RandCode}}</td>
          <td>{{event.Venue}}</td>
          <td>{{event.PlannedDate}}</td>
        </tr>
      </tbody>
    </table>
  </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'DisplayTodayEvents',

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
      // const baseurl = 'http://localhost:50/eventsandperfs/events/RetrieveEvents.php';
      const baseurl = 'https://signupforevents.com/RetrieveTodayEvents.php';

      axios.get(baseurl,
      ).then((response) => {
        this.info = response.data;
      });
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
