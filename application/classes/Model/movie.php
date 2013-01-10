<?php

    class Model_Movie extends ORM
    {
        protected $_has_many = array(
            'genres' => array(
                'model' => 'genre',
                'through' => 'movies_genres',
                'foreign_key' => 'movie_id',
                'far_key' => 'genre_id'
            )
        );
    }

?>