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




    
</body>
</html>