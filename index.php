<?php 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <title>PHP ToDo List JSON</title>
</head>
<body>

    <div id="app">

        <form @submit.prevent="addTask">
            <input type="text" placeholder="Add new task" v-model="newTask">
            <input type="submit" value="Add" class=" btn btn-outline-dark">
        </form>

        <ul>
            <li v-for="(task, index) in tasks" :key="index">
                {{ task.task }}
            </li>
        </ul>
    </div>

    <script src="./js/script.js"></script>
</body>
</html>