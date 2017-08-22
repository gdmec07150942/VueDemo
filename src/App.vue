<template>
  <div id="app">
    <img src="./assets/logo.png">
    <div v-html="message"></div>
    <hello></hello>
    <label for="r1">修改颜色</label>
    <input type="checkbox" v-model="class1" id="r1">
    <br><br>
    <div v-bind:class="{'class1': class1}">来来来，变颜色了</div>
    <br>
    <p v-if="seen">现在你看到我了</p>
    <h1><a :href="url">涛哥Vue练习的demo的github</a></h1>
    <p>{{msg}}</p>
    <button @click="fanzhuangMessage">翻转字符串</button>
    <input v-model="msg">
    <template v-if="ok">
      <h1>好好好</h1>
      <p>您好</p>
    </template>
    <h1 v-if="Math.random() >0.5">
      哈哈哈
    </h1>
    <h1 v-else>
      嘻嘻
    </h1>
    <h1 v-if="type === 'A'">A</h1>
    <h1 v-else-if="type === 'B'">B</h1>
    <h1 v-else-if="type === 'C'">C</h1>
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
        class1: false,
        seen: false,
        ok: false,
        url: 'https://github.com/gdmec07150942/VueDemo',
        msg: '嘻嘻',
        type: 'A'
      }
    },
    methods: {
      fanzhuangMessage: function () {
        this.msg = this.msg.split('').reverse().join('')
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

  .class1 {
    background: #444;
    color: aqua;
  }
</style>
