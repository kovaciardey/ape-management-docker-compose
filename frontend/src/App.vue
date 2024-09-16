<template>
  <div>
    WELCOME TO THE VUE APP FROM THROUGH THE NGINX CONTAINER

    <p>{{ message }}</p>
    <p>{{ time }}</p>
  </div>
</template>

<script>

export default {
  data() {
    return {
      message: '', // Holds the message from the API
      time: ''     // Holds the time from the API
    };
  },
  created() {
    this.fetchWelcomeMessage();
  },
  methods: {
    async fetchWelcomeMessage() {
      try {
        const response = await fetch('http://localhost:8080/welcome');
        if (!response.ok) {
          throw new Error('Failed to fetch data');
        }
        const data = await response.json();
        this.message = data.message; // Set message from the API response
        this.time = data.time;       // Set time from the API response
      } catch (error) {
        console.error('Error fetching welcome message:', error);
      }
    }
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
