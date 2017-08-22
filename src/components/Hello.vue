<template>
  <div class="hello">
    <template v-for="(value, key, index) in object">
      <ul>
        <li>{{index}}.{{ key }} : {{ value }}</li>
      </ul>
    </template>
    <div>
      <ul>
        <li v-for="i in 10">{{i}}</li>
      </ul>
    </div>


  </div>
</template>

<script>
  export default {
    name: 'hello',
    data () {
      return {
        object: {
          name: '您好,以下是我Vue练习的github的地址',
          url: 'https://github.com/gdmec07150942/VueDemo',
          slogan: '学的不仅是技术，更是梦想！'
        }
      }
    }
  }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  h1, h2 {
    font-weight: normal;
  }

  ul {
    list-style-type: none;
    padding: 0;
  }

  li {
    display: inline-block;
    margin: 0 10px;
  }

  a {
    color: #42b983;
  }
</style>
