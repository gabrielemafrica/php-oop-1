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