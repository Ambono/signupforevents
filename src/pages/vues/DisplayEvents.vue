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
             v-on:click="displayEvents()">Submit</button>
    </form>

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
  name: 'DisplayEvents',

  data() {
    return {
      info: null,
      searchtext: '',
    };
  },

  mounted() {
    console.log('mounted works!');
    this.displayTodayEvents();
  },


  computed: {
    axiosParams() {
      const params = new URLSearchParams();
      params.append('searchtext', this.searchtext);

      return params;
    },
  },
  methods: {
    displayEvents() {
      // const baseurl = 'http://localhost:50/eventsandperfs/events/RetrieveEvents.php';
      const baseurl = 'https://signupforevents.com/RetrieveEvents.php';

      if (this.searchtext !== '') {
        axios.get(baseurl, {
          params: this.axiosParams,
          headers: {
            Origin: 'https://signupforevents.com',
          },
        }).then((response) => {
          this.info = response.data;
          this.resetForm();
        });
      }
    },
    resetForm() {
      this.searchtext = '';
    },
    displayTodayEvents() {
      // const baseurl = 'http://localhost:50/eventsandperfs/events/RetrieveTodayEvents.php';
      const baseurl = 'http://signupforevents.com/RetrieveTodayEvents.php';

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
