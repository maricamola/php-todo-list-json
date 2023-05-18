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
      //Il metodo "addTask" viene eseguito quando un utente aggiunge una nuova attività nella lista. Quando l'utente aggiunge una nuova attività, viene creato un oggetto FormData che contiene i dati inseriti dall'utente
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
      //controllo per evitare che la task venga eliminato
      if (confirm('Vuoi davvero eliminare questo elemento?')) {
        const data = new FormData();
        data.append('indexToDelete', index);
        axios.post(this.apiUrl, data)
          .then(result => {
            this.list = result.data;
            console.log('elimino', this.list);
          })
      }
    }
  },
  mounted() {
    this.viewList();

  },

}).mount('#app');