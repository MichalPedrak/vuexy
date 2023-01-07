<template>
  <div>
    <h1>Test</h1>
    <form
      method="POST"
      action="/api/task/"
    >
      <input
        type="text"
        name="title"
        placeholder="title"
      >
      <input
        type="number"
        name="user_id"
        placeholder="user_id"
      >
      <input
        type="text"
        name="content"
        placeholder="content"
      >
      <input
        type="number"
        name="completed"
        placeholder="completed"
      >
      <button
        type="submit"
        @click="toTasks()"
      >
        Add task
      </button>
    </form>

  </div>

</template>

<script>
export default {
  data() {
    return {
      foobar: null,
    }
  },
  methods: {
    toTasks() {
      // if you want to send any data into server before redirection then you can do it here
      this.$router.push('/apps/todo')
    },
  },
}
</script>

<style scoped>

</style>
