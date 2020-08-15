<template>
  <div id="app">
    <Navigation/>
    <!-- <img src="./assets/logo.png"> -->
    <div>
    <router-view/>
    </div>
    <footer  id="vue-template-footer">
      &copy; 2020 Register for events
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
};
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
  align-content: center;
}
</style>
