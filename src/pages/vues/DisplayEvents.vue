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
    <h3>Registered events matching your search</h3>
    <table>
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col"> Description</th>
           <th scope="col">Code</th>
          <th scope="col">Venue</th>
          <th scope="col">Location</th>
           <th scope="col">Date</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="event in info" v-bind:key="event.Id">
          <th scope="row">{{event.Id}}</th>
          <td>{{event.Description}}</td>
           <td>{{event.RandCode}}</td>
          <td>{{event.Venue}}</td>
          <td>{{event.Location}}</td>
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
  computed: {
    axiosParams() {
      const params = new URLSearchParams();
      params.append('searchtext', this.searchtext);

      return params;
    },
  },
  methods: {
    displayUsers() {
      const baseurl = 'http://localhost:50/eventsandperfs/events/RetrieveEvents.php';

      if (this.searchtext !== '') {
        axios.get(baseurl, {
          params: this.axiosParams,
        }).then((response) => {
          this.info = response.data;
          // this.resetForm();
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
