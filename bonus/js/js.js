const { createApp } = Vue;


createApp({
    data() {
        return {
            movies: []
        }
    },
    methods: {
        chiamata() {
            axios.get('js/db2.php')
            .then(response => {
                this.movies = response.data;
            })
            .catch(error => {
                console.log(error);
            });
        }
    },
    mounted() {
        this.chiamata();
    },
}).mount("#app");