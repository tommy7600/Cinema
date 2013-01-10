<?php

    class Model_Genre extends ORM
    {
        protected $_has_many = array(
            'movies' => array(
                'model' => 'movie',
                'through' => 'movies_genres',
                'foreign_key' => 'genre_id',
                'far_key' => 'movie_id'
            )
        );
    }

?>