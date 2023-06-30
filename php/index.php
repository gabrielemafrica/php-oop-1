<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Movies</title>

<?php


class Movie {
    public $title;
    public Array $genre;
    public $language;
    public $duration;
    public $imgURL;

    //costruttore

    public function __construct($title, $language, $duration, $imgURL, ...$genre) {
        $this->title = $title;
        $this->genre = $genre;
        $this->language = $language;
        $this->duration = $duration;
        $this->imgURL = $imgURL;
    }

    //metodi
        //prendi elementi
    public function getTitle() {
        return $this->title;
    }
    public function getGenre() {
        $risultato = '';
        foreach ($this->genre as $key => $value) {
            $risultato .= $value;
            if ($key !== (count($this->genre) - 1)) {
                $risultato .= ', ';
            }
        }  
        return $risultato;
    }
    public function getLanguage() {
        return $this->language;  
    }

    public function getDuration() {
        return $this->duration;
    }
    public function getImgURL() {
        return $this->imgURL;
    }

        //modifica elementi
    public function setTitle($new_title) {
        $this->title = $new_title;
    }
    public function setGenre($new_genre) {
        $this->genre = $new_genre;
    }
    public function setLanguage($new_language) {
        $this->language = $new_language;
    }
    public function setDuration($new_duration) {
        $this->duration = $new_duration;
    }
    public function setImgURL($new_imgURL) {
        $this->imgURL = $new_imgURL;
    }
};

//create new movies

$new_movie1 = new Movie("Star Wars", "English", "1080", "https://mashtrelo.com/wp-content/uploads/2017/11/star-wars-posters-from-around-the-world.jpg", "Action", "Adventure");

$new_movie2 = new Movie("Iron Man", "English", "1080", "https://www.usatoday.com/gcdn/media/USATODAY/USATODAY/2013/04/30/ansin-standard-3_4.jpg", "Action", "Heroes");

?>
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
