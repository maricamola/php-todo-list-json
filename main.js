const { createApp } = Vue;

createApp({

  data() {
    return {
      apiUrl: 'server.php',
      list: [],
    }
  },
  methods: {
    viewList() {
      axios.get(this.apiUrl)
        .then(result => {
          this.list = result.data;
          console.log(this.list);
        })
    }
  },
  mounted() {
    this.viewList();

  },

}).mount('#app');