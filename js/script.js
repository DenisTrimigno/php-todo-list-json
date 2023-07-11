const { createApp } = Vue;

createApp ({
    data() {
        return {
            todoItem: '' ,
            todoList: null,
            apiUrl: 'server.php'
        }
    },
    mounted (){
        axios.get(this.apiUrl).then((response) => {
            console.log(response.data);
            this.todoList = response.data;
        });
    },
    methods: {
        updateList() {
            const data = {
                todoItem: this.todoItem 
            }

            axios.post(this.apiUrl, data, {
                headers: { 'Content-Type': 'multipart/form-data' } 
            }).then((response) => { 
            this.todoItem = '';    
            this.todoList = response.data;
        });
    }
 }
}).mount('#app');