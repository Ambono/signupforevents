// eslint-disable-next-line to ignore the next line.
/* eslint-disable */

<template>
  <div class="vue-template">
        <form>
            <h3>Create an event as organiser with date picker </h3>

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
                <label>Planned date</label>
                <date-picker  name="planneddate" v-model = "planneddate" 
                class="calendar-app" >                
                </date-picker>
                
            </div>
                  
              <!-- <div class="form-group">
                <label>Planned date(e.g 02 jan 2022)</label>
                <input type="text" class="form-control form-control-lg"
                name="planneddate"
                v-model= "planneddate"/>
            </div> -->

          <!-- <div id ="calendar-app">
           <CalendarWidget/>
          </div> -->

            
             <button class="btn btn-dark btn-lg btn-block"
             v-on:click="createEvent()">Submit</button>
        </form>
    </div>
</template>

<script>
// export default {
//   name: 'Organiser', // this is the name of the component
// };
import CalendarWidget from '../../components/CalendarWidget.vue';
import axios from 'axios';
import GetUrl from "../../services/urlService";
import LocalStorageService from "../../services/localStorageService"
import datePicker from 'vue-bootstrap-datetimepicker';
import 'bootstrap/dist/css/bootstrap.css';
import 'pc-bootstrap4-datetimepicker/build/css/bootstrap-datetimepicker.css';

export default {
  name: 'Organiser', // this is the name of the component
  components:{
    CalendarWidget
  },
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
            options:{
                fromat:'DD/MM/YY',
                useCurrent:false
            }
    };
  },
  //   mounted: function () {
  //     console.log('Hello from Vue!')
  //     this.getContacts()
  //   },

  methods: {
 getApiPath: function () {     
    return GetUrl("organiserRegisterEvent");   
    },

    createEvent() {

      const baseurl = this.getApiPath ();
      console.log('get url: ', baseurl);
      // console.log('fname:', this.fname);
      // console.log('account:', this.orgaccount);  
      

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
    // resetForm() {
    //   this.code = '';
    //   this.adddescription = '';
    //   this.orgaccount = '';
    //   this.description = '';
    //   this.venue = '';
    //   this.location = '';
    //   this.vipcode = '';
    //   this.planneddate = '';
    // },
  },
};
</script>
<style>
#calendar-app {
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
-webkit-font-smoothing:antialiased ;
text-align: center;
display:flex;
color: coral;
margin-top: 60px;
margin-bottom: 60px;
}
</style>
