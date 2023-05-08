<?php 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <title>PHP ToDo List JSON</title>
</head>
<body>

    <div id="app" class="container-fluid d-flex flex-column justify-content-center align-items-center">

        <form @submit.prevent="addTask">

            <div class="d-flex align-items-center">
                <input type="text" placeholder="Add new task" v-model="newTask" class="m-2">
                <button class="btn btn-warning m-2">Add new task</button>
            </div>
            
        </form>

        <ul class="card w-50 mt-5">
            <li v-for="(task, index) in tasks" :key="index" class="d-flex justify-content-between align-items-center fw-semibold" :class="{ completed: task.completed }" @click="toggleTask(index)">
               <div class="m-2">{{ task.task }}</div>
               <button class="btn btn-danger m-2" @click="deleteTask(index)">Delete</button>
            </li>
        </ul>
    </div>

    <script src="./js/script.js"></script>
</body>
</html>