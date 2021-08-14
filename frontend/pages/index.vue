<template>
  <div>
    <button @click="test()">test</button>
    <div>{{ message }}</div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      message: 'default'
    }
  },
  methods: {
    async test() {
      const res = await this.$axios.get('/api')
      this.message = res.data
      console.log(res.data)
    }
  }
}
</script>
