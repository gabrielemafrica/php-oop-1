const { createApp } = Vue;


createApp({
    data() {
        return {
            movies: [],
            newMovies:{
                title: '',
                genre: '',
                language: '',
                duration: '',
                imgURL: ''
            }
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
        },
        aggiungi() {
            const url = 'add_movie.php.php';
            const data = this.newMovies;
            const headers = {
                headers: { 'Content-Type': 'multipart/form-data' } 
            };
            axios.post(url, data, headers)
            .then(response => {
                this.chiamata();

                this.newMovies.title = "";
                this.newMovies.genre = "";
                this.newMovies.language = "";
                this.newMovies.duration = "";
                this.newMovies.imgURL = "";
            })
        }
    },
    mounted() {
        this.chiamata();
    },
}).mount("#app");