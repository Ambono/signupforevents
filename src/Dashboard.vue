// eslint-disable-next-line to ignore the next line.
/* eslint-disable */

<template>
<div class="vue-dashboard-container"> 
<div>
    <input type="text" v-model="search" placeholder="Search dashboard" /> <br> <br>
</div>

<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-5 m1">
          <router-link to="/DisplayEvents"><h4><p class="a">▶️<br/>conferences</p></h4></router-link>
          <div class="placeholder-dashboard"></div>
    </div>
    <div class="col col-lg-5 m2"> 
        <router-link to="/DisplayEvents"><h4><p class="a">▶️<br/>entertainments</p></h4></router-link>      
    <div class="placeholder-dashboard"></div>
    </div>   
  </div>
  <div class="row justify-content-md-center">
    <div class="col col-lg-3 m4">
        <router-link to="/DisplayEvents"><h4><p class="a">▶️music</p></h4></router-link>         
        <div class="placeholder-dashboard"></div>
    </div>
    <div class="col col-lg-3 m5">
        <router-link to="/DisplayEvents"><h4><p class="a">▶️parties</p></h4></router-link>          
         <div class="placeholder-dashboard"></div>
    </div>
    <div class="col col-lg-3 m6">  
      <router-link to="/DisplayEvents"><h4><p class="a">▶️sport</p></h4></router-link>     
     <div class="placeholder-dashboard"></div>
    </div>
  </div>
 <div class="row justify-content-md-center">
    <div class="col col-lg-3 m7">
      <router-link to="/DisplayEvents"><h4><p class="a">▶️fairs</p></h4></router-link>   
       <div class="placeholder-dashboard"></div>
    </div>
    <div class="col col-lg-3 m8">        
       <router-link to="/DisplayEvents"><h4><p class="a">▶️trainings</p></h4></router-link>   
      <div class="placeholder-dashboard"></div>
    </div>
    <div class="col col-lg-3 m9">            
        <router-link to="/DisplayEvents"><h4><p class="a">▶️tourism</p></h4></router-link>   
         <div class="placeholder-dashboard"></div>
    </div>
  </div>
 <div class="row justify-content-md-center">
    <div class="col col-lg-3 m10">            
        <router-link to="/DisplayEvents"><h4><p class="a">▶️festivals</p></h4></router-link>   
         <div class="placeholder-dashboard"></div>
    </div>
     <div class="col col-lg-3 m3"> 
        <router-link to="/DisplayEvents"><h4><p class="a">▶️leisure</p></h4></router-link>   
         <div class="placeholder-dashboard"></div>     
    </div>
    </div>
    <div class="row justify-content-md-center">
     <div class="col col-lg-5 m11">            
        <router-link to="/DisplayEvents"><h4><p class="a">▶️<br/>ceremonies</p></h4></router-link>   
        <div class="placeholder-dashboard"></div>
    </div>
  </div>
</div>
 
</div>

</template>

<script>

export default {
  name: 'Dashboard', // this is the name of the component
  image: './assets/fonddetoile.png',
data(){
    return {
image2 : ref("./assets/fonddetoile.png"),

  links1text: '▶️conferences',
  links1page: '/Home',
  links1: {
          id: 0,
          text: '▶️conferences',
          page: '/Home',
        },
  links2: {
          id: 1,
          text: 'Register',
          page: '/RegisterEvent',
        },
  links3: {
          id: 2,
          text: 'Search',
          page: '/Displays',
        },
  links4: {
          id: 3,
          text: 'About',
          page: '/About',
        },
  links5: {
          id: 4,
          text: 'Contact',
          page: '/Contact',
        },
  links6: {
          id: 5,
          text: 'Account',
          page: '/CreateAccount',
        },     
  
   methods : {
        },
  }
 }
}
</script>
<style scoped>

.placeholder-dashboard{
width: 160px;
height: 100px;  
}
.m1{
background: url("./assets/conferences.png") no-repeat center center;
margin: 5px 5px 25px 5px;
border-radius: 50px;
width: auto;
height: auto;
color: white;
font-weight: bolder;
}
.m2{
background: url("./assets/entertainment.png") no-repeat center center;
margin: 5px 5px 25px 5px;
border-radius: 50px;
width: auto;
height: auto;
color: white;
font-weight: bolder;
}

.m3{
background: url("./assets/music.png") no-repeat center center;
margin: 5px 5px 25px 5px;
border-radius: 50px;
width: auto;
height: auto;
color: white;
font-weight: bolder;
}

.m4{
background: url("./assets/parties.png") no-repeat center center;
margin: 5px 5px 25px 5px;
border-radius: 50px;
width: auto;
height: auto;
color: white;
background: "leisure";
font-weight: bolder;
}

.m5{
background: url("./assets/sport.png") no-repeat center center;
margin: 5px 5px 25px 5px;
border-radius: 50px;
width: auto;
height: auto;
color: white;
font-weight: bolder;
}

.m6{
background: url("./assets/fairs.png") no-repeat center center;
margin: 5px 5px 25px 5px;
border-radius: 50px;
width: auto;
height: auto;
color: white;
font-weight: bolder;
}

.m7{
 background: url("./assets/trainings.png") no-repeat center center; 
margin: 5px 5px 25px 5px;
border-radius: 50px;
width: auto;
height: auto;
color: white;
font-weight: bolder;
}

.m8{
background: url("./assets/tourism.png") no-repeat center center; 
margin: 5px 5px 25px 5px;
border-radius: 50px;
width: auto;
height: auto;
color: white;
font-weight: bolder;
}

.m9{
background: url("./assets/festivals.png") no-repeat center center; 
margin: 5px 5px 25px 5px;
border-radius: 50px;
width: auto;
height: auto;
color: white;
font-weight: bolder;
}

.m10{
background: url("./assets/leisure.png") no-repeat center center; 
margin: 5px 5px 25px 5px;
border-radius: 50px;
width: auto;
height: auto;
color: white;
font-weight: bolder;
}
/* conferences entertainments leisure music parties sport trade trainings */
.m11{
 background: url("./assets/ceremonies.png") no-repeat center center; 
margin: 5px 5px 25px 5px;
border-radius: 50px;
width: auto;
height: auto;
color: white;
font-weight: bolder;
}

.col1 {
background: url("./assets/fonddetoile.png")
}

.col2 {

}
.vue-dashboard-container {
color: goldenrod;
background-color: antiquewhite;
border-radius:15px;
width: 100%;
padding: 20px 0 0 0
}
.a{
  color:aliceblue;
  width:auto;
}
.a2{
  color:magenta;
   width:auto;
}
</style>
