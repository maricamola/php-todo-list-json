const { createApp } = Vue;

createApp({

  data() {
    return {
      apiUrl: 'server.php'
    }
  },
  methods: {
    viewList() {
      axios.get(this.apiUrl)
        .then(result => {
          console.log(result.data);
        })
    }
  },
  mounted() {
    this.viewList();

  },

}).mount('#app');