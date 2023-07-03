<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <?php
    require 'db.php';
    ?>
    <title>movie-php</title>
      <!-- Includi Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>

    <div class="container text-center mt-5">
        <div class="row">
            <div class="col">
                <h1>Movies</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Genre</th>
                            <th scope="col">Language</th>
                            <th scope="col">Duration</th>
                            <th scope="col">Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $new_movie1->getTitle();?></td>
                            <td><?php echo $new_movie1->getGenre();?></td>
                            <td><?php echo $new_movie1->getLanguage();?></td>
                            <td><?php echo $new_movie1->getDuration();?></td>
                            <td>
                                <a href="<?php echo $new_movie1->getImgURL();?>">   
                                    <?php echo $new_movie1->getImgURL();?>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $new_movie2->getTitle();?></td>
                            <td><?php echo $new_movie2->getGenre();?></td>
                            <td><?php echo $new_movie2->getLanguage();?></td>
                            <td><?php echo $new_movie2->getDuration();?></td>
                            <td><a href="<?php echo $new_movie2->getImgURL();?>"><?php echo $new_movie2->getImgURL();?></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
    <!-- add new scheda -->
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h1>Add New Movie</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="add_movie.php" method="POST" @submit.prevent="aggiungi">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title" v-model="newMovies.title">
                    </div>
                    <div class="form-group">
                        <label for="genre">Genre</label>
                        <input type="text" class="form-control" id="genre" name="genre" placeholder="Genre" v-model="newMovies.genre">
                    </div>
                    <div class="form-group">
                        <label for="language">Language</label>
                        <input type="text" class="form-control" id="language" name="language" placeholder="Language" v-model="newMovies.language">

                    </div>
                    <div class="form-group">
                        <label for="duration">Duration</label>
                        <input type="text" class="form-control" id="duration" name="duration" placeholder="Duration" v-model="newMovies.duration">
                    </div>
                    <div class="form-group">
                        <label for="img_url">Image URL</label>
                        <input type="text" class="form-control" id="img_url" name="img_url" placeholder="Image URL" v-model="newMovies.imgURL">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <a href="index.php" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>


    <!-- creo schede -->
    <div class="container d-flex flex-wrap gap-4" id="app">
        <div class="card" style="width: 18rem;" v-for="(item, index) in movies" :key="index">
            <img :src="item.imgURL" class="card-img-top" alt="item.title">
            <div class="card-body">
                <h5 class="card-title">{{ item.title }}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item" v-for="(genere, i) in item.genre" :key="i">{{ genere }}</li>
                <li class="list-group-item">{{ item.language }}</li>
                <li class="list-group-item">{{ item.duration }}</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>  
    </div>

    <!-- connessioni -->
    <script src="https://unpkg.com/vue@3"></script>
    <script  type="text/javascript" src="js/js.js"></script>
    
</body>
</html>