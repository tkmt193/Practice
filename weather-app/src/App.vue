<template>
  <HeadNavbar title="うんちうんち"/>
  <body>
  <ParentMessage/>
  </body>


</template>

<script>
// import HelloWorld from './components/HelloWorld.vue'
import HeadNavbar from './components/Header.vue'
import ParentMessage from './components/ParentMessage.vue'

export default {
  components: {
    HeadNavbar,
    ParentMessage,
  }
}


</script>

<style>
/* リセットCSS */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
</style>
