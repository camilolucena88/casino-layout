<template>
  <div id="app">
    <Navbar/>
    <Header/>
    <Container v-on:triggerAction="alert($event)" :games="games"/>
    <Footer/>
  </div>
</template>

<script>
import Navbar from './components/Navbar.vue'
import Header from './components/Header.vue'
import Container from './components/Container';
import Footer from './components/Footer';

export default {
  name: 'App',
  components: {
    Navbar,
    Footer,
    Container,
    Header
  },
  computed: {
    games() {
      return this.$store.state.games
    }
  },
  methods: {
    alert(e) {
      alert(e)
    },
    getDetails() {
      this.games().find()    
    }
  }
}
</script>
