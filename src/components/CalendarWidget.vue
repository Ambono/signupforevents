// eslint-disable-next-line to ignore the next line.
/* eslint-disable */
<template>
    <div>
   <h2>Vue Js calendar example</h2>
<date-picker v-model = "date" > </date-picker>
    </div>
</template>
<script>
//import { defineComponent } from '@vue/composition-api'
import datePicker from 'vue-bootstrap-datetimepicker';
import 'bootstrap/dist/css/bootstrap.css';
import 'pc-bootstrap4-datetimepicker/build/css/bootstrap-datetimepicker.css';

export default {
     name: 'CalendarWidget',
    data(){
        return {
            date: new Date(),
            options:{
                fromat:'DD/MM/YY',
                useCurrent:false
            }

        }
    },
    components:{
        datePicker
        }
};
</script>
