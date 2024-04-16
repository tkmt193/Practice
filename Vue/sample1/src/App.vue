<template>
  <div id="app">
    <img alt="Vue logo" src="./assets/logo.png">
    <MessageVue msg="hy"/>
  </div>
</template>

<script>
import MessageVue from './components/MesaageVue.vue'

export default {
  name: 'App',
  components: {
    MessageVue
  }
}


</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
