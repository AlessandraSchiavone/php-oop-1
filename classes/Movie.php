<?php 

class Movie{
    public $poster;
    public $original_title;
    public $original_language;
    public $vote;
    public $actors = [];
    public $genres = [];
    public $overview;
    public $trailer;

    function __construct($original_title,$original_language, $vote ,$overview,$poster = "img/No-img.png",$actors = [],$genres=[],$trailer = ""){
        $this->original_title = $original_title;
        $this->original_language = $original_language;
        $this->vote = $vote;
        $this->overview = $overview;
        $this->poster = $poster;
        $this->actors = $actors;
        $this->genres = $genres;
        $this->trailer = $trailer;
    }
    public function getTrailer() {
        return $this->trailer;
    }
    public function getStar(){
        $starFull = round($this->vote /2);
        return $starFull;
    }
    public function getExcerpt($charsNumber = 1000){
        return substr($this->overview,0,$charsNumber). "...";
    }
}

; ?>

