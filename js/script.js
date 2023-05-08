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
            
        }
    },
    mounted(){
        //this.addTask();
    },
}).mount('#app');