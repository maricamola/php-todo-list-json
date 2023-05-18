const { createApp } = Vue;

createApp({

  data() {
    return {
      apiUrl: 'server.php',
      list: [],
      newTask: '',
    }
  },
  methods: {
    viewList() {
      axios.get(this.apiUrl)
        .then(result => {
          this.list = result.data;
          console.log(this.list);
        })
    },
    addTask() {
      const data = new FormData();
      data.append('todoItem', this.newTask);


      axios.post(this.apiUrl, data)
        .then(result => {
          this.newTask = '';
          this.list = result.data;
          console.log('aggiungo', this.list);
        })



    },
    deleteTask(index) {
      console.log(index);
      const data = new FormData();
      data.append('indexToDelete', index);
      axios.post(this.apiUrl, data)
        .then(result => {
          this.list = result.data;
          console.log('elimino', this.list);
        })
    }
  },
  mounted() {
    this.viewList();

  },

}).mount('#app');