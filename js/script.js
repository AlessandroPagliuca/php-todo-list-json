const {createApp} = Vue;

createApp({
    data(){
        return{
            tasks:[],
            newTask: '',

        }
    },
    methods:{
        addTask() {
            if (this.newTask !== '') {
                this.tasks.push({
                    task: this.newTask,
                });

                console.log(this.newTask);

                // Effettua la richiesta POST al server per aggiungere il nuovo task
                axios.post('server.php', { task: this.newTask }, {
                
                    headers:{'Content-Type': 'multipart/form-data'},

                })
                .then(res => {
                // Aggiunge il nuovo task alla lista di attività
                this.tasks = res.data;
                // Resetta il campo di input
                this.newTask = '';
                })
                .catch(error => {
                console.error(error);
                })
            }
            
        },

        toggleTask(index) {
    
            this.tasks[index].completed = !this.tasks[index].completed;
        
        },

        deleteTask(index) {
            // Rimuove il task dalla lista di attività utilizzando l'indice
            this.tasks.splice(index, 1);
        
            // Effettua la richiesta DELETE al server per rimuovere il task
            axios.delete('server.php', { data: { index: index }})
                .then(res => {
                    console.log(res.data);
                })
                .catch(error => {
                    console.error(error);
                });
        },
        loadTasks() {
            axios.get('tasks.json')
            .then(res => {
                this.tasks = res.data;
            })
            .catch(error => {
                console.error(error);
            });
        }
    },
    mounted(){
        this.loadTasks();
    },
}).mount('#app');