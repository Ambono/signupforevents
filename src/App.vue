// eslint-disable-next-line to ignore the next line.
/* eslint-disable */
<template>
  <div id="app">
    <Navigation/>
    <div id="vue-template-fonddetoile"></div>
      <!-- <img src="./assets/fonddetoile.png" > -->
    <div id ="central-container">
    <router-view/>
    </div>
    <footer  id="vue-template-footer">
      &copy; 2023 www.signupforevents.com powered by GlobalMarveltech Ltd
      <Footer/>
    </footer>
  </div>
</template>

<script>
import Navigation from './components/Navigation';
import Footer from './pages/footer/Footer';


export default {
  name: 'App',
  components: {
    Navigation,
    Footer,
  },
  // methods:{
  // }
};
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 20px;
  align-content: center;
  vertical-align:center;
 width:100%;
}

#central-container {
  color: #2c3e50;
  margin-top: 20px;
  align-content: center;
  vertical-align:center;
  width:50%;
  margin-left:25%
}

#vue-template-fonddetoile {
   width:100%;
   height:25%;
  background: url("./assets/fonddetoile.png") no-repeat center center;
  margin-bottom: 15px;
}

</style>
