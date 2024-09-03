<?php

require_once __DIR__ . '/../Data/db.php';

$movies = [

    new Movie('Il Padrino', 'Francis Ford Coppola', 1972, ['Crime', 'Dramma'], 175),
    new Movie('The Lion King', 'Roger Allers', 1994, ['Animation', 'Adventure', 'Drama'], 142),
    new Movie('Titanic', 'James Cameron', 1997, ['Romance', 'Drama'], 195),
    new Movie('Jurassic Park', 'Steven Spielberg', 1993, ['Action', 'Adventure'], 127),
];
