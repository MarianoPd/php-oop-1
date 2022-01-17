<?php

class Movie{
    public $title;
    public $genres;
    public $director;
    public $runtime;
    public $summary;

    function __construct($_title, $_genres, $_director, $_runtime, $_summary)
    {
        $this->title = $_title;
        $this->genres = $_genres;
        $this->director = $_director;
        $this->runtime = $_runtime;
        $this->summary = $_summary;
    }   

    /*returns a shortened subbary */
    public function getShrtndSummary($lenght = 20){
        return substr($this->summary, 0, $lenght) . " ...";
    }

}

?>