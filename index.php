<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css'
    integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=='
    crossorigin='anonymous' />
  <!-- font awesome -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'
    integrity='sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=='
    crossorigin='anonymous' />
  <!-- axios -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js'
    integrity='sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ=='
    crossorigin='anonymous'></script>
  <!-- CSS -->
  <link rel="stylesheet" href="style.css">
  <!-- VueJs -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <title>PHP ToDo List JSON</title>
</head>

<body>
  <header>
    <!--LOGO-->
    <div class="logo">
      <img src="img/logo.png" alt="logo Boolean">
    </div>
  </header>


  <div id="app">
    <div class="container my-4">
      <h1>To do list</h1>

      <ul class="list-group">
        <li v-for="(listItem, index) in list" :key="index"
          class="list-group-item d-flex justify-content-between align-items-center"
          :class="{ 'text-decoration-line-through' : listItem.done }"><span>
            {{ listItem.text }}</span>
          <span @click.stop="deleteTask(index)" class="danger"><i class="fa-regular fa-trash-can"></i>
          </span>
        </li>
      </ul>

      <div class="input-area">
        <input v-model.trim="newTask" @keyup.enter="addTask" type="text" placeholder="Nuovo compito da svolgere">

        <button @click="addTask" id="button-add" type="button">Aggiungi</button>

        <!-- <div>
        <span class="error">{{errorMessage}}</span>
      </div> -->

      </div>
    </div>

  </div>



  <script src="main.js"></script>
</body>

</html>