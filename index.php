<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Todo-list-json</title>
</head>
<body>
    <div class="wrapper">
        <div id="app">
            <section class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="display-1 text-muted">Todo list</h1>
                            <ul class="list-group list-group-flush border border-1 rounted">
                                <li v-for="(item, index) in todoList" :key="index"
                                class="list-group-item">{{ item }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="input-group mb-3">
                                <input type="text" @key.enter="updateList" v-model="todoItem" 
                                       placeholder="todo" class="form-control">
                                       <button @click="updateList" class="btn btn-outline-success" id= "button-add"> Aggiungi</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
<script type="text/javascript" src= "./js/script.js"></script>
</body>
</html>