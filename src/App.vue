<template>
  <div id="app">
    <img src="./assets/logo.png">
    <div v-html="message"></div>
    <hello></hello>
    <label for="r1">修改颜色</label>
    <input type="checkbox" v-model="class1" id="r1">
    <br><br>
    <div v-bind:class="{'class1': class1}">来来来，变颜色了</div>
  </div>
</template>

<script>
  import Hello from './components/Hello.vue'
  export default {
    name: 'app',
    components: {
      Hello
    },
    data () {
      return {
        message: '<h1>Vue学起来不是很难</h1>',
        class1: false
      }
    }
  }
</script>

<style>
  #app {
    font-family: 'Avenir', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin-top: 60px;
  }
  .class1{
    background: #444;
    color: aqua;
  }
</style>
