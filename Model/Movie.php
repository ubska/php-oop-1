<?php

// Definizione della classe Movie
class Movie
{
    // Proprietà che contengono i dettagli del film
    public $name;
    public $year;
    public $director;
    public $genres = [];
    public $duration;

    function __construct($_name, $_year, $_director, $_genres, $_duration)
    {
        $this->name = $_name;
        $this->year = $_year;
        $this->director = $_director;
        $this->genres = $_genres;
        $this->duration = $_duration;
    }

    // Aggiunge un elemento all'array dei generi
    public function addGener($_genres)
    {
        $this->genres[] = $_genres;
    }
}
